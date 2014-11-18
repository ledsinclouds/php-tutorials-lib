<?php

/**
 * Description of DbConnection
 *
 * @author kafka
 */
class DbConnection {

    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'datagraby';
    private $dbname = 'object_patterns';

    public function __construct($host, $user, $pass, $dbname) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function getConnect() {
        try {
            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'get connected';
        } catch (PDOException $e) {
            print "Exception:\n";
            die($e->getMessage() . "\n");
        }
    }

    public function getConnected() {
        return "You are Connected to {$this->host} - {$this->dbname}";
    }

}
