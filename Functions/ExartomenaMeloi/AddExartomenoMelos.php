<?php
require_once '../../Classes/Eksartomenos.php';
include '../../Classes/Database.php';


if (!isset($_POST['AddDependent'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Εξαρτωμενα Μελη</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/newcss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 
</head>
<body>
    <h1 class="form-header">ΠΡΟΣΘΗΚΗ ΝΕΟΥ ΕΞΑΡΤΟΕΜΕΝΟΥ ΜΕΛΟΥΣ </h1>
    <form action="" method="post">     
            <div class="form-group">
                <label for="AmkaExart">ΑΜΚΑ </label>
                <input type="text" id="AmkaExart" name="AmkaExart" required class="form-control">
            </div>  
        <div class="form-group">
                <label for="onomaExart">Ονομα </label>
                <input type="text" id="onomaExart" name="onomaExart" required class="form-control">
            </div> 
        <div class="form-group">
                <label for="eponymExart">Επωνυμο</label>
                <input type="text" id="eponymExart" name="eponymExart" required class="form-control">
            </div>  
        <div class="form-group">
                <label for="dobExart">Ημε/νια Γεννησης</label>
                <input type="date" id="dobExart" name="dobExart" required class="form-control">
            </div> 
        <div class="form-group">
                <label for="fyloExart">Φυλο </label>
                <select type="text" id="fyloExart" name="fyloExart" required class="form-control">
                    <option value ="M"> Αρρεν </option>
                    <option value ="F"> Θυλη </option>
                </select>
            </div> 
         <div class="form-group">
             
                <label for="kodProstati">Προστατης</label>
                    <select id="kodProstati" name="kodProstati" class="form-control">
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
      
            <button style="float: left; text-align: center" type="submit" name="AddDependent" id="AddDependent" value="Προσθήκη" class="btn btn-info "><span class="glyphicon glyphicon-plus-sign"></span> Καταχώρηση Οχήματος</button>
            <button style="float: left; color: #ff6666" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'ιndex.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>
            <br><br>
        </form>
    </div>
    
</body> 
   
    
<?php 

                    }
                    else { //Μόλις πατήσω το κουμπί Προσθήκη Εργαζομένου (Στα Post )
                       
                        $exart  = new Eksartomenos();
                        $exart->AMKA_eksart = $_POST['AmkaExart'];
                        $exart->DOB_eksart = $_POST['dobExart'] ;
                        $exart->Eponymo_eksart = $_POST['eponymExart'] ;
                        $exart->Fylo_eksart = $_POST['fyloExart'] ;
                        $exart->Onoma_eksart = $_POST['onomaExart'] ;
                        $exart->kod_prostati = $_POST['kodProstati'] ;
                        $exart->setDb();

                    }
?>

