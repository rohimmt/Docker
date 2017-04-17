<?php
include("koneksi.php");
session_start();
if(isSet($_POST['username']) && isSet($_POST['password']))
{
// username and password sent from Form
$username=mysqli_real_escape_string($mysqli,$_POST['username']); 
$password=md5(mysqli_real_escape_string($mysqli,$_POST['password'])); 

$result=mysqli_query($mysqli,"SELECT * FROM users WHERE username='$username' and password='$password'");
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$row['username'];
echo $row['uid'];
}

}
?>