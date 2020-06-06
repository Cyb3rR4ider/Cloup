<?php
require_once '../../Classes/Ekpaideysh.php';
require_once '../../Classes/Database.php';


if (!isset($_POST['AddDegree'])) { ?>
    
    <form action="" method="post">     
            <div class="form-group">
                <label for="per_ptyxiou"> Τίτλος Σπουδών </label>
                <input type="text" id="per_ptyxiou" name="per_ptyxiou" required class="form-control">
            </div>  
            <div class="form-group">
                <label for="vathmos"> Βαθμός </label>
                <input type="text" id="vathmos" name="vathmos" required class="form-control">
            </div> 
            <div class="form-group">
                <label for="date_apokthshs"> Ημ/νία Αποφοίτησης </label>
                <input type="date" id="date_apokthshs" name="date_apokthshs" required class="form-control">
            </div>  
                 
        
            <button style="float: left" type="submit" name="AddDegree" id="AddDegree" value="Προσθήκη Πτυχίου" class="btn btn-info "><span class="glyphicon glyphicon-plus-sign"></span> Καταχώρηση Πτυχίου </button>
            <button style="float: left; color: #ff6666" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'ιndex.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση </button>

        </form>
    </div>
    
<?php 

                    }
                    else { 
                        $ptyxio=new Ekpaideysh();
                        $ptyxio->per_ptyxiou=$_POST["per_ptyxiou"];
                        $ptyxio->vathmos=$_POST["vathmos"];
                        $ptyxio->date_apokthshs=$_POST["date_apokthshs"];
                        $ptyxio->setDbE();
                    }
?>
