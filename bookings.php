<?php 
include("includes/header.php");
?>
<html>
    <head>
        <title> BOOK APPOINMENT</title>        
    </head>
    <body background="1.jpg">
        <H1 Style="background-color: grey"> BOOK APPOINMENTS FORM</H1>
        <p> for you to get our services please fill in yor details and dont forget to leave us with our <em>email</em> so that we can confirm on your appoinment details and also show you our latest produces and services that we will be providing</p>
        
        
        <form>
        first name: <br>
        <input type="text" name="First Name "> <br>
        surname name: <br>
        <input type="text" name="Surname "> <br>
        email address <br>
        <input type="text" name="Email"><br>
        select sex<br>
        <input type="radio" name="Sex" value="Male"  checked> male <br>
        <input type="radio" name="Sex" value="Female"> female
        <br>
        Country <br>
        <input type="text" name="Country"><br>  
        
        select service:<br>
        <select name="chose services">
            <option value= "Hair Style"> Hair Style </option>
            <option value="Hair treatment"> Hair Treatemen</option>
            
        </select>
        <br><br>
        <input type="submit" name="submit"><br>
        <input type="reset" value="Reset" /> <br>
        
    </body>
    
    
</html>