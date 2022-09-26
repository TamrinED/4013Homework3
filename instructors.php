<?php
require_once("header.php")

<h1>Instructors</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "projecto_homework3";
$password = "0w_zeP}]OVy0";
$dbname = "projecto_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT instructor_id, instructor_name from instructor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["instructor_id"]?></td>
    <td><a href="instructor-section.php?id=<?=$row["instructor_id"]?>"><?=$row["instructor_name"]?></a></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
    
<?php
require_once("footer.php"); ?>
