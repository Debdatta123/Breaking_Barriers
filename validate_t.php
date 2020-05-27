<?php
session_start();

$con=mysqli_connect('db4free.net','breakingbarriers','testing@test','breakingbarriers');
if($con)
{
    echo "Connection Successful";
}
else{
    echo "No Connection";
}

mysqli_select_db($con, 'breakingbarriers');

$email = $_POST['email'];
$pass = $_POST['password'];

$q = " select * from teacher where tmail = '$email' && tpassword = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num==1){
    
    header('location:courselist_t.php');

}
else{
    echo "<script > alert('Invalid login');  window.location='t_sign.php';  </script>";
}

?>