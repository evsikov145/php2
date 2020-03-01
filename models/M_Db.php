<?php

class M_Db
{
    private $host;
    private $login;
    private $password;
    private $db;
    private $options;
    private $PDO;
    private $charset = "UTF8";

    public function __construct($host_copy, $login_copy, $password_copy, $db_copy)
    {
        $this->host = $host_copy;
        $this->login = $login_copy;
        $this->password = $password_copy;
        $this->db = $db_copy;
        $this->options = [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false,
        ];
    }

    public function connect_pdo(){
        $this->PDO = new PDO("mysql:host=$this->host;dbname=$this->db;charset=$this->charset", $this->login, $this->password, $this->options);
    }

    public function close_connect_pdo(){
        $this->PDO = null;
    }

    public function getInfoPDO(){
        return $this->PDO;
    }
}
