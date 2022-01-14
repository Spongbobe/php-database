<?php
include_once 'db.php';
if(isset($_POST['Insert']))
{ 
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$sql = "INSERT INTO users (name,email,mobile) VALUES ('$name','$email','$mobile')";
if (mysqli_query($conn, $sql)) {
echo "<h3 style='text-align : center;'>New record has been added successfully ! </h3>";
} else {
echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
}
    include("FormInsert.php");
?>

