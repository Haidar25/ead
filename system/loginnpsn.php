<?php
include 'connect.php';
$username=mysql_fix_string($conn, $_POST['username']);
$password=mysql_fix_string($conn, $_POST['password']);

//$salt1="Gambr12345";
//$salt2="R102273336";
//$pass_enkryp1=md5($password);
//$pass_enkryp2=hash('ripemd128', "$salt1$pass_enkryp1$salt2");
//$password=md5($pass_enkryp2);

$query=$conn->query("select * from login_npsn where username='$username' and password='$password'");
if($data=mysqli_fetch_array($query)){
    header("location:http://localhost/ead/form_npsn.php");
}
else{
    header("location:http://localhost/ead/index.php");
}

function mysql_fix_string($conn, $string)
{
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $conn->real_escape_string($string);
}    