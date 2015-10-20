<?php

/**
 *
 * @author adf03_000
 */
interface IMessage {
    //methods and functions
    
    public function addMessage($key, $msg); 
    public function removeMessage($key);
    public function getAllMessages();
    public function removeAllMessages();
    
}
