<?php 
include("includes/header.php");
?> 
<html>
    <head>
        <title> sign up</title>
        
    </head>
    <body style="background-color:rgba(10, 25, 020, 0.3)";>


        <form method="post" name="sign_up_form" action="register_user.php">
        first name: <br>
        <input type="text" name="First_Name"> <br>
        
           
        surname name: <br>
        <input type="text" name="Surname"> <br>
        Phone number: <br>
        <input type="text" name="number" ><br>
        email address <br>
        <input type="text" name="Email"><br>
        select sex<br>
        <input type="radio" name="Sex" value="1"  checked> male <br>
        <input type="radio" name="Sex" value="2"> female
        <br>
        
        
        Password<br>
        <input type="password" name="password"> <br>
    
        confim password<br>
        <input type="password" name="confrm password"> <br>
        
        <input type="submit" name="submit"><br>
        <input type="reset" value="Reset" />
        
        
        </form>
        
             
    </body>