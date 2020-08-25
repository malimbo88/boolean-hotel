<!-- query.php -->
<?php

// Included Files
// Database
include __DIR__ . "/database.php";

//Sql Query
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

// If result exists & when num_rows is greater than 0 ...
if ($result && $result->num_rows > 0) {
  //Array Rooms
  $rooms = [];

  // output data of each row
  while($row = $result->fetch_assoc()) {

    //Move each Row inside array Rooms
    $rooms[] = $row;
  }
}
// There are 0 results
else if ($results) {
  //Array Rooms
  $rooms = [];
}
// If result is not true
else {
  die("Query error");
}

//end Connection
$conn->close();

?>
