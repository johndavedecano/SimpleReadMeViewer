<?php
require_once "vendor/autoload.php";

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    
    if(isset($_POST['contents']) && !empty($_POST['contents'])) {
         
            $Parsedown = new Parsedown();
            header("content-type:text/html");
            echo $Parsedown->text($_POST['contents']); 
        
    }
    
    
}