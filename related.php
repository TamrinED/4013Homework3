<?php require_once("header.php"); ?>

<body>
    <h1>Instructors</h1>
<div class="card-group">
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

$sql = "SELECT InstructorID, FirstName from Instructor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["FirstName"]?></h5>
      <p class="card-text"><ul>
<?php
    $section_sql = "SELECT i.FirstName 
    FROM section s join instructor i on i.InstructorID = s.InstructorID JOIN Course c on c.CourseID = s.CourseID where i.InstructorID=" . $row["InstructorID"];
    $section_result = $conn->query($section_sql);
    
    while($section_row = $section_result->fetch_assoc()) {
      echo "<li>" . $section_row["FirstName"] . "</li>";
    }
?>
      </ul></p>
  </div>
    </div>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </card-group>

<?php require_once("footer.php"); ?>
