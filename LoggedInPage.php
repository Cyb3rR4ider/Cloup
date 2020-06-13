<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Home</a></li>
    
    <?php
    if ($_SESSION['user_type_ergazom']==1) {
    
    ?>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Εργαζόμενοι<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="Functions/Ergazomenoi/AddErgazomenos.php">Προσθήκη Εργαζόμενου</a></li>
        <li><a href="Functions/ExartomenaMeloi/AddExartomenoMelos.php">Προσθήκη Εξαρτώμενου Μέλους</a></li>
        <li><a href="Functions/Ergazomenoi/SearchErgazomenos.php">Αναζήτηση Εργαζόμενου</a></li>                     
      </ul>
    </li>
    <?php
    }
    ?>
    
    
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Έργα <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="Functions/Erga/AddErgo.php">Προσθήκη Έργου</a></li>
        <li><a href="Functions/Erga/ViewAllErga.php">Προβολή Όλων των Έργων</a></li>
        <li><a href="Functions/Erga/SearchErgo.php">Αναζήτηση Έργων</a></li>                    
      </ul>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Οχήματα <span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li><a href="Functions/Ohimata/AddOhima.php">Προσθήκη Οχήματος</a></li>
        <li><a href="#">Submenu 2-2</a></li>
        <li><a href="#">Submenu 1-3</a></li>                        
      </ul>
    </li>
  </ul>
</div>
    
    <div class="container">
        <a href="logout.php" target="_blank">Αποσύνδεση</a>
</div>

</body>
</html>
