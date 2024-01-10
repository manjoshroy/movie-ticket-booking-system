<?php
include("connection.php");
?>
<?php
$username=$_POST["username"];
$password=$_POST["password"];

$sql="select * from users where user_name='$username' and password='$password'";

$res= mysqli_query($con, $sql);

if(mysqli_num_rows($res)>0)
{
    $row= mysqli_fetch_assoc($res);
    
    session_start();
    $_SESSION['userid']=$row['user_id'];
    $_SESSION['username']=$row['user_name'];
    header('Location: adminhome.php');
  
    
}
    else
{
echo("<script>alert('Invalid username and password')</script>");
}
?>

