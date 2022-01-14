<?php
include_once 'db.php';
if(isset($_POST['Update']))
{ 
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$sql = "Update users set name='$name',email='$email',mobile='$mobile' Where id=$id";
if (mysqli_query($conn, $sql)) {
echo "Edit record has been update successfully !";
} else {
echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>