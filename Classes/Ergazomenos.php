<?php

class Ergazomenos 

{
   var $kwd_ergazomenou;
   var $Eponymo_ergazom;
   var $Onoma_Ergazom;
   var $Patronymo_Ergazom;
   var $Fyllo_Ergaz;
   var $AFM_Ergaz;
   var $DOB_Ergazom;
   var $Tel_Ergaz;
   var $Salary_Ergazom;
   var $Kod_tm_ergazom;
   var $user_type_ergazom;
   var $alias;
   var $crypto;
      


        function __construct()
        {
           $this->kwd_ergazomenou= -1;
           $this->Eponymo_ergazom="";
           $this->Onoma_Ergazom="";
           $this->Patronymo_Ergazom="";
           $this->Fyllo_Ergaz="";
           $this->AFM_Ergaz=-1;
           $this->DOB_Ergazom=0000-00-00;
           $this->Tel_Ergaz=-1;
           $this->Salary_Ergazom=-1;
           $this->Kod_tm_ergazom=-1;
           $this->user_type_ergazom=-1;
           $this->alias="";
           $this->crypto="";
              
        }
        
         function login()
    {
        $DB = new Database();
        $DB->login($this);
    }
        
        
        function getDb() {
        $DB = new Database();
        $DB->getErgazomenos($this);
    }
        
  
} //Class Ergazomenos ends here

