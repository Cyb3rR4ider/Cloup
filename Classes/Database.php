<?php

class Database
{
    private $host;
    private $database;
    private $user;
    private $pass;
    private $pdo;
    private $opt;

    public function __construct()
    {
        $this->host = "127.0.0.1";
        $this->database = "cloup";
        $this->user = "root";
        $this->pass = "";
    }

    public function connect()
    {
        $this->opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false];
        $conString = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=utf8";
        $this->pdo = new PDO($conString, $this->user, $this->pass, $this->opt);
    }

    public function execute($sql, $array)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($array);
        return $stmt;
    }

    function login(&$U)
    {
        $sql = "SELECT `kwd_ergazomenou`, `Eponymo_ergazom`, `Onoma_Ergazom`, `Patronymo_Ergazom`, "
                . "`Fyllo_Ergaz`, `AFM_Ergaz`, `DOB_Ergazom`, `Tel_Ergaz`, "
                . "`Salary_Ergazom`, `Kod_tm_ergazom`, `user_type_ergazom`, `crypto`, `alias` "
                . "FROM `ergazomenos` WHERE ";
        $sql .= " `alias` = ? and `crypto` = ? ;";
        $this->connect();
        $res = $this->execute($sql, [$U->alias, $U->crypto]);
        if ($res->rowCount() == 1) {
            $row = $res->fetch();
            $U->kwd_ergazomenou = $row['kwd_ergazomenou'];


        }
    }


   
    
    
    
    
}//end of class Database