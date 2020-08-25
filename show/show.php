<!-- show.php -->

<!-- Included Files -->
<?php

// Database
include __DIR__ . "/show_query.php";
// Header
include __DIR__ . "/../partials/header.php";

?>

<!-- If Array is not empty -->
<?php if (!empty($single_room)) { ?>
  <!-- Main -->
  <main>

    <!-- Title -->
    <h2>Room number: <?php echo $single_room["room_number"]; ?></h2>
    <!-- end Title -->

    <!-- Table Singola Stanza -->
    <table class="room_table">

      <!-- Thead -->
      <thead>
        <tr>
          <th>Id</th>
          <th>Room Number</th>
          <th>Floor</th>
          <th>Beds</th>
          <th>Created at</th>
          <th>Updated at</th>
        </tr>
      </thead>
      <!-- end Thead -->

      <!-- Tbody -->
      <tbody>

        <!-- Single Room <?php echo "Room number: " . $single_room["room_number"]; ?> -->
        <tr>
          <td><?php echo $single_room["id"]; ?></td>
          <td><?php echo $single_room["room_number"]; ?></td>
          <td><?php echo $single_room["floor"]; ?></td>
          <td><?php echo $single_room["beds"]; ?></td>
          <td><?php echo $single_room["created_at"]; ?></td>
          <td><?php echo $single_room["updated_at"]; ?></td>
        </tr>
        <!-- end Single Room <?php echo "Room number: " . $single_room["room_number"]; ?> -->

      </tbody>
      <!-- end Tbody -->

    </table>
    <!-- Table Singola Stanza -->
  </main>
  <!-- end Main -->
<?php } else { ?>
  <p>La stanza non esiste</p>
<?php } ?>
