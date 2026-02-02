<?php
require '../vendor/autoload.php';
require '../app/init.php';


$update = $conn->prepare("UPDATE panel_info SET panel_thismonthorders=:orders WHERE id=:id");
             $update = $update-> execute(array("id"=> 1, "orders" => 0 ));
          ?>