<?php

/**
 * Description of DbDriverInterface
 *
 * @author kafka
 */
interface DbDriverInterface {

    public function connect();

    public function execute($sql);
}

