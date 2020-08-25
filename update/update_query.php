<!-- update_query.php -->

<?php

//Included files
// Database
include __DIR__ . "/../database.php";

//Variables room_id = entered query
$room_id = $_GET["id"];

//Sql query
$sql = "SELECT * FROM `stanze` WHERE `id` = $room_id";
$result = $conn->query($sql);

// If result exists & when num_rows is greater than 0 ...
if ($result && $result->num_rows > 0) {
  //Array representing the information of the single room
  $single_room = $result->fetch_assoc();
}
// There are 0 results
else if ($results) {
  //Array Single Room
  $single_room = [];
}
// If result is not true
else {
  die("Query error");
}

//end Connection
$conn->close();

?>
