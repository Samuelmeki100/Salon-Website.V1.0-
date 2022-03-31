<?php
include ('includes/connection.php');
print_r($_POST);
    echo "Surname: "; print_r($_POST['Surname']); echo "<br />";
    echo "Email: "; print_r($_POST['Email']); echo "<br />";
    echo "number: "; print_r($_POST['number']);   echo "<br />";
    echo "gender: ";  print_r($_POST['Sex']); echo "<br />";
    echo "password: ";print_r($_POST['password']); echo "<br />" ;
    //inserting values into user table
    $fetching = "SELECT * FROM user ORDER BY ID DESC LIMIT 1";
     if ($connect->query($fetching)){
         echo "Selectd the id <br/>";
         
         $getting = $connect->query($fetching);
         $content = $getting->fetch_object();
         $id = $content->ID;
         $id++;
         $user_id = "USR_".$id;
         echo $user_id."<br />";
     }
    else{
        echo "Could not select the id ".$connect->error;
    }
    if (isset($_POST['Surname'])){
    $inserting="INSERT INTO user (user_ID, user_Number,user_Email,Surname,Firstname,user_password,gender) VALUES ('{$user_id}','{$_POST["number"]}','{$_POST["Email"]}','{$_POST["Surname"]}','{$_POST["Surname"]}','{$_POST["password"]}','{$_POST["Sex"]}')";
    $putting = $connect->query($inserting);
    if ($putting){
        echo "succefull ";
    }
 else {
        echo "cound not perform query".  $connect->error;
}
    }  
    else
    {
        echo 'Not all values havebeen posted';
    }
    ?>
