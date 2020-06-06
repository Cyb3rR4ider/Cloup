<?php
    require_once '../../Classes/Ergo.php';
    require_once '../../Classes/Database.php';

if (!isset($_POST['AddErgo'])) { ?>
    
    <form action="" method="post">     
            <div class="form-group">
                <label for="perigrafh">Περιγραφή Έργου</label>
                <input type="text" id="perigrafh" name="perigrafh" required class="form-control">
            </div>  
        <div class="form-group">
                <label for="enarksh">Ημερομηνία Έναρξης</label>
                <input type="date" id="enarksh" name="enarksh" required class="form-control">
            </div> 
        <div class="form-group">
                <label for="lhksh">Ημερομηνία Λήξης</label>
                <input type="date" id="lhksh" name="lhksh" required class="form-control">
            </div>
        
        <button style="float: left" type="submit" name="AddErgo" id="AddErgo" value="Προσθήκη" class="btn btn-info "><span class="glyphicon glyphicon-plus-sign"></span> Καταχώρηση Έργου</button>
        <button style="float: left; color: #ff6666" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'ιndex.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>

        </form>
    </div>
        
<?php 

                    }
                    else { //Μόλις πατήσω το κουμπί Προσθήκη Εργαζομένου (Στα Post )
                        $project=new Ergo();
                        
                        $project->perigrafh_ergou=$_POST["perigrafh"];
                        $project->start_date=$_POST["enarksh"];
                        $project->finish_date=$_POST["lhksh"];
                        
                        $project->setDb();
                    }
