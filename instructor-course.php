<?php
require_once("header.php"); ?>

<body>
    <h1>Sections</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>CourseID</th>
      <th>Prefix</th>
      <th>Number</th>
      <th>InstructorID</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost:3306";
$username = "tamrined_suser";
$password = "(_y)XTDI)NmV";
$dbname = "tamrined_4013Homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$cid = $_POST['Instructor.InstructorID'];
//echo $iid;
$sql = "SELECT CourseID, Course.Prefix, Course.Number, InstructorID 
FROM course c join instructor i on i.instructorid = c.instructorid join section s on s.courseid = s.courseid 
WHERE c.InstructorID=" . $cid;
//echo $sql;
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["CourseID"]?></td>
    <td><?=$row["Course.Prefix"]?></td>
    <td><?=$row["Course.Number"]?></td>
    <td><?=$row["InstructorID"]?></td>
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

    <?php require_once("footer.php"); ?>
