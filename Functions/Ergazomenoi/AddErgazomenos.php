<?php
session_start();
require_once '../../Classes/Ergazomenos.php';
require_once '../../Classes/Database.php';



if (!isset($_POST['AddUser'])) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Εργαζομενοι</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/newcss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
</head>
<body>
    <h1 class="form-header">ΠΡΟΣΘΗΚΗ ΕΡΓΑΖΟΜΕΝΟΥ</h1> 
    <form action="" method="post">     
            <div class="form-group">
                <label for="eponymo">Επώνυμο Εργαζομένου </label>
                <input type="text" id="eponymo" name="eponymo" required class="form-control">
            </div>  
        <div class="form-group">
                <label for="onoma">Όνομα Εργαζομένου </label>
                <input type="text" id="onoma" name="onoma" required class="form-control">
            </div> 
        <div class="form-group">
                <label for="patronymo">Πατρώνυμο Εργαζομένου </label>
                <input type="text" id="patronymo" name="patronymo" required class="form-control">
            </div>  
        <div class="form-group">
                <label for="Fyllo_Ergaz">Φύλλο Εργαζομένου </label>
                <select type="text" id="Fyllo_Ergaz" name="Fyllo_Ergaz" required class="form-control">
                    <option value ="F">Θυλη</option>
                    <option value ="M">Αρρεν</option>
                </select>
            </div> 
         <div class="form-group">
                <label for="AFM_Ergaz">ΑΦΜ Εργαζομένου </label>
                <input type="text" id="AFM_Ergaz" name="AFM_Ergaz" required class="form-control">
            </div> 
         <div class="form-group">
                <label for="DOB_Ergazom">ΗΜ/ΝΙΑ Γέννησης </label>
                <input type="date" id="DOB_Ergazom" name="DOB_Ergazom" required class="form-control">
            </div> 
        <div class="form-group">
                <label for="Tel_Ergaz">Τηλ Εργαζομένου </label>
                <input type="text" id="Tel_Ergaz" name="Tel_Ergaz" required class="form-control">
            </div> 
        <div class="form-group">
                <label for="Salary_Ergazom">Μισθός Εργαζομένου </label>
                <input type="text" id="Salary_Ergazom" name="Salary_Ergazom" required class="form-control">
            </div> 
        <div class="form-group">
                <label for="Kod_tm_ergazom">Τμήμα Εργαζομένου </label>
 
                    <select id="Kod_tm_ergazom" name="Kod_tm_ergazom" class="form-control">
                        <option value="NULL"> - </option>
                        <?php 
                  
                            $DB = new Database();
                            $DB->connect();
                            $sql = "SELECT `kwd_tmhmatos`, `onoma_tmhmatos` FROM `tmhma`;";
                            $res = $DB->execute($sql,[]);
                            echo $res->rowCount() ;
                            if ($res->rowCount() != 0) {
                                while($row = $res->fetch())
              {
                             
                                    echo "<option value='".$row['kwd_tmhmatos']."'>".$row['kwd_tmhmatos']. " - ".$row['onoma_tmhmatos']."</option>";
                                }
                                }
                        
                        ?>
                    </select>
            </div> 
         <div class="form-group">
                <label for="user_type_ergazom">Δικαιώματα Εφαρμογής </label>
                <select type="text" id="user_type_ergazom" name="user_type_ergazom" required class="form-control">
                    <?php
                            $DB = new Database();
                            $DB->connect();
                            $sql = "SELECT `user_type_id`, `user_type_name` FROM `user_type` ;";
                            $res = $DB->execute($sql,[]);
                            echo $res->rowCount() ;
                            if ($res->rowCount() != 0) {
                                while($row = $res->fetch()){
                             
                                    echo "<option value='".$row['user_type_id'].
                                            "'>".$row['user_type_id']. " - ".$row['user_type_name']."</option>";
                                }
                                }
                        ?>
                </select>
            </div> 
        <div class="form-group">
                <label for="alias">Όνομα Χρήστη Εργαζομένου </label>
                <input type="text" id="alias" name="alias" required class="form-control">
            </div> 
         <div class="form-group">
                <label for="crypto">Password Εργαζομένου </label>
                <input type="password" id="crypto" name="crypto" required class="form-control">
            </div> 
        
            <div class="clear-float"></div>
            <button style="float: left" type="submit" name="AddUser" id="AddUser" value="Προσθήκη" class="btn btn-info "><span class="glyphicon glyphicon-plus-sign"></span> Καταχώρηση Eργαζομένου</button>
            <button style="float: left;color: #ff6666" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'ιndex.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>
            <br><br>
        </form>
    </div>
</body>
    
    
    
    
    
<?php 

                    }
                    else { //Μόλις πατήσω το κουμπί Προσθήκη Εργαζομένου
                        $worker=new Ergazomenos();
                        $worker->AFM_Ergaz=$_POST["AFM_Ergaz"];
                        $worker->DOB_Ergazom=$_POST["DOB_Ergazom"];
                        $worker->Eponymo_ergazom=$_POST["eponymo"];
                        $worker->Fyllo_Ergaz=$_POST["Fyllo_Ergaz"];
                        $worker->Kod_tm_ergazom=$_POST["Kod_tm_ergazom"];
                        $worker->Onoma_Ergazom=$_POST["onoma"];
                        $worker->Patronymo_Ergazom=$_POST["patronymo"];
                        $worker->Salary_Ergazom=$_POST["Salary_Ergazom"];
                        $worker->Tel_Ergaz=$_POST["Tel_Ergaz"];
                        $worker->alias=$_POST["alias"];
                        $worker->crypto=$_POST["crypto"];
                        $worker->user_type_ergazom=$_POST["user_type_ergazom"];
                        $worker->setDb();
                    }
?>
