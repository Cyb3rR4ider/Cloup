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
    } //end of login
    
    
    
     public function setErgazomenos($ergazomenos) {
        $this->connect();
        $sql = "INSERT INTO `ergazomenos`(`Eponymo_ergazom`,"
                . " `Onoma_Ergazom`, `Patronymo_Ergazom`, `Fyllo_Ergaz`, `AFM_Ergaz`,"
                . " `DOB_Ergazom`, `Tel_Ergaz`, `Salary_Ergazom`, `Kod_tm_ergazom`, "
                . "`user_type_ergazom`, `alias`, `crypto`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->execute($sql, [$ergazomenos->Eponymo_ergazom,
            $ergazomenos->Onoma_Ergazom,$ergazomenos->Patronymo_Ergazom,
            $ergazomenos->Fyllo_Ergaz,$ergazomenos->AFM_Ergaz,
            $ergazomenos->DOB_Ergazom,$ergazomenos->Tel_Ergaz,
            $ergazomenos->Salary_Ergazom,$ergazomenos->Kod_tm_ergazom,
            $ergazomenos->user_type_ergazom,$ergazomenos->alias,
            $ergazomenos->crypto]);
    }
	
	public function setEkpaideysh($degree) {
        $this->connect();
        $sql = "INSERT INTO `ekpaideysh`(`per_ptyxiou`, `vathmos`," 
                ."`date_apokthshs`) VALUES (?,?,?)";
        $this->execute($sql, [$degree->per_ptyxiou,
            $degree->vathmos,$degree->date_apokthshs]);
    }
	
	 public function setErgο($ergο) {
        $this->connect();
        $sql = "INSERT INTO `ergo`(`perigrafh_ergou`,`start_date`, `finish_date`) VALUES (?,?,?)";
        $this->execute($sql, [$ergο->perigrafh_ergou, $ergο->start_date, $ergο->finish_date]);
    }
	
	public function  setOxima($oxima){
        $this->connect();
        $sql = "INSERT INTO `oxhma`(`ar_kykloforias`, `xroma_oxhm`, `montelo_oxhm`,"
                . " `marka_oxhm`, `odhgos`) VALUES(?,?,?,?,?) ";
        $this->execute($sql, [$oxima->ar_kykloforias,
            $oxima->xroma_oxhm, $oxima->montelo_oxhm,
            $oxima->marka_oxhm,$oxima->odhgos    
            ]);
    }

    public function setEksartomenos($exartomenos){
        $this->connect();
        $sql = "INSERT INTO `eksartomenos`(`AMKA_eksart`, `Onoma_eksart`,"
                . " `Eponymo_eksart`, `DOB_eksart`, `Fylo_eksart`, "
                . "`kod_prostati`) VALUES(?,?,?,?,?,?) ";
        $this->execute($sql, [
            $exartomenos->AMKA_eksart, $exartomenos->Onoma_eksart,
            $exartomenos->Eponymo_eksart , $exartomenos->DOB_eksart,
            $exartomenos->Fylo_eksart,$exartomenos->kod_prostati
        ]);
    }


    
}//end of class Database