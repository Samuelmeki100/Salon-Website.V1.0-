<?php
include ("includes/header.php");


?>

<a href="create_treatment.php">new</a>
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
while ($obj = mysqli_fetch_array($query)){
    echo '<li><a href="show_treatment.php?id='.$obj["ID"] .'">'. $obj["hair_treatment_name"].'</a></li>';
}
echo "</ul>";
 ?>
 

<?php
include ("includes/footer.php");
?>
