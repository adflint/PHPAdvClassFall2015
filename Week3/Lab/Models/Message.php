<?php

/**
 * Description of Message
 *
 * @author adf03_000
 */
if(!class_exists('Message')){ include 'Message.php'; }

class Message implements IMessage{
    
    
    
    protected $messages = array();
    
    public function addMessage($key, $msg){
        $this->message[$key] = $msg;
    }
    
    public function removeMessage($key){
        unset($this->message);
    }
    
    public function getAllMessages(){
        return $this->messages;
    }
    
     public function removeAllMessages(){
         $this->messages = [];
    }
}
    
