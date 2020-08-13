<?php
$con=mysqli_connect('localhost','root');
if($con)
{
echo "Connection successful";
}
else{
echo "Unsucessful";
}
mysqli_select_db($con,'varithms');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];
$query= "insert into user_info(user,email,mobile,comment) 
values('$user','$email','$mobile','$comments')";
echo "$query";
mysqli_query($con,$query);
header('location:index.php');
?>
