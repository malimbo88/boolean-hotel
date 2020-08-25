<!-- update.php -->

<!-- Included Files -->
<?php

// Update_query
include __DIR__ . "/update_query.php";
// Header
include __DIR__ . "/../partials/header.php";

?>

<!-- If Array is not empty -->
<?php if (!empty($single_room)) { ?>
  <!-- Main -->
  <main>

    <!-- Title -->
    <h2>Update room number: <?php echo $single_room["room_number"]; ?></h2>
    <!-- end Title -->

    <!-- Form Update -->
    <form class="update" method="post" action="<?php echo $base_path . "/update/database_update.php"; ?>">

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

            <!-- Hidden Id form -->
            <td>
              <?php echo $single_room["id"]; ?>
              <input type="hidden" name="id" value="<?php echo $single_room["id"]; ?>">
            </td>
            <!-- end Hidden form -->

            <!-- Update Room Number form -->
            <td class="form_update">
              <label>Update:</label>
              <input type="text" name="room_number" value="<?php echo $single_room["room_number"]; ?>">
            </td>
            <!-- end Update form -->

            <!-- Update Floor form -->
            <td class="form_update">
              <label>Update:</label>
              <input type="text" name="floor" value="<?php echo $single_room["floor"]; ?>">
            </td>
            <!-- end Update form -->

            <!-- Update Beds form -->
            <td class="form_update">
              <label>Update:</label>
              <input type="text" name="beds" value="<?php echo $single_room["beds"]; ?>">
            </td>
            <!-- end Update form -->

            <td>
              <?php echo $single_room["created_at"]; ?>
            </td>

            <td>
              <?php echo $single_room["updated_at"]; ?>
            </td>

            <!-- Save Form input -->
            <td class="form_save">
              <input type="submit" value="Save">
            </td>
            <!-- Save Form input -->

          </tr>
          <!-- end Single Room <?php echo "Room number: " . $single_room["room_number"]; ?> -->

        </tbody>
        <!-- end Tbody -->

      </table>
      <!-- Table Singola Stanza -->

    </form>
    <!-- end Form update -->

  </main>
  <!-- end Main -->
<?php } else { ?>
  <p>La stanza non esiste</p>
<?php } ?>
