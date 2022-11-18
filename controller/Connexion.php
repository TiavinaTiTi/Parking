
<?php
/**
 * Connexion Base de donnee
 * 
 */
class Connexion
{    
    /**
     * __construct
     *
     * @param  mixed $dbname
     * @param  mixed $host
     * @param  mixed $login
     * @param  mixed $pswd
     * @return void
     */

    public function __construct($dbname='bdparking',$host='localhost',$login='root',$pswd='')
    {
        $this->dbname=$dbname;
        $this->host=$host;
        $this->login=$login;
        $this->pswd=$pswd;
    }

        
    /**
     * getPDO
     *
     * @return pdo
     */
    public function getPDO()
    {
        return $this->pdo ?? new PDO("mysql:dbname={$this->dbname};host={$this->host}", $this->login, $this->pswd);
    }
    
    /**
     * query
     *
     * @param  mixed $sql
     * @return array $data
     * methode query
     */
    public function query($sql)
    {
        $req = $this->getPDO()->query($sql);
        $data = $req->fetchAll();
        return $data;
    }
    
    /**
     * insert
     *
     * @param  mixed $sql
     * @return PDOStatment $req
     * methode prepare
     */
    public function insert($sql)
    {
        $req = $this->getPDO()->prepare($sql);
        return $req;
    }

    public function dateFin($dateDebut)
    {
        $dateFin = date('Y-m-d',strtotime($dateDebut." +1 months +5 day"));
        return $dateFin;
    }
}


?>