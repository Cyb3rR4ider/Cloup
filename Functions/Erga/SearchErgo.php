<?php
session_start();

require_once '../../Classes/Ergo.php';
require_once '../../Classes/Database.php';
require_once '../../Classes/Tmhma.php';

if (!isset($_POST['search'])) { ?>

<h1 class="form-header">ΑΝΑΖΗΤΗΣΗ ΕΡΓΟΥ</h1> 
    <form action="" method="post"> 
        <div class="form-group">
                <label for="kwd_ergou">Κωδικός Έργου </label>
                <input type="text" id="kwd_ergou" name="kwd_ergou" class="form-control">
            </div>  
            <div class="form-group">
                <label for="perigrafh_ergou">Περιγραφή Έργου</label>
                <input type="text" id="perigrafh_ergou" name="perigrafh_ergou" class="form-control">
            </div>  
        <div class="form-group">
                <label for="start_date">Ημ/νία Έναρξης </label>
                <input type="date" id="start_date" name="start_date" class="form-control">
            </div> 
        <div class="form-group">
                <label for="finish_date">Ημ/νία Περάτωσης </label>
                <input type="date" id="finish_date" name="finish_date" class="form-control">
            </div>  
        
        
            <div class="clear-float"></div>
            <button style="float: left" type="submit" name="search" id="search" value="Αναζήτηση" class="btn btn-info "><span class="fa-search "></span> Αναζήτηση Έργου</button>
            <button style="float: left;color: #ff6666" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'ιndex.php';" class="btn btn-info "><span class="fa-backward"></span> Ακύρωση</button>
            <br><br>
        </form>
    
 <?php   
}
else {

    echo "<h3>Έργα:</h3>";
    $DB = new Database();
    $DB->connect();
    $sql = " SELECT `kwd_ergou`, `perigrafh_ergou`, start_date, finish_date FROM `ergo`";
    $w = "where ?";

    $i = 0;
    $a = [];
    $a[$i++] = "1";


   if ($_POST['kwd_ergou'] !== "") {
        $w = $w . " and kwd_ergou = ? ";
        $a[$i++] = $_POST['kwd_ergou'];
    }

    if ($_POST['perigrafh_ergou'] !== "") {
        $w = $w . " and perigrafh_ergou LIKE ? ";
        $a[$i++] ="%" . $_POST['perigrafh_ergou']. "%" ;
    }
   
    if ($_POST['start_date'] != "") {
        $w = $w . " and start_date >= str_to_date(?,'%Y-%m-%d') ";
        $a[$i++] = $_POST['start_date'];
    } else {
        $w = $w . " and start_date > str_to_date('1300-01-01','%Y-%m-%d') ";
    }
    
    if ($_POST['finish_date'] != "") {
        $w = $w . " and finish_date <= str_to_date(?,'%Y-%m-%d') ";
        $a[$i++] = $_POST['finish_date'];
    } else {
        $w = $w . " and finish_date < str_to_date('3020-12-31','%Y-%m-%d') ";
    }
    ?>
    <div><table class="table table-bordered table-hover table-responsive" style="width: available;background-color: cyan">

            <thead>
                <tr style="background-color: darkcyan">

                    <th>Κωδικός Έργου</th>
                    <th>Περιγραφή Έργου</th>
                    <th>Ημερομηνία Έναρξης</th>
                    <th>Ημερομηνία Περάτωσης</th> 
                    <th>Λειτουργίες</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $res = $DB->execute($sql . $w, $a);
                    
                    //-------------Μέτρηση αποτελεσμάτων εγγραφών---------//

                    if ($res->rowCount() == 1) {

                        echo "<h4>Βρέθηκε " . $res->rowCount() . " εγγραφή με τα κριτήρια που δώσατε! </h4>";
                    } else if ($res->rowCount() == 0) {

                        echo "<h4>Δεν βρέθηκαν εγγραφές με τα κριτήρια που δώσατε! </h4>";
                    } else {
                        echo "<h4>Βρέθηκαν " . $res->rowCount() . " εγγραφές με τα κριτήρια που δώσατε! </h4>";
                    }

                    while ($row = $res->fetch()) {

                        $ErgοSearch = new Ergo();
                        $ErgοSearch->kwd_ergou = $row['kwd_ergou'];
                        $ErgοSearch->getDb();
                        
                        
                       
                       
                        echo "<td>" . $ErgοSearch->kwd_ergou . "</td>";
                        echo "<td>" . $ErgοSearch->perigrafh_ergou . "</td>";
                        echo "<td>" . $ErgοSearch->start_date . "</td>";
                        echo "<td>" . $ErgοSearch->finish_date . "</td>";
                        ?>

                        <td class="">
                            <form style ="float: left; padding: 2px;" method="post" action="../../Functions/Erga/ViewErgο.php" target="_blank">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                   type="text" name="viewergoid" value="<?php echo $ErgοSearch->kwd_ergou; ?>" readonly>
                            <button type="submit" title="Προβολή Έργου" style="width:120px; height:40px; background-color:blue;" class="btn-large">
                                <i>Προβολή Έργου</i></button>
                        </form>
                            
                            <form style ="float: left; padding: 2px;" method="post" action="../../Functions/Erga/EditErgo.php" target="_blank">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                   type="text" name="editergoid" value="<?php echo $ErgοSearch->kwd_ergou; ?>" readonly>
                            <button type="submit" title="Επεξεργασία Έργου" style="width:120px; height:40px; background-color:greenyellow;" class="btn-large">
                                <i>Επεξεργασία Έργου</i></button>
                        </form>
                            
                            
                            
                            
                            
                        <?php
                        if ($_SESSION['user_type_ergazom']==1) { ?>
                            <form style ="float: left; padding: 2px;" method="post" action="../../Functions/Erga/DeleteErgο.php" target="_blank">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                   type="text" name="delergoid" value="<?php echo $ErgοSearch->kwd_ergou;?>" readonly>
                            <button type="submit" title="Διαγραφή Έργου" style="width:120px; height:40px; background-color:red;" class="btn-large">
                                <i>Διαγραφή Έργου</i></button>
                        </form> <?php } ?>

                    </td>

                        <?php
                        echo "</tr>";
                    }
                    ?>

                    <?php
                    echo "</tbody></table></div>";
                }

