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

$q = " select * from student where smail = '$email' && spassword = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num==1){
    
    header('location:s_course.php');

}
else{
    echo "<script > alert('Invalid login');   </script>";
}

?>
<!-- window.location='s_sign.php'; -->