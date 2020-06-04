<?php
require_once '../../Classes/Ergazomenos.php';
require_once '../../Classes/Database.php';


if (!isset($_POST['AddUser'])) { ?>
    
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
                <input type="text" id="Fyllo_Ergaz" name="Fyllo_Ergaz" required class="form-control">
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
                <input type="text" id="Kod_tm_ergazom" name="Kod_tm_ergazom" required class="form-control">
            </div> 
         <div class="form-group">
                <label for="user_type_ergazom">Δικαιώματα Εφαρμογής </label>
                <input type="text" id="user_type_ergazom" name="user_type_ergazom" required class="form-control">
            </div> 
        <div class="form-group">
                <label for="alias">Όνομα Χρήστη Εργαζομένου </label>
                <input type="text" id="alias" name="alias" required class="form-control">
            </div> 
         <div class="form-group">
                <label for="crypto">Password Εργαζομένου </label>
                <input type="password" id="crypto" name="crypto" required class="form-control">
            </div> 
        

            <button style="float: left" type="submit" name="AddUser" id="AddUser" value="Προσθήκη" class="btn btn-info "><span class="glyphicon glyphicon-plus-sign"></span> Καταχώρηση Eργαζομένου</button>
            <button style="float: left; color: #ff6666" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'ιndex.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>

        </form>
    </div>
    
    
    
    
    
<?php 

                    }
                    else { //Μόλις πατήσω το κουμπί Προσθήκη Εργαζομένου (Στα Post )
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
