<?php

/**
 * Description of SampleObject
 *
 * @author kafka
 */

class SampleObject {
    public $var1;
    private $var2;
    protected $var3;
    static $var4;
    
    public function __construct() {
        $this->var1 = 'Value One';
        $this->var2 = 'Value Two';
        $this->var3 = 'Value Three';
        SampleObject::$var4 = 'Value Four';
    }
}

