<?php 
include("includes/header.php");
?>
<html>
    <head>
        
        <title> log in</title>
        
    </head>
    <body style="background-color:grey">
        <form name="log" action="auth.php" method="POST">
        <p> please enter your log in details </p> 
        email: <br>
        <input type="text" name="email"> <br>
        password: <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="submit">
        </form>
    </body>
</html>