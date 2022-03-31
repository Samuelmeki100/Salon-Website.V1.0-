<?php
include 'includes/connection.php';

$auth="SELECT * FROM user WHERE user_Email='{$_POST["email"]}' AND user_Password='{$_POST["password"]}'";

  if ($connect->query($auth))
  {
      echo "query ok";
  }
 else
     {
     echo"query not ok".$connect->error; 
    }
$ipm=$connect->query($auth);
$obj = $ipm->fetch_object();
    
if($obj){
    echo" record found";
    header("Location: home.php");
}
 else {
     echo"record not found";
}
?>