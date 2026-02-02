<?php
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);
      session_start();
	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>1000,
		"currency"=>"inr",
		"description"=>"Add Fund In Smm",
		"source"=>$token,
	));
$amount = $_SESSION['AMT'];
 
	
	 if($data['status'] == "succeeded") {
	  $payment = $conn->prepare('SELECT * FROM payments INNER JOIN clients ON clients.client_id=payments.client_id WHERE payments.payment_extra=:extra ');
                $payment->execute(['extra' => $_SESSION['ODR']]);
                $payment = $payment->fetch(PDO::FETCH_ASSOC);
                
               
                
              if($settings['site_currency'] == "USD"){
               
                $charge =number_format((float)$settings["dolar_charge"], 2, '.', ''); 
                
                $payment['payment_amount'] = $payment['payment_amount']/$charge;
                
                } 
              // var_dump($settings['site_currency']);exit();endif;
                
                $payment_bonus = $conn->prepare('SELECT * FROM payments_bonus WHERE bonus_method=:method && bonus_from<=:from ORDER BY bonus_from DESC LIMIT 1');
                $payment_bonus->execute(['method' => $method['id'], 'from' => $payment['payment_amount']]);
                $payment_bonus = $payment_bonus->fetch(PDO::FETCH_ASSOC);
                            if( $payment_bonus ) {
                    $amount = $payment['payment_amount'] + (($payment['payment_amount'] * $payment_bonus['bonus_amount']) / 100) - (($payment['payment_amount'] * $extras['fee']) / 100) - (($payment['payment_amount'] * $extras['fee']) / 100);
                } else {
                    $amount = $payment['payment_amount'] - (($payment['payment_amount'] * $extras['fee']) / 100);
                }
                       
                   $conn->beginTransaction();

                $update = $conn->prepare('UPDATE payments SET client_balance=:balance,payment_amount=:amount, payment_status=:status, payment_delivery=:delivery WHERE payment_id=:id ');
                $update = $update->execute(['balance' => $payment['balance'],'amount' =>$amount, 'status' => 3, 'delivery' => 2, 'id' => $payment['payment_id']]);
              
                $balance = $conn->prepare('UPDATE clients SET balance=:balance WHERE client_id=:id ');
                $balance = $balance->execute(['id' => $payment['client_id'], 'balance' => $payment['balance'] + $amount]);

                $insert = $conn->prepare('INSERT INTO client_report SET client_id=:c_id, action=:action, report_ip=:ip, report_date=:date ');
                
                    if($settings["referral"] == 2):
					if(!empty($payment["referral"])):
						if($settings["ref_type"] == 0):
							if($amount < $settings["ref_max"]):
								$refbonus = $amount*$settings["ref_bonus"]/100;
								$refclient = $conn->prepare("SELECT * FROM clients WHERE id=:id");
                                $refclient->execute(array("id"=>$payment["referral"]));
                                $refclient = $refclient->fetch(PDO::FETCH_ASSOC);
								$update	=	$conn->prepare("UPDATE clients SET balance=:balance, refchar=:refchar,reforder=:reforder WHERE id=:id ");
								$update	=	$update-> execute(array("id"=>$payment["referral"],"balance"=>$refclient["balance"] + $refbonus,"refchar"=>$refclient["refchar"] + $refbonus,"reforder"=>$refclient["reforder"] + 1 ));
							endif;
						else:
							$paycontrol	=	$conn->prepare("SELECT * FROM payments WHERE client_id=:id, payment_status=:status ");
							$paycontrol->execute(array("id"=>$payment["client_id"],"status"=>3));
							$payon =  $paycontrol->rowCount();
							if(!$payon):
								if($amount < $settings["ref_max"]):
								$refbonus = $amount*$settings["ref_bonus"]/100;
								$refclient = $conn->prepare("SELECT * FROM clients WHERE id=:id");
                                $refclient->execute(array("id"=>$payment["referral"]));
                                $refclient = $refclient->fetch(PDO::FETCH_ASSOC);
							    $update	=	$conn->prepare("UPDATE clients SET balance=:balance, refchar=:refchar,reforder=:reforder WHERE id=:id ");
								$update	=	$update-> execute(array("id"=>$payment["referral"],"balance"=>$refclient["balance"] + $refbonus,"refchar"=>$refclient["refchar"] + $refbonus,"reforder"=>$refclient["reforder"] + 1 ));
                                endif;
							endif;
						endif;
					endif;
				endif;
 
            if( $payment_bonus ) {
                    $insert = $insert->execute(['c_id' => $payment['client_id'], 'action' => 'New ' . $amount . ' ' . $settings["currency"] . ' payment has been made with ' . $method['method_name'] . ' and included %' . $payment_bonus['bonus_amount'] . ' bonus.', 'ip' => GetIP(), 'date' => date('Y-m-d H:i:s') ]);
                } else {
                    $insert = $insert->execute(['c_id' => $payment['client_id'], 'action' => 'New ' . $amount . ' ' . $settings["currency"] . ' payment has been made with ' . $method['method_name'], 'ip' => GetIP(), 'date' => date('Y-m-d H:i:s') ]);
                }
                if ($update && $balance) {
                    $conn->commit();
                    header('location:'.site_url(addfunds));
                    echo 'OK';
                } else {
                    $conn->rollBack();
                    header('location:'.site_url(addfunds));
                    echo 'NO';
                }
                      
	}
	else {
		//tampered or failed
$msg = '<div class="alert alert-danger" role="alert">Transaction failed</div>';
	} 
	
	session_unset();
}



 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stripe Payment Gateway BY ABUSALEH</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top header-bg-dark" style="background: ##FFFFFF!;">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="https://youtube.com/abusalehinfotech"><h1>Abusaleh Infotech</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="https://youtube.com/abusalehinfotech">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="/addfunds">Back</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<section class="showcase">
  <div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
      <h2>Stripe Payment Gateway</h2>
    </div>
  <div class="text-center">
    <h1 class="display-3">Thank You!</h1>
    <h3><?php print $msg;?></h3>
      
      <hr>
      <p>
       Having trouble? <a href="mailto:<?php echo $settings["admin_mail"] ?>">Contact us</a>
      </p>
      <p class="lead">
      <a class="btn btn-primary btn-sm" href="/" role="button">Continue to homepage</a>
    </p>
  </div>
  </div>
</section>

<br>


<!-- Footer -->
  <footer class="footer bg-light footer-bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">Copyright &copy;  2011 - <?php print date('Y', time());?> <a href="https://youtube.com/abusalehinfotech">Abusaleh Infotech</a> All rights reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://instagram.com/abusalehinfotech">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> 
</body>
</html>