<?php
class Ergo {
    var $kwd_ergou  ;
    var $perigrafh_ergou;
    var $finish_date;
    var $start_date;
    
    function __construct(){
        $this->kwd_ergou  = -1;
        $this->perigrafh_ergou = "";
        $this->finish_date = 0000-00-00;
        $this->start_date = 0000-00-00;  
    }
    
    
    function setDb() {
        $DB = new Database();
        $DB->setErgο($this);
    }
}//Class Ergo ends here
