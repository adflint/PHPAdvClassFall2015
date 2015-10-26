<?php

/**
 * Description of Message
 *
 * @author adf03_000
 */

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
