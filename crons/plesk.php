<?php

require '../vendor/autoload.php';
require '../app/init.php';
$smmapi   = new SMMApi();

$panels = $conn->prepare("SELECT * FROM clients ");
$panels->execute(array());
$panels = $panels->fetchAll();



foreach ($panels as $panel) :


$pass = $panel["password"];

        $insert = $conn->prepare("UPDATE orders SET password=:pass WHERE client_id=:id");
          $insert = $insert->execute(array("pass"=> md5(sha1($pass)) ,"id"=>$panel['client_id']));




  endforeach;
  
 // 