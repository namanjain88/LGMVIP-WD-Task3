<?php
$conn=mysqli_connect("localhost","root","","result") or die(mysqli_error($conn));
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$SID=$_POST["sid"];
$name= mysqli_real_escape_string($conn,$_POST['name']);
$physics=$_POST["physics"];
$chemistry=$_POST["chemistry"];
$maths=$_POST["maths"];
$sql = "INSERT INTO marks(SID,Name,Physics,Chemistry,Maths) VALUES ('$SID', '$name','$physics','$chemistry','$maths')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>