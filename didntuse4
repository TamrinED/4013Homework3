<?php require_once("header.php"); ?>

<body>
  <h1>Sections</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>SectionID</th>
      <th>Prefix</th>
      <th>Number</th>
      <th>CourseID</th>
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

$sql = "SELECT *
FROM section";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["sectionid"]?></td>
    <td><?=$row["prefix"]?></td>
    <td><?=$row["number"]?></td>
    <td><?=$row["courseid"]?></td>
    <td><?=$row["instructorid"]?></td>
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
</body>

<?php require_once("footer.php"); ?>
