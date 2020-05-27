<?php
session_start();
// header('location:s_course.php');
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

$q = " select * from student where sname = '$name' && smail = '$email' && spassword = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num==1){
    echo "<script > alert('This user already exists');  window.location='s_sign.php';  </script>";
}
else{
    $qy= " insert into student(sname,smail,spassword) values ('$name','$email','$pass')";
    mysqli_query($con,$qy);
    header('location:s_course.php');
}

?>