<?php
class Eksartomenos {
   var $AMKA_eksart ;
   var $Onoma_eksart;
   var $Eponymo_eksart;
   var $DOB_eksart;
   var $Fylo_eksart;
   var $kod_prostati;
   
   
   function __construct(){
    $this->AMKA_eksart  = -1;
    $this->Onoma_eksart = "";
    $this->Eponymo_eksart = "";
    $this->DOB_eksart = 0000-00-00;
    $this->Fylo_eksart = "";
    $this->kod_prostati = -1;
   }
   
    function getDb() {
        $DB = new Database();
        $DB->getEksartomenos($this);
    }
    
    function setDb() {
        $DB = new Database();
        $DB->setEksartomenos($this);
    }
   
}//Class Eksartomenos ends here.

