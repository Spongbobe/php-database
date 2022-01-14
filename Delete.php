<?php
include_once 'db.php';
if(isset($_POST['Delete']))
{ 
$id = $_POST['id'];
$sql = "Delete from users Where id=$id";
if (mysqli_query($conn, $sql)) {
echo "Delete record has been deleted successfully !";
} else {
echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>