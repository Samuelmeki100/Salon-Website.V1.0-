<?php
include ("includes/header.php");


?>

<a href="create_products.php">new</a>
<?php
$select="SELECT * FROM hair_treatment";
$query = $connect->query($select);
    if($query) {
    echo "succesfull";
}
 else {
    echo"coud not select".$connect->error; 
}
echo "<ul>";
while ($obj = mysqli_fetch_array($$query)){
    echo "<li>". $obj['hair_treatment_name']."</li>";
}
echo "</ul>";
 ?>

<?php
include ("includes/footer.php");
?>
