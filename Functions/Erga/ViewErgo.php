<?php
session_start();
  require_once '../../Classes/Ergo.php';
  require_once '../../Classes/Database.php';

$ergo= new Ergo();
$ergo->kwd_ergou=$_POST['viewergoid'];
$ergo->getDb();

echo "Προβολή του έργου με κωδικό:".$ergo->kwd_ergou;
echo '</br>';
echo "Ημερομηνία Έναρξης του έργου:".$ergo->start_date;