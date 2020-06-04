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
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Εργαζόμενοι<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="Functions/Ergazomenoi/AddErgazomenos.php">Προσθήκη Εργαζόμενου</a></li>
        <li><a href="#">Submenu 1-2</a></li>
        <li><a href="#">Submenu 1-3</a></li>                        
      </ul>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Έργα <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Submenu 2-1</a></li>
        <li><a href="#">Submenu 2-2</a></li>
        <li><a href="#">Submenu 2-3</a></li>                        
      </ul>
    </li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Οχήματα <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Submenu 3-1</a></li>
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
