<?php
require('stripe-php-master/init.php');
require_once '../../vendor/autoload.php';
require_once '../../app/init.php';
require_once '../../app/controller/addfunds.php';
if( $_SESSION["msmbilisim_userlogin"] != 1  || $user["client_type"] == 1  ){
  Header("Location:".site_url('logout'));
}
if( $settings["email_confirmation"] == 1  && $user["email_type"] == 1  ){
  Header("Location:".site_url('confirm_email'));
}


$publishableKey="pk_live_51JpOrjSEV1IaoStUYrSBC8hjdvTsYCU0vicaA7eaSR9QduDkXGPzS1DOJ7dPuw6LWY7pKSOTD7gLopf7DXHvpB3D003juBjgUz";

$secretKey=$_ENV['STRIPE_SECRET_KEY'] ?? "sk_live_dummy";

\Stripe\Stripe::setApiKey($secretKey);
?>