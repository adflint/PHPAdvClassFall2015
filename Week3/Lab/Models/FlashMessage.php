<?php

/**
 * Description of FlashMessage
 *
 * @author adf03_000
 */

//Flash message class that is in addition to message class.
//It can make changes w/o changing anything in the message class.
class FlashMessage extends Message {

    public function __construct() {

        if (!isset($_SESSION['flashmessages'])) {
            $_SESSION['flashmessages'] = array();
            $this->message = $_SESSION['flashmessages'];
        }
    }

    public function addMessage($key, $msg) {
        parent::addMessage($key, $msg);
        $_SESSION['flashmessages'] = $this->message;
    }

    public function removeMessage($key) {
        parent::removeMessage($key);
        $this->setFlashMessages();
    }

    public function getAllMessages() {
        $messages = $_SESSION['flashmessages'];
        $this->removeAllMessages();
        $this->setFlashMessages();
        return $messages;
    }

    private function setFlashMessages() {
        $_SESSION['flashmessages'] = $this->message;
    }

}
