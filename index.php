<!-- index.php -->

<!-- Included Files -->
<?php

// Database
include __DIR__ . "/query.php";
// Header
include __DIR__ . "/partials/header.php";

?>

   <!-- Main -->
   <main>

     <!-- Title -->
     <h2>Hotel rooms</h2>
     <!-- end Title -->

     <!-- Update successful -->
     <?php
     if (isset($_GET["update_room"])) { ?>
       <p><?php echo "Room: " . $_GET["update_room"] . ". Update successful!" ?></p>
     <?php } ?>

     <!-- end Update successful -->

     <!-- Table Stanze -->
     <table class="room_table">

       <!-- Thead -->
       <thead>
         <tr>
           <th>Id</th>
           <th>Room Number</th>
           <th>Floor</th>
           <th>Show</th>
         </tr>
       </thead>
       <!-- end Thead -->

        <!-- Tbody -->
        <tbody>

          <!-- each array contained in $rooms represents a single room -->
          <?php foreach($rooms as $room) { ?>

            <!-- Single Room <?php echo "Id: " . $room["id"]; ?> -->
            <tr>
              <td><?php echo $room["id"]; ?></td>
              <td><?php echo $room["room_number"]; ?></td>
              <td><?php echo $room["floor"]; ?></td>

              <!-- Link to Show page -->
              <td>
                <a href="<?php echo $base_path . "/show/show.php?id=" . $room["id"]; ?>">View</a>
              </td>
              <!-- Link to Show page -->

              <!-- Link to Update page -->
              <td>
                <a href="<?php echo $base_path . "/update/update.php?id=" . $room["id"]; ?>">Update</a>
              </td>
              <!-- Link to Update page -->

            </tr>
            <!-- end Single Room <?php echo "Id: " . $room["id"]; ?> -->

          <?php }; ?>

        </tbody>
        <!-- end Tbody -->

      </table>
      <!-- end Table Stanze -->

    </main>
    <!-- end Main -->

  </body>
</html>
