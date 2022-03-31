<?php
    include 'includes/header.php';
?>
<?php 
$select="SELECT * FROM hair_treatment WHERE ID='{$_GET["id"]}'";
$query = $connect->query($select);
    if($query) {
    echo "succesfull";
}
 else {
    echo"coud not select".$connect->error; 
}
$obj = $query->fetch_object();
if ($obj){
    echo "<h2>Name: ". $obj->hair_treatment_name ."</h2>";
    echo "<h5>Price: ". $obj->hair_treatment_price."</h5>";
    echo "<h5>Code: ". $obj->hair_treatment_code."</h5>";
    echo '<h5><a href="create_treatment.php?id='. $obj->ID .'&name='. $obj->hair_treatment_name .'&price='. $obj->hair_treatment_price .'">edit</a></h5>';
}
?>

<?php
    include 'includes/footer.php';
?>

