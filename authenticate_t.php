<?php
session_start();
// header('location:courselist_t.php');
$con=mysqli_connect('db4free.net','breakingbarriers','testing@test','breakingbarriers');
if($con)
{
    // echo "Connection Successful";
}
else{
    // echo "No Connection";
}

mysqli_select_db($con, 'breakingbarriers');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$q = " select * from teacher where tname = '$name' && tmail = '$email' && tpassword = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num==1){
    echo "<script > alert('This user already exists');  window.location='t_sign.php';  </script>";
}
else{
    $qy= " insert into teacher(tname,tmail,tpassword) values ('$name','$email','$pass')";
    mysqli_query($con,$qy);
    header('location:courselist_t.php');
}

?>