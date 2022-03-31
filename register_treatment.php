<?php
include ("includes/connection.php");
print_r($_POST);

$fetching = "SELECT ID FROM hair_treatment ORDER BY ID DESC LIMIT 1";
     if ($connect->query($fetching)){
         echo "Selectd the id <br/>";
         $ipm=$connect->query($fetching);
        $obj = $ipm->fetch_object();

        if($obj){
           $id = $obj->ID;
         $id++;
         $code = "HT_".$id;
         echo $code."<br />";
        }
         else {
             $code = "HT_1";
             echo $code."<br />";
         }
         
     }
    else{
        echo "Could not select the id ".$connect->error;
    }
 $inserting="INSERT INTO hair_treatment (hair_treatment_name,hair_treatment_code,hair_treatment_price) VALUES ('{$_POST["product_name"]}','{$code}','{$_POST["product_price"]}')";
    $putting = $connect->query($inserting);
    if ($putting){
        echo "succefull ";
    }
 else {
        echo "cound not perform query".  $connect->error;
}


?>


