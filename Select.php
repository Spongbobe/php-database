<?php
include_once 'db.php';
if(isset($_POST['Select']))
{ 
$sql = "select id,name,email,mobile from users";
$query = mysqli_query($conn,$sql);
while($data = mysqli_fetch_array($query))
{
echo "ID = ".$data['id']."<br>";
echo "Name = ".$data['name']."<br>";
echo "Email = ".$data['email']."<br>";
echo "Mobile = ".$data['mobile']."<br><hr>";
}
}
?>