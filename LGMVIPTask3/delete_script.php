<?php
$conn=mysqli_connect("localhost","root","","result") or die(mysqli_error($conn));
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$SID=$_POST["sid"];
$name= mysqli_real_escape_string($conn,$_POST['name']);

$sql = "DELETE FROM marks WHERE SID='$SID' AND Name='$name'";

if ($conn->query($sql) === TRUE) {
  echo "Record Deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>