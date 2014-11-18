<?php

/**
 * Description of MysqlDriver
 *
 * @author kafka
 */
include LIBRARY . 'oopBasics/DbDriverInterface.php';
include LIBRARY . 'oopBasics/ReportGenerator.php';

class MysqlDriver extends ReportGenerator implements DbDriverInterface {

    public function connect() {
        
    }

    public function execute($sql) {
        
    }
    
    public function connectDB();

}

