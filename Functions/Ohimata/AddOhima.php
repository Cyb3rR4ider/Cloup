<?php
require_once '../../Classes/Oxhma.php';
include '../../Classes/Database.php';


if (!isset($_POST['AddVehicle'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Οχημτα</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/newcss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
</head>
<body>
    <h1 class="form-header">ΠΡΟΣΘΗΚΗ ΝΕΟΥ ΟΧΗΜΑΤΟΣ </h1>
    <form action="" method="post">     
            <div class="form-group">
                <label for="markaOxim">Μαρκα </label>
                <input type="text" id="markaOxim" name="markaOxim" required class="form-control">
            </div>  
        <div class="form-group">
                <label for="monteloOxim">Μοντέλο Οχήματος </label>
                <input type="text" id="monteloOxim" name="monteloOxim" required class="form-control">
            </div> 
        <div class="form-group">
                <label for="xromaOxim">Χρωμα</label>
                <input type="text" id="xromaOxim" name="xromaOxim" required class="form-control">
            </div>  
        <div class="form-group">
                <label for="arKiklo">Αριθμός Κυκλ.</label>
                <input type="text" id="arKiklo" name="arKiklo" required class="form-control">
            </div> 
         <div class="form-group">
             
                <label for="odigos">Οδηγός</label>
                    <select id="odigos" name="odigos" class="form-control">
                        <option value="NULL"> - </option>
                        <?php 
                  
                            $DB = new Database();
                            $DB->connect();
                            $sql = "SELECT `kwd_ergazomenou`, `Eponymo_ergazom`, `Onoma_Ergazom` FROM `ergazomenos`;";
                            $res = $DB->execute($sql,[]);
                            echo $res->rowCount() ;
                            if ($res->rowCount() != 0) {
                                while($row = $res->fetch())
              {
                             
                                    echo "<option value='".$row["kwd_ergazomenou"]."'>".$row["kwd_ergazomenou"]. " - ".$row["Onoma_Ergazom"]. " ".$row["Eponymo_ergazom"]."</option>";
                                }
                                }
                        
                        ?>
                    </select>
         
            </div> 
        <div class="clear-float"></div>
      
            <button style="float: left; text-align: center" type="submit" name="AddVehicle" id="AddVehicle" value="Προσθήκη" class="btn btn-info "><span class="glyphicon glyphicon-plus-sign"></span> Καταχώρηση Οχήματος</button>
            <button style="float: left; color: #ff6666" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'ιndex.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>
            <br><br>
        </form>
    </div>
    
</body> 
   
    
<?php 

                    }
                    else { //Μόλις πατήσω το κουμπί Προσθήκη Εργαζομένου (Στα Post )
                       
                        $oxima = new Oxhma();
                        $oxima->ar_kykloforias = $_POST['arKiklo'];
                        $oxima->marka_oxhm = $_POST['markaOxim'];
                        $oxima->montelo_oxhm = $_POST['monteloOxim'];
                        $oxima->xroma_oxhm = $_POST['xromaOxim'];
                        $oxima->odhgos = $_POST['odigos'];
                        $oxima->setDb();
                    }
?>

