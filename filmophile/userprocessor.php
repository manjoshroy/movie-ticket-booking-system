<?php
include("connection.php");
$email=$_POST["email"];
$user=$_POST["username"];
$pass=$_POST["password"];
$sql="insert into users(emailid,user_name,password)values(?,?,?)";
$stmt=$con->prepare($sql);
$stmt->bind_param("sss",$email,$user,$pass);
$stmt->execute();
$stmt->close();
echo("<script>alert('Sign Up Successfully ...')</script>");
header('Location:userlogin.php');
?>

