
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackaton";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$month_photo = 4;
$hours_photo = 8;
$clouds_photo = 90;

$sql = "SELECT POWER_GEN, ID FROM efficiency_of_panels WHERE ( IF (CLOUDS_TO = 90, 1, 0) = 0 AND MONTHS = '$month_photo' AND HOURS_FROM <= '$hours_photo' AND HOURS_TO >= '$hours_photo' AND CLOUDS_FROM <= '$clouds_photo' AND CLOUDS_TO >= '$clouds_photo') OR (HOURS_FROM - HOURS_TO > 0 AND MONTHS = '$month_photo' AND HOURS_FROM >= '$hours_photo' AND HOURS_TO >= '$hours_photo' AND CLOUDS_FROM <= '$clouds_photo' AND CLOUDS_TO >= '$clouds_photo')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row['ID'];
    //echo '<br>';
    echo $row['POWER_GEN'];
    echo '<br>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>