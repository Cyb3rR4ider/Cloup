<?php
//ΔΕΝ ΕΙΝΑΙ ΤΕΛΕΙΩΜΕΝΟ

session_start();

require_once '../../Classes/Ergo.php';
require_once '../../Classes/Database.php';

if ((isset($_POST['editergoid'])) && (!isset($_POST['editergoid2']))) {
    $editergo=new Ergo();
    $editergo->kwd_ergou=$_POST['editergoid'];
    $editergo->getDb();
    
    ?>
    <form action="" method="post">
        <div id="SearchPart" class="col-lg-4">
            <h3>Επεξεργασία Στοιχείων Έργου</h3>
            <input type="text" name="paliosErgoCode" value="<?php echo $_POST['editergoid']; ?>" >


            <div class="form-group">
                <label for="editergoid2">Κωδικός Έργου</label>
                <input type="text" id="editergoid2" name="editergoid2" value="<?php echo $_POST['editergoid']; ?>" required class="form-control">
            </div>  
            <div class="form-group">
                <label for="perigrafh_ergou">Περιγραφή Έργου</label>
                <input type="text" id="perigrafh_ergou" name="perigrafh_ergou" value="<?php echo $editergo->perigrafh_ergou; ?>"  class="form-control" required>
            </div>
            <div class="form-group">
                <label for="start_date">Ημερμηνία Έναρξης</label>
                <input type="date" id="start_date" name="start_date" value="<?php echo $editergo->start_date; ?>"  class="form-control" required>
            </div>
            <div class="form-group">
                <label for="finish_date">Ημερμηνία Περάτωσης</label>
                <input type="date" id="finish_date" name="finish_date" value="<?php echo $editergo->finish_date; ?>"  class="form-control" required>
            </div>


            <button style="float: left" type="submit" name="EditErgo" id="EditErgo" value="Ενημέρωση" class="btn btn-info "><span class="glyphicon glyphicon-retweet"></span> Ενημέρωση Έργου</button>
            <button style="float: left ; color: #ff6666" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'Index.php';" class="btn btn-info "><span class="glyphicon glyphicon-remove-sign"></span> Ακύρωση</button>

    </form>
    </div>

    <?php
} else {
    
    $editergofinal= new Ergo();
    $editergofinal->kwd_ergou=$_POST['editergoid2'];
    $editergofinal->perigrafh_ergou=$_POST['perigrafh_ergou'];
    $editergofinal->start_date=$_POST['start_date'];
    $editergofinal->finish_date=$_POST['finish_date'];
    $editergofinal->updateDb();
    
}

