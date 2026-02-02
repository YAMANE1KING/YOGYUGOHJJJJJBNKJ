<?php
require '../vendor/autoload.php';
require '../app/init.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer;



$panels = $conn->prepare("SELECT * FROM panel_info WHERE panel_id=:id ");
$panels->execute(array("id"=> 1));
$panels = $panels->fetchAll();





foreach ($panels as $panel) :
  

//do activate 
$smmapi   = new SMMApi();
$link = $panel["panel_domain"];
//Average Update 
$url = "https://$link/crons/average.php";
 $order    = $smmapi->action(array('action' =>"0"), $url);

$url = "https://$link/crons/service_avg.php";
 $order    = $smmapi->action(array('action' =>"0"), $url);
//order status update 
$url = "https://$link/crons/orders.php";
 $order    = $smmapi->action(array('action' =>"15"), $url);
//sync cron
$url = "https://$link/crons/sync.php";
 $order    = $smmapi->action(array('action' =>"0"), $url);
// providers cron
$url = "https://$link/crons/providers.php";
 $order    = $smmapi->action(array('action' =>"0"), $url);
// child status update 
$url = "https://$link/crons/child.php";
 $order    = $smmapi->action(array('action' =>"0"), $url);
// Check to api
$url = "https://$link/crons/checkToAPI.php";
 $order    = $smmapi->action(array('action' =>"0"), $url);
// Refill status cron
$url = "https://$link/crons/refill.php";
 $order    = $smmapi->action(array('action' =>"0"), $url);





endforeach;
