<?php

session_start();
$con=mysqli_connect("localhost","root","","result") or die(mysqli_error($con));

$id= mysqli_real_escape_string($con,$_POST['id']);
$password= mysqli_real_escape_string($con,$_POST['password']);

$s="SELECT * from admin where ID='$id' && Password='$password'";
$res= mysqli_query($con, $s);
$num= mysqli_num_rows($res);

if($num>0){
    $row = mysqli_fetch_array($res);
    
  
 


    if (mysqli_num_rows($res) >= 1){
         header("location:teachers.php"); 
    }
 else {
       header("location:login.php");
 }



}
else{
    echo 'Invalid email or password';
}

?>