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
$sql = "UPDATE marks SET SID='$SID', Name='$name', Physics='$physics', Chemistry='$chemistry', Maths='$maths' where SID='$SID' AND Name='$name'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
