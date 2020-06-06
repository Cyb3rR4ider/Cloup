<?php
class Oxhma {
    var $ar_kykloforias   ;
    var $xroma_oxhm;
    var $montelo_oxhm;
    var $marka_oxhm;
    var $odhgos;
    
    function __construct(){
        $this->ar_kykloforias   = "";
        $this->xroma_oxhm = "";
        $this->montelo_oxhm = "";
        $this->marka_oxhm = "";
        $this->odhgos = -1;
    }
    
    
    
     function getDb() {
        $DB = new Database();
        $DB->getOxima($this);
    }
    
    function setDb() {
        $DB = new Database();
        $DB->setOxima($this);
    }
}//Class Oxhma ends here