<?php 
$conn=mysqli_connect("localhost","root","","result") or die(mysqli_error($conn));

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
$SID=$_POST["sid"];
$name=$_POST["name"];
$sql = "SELECT * FROM marks WHERE Name='$name'";
$result = $conn->query($sql);

if ($result-> num_rows >0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo "SID: " . $row["SID"]."<br>" ."Name:" . $row["Name"]. "<br> " ."Physics=". $row["Physics"]."<br>"."Chemistry=".$row["Chemistry"]."<br>"."Maths=".$row["Maths"]."</p>". "<br>"."<br>";
  
  }
} else {
  echo "0 results".$name.$SID;
}
$conn->close();
?>