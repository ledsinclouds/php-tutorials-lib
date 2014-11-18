<?php


/**
 * Description of EmailNotifier
 *
 * @author kafka
 */

class EmailNotifier implements Observer{
    public function notify() {
        echo 'Notifying vi Email<br>';
    }
}
