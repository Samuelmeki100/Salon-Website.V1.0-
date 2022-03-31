<?php
include("includes/header.php");
?>

         
<form method="post" name="create_treatment" action="register_treatment.php.">
        product name: <br>
        <input type="text" name="product name"> <br>
        product price: <br>
        <input type="text" name="product price" ><br>   
        <input type="submit" name="submit"><br>
        <input type="reset" value="Reset" />
        
        
        </form>

<?php
include("includes/footer.php");
?>