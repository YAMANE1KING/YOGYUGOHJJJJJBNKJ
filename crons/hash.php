<?php

require '../vendor/autoload.php';
require '../app/init.php';

$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;



$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;


$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;




$panels = $conn->prepare("SELECT * FROM hashes ");
$panels->execute(array());
$panels = $panels->fetchAll();
foreach ($panels as $panel) :
$n = "8" ; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#₹&!?$'; 
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    return $randomString; 
} 
  $texted = getName($n);
if (!countRow(["table" => "hashes", "where" => ["texted" => $texted ,"hashed" => md5(sha1(md5($texted))) ]])):
$insert2= $conn->prepare("INSERT INTO hashes SET texted=:texted, hashed=:hashed ");
          $insert2= $insert2->execute(array("texted"=>$texted,"hashed"=>md5(sha1(md5($texted))) ));

endif;
echo getName($n);
endforeach;





?>


