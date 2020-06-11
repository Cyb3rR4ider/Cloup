<?php
session_start();
require_once '../../Classes/Ergazomenos.php';
require_once '../../Classes/Database.php';
require_once '../../Classes/Tmhma.php';

if (!isset($_POST['search'])) { ?>

<h1 class="form-header">ΑΝΑΖΗΤΗΣΗ ΕΡΓΑΖΟΜΕΝΟΥ</h1> 
    <form action="" method="post"> 
        <div class="form-group">
                <label for="kwd_ergazomenou">Κωδικός Εργαζομένου </label>
                <input type="text" id="kwd_ergazomenou" name="kwd_ergazomenou" class="form-control">
            </div>  
            <div class="form-group">
                <label for="eponymo">Επώνυμο Εργαζομένου </label>
                <input type="text" id="eponymo" name="eponymo" class="form-control">
            </div>  
        <div class="form-group">
                <label for="onoma">Όνομα Εργαζομένου </label>
                <input type="text" id="onoma" name="onoma" class="form-control">
            </div> 
        <div class="form-group">
                <label for="patronymo">Πατρώνυμο Εργαζομένου </label>
                <input type="text" id="patronymo" name="patronymo" class="form-control">
            </div>  
        <div class="form-group">
                <label for="Fyllo_Ergaz">Φύλλο Εργαζομένου </label>
                <select type="text" id="Fyllo_Ergaz" name="Fyllo_Ergaz" class="form-control">
                     <option value =null>-</option>
                    <option value ="F">Θυλη</option>
                    <option value ="M">Αρρεν</option>
                </select>
            </div> 
         <div class="form-group">
                <label for="AFM_Ergaz">ΑΦΜ Εργαζομένου </label>
                <input type="text" id="AFM_Ergaz" name="AFM_Ergaz" class="form-control">
            </div> 
         <div class="form-group">
                <label for="DOB_Ergazom">ΗΜ/ΝΙΑ Γέννησης </label>
                <input type="date" id="DOB_Ergazom" name="DOB_Ergazom" class="form-control">
            </div> 
        <div class="form-group">
                <label for="Tel_Ergaz">Τηλ Εργαζομένου </label>
                <input type="text" id="Tel_Ergaz" name="Tel_Ergaz" class="form-control">
            </div> 
        <div class="form-group">
                <label for="Salary_Ergazom">Μισθός Εργαζομένου </label>
                <input type="text" id="Salary_Ergazom" name="Salary_Ergazom" class="form-control">
            </div> 
        <div class="form-group">
                <label for="Kod_tm_ergazom">Τμήμα Εργαζομένου </label>
                <input type="text" id="Kod_tm_ergazom" name="Kod_tm_ergazom" class="form-control">
                  
            </div> 
        
        <div class="form-group">
                <label for="alias">Όνομα Χρήστη Εργαζομένου </label>
                <input type="text" id="alias" name="alias" class="form-control">
            </div> 
         <div class="form-group">
                <label for="user_type_ergazom">Δικαιώματα στην Εφαρμογή </label>
                <input type="text" id="user_type_ergazom" name="user_type_ergazom" class="form-control">
            </div> 
        
            <div class="clear-float"></div>
            <button style="float: left" type="submit" name="search" id="search" value="Αναζήτηση" class="btn btn-info "><span class="fa-search "></span> Αναζήτηση Eργαζομένου</button>
            <button style="float: left;color: #ff6666" type="button" name="cancel" id="cancel" value="Ακύρωση" onclick="window.location = 'ιndex.php';" class="btn btn-info "><span class="fa-backward"></span> Ακύρωση</button>
            <br><br>
        </form>
    
 <?php   
}
else {

    echo "<h3>Χρήστες:</h3>";
    $DB = new Database();
    $DB->connect();
    $sql = " SELECT `kwd_ergazomenou`, `Eponymo_ergazom`, `Onoma_Ergazom`, "
            . "`Patronymo_Ergazom`, `Fyllo_Ergaz`, `AFM_Ergaz`, `DOB_Ergazom`, "
            . "`Tel_Ergaz`, `Salary_Ergazom`, `Kod_tm_ergazom`, `user_type_ergazom`, "
            . "`alias` FROM `ergazomenos`  ";
    $w = "where ?";

    $i = 0;
    $a = [];
    $a[$i++] = "1";


    if ($_POST['eponymo'] !== "") {
        $w = $w . " and Eponymo_ergazom like ? ";
        $a[$i++] = "%" . $_POST['eponymo'] . "%";
    }

    if ($_POST['kwd_ergazomenou'] !== "") {
        $w = $w . " and kwd_ergazomenou = ? ";
        $a[$i++] = "%" . $_POST['kwd_ergazomenou'] . "%";
    }
    if ($_POST['onoma'] !== "") {
        $w = $w . " and Onoma_Ergazom like ? ";
        $a[$i++] = "%" . $_POST['onoma'] . "%";
    }
    if ($_POST['patronymo'] !== "") {
        $w = $w . " and Patronymo_Ergazom like ? ";
        $a[$i++] = "%" . $_POST['patronymo'] . "%";
    }
  

    if ($_POST['Fyllo_Ergaz'] !== "null") {
        $w = $w . " and Fyllo_Ergaz = ? ";
        $a[$i++] = $_POST['Fyllo_Ergaz'];
    }

    if ($_POST['AFM_Ergaz'] !== "") {
        $w = $w . " and AFM_Ergaz = ? ";
        $a[$i++] =$_POST['AFM_Ergaz'];
    }
    if ($_POST['DOB_Ergazom'] !== "") {
        $w = $w . " and DOB_Ergazom = ? ";
        $a[$i++] = $_POST['DOB_Ergazom'];
    }
    if ($_POST['Tel_Ergaz'] !== "") {
        $w = $w . " and Tel_Ergaz like ? ";
        $a[$i++] = $_POST['Tel_Ergaz'] . "%";
    }
    if ($_POST['Salary_Ergazom'] !== "") {
        $w = $w . " and Salary_Ergazom = ? ";
        $a[$i++] = $_POST['Salary_Ergazom'];
    }
    if ($_POST['Kod_tm_ergazom'] !== "") {
        $w = $w . " and Kod_tm_ergazom = ? ";
        $a[$i++] = $_POST['Kod_tm_ergazom'];
    }
     if ($_POST['user_type_ergazom'] !== "") {
        $w = $w . " and user_type_ergazom = ? ";
        $a[$i++] = $_POST['user_type_ergazom'] . "%";
    }
    
    if ($_POST['alias'] !== "") {
        $w = $w . " and alias like ? ";
        $a[$i++] = $_POST['alias'] . "%";
    }
    ?>
    <div><table class="table table-bordered table-hover table-responsive" style="width: available;background-color: cyan">

            <thead>
                <tr style="background-color: darkcyan">

                    <th>Κωδικός Εργαζομένου</th>
                    <th>Επώνυμο</th>
                    <th>Όνομα</th>
                    <th>Τμήμα</th> 
                    <th>Username</th>
                    <th>Ημ/Νία Γέννησης</th>
                    <th>Δικαιώματα στην Εφαρμογή</th>
                    <th>Πατρώνυμο</th>
                    <th>ΑΦΜ</th>
                    <th>Τηλέφωνο</th>
                    <th>Μισθός</th>
                    <th>Λειτουργίες</th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $res = $DB->execute($sql . $w, $a);
                    echo $sql . $w, $a;
                    //-------------Μέτρηση αποτελεσμάτων εγγραφών---------//

                    if ($res->rowCount() == 1) {

                        echo "<h4>Βρέθηκε " . $res->rowCount() . " εγγραφή με τα κριτήρια που δώσατε! </h4>";
                    } else if ($res->rowCount() == 0) {

                        echo "<h4>Δεν βρέθηκαν εγγραφές με τα κριτήρια που δώσατε! </h4>";
                    } else {
                        echo "<h4>Βρέθηκαν " . $res->rowCount() . " εγγραφές με τα κριτήρια που δώσατε! </h4>";
                    }

                    while ($row = $res->fetch()) {

                        $ErgSearch = new Ergazomenos();
                        $ErgSearch->kwd_ergazomenou = $row['kwd_ergazomenou'];
                        $ErgSearch->Eponymo_ergazom = $row['Eponymo_ergazom'];
                        $ErgSearch->Onoma_Ergazom = $row['Onoma_Ergazom'];
                        $ErgSearch->Kod_tm_ergazom = $row['Kod_tm_ergazom'];
                        $ErgSearch->alias = $row['alias'];
                        $ErgSearch->DOB_Ergazom = $row['DOB_Ergazom'];
                        $ErgSearch->user_type_ergazom = $row['user_type_ergazom'];
                        $ErgSearch->Patronymo_Ergazom = $row['Patronymo_Ergazom'];
                        $ErgSearch->AFM_Ergaz = $row['AFM_Ergaz'];
                        $ErgSearch->Tel_Ergaz = $row['Tel_Ergaz'];
                        $ErgSearch->Salary_Ergazom = $row['Salary_Ergazom'];
                        
                        //Για να μου εμφανίζει το όνομα τμήματος
                        $TmhmaSearch=new Tmhma();
                        $TmhmaSearch->kwd_tmhmatos=$ErgSearch->Kod_tm_ergazom;
                        $TmhmaSearch->getDB(); //Δεν έχει φτιαχτεί.
                        
                        //Για να μου εμφανίζει το User_type.
                        
                        $UsertypeSearch=new User_type();
                        $UsertypeSearch->user_type_id=$ErgSearch->user_type_ergazom;
                        $UsertypeSearch->getDB(); //Δεν έχει φτιαχτεί.
                        
                        
                       
                        echo "<td>" . $row['kwd_ergazomenou'] . "</td>";
                        echo "<td>" . $row['Eponymo_ergazom'] . "</td>";
                        echo "<td>" . $row['Onoma_Ergazom'] . "</td>";
                        echo "<td>" . $TmhmaSearch->onoma_tmhmatos . "</td>";
                        echo "<td>" . $row['alias'] . "</td>";
                        echo "<td>" . $row['DOB_Ergazom'] . "</td>";
                        echo "<td>" . $UsertypeSearch->user_type_name . "</td>";
                        echo "<td>" . $row['Patronymo_Ergazom'] . "</td>";
                        echo "<td>" . $row['AFM_Ergaz'] . "</td>";
                        echo "<td>" . $row['Tel_Ergaz'] . "</td>";
                        echo "<td>" . $row['Salary_Ergazom'] . "</td>";
                        ?>

                        <td class="">
                        <form style ="float: left; padding: 2px;" method="post" action="../../Functions/Ergazomenos/ViewErgazomenos.php" target="_blank">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                   type="text" name="viewergazid" value="<?php echo $row['kwd_ergou']; ?>" readonly>
                            <button type="submit" title="Προβολή Εργαζομένου" style="width:120px; height:20px; background-color:blue;" class="btn-large">
                                <i>Προβολή Εργαζομένου</i></button>
                        </form>
                        
                        <form style ="float: left; padding: 2px;" method="post" action="../../Functions/Ergazomenos/DeleteErgazomenos.php" target="_blank">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                   type="text" name="delergazid" value="<?php echo $row['kwd_ergou'];?>" readonly>
                            <button type="submit" title="Διαγραφή Εργαζομένου" style="width:120px; height:20px; background-color:red;" class="btn-large">
                                <i>Διαγραφή Εργαζομένου</i></button>
                        </form>

                    </td>

                        <?php
                        echo "</tr>";
                    }
                    ?>

                    <?php
                    echo "</tbody></table></div>";
                }

