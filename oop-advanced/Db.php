<?php

/**
 * Description of Db
 *
 * @author kafka
 */
//error_reporting(E_ALL - E_WARNING);
class Db {

    public $_db;
    static $_instance;

    public function __construct() {
        try {
            $this->_db = new PDO("mysql:host=localhost;dbname=object_patterns", 'root', 'datagraby');
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connected';
        } catch (PDOException $e) {
            print "Exception:\n";
            die($e->getMessage() . "\n");
        }
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getQuery($sql) {
        return mysql_query($this->_db, $sql);
    }

}

