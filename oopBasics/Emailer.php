<?php

/**
 * Description of Emailer
 *
 * @author kafka
 */
class Emailer {

    protected $sender;
    protected $body;
    protected $recipients;
    protected $subject;

    public function __construct($sender) {
        $this->sender = $sender;
        $this->recipients = array();
    }

    public function addRecipients($recipient) {
        array_push($this->recipients, $recipient);
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function sendMail() {
        foreach ($this->recipients as $recipient) {
            $result = mail($recipient, $this->subject, $this->body, "From: {$this->sender}\r\n");
            if ($result)
                echo "Mail sent Successfully to {$recipient} <br>";
        }
    }

}

