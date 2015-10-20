<?php

/**
 * Description of Message
 *
 * @author adf03_000
 */

//message class
class Message implements IMessage{
    
    protected $messages = array();
    
    public function addMessage($key, $msg){
        $this->message[$key] = $msg;
    }
    
    public function removeMessage($key){
        unset($this->messages);
    }
    
    public function getAllMessages(){
        return $this->messages;
    }
    
     public function removeAllMessages(){
         $this->messages = [];
    }
}
