<?php

/**
 * Description of HtmlEmailer
 *
 * @author kafka
 */
class HtmlEmailer extends Emailer {

    public function sendHTMLEmail() {
        foreach ($this->recipients as $recipient) {
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' .
                    "\r\n";
            $headers .= "From: {$this->sender}" . "\r\n";
            $result = mail($recipient, $this->subject, $this->body, $headers);
            if ($result)
                echo "HTML Mail successfully sent to {$recipient}<br/>";
        }
    }

}

