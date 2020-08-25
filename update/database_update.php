<!-- database_update.php -->
<?php

//Included Files

// Database
include __DIR__ . "/../database.php";


$room_number = $_POST["room_number"];
$floor = $_POST["floor"];
$beds = $_POST["beds"];
$id = $_POST['id'];

var_dump("Room number: " . $room_number);
var_dump("Floor: " .$floor);
var_dump("Beds: " .$beds);
var_dump("Id: " .$id);

$sql = "UPDATE `stanze` SET `room_number` = $room_number, `floor` = $floor, `beds` = $beds, `updated_at` = NOW() WHERE `id` = $id";
$result = $conn->query($sql);
var_dump($result);

if ($result) {
  header("Location:" . $base_path . "?update_room=" . $room_number);
} else {
  die("query error");
};

?>
