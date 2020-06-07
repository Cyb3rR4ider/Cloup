<h2>Προβολή όλων των Έργων</h2>
<?php
session_start();
  require_once '../../Classes/Ergo.php';
  require_once '../../Classes/Database.php';
?>

<div><table class="table table-responsive table-bordered table-condensed"
            style="
            border-radius: 10px;
            padding-top: 5px;
            padding-left: 5px;
            padding-right: 5px;
            padding-bottom: 5px;
            max-width: available;
            margin: 0px;
            background-color: whitesmoke;
            ">
        <thead>
            <tr style="background-color:   #6699ff">

                <th style=white-space:nowrap">Κωδικός</th>
                <th>Περιγραφή</th>
                <th>Ημ/νία Έναρξης</th>
                <th> Ημ/νία Λήξης</th> 
              
                <th style="width: 250px">Λειτουργίες</th>

            </tr>
        </thead>
        <tbody>
            <tr style="">
                <?php
                $DB = new Database();
                $DB->connect();
                $res = $DB->execute("SELECT `kwd_ergou`, `perigrafh_ergou`, `finish_date`, `start_date` FROM `ergo`", []);
                while ($row = $res->fetch()) {
                    echo "<td>" . $row['kwd_ergou'] . "</td>";
                    echo "<td>" . $row['perigrafh_ergou'] . "</td>";
                    echo "<td>" . $row['start_date'] . "</td>";
                    echo "<td>" . $row['finish_date'] . "</td>";
                    
                    ?>
                    <td class="">
                        <form style ="float: left; padding: 2px;" method="post" action="../../Functions/Erga/ViewErgo.php" target="_blank">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                   type="text" name="viewergoid" value="<?php echo $row['kwd_ergou']; ?>" readonly>
                            <button type="submit" title="Προβολή Έργου" style="width:120px; height:20px; background-color:blue;" class="btn-large">
                                <i>Προβολή Έργου</i></button>
                        </form>
                        
                        <form style ="float: left; padding: 2px;" method="post" action="../../Functions/Erga/DeleteErgo.php" target="_blank">
                            <input style=" display:none ;color: red; width: 0px; height: 0px;" 
                                   type="text" name="delergoid" value="<?php echo $row['kwd_ergou'];?>" readonly>
                            <button type="submit" title="Διαγραφή Έργου" style="width:120px; height:20px; background-color:red;" class="btn-large">
                                <i>Διαγραφή Έργου</i></button>
                        </form>

                    </td>

                    <?php
                    echo "</tr>";
                }//Τέλος εκτύπωσης γραμμής
                ?>
                <?php
                echo "</tbody></table></div>";



                