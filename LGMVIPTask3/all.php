<?php 
$conn=mysqli_connect("localhost","root","","result") or die(mysqli_error($con));

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT SID, Name, Physics, Chemistry, Maths FROM marks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "SID: " . $row["SID"]."<br>" ."Name:" . $row["Name"]. "<br> " ."Physics=". $row["Physics"]."<br>"."Chemistry=".$row["Chemistry"]."<br>"."Maths=".$row["Maths"]."</p>". "<br>"."<br>";
  
  }
} else {
  echo "0 results";
}
$conn->close();
?>