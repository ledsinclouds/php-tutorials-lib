<?php

/**
 * Description of ExtendedEmailer
 *
 * @author kafka
 */
class ExtendedEmailer extends Emailer {

    public function __construct($sender) {
        parent::__construct($sender);
    }

    public function setSender($sender) {
        $this->sender = $sender;
    }

}

