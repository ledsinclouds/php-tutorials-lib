<?php

/**
 * Description of YMNotifier
 *
 * @author kafka
 */

class YMNotifier implements Observer{
    public function notify() {
        echo 'Notifying via YM<br>';
    }
}
