<?php
class Ekpaideysh {
    var $kwd_ptyxio ;
    var $per_ptyxiou;
    var $vathmos;
    var $date_apokthshs;
    
    function __construct(){
        $this->kwd_ptyxio = -1;
        $this->per_ptyxiou = "";
        $this->vathmos = "";
        $this->date_apokthshs = 0000-00-00;  
    }
    
    function setDbE() {
        $DB = new Database();
        $DB->setEkpaideysh($this);
    }
}//Class Ekpaideysh ends here