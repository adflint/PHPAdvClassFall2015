<?php

/**
 *
 * @author adf03_000
 */
interface IMessage {
    //put your code here
    
    public function addMessage($key, $msg); 
    public function removeMessage($key);
    public function getAllMessages();
    public function removeAllMessages();
    
}
