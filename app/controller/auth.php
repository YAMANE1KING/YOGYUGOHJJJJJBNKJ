<?php

if( !route(1) ){
    $route[1] = "login";
}

if( route(1) == "login" ){
    $title .= $pagetitle;
}elseif( route(1) == "register" ){
    $title .= $languageArray["signup.title"];
}

if( ( route(1) == "login" || route(1) == "register") && $_SESSION["msmbilisim_userlogin"] ){
     Header("Location:".site_url()); exit();
}

if(in_array(route(1), ["neworder", "orders", "tickets", "addfunds", "account", "dripfeeds", "reference", "subscriptions"])) {
    Header("Location:".site_url()); exit();
}

$smmapi = new SMMApi();

if( route(1) == "login" && $_POST ){
    $username = filter_var(strip_tags($_POST["username"]), FILTER_SANITIZE_STRING);
    $pass = $_POST["password"];
    $remember = $_POST["remember"];
    $captcha = $_POST['g-recaptcha-response'];
    
    // Captcha Check
    $captcha_success = true;
    if ($settings["recaptcha"] == 2) {
        $googlesecret = $settings["recaptcha_secret"];
        $captcha_control = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$googlesecret&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        $captcha_control = json_decode($captcha_control);
        if (!$captcha_control->success) {
            $captcha_success = false;
        }
    }

    if (!$captcha_success) {
        $error = 1;
        $errorText = $languageArray["error.signin.recaptcha"];
    } else {
        // Determine if login by email or username
        $isEmail = (strpos($username, "@") !== false);
        $field = $isEmail ? "email" : "username";
        
        if (!userdata_check($field, $username)) {
            $error = 1;
            $errorText = $languageArray["error.signin.username"];
        } else {
            $row = $conn->prepare("SELECT * FROM clients WHERE $field=:u");
            $row->execute(array("u" => $username));
            $row = $row->fetch(PDO::FETCH_ASSOC);
            
            $loginSuccess = false;
            if ($row) {
                if (password_verify($pass, $row["password"])) {
                    $loginSuccess = true;
                } elseif (md5(sha1(md5($pass))) == $row["password"]) {
                    // Update to modern hash
                    $newHash = password_hash($pass, PASSWORD_DEFAULT);
                    $upd = $conn->prepare("UPDATE clients SET password=:h WHERE client_id=:id");
                    $upd->execute(['h' => $newHash, 'id' => $row['client_id']]);
                    $row['password'] = $newHash;
                    $loginSuccess = true;
                }
            }
            
            if (!$loginSuccess) {
                $error = 1;
                $errorText = $languageArray["error.signin.notmatch"];
            } elseif ($row["client_type"] == 1) {
                // Account deactive
                $error = 1;
                $errorText = $languageArray["error.signin.deactive"];
            } else {
                // Success!
                $access = json_decode($row["access"], true);
                $_SESSION["msmbilisim_userlogin"] = 1;
                $_SESSION["msmbilisim_userid"] = $row["client_id"];
                $_SESSION["msmbilisim_userpass"] = $row["password"]; // Use the hash
                
                if ($access["admin_access"]) {
                    $_SESSION["msmbilisim_adminlogin"] = 1;
                    $_SESSION["msmbilisim_adminslogin"] = 1; // Used in init.php
                    $_SESSION["msmbilisim_adminid"] = 1; // Fixed id for default admin
                }
                
                if ($remember) {
                    setcookie("u_id", $row["client_id"], strtotime('+7 days'), '/', null, null, true);
                    setcookie("u_password", $row["password"], strtotime('+7 days'), '/', null, null, true);
                    setcookie("u_login", 'ok', strtotime('+7 days'), '/', null, null, true);
                    if ($access["admin_access"]) {
                        setcookie("a_id", 1, strtotime('+7 days'), '/', null, null, true);
                        setcookie("a_login", 'ok', strtotime('+7 days'), '/', null, null, true);
                        setcookie("a_password", $row["password"], strtotime('+7 days'), '/', null, null, true);
                    }
                }
                
                // Track login
                $insert = $conn->prepare("INSERT INTO client_report SET client_id=:c_id, action=:action, report_ip=:ip, report_date=:date ");
                $insert->execute(array("c_id" => $row["client_id"], "action" => "Member logged in.", "ip" => GetIP(), "date" => date("Y-m-d H:i:s")));
                $update = $conn->prepare("UPDATE clients SET login_date=:date, login_ip=:ip WHERE client_id=:c_id ");
                $update->execute(array("c_id" => $row["client_id"], "date" => date("Y.m.d H:i:s"), "ip" => GetIP()));
                
                header('Location:' . site_url(''));
                exit();
            }
        }
    }
}

// Ensure error display for view
if (isset($error) && $error) {
    $_SESSION["recaptcha"] = true;
}