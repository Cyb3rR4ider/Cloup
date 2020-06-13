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
            $U->user_type_ergazom=$row['user_type_ergazom'];


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
    
      public function getErgazomenos(&$ergazomenos) {
        $this->connect();
        $res = $this->execute("SELECT `kwd_ergazomenou`, `Eponymo_ergazom`,"
                . " `Onoma_Ergazom`, `Patronymo_Ergazom`, "
                . "`Fyllo_Ergaz`, `AFM_Ergaz`, `DOB_Ergazom`, `Tel_Ergaz`, "
                . "`Salary_Ergazom`, `Kod_tm_ergazom`, `user_type_ergazom`, `alias` "
                . "FROM `ergazomenos` WHERE kwd_ergazomenou = ?", [$ergazomenos->kwd_ergazomenou]);
        $row = $res->fetch();
        $ergazomenos->kwd_ergazomenou = $row['kwd_ergazomenou'];
        $ergazomenos->Eponymo_ergazom = $row['Eponymo_ergazom'];
        $ergazomenos->Onoma_Ergazom = $row['Onoma_Ergazom'];
        $ergazomenos->Patronymo_Ergazom = $row['Patronymo_Ergazom'];
        $ergazomenos->Fyllo_Ergaz = $row['Fyllo_Ergaz'];
        $ergazomenos->AFM_Ergaz = $row['AFM_Ergaz'];
        $ergazomenos->DOB_Ergazom = $row['DOB_Ergazom'];
        $ergazomenos->Tel_Ergaz = $row['Tel_Ergaz'];
        $ergazomenos->Salary_Ergazom = $row['Salary_Ergazom'];
        $ergazomenos->Kod_tm_ergazom = $row['Kod_tm_ergazom'];
        $ergazomenos->user_type_ergazom = $row['user_type_ergazom'];
        $ergazomenos->alias = $row['alias'];
        
        
    }
    
    public function getErgο(&$ergo) {
        $this->connect();
        $res = $this->execute("SELECT `kwd_ergou`, `perigrafh_ergou`,"
                . " `finish_date`, `start_date` FROM `ergo` "
                . "WHERE `kwd_ergou`= ?", [$ergo->kwd_ergou]);
        $row = $res->fetch();
        $ergo->kwd_ergou = $row['kwd_ergou'];
        $ergo->perigrafh_ergou = $row['perigrafh_ergou'];
        $ergo->finish_date = $row['finish_date'];
        $ergo->start_date = $row['start_date'];
          
    }
    
    public function getOxima($oxima){
        $this->connect();
        $sql = "SELECT `ar_kykloforias`, `xroma_oxhm`, `montelo_oxhm`, `marka_oxhm`, `odhgos` FROM `oxhma` WHERE = ?";
        $res = $this->execute($sql, [$oxima->ar_kykloforias]);
        $row= $res.fetch();
        $oxima->ar_kykloforias   = $row["ar_kykloforias"];
        $oxima->xroma_oxhm = $row['xroma_oxhm'];
        $oxima->montelo_oxhm = $row['montelo_oxhm'];
        $oxima->marka_oxhm = $row['marka_oxhm'];
        $oxima->odhgos =$row['odhgos'];
    }
    
     public function updateErgo($ergo) {
        $this->connect();
        $sql = "UPDATE `ergo` SET ";
        $sql .= " `kwd_ergou` = ?, ";
        $sql .= " `perigrafh_ergou` = ? ,";
        $sql .= " `start_date` = ?, ";
        $sql .= " `finish_date` = ? ";
        $sql .= "WHERE `kwd_ergou` = ?";
        $this->execute($sql, [$ergo->kwd_ergou, $ergo->perigrafh_ergou,$ergo->start_date,$ergo->finish_date,$ergo->kwd_ergou]);
        
    }

    
}//end of class Database