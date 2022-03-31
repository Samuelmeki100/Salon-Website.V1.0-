<?php
include ("includes/connection.php");
print_r($_POST);

$fetching = "SELECT ID FROM hair_style ORDER BY ID DESC LIMIT 1";
     if ($connect->query($fetching)){
         echo "Selectd the id <br/>";
         $ipm=$connect->query($fetching);
        $obj = $ipm->fetch_object();

        if($obj){
           $id = $obj->ID;
         $id++;
         $code = "HS_".$id;
         echo $code."<br />";
        }
         else {
             $code = "HS_1";
             echo $code."<br />";
         }
         
     }
    else{
        echo "Could not select the id ".$connect->error;
    }
 $inserting="INSERT INTO hair_style (hair_style_name,hair_style_code,hair_style_price) VALUES ('{$_POST["product_name"]}','{$code}','{$_POST["product_price"]}')";
    $putting = $connect->query($inserting);
    if ($putting){
        echo "succefull ";
    }
 else {
        echo "cound not perform query".  $connect->error;
}
?>

