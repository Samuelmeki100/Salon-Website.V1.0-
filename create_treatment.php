<?php
include("includes/header.php");
if (isset($_GET["id"])){
    echo $_GET["id"];
}

?>

         
<form method="post" name="create_treatment" action="<?php if (isset($_GET['id'])){ echo 'update_treatment.php';} else { echo 'register_treatment.php';}?>">
        product name: <br>
        <input type="text" name="product name" value="<?php  if (isset($_GET['name'])) {echo $_GET['name'];} ?>"> <br>
        product price: <br>
        <?php 
        if (isset($_GET["id"])){
        echo '<input type="hidden" name="id" value="'. $_GET['id'] .'">';
        } ?>
        <input type="text" name="product price" value="<?php  if (isset($_GET['price'])) {echo $_GET['price'];} ?>"><br>   
        <input type="submit" name="submit"><br>
        <input type="reset" value="Reset" />
        
        
        </form>

<?php
include("includes/footer.php");
?>