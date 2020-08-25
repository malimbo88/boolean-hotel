<!-- header.php -->

<!-- Included Files -->
<?php

// Database
include __DIR__ . "/database.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean Hotel</title>

    <!-- Links -->

    <!-- Font Signika -->
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="<?php echo $base_path . "/dist/app.css"; ?>">

  </head>
  <body>

    <!-- Header -->
    <header>

      <!-- Navigation -->
      <nav>
        <ul class="menu">
          <li class="logo">
            <span>Boolean Hotel</span>
          </li>
          <li>
            <a href="<?php echo $base_path ?>">
              <span>Home</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- end Navigation -->

    </header>
    <!-- end Header -->
