<?php

/**
 * Description of Message
 *
 * @author adf03_000
 */

require_once 'database.php';
class Message implements IMessage{
   
    private $messages = array();
    
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
    
