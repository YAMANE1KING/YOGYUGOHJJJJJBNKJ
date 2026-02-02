<?php
// BUILD MARKER: 2026-02-03 05:22
// Route already defined in init.php
$panel_orders = countRow(["table"=>"orders"]);

  if( isset($_GET["lang"]) && ($_SESSION["msmbilisim_userlogin"] ?? 0) != 1 ):
    include 'app/language/list.php';
    if( countRow(["table"=>"languages","where"=>["language_type"=>2,"language_code"=>$_GET["lang"]]]) ):
      unset($_SESSION["lang"]);
      $_SESSION["lang"] = $_GET["lang"];
      include 'app/language/'.$_GET["lang"].'.php';
    else:
      $_SESSION["lang"] = $_GET["lang"];
      include 'app/language/'.$_GET["lang"].'.php';
    endif;
    $selectedLang = $_SESSION["lang"];
    header("Location:".site_url());
    exit();
  else:
    if( isset($_SESSION["lang"]) && ($_SESSION["msmbilisim_userlogin"] ?? 0) != 1 ):
      $language = $_SESSION["lang"];
    elseif( ($_SESSION["msmbilisim_userlogin"] ?? 0) != 1 ):
      $language = $conn->prepare("SELECT * FROM languages WHERE default_language=:default ");
      $language->execute(array("default"=>1));
      $language = $language->fetch(PDO::FETCH_ASSOC);
      $language = $language["language_code"] ?? 'en';
    else:
      $user_lang = $user["lang"] ?? 'en';
      if( getRow(["table"=>"languages","where"=>["language_code"=>$user_lang]]) ):
        $language = $user_lang;
      else:
        $language = $conn->prepare("SELECT * FROM languages WHERE default_language=:default ");
        $language->execute(array("default"=>1));
        $language = $language->fetch(PDO::FETCH_ASSOC);
        $language = $language["language_code"] ?? 'en';
      endif;
    endif;
    $lang_file = 'app/language/'.$language.'.php';
    if (file_exists($lang_file)) {
        include $lang_file;
    } else {
        include 'app/language/en.php'; // Fallback
    }
    $selectedLang = $language;
  endif;

  $isLoggedIn = $_SESSION["msmbilisim_userlogin"] ?? false;
  if( !isset($route[0]) && $isLoggedIn ){
    $route[0] = "neworder";
    $routeType= 0;
  }elseif( !isset($route[0]) && !$isLoggedIn ){
    $route[0] = "auth";
    $routeType= 1;
  }elseif( $route[0] == "auth" && !$isLoggedIn ){
    $routeType= 1;
  }else{
    $routeType= 0;
  }

  if( !file_exists( controller($route[0]) ) ){
    $route[0] = "404";
  }
  
  if( route(0) != "frozen" && route(0) != "dreampanelworkall" && ($panel["panel_status"] ?? '') == "Suspended" ): header("Location:".site_url('frozen')); exit(); endif;
  if( route(0) == "frozen"  && ($panel["panel_status"] ?? '') == "Active" ): header("Location:".site_url('')); exit(); endif;
  if( route(0) != "frozen" && route(0) != "dreampanelworkall" && ($panel["panel_status"] ?? '') == "Frozen" ): header("Location:".site_url('frozen')); exit(); endif;
  if( route(0) != "admin" && ($settings["site_maintenance"] ?? 0) == 1 ): include 'app/views/maintenance.php'; exit(); endif;

  require controller($route[0]);
  
  $snow_effect = (($settings["snow_effect"] ?? 0) == 1);
  $captcha = false;
  if( ( ($settings["recaptcha"] ?? 0) == 2 && ( route(0) == "signup" || route(0) == "resetpassword" ) ) || ($_SESSION["recaptcha"] ?? false) ){
    $captcha = true;
  }

  $resetPage = (($settings["resetpass_page"] ?? 0) == 2);
  $Signup = (($settings["register_page"] ?? 0) == 2);
  $ChildPanel = (($settings["childpanel_selling"] ?? 0) == 2);
  $affiliatessystem = (($settings["referral_status"] ?? 0) == 2);
  $Promotion = (($settings["promotion"] ?? 0) == 2);
  $updates = (($general["updates_show"] ?? 0) == 2);
  
  if( route(0) == "auth" ): $active_menu = route(1); else: $active_menu = route(0); endif;
  
  if( route(0) != "admin" && route(0) != "ajax_data" ){
    $languages_q  = $conn->prepare("SELECT * FROM languages WHERE language_type=:type");
    $languages_q->execute(array("type"=>2));
    $languages_res  = $languages_q->fetchAll(PDO::FETCH_ASSOC);
    $languagesL = [];
    $session_lang = $_SESSION["lang"] ?? false;
    foreach ($languages_res as $language) {
        $l = ["name" => $language["language_name"], "code" => $language["language_code"]];
        if( $session_lang && $language["language_code"] == $session_lang ){
            $l["active"] = 1;
        }elseif( !$session_lang ){
            $l["active"] = $language["default_language"];
        }else{
            $l["active"] = 0;
        }
        $languagesL[] = $l;
    }

    if( !isset($templateDir) ){
        $templateDir = route($routeType);
    }
    $contentGet = ($templateDir == "login" || $templateDir == "register") ? "auth" : $templateDir;
      
    $content_q  = $conn->prepare("SELECT * FROM pages WHERE page_get=:get ");
    $content_q->execute(array("get"=>$contentGet));
    $content_row  = $content_q->fetch(PDO::FETCH_ASSOC);
    
    $pageactive = $content_row["page_status"] ?? 0;
    $seo_description = $content_row["seo_description"] ?? '';
    $seo_title = $content_row["seo_title"] ?? '';
    $seo_keywords = $content_row["seo_keywords"] ?? '';
    $content_text = $content_row["page_content"] ?? '';
	
	$PageText = ($pageactive == 1);

    $blogGet = $route[1] ?? ''; 
    $blog_q = $conn->prepare("SELECT * FROM blogs WHERE blog_get=:get ");
    $blog_q->execute(array("get"=>$blogGet));
    $blog_row = $blog_q->fetch(PDO::FETCH_ASSOC);
    $blogcontent = $blog_row["content"] ?? '';
    $blogtitle = $blog_row["title"] ?? '';
    $blogimage = $blog_row["image_file"] ?? '';

    // Popup notifications
    $sth1 = $conn->prepare("SELECT * FROM notifications_popup WHERE expiry_date >= DATE(now()) AND status=:status ORDER BY id DESC");
    $sth1->execute(array("status"=>1));
    $popupNotif1 = $sth1->fetchAll();
    
    $popCount = $_SESSION["popCount"] ?? 0;
    if(count($popupNotif1) > $popCount || $popCount === ''){
        unset($_SESSION["popSeen"]);
    }

    $popupNotif = array();
    $comma_string = [];
    if( !isset($_SESSION["popSeen"]) || !$_SESSION["popSeen"] ){
        $sth = $conn->prepare("SELECT * FROM notifications_popup WHERE expiry_date >= DATE(now()) AND status=:status ORDER BY id DESC");
        $sth->execute(array("status"=>1));
        $popupNotif_rows = $sth->fetchAll();
        $link = $_SERVER['REQUEST_URI'] ?? '';
        $link_array = explode('/',$link);
        $page_name = end($link_array);
        
        foreach($popupNotif_rows as $i => $val){
            $seenPopups = isset($_SESSION["seen_popup"]) ? explode(",",$_SESSION["seen_popup"]) : [];
            if( in_array($val['id'], $seenPopups) ){
                 continue;
            }elseif(isset($val['isAllPage']) && $val['isAllPage'] != 1){ 
              if (isset($val['allPages']) && strpos($val['allPages'], $page_name) !== false) {
                   $val['display'] = true; 
              }else{
                 $val['display'] = false; 
                 continue;
              }
            }else{
                 $val['display'] = true;  
            }
            
            if(isset($val['isAllUser']) && $val['isAllUser'] == 1 && !$isLoggedIn){
                 continue;
            }
            $popupNotif[] = $val;
            $comma_string[] = $val['id'];
        }
        $popupNotif['notifIds'] = !empty($comma_string) ? implode(",", $comma_string) : '';
        $_SESSION["popCount"] = count($popupNotif);
        $_SESSION["popSeen"] = true; 
        $_SESSION["popSeen_val"] = true;
    }
  
    $ref_content_q  = $conn->prepare("SELECT * FROM referral WHERE referral_code=:referral_code ");
    $ref_content_q->execute(array("referral_code" => $user['ref_code'] ?? ''));
    $ref_content  = $ref_content_q->fetchAll();
    
    $blogs_q  = $conn->prepare("SELECT * FROM blogs WHERE status=:status ");
    $blogs_q->execute(array("status" => 1 ));
    $blogs  = $blogs_q->fetchAll();
   
    $panel_info_q = $conn->prepare("SELECT * FROM panel_info WHERE panel_id=:id ");
    $panel_info_q->execute(array("id" => 1));
    $panel_info  = $panel_info_q->fetchAll();

    $currencies_q = $conn->prepare("SELECT * FROM currency WHERE status=:status ");
    $currencies_q->execute(array("status" => 1));
    $currencies  = $currencies_q->fetchAll();

    $ref_payouts_q  = $conn->prepare("SELECT * FROM referral_payouts WHERE r_p_code=:r_p_code ");
    $ref_payouts_q->execute(array("r_p_code" => $user['ref_code'] ?? ''));
    $ref_payouts  = $ref_payouts_q->fetchAll();

    if( $isLoggedIn ) :
        $menus_q  = $conn->prepare("SELECT * FROM menus WHERE visible=:Internal ORDER BY menu_line ASC ");
        $menus_q->execute(array("Internal" => "Internal" ));
        $menus  = $menus_q->fetchAll();
    else:
        $menus_q  = $conn->prepare("SELECT * FROM menus WHERE visible=:visible ORDER BY menu_line ASC ");
        $menus_q->execute(array("visible" => "External"));
        $menus  = $menus_q->fetchAll();
    endif;

    $panels_q = $conn->prepare("SELECT * FROM childpanels INNER JOIN clients ON clients.client_id=childpanels.client_id WHERE childpanels.client_id=:client_id ORDER BY childpanels.id DESC");
    $panels_q->execute(array("client_id" => $user["client_id"] ?? 0));
    $panels = $panels_q->fetchAll();

    $invoices_q = $conn->prepare("SELECT * FROM invoices INNER JOIN clients ON clients.client_id=invoices.client_id WHERE invoices.client_id=:client_id ORDER BY invoices.invoice_id DESC");
    $invoices_q->execute(array("client_id" => $user["client_id"] ?? 0));
    $invoices = $invoices_q->fetchAll();

    $unpaidCount = countRow(["table"=>"invoices","where"=>["invoice_status"=>"Unpaid" , "client_id" => $user["client_id"] ?? 0]]);

	if( !$isLoggedIn || ($user["client_type"] ?? 0) == 1 ){
	  echo $twig->render( $templateDir.'.twig',
      array(
            'site'=>[
                      'url'=>URL,'favicon'=>$settings['favicon'],"logo"=>$settings["site_logo"],"site_name"=>$settings["site_name"],
                      'service_speed'=>$settings["service_speed"],"keywords"=>$settings["site_keywords"],
                      "description"=>$settings["site_description"],'languages'=>$languagesL,"childpanel_price"=>$settings["childpanel_price"],"inr_symbol"=>$settings["inr_symbol"],"inr_value"=>$settings["inr_value"],"ns1"=>$settings["ns1"],"ns2"=>$settings["ns2"],"snow_colour"=>$settings["snow_colour"],"snow_effect"=>$settings["snow_effect"],"popup"=>$settings["popup"] ],
            'style' => $settings["site_styles"],
            'theme' => $settings["site_theme"],
            'title' => $title ?? '',
            'blogs' => $blogs,
  	        'blogtitle' => $blogtitle,
  	        'blogimage' => $blogimage,
  	        'blogcontent' => $blogcontent,
            'keywords' => $seo_keywords,
            'description' => $seo_description,
            'PageText' => $PageText ?? false,
            'content' => $content_text,
            'active_menu' => $active_menu,
            'error' => $error ?? 0,
            'errorText' => $errorText ?? '',
            'success' => $success ?? 0,
            'successText' => $successText ?? '',
            'resetPage' => $resetPage,
            'Signup' => $Signup,
            'ChildPanel' => $ChildPanel,
            'Promotion' => $Promotion,
            'updates' => $updates,
            'affiliatessystem' => $affiliatessystem,
            'captcha' => $captcha,
            'languages' => $languagesL,
            'selectedLang' => $selectedLang,
            'popupNotif' => $popupNotif,
            'panel_info' => $panel_info,
            'panel_orders' => $panel_orders,
            'menus' => $menus,
            'currencies' => $currencies
      ));
	} else {
	  $payouts  = $conn->prepare("SELECT * FROM referral WHERE referral_code=:referral_code ");
      $payouts->execute(array("referral_code" => $user['ref_code']));
      $payouts  = $payouts->fetchAll();
	  
	  echo $twig->render( $templateDir.'.twig',
      array(
            'user' => $user,
            'site' => [
                      'url'=>URL,'favicon'=>$settings['favicon'],"logo"=>$settings["site_logo"],"site_name"=>$settings["site_name"],
                      'service_speed'=>$settings["service_speed"],"keywords"=>$settings["site_keywords"],
                      "description"=>$settings["site_description"],'languages'=>$languagesL,"childpanel_price"=>$settings["childpanel_price"],"inr_symbol"=>$settings["inr_symbol"],"inr_value"=>$settings["inr_value"],"ns1"=>$settings["ns1"],"ns2"=>$settings["ns2"],"snow_colour"=>$settings["snow_colour"],"snow_effect"=>$settings["snow_effect"],"popup"=>$settings["popup"] ],
            'style' => $settings["site_styles"],
            'theme' => $settings["site_theme"],
            'title' => $title ?? '',
            'keywords' => $seo_keywords,
            'description' => $seo_description,
            'PageText' => $PageText ?? false,
            'content' => $content_text,
            'blogs' => $blogs,
  	        'blogtitle' => $blogtitle,
  	        'blogimage' => $blogimage,
  	        'blogcontent' => $blogcontent,
            'active_menu' => $active_menu,
            'error' => $error ?? 0,
            'errorText' => $errorText ?? '',
            'success' => $success ?? 0,
            'successText' => $successText ?? '',
            'resetPage' => $resetPage,
            'Signup' => $Signup,
            'ChildPanel' => $ChildPanel,
            'Promotion' => $Promotion,
            'updates' => $updates,
            'affiliatessystem' => $affiliatessystem,
            'captcha' => $captcha,
            'languages' => $languagesL,
            'selectedLang' => $selectedLang,
            'ref_content' => $ref_content,
            'payouts' => $payouts,
            'currencies' => $currencies,
            'currency' => $user['currency'] ?? '1',
            'panel_info' => $panel_info,
            'ref_payouts' => $ref_payouts,
            'panel_orders' => $panel_orders,
            'menus' => $menus,
            'panels' => $panels,
            'invoices' => $invoices,
            'unpaidCount' => $unpaidCount,
            'popupNotif' => $popupNotif
      ));
	}
  }
