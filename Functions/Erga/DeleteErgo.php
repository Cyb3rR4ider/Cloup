<?php
session_start();
  require_once '../../Classes/Ergo.php';
  require_once '../../Classes/Database.php';
 
$ergo= new Ergo();
$ergo->kwd_ergou=$_POST['delergoid'];


if (!isset($_POST['delbutton'])){
    
    echo 'Είστε σίγουρος για την διαγραφή';
    $delcode=$ergo->kwd_ergou;
    ?>
<form action="" method="post">
    <input type="hidden" name="delcode" value="<?php echo $delcode; ?>" >
<button style="float: left" type="submit" name="delbutton" id="delbutton" onclick="return confirm('Επιβεβαιώστε την διαγραφή')" value="Διαγραφή" class="btn btn-info "><span class="glyphicon glyphicon-trash"></span> Διαγραφή Έργου</button>
</form>     
    
<?php
}

else { //Σου πατάω το κουμπί επιβεβαίωσης οπότε διέγραψέ το.
$delcode=$_POST['delcode'];
$DB=new Database();
$DB->connect();
$sql = "DELETE FROM `ergo` WHERE `kwd_ergou`= ?";
        $DB->execute($sql, [$delcode]);
        echo 'Επιτυχής Διαγραφή';
}

















       