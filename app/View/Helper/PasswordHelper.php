<?php

/**
 * CGenerate password
 * 
 */

class PasswordHelper extends AppHelper {

 /** 
 * Password generator function 
 * 
 */ 
    function generatePassword ($length = 10){  
        // inicializa variables 
        $password = ""; 
        $i = 0; 
        $possible = "0123456789bcdfghjkmnpqrstvwxyz!@#$%&*()-?";  
         
        // agrega random 
        while ($i < $length){ 
            $char = substr($possible, mt_rand(0, strlen($possible)-1), 1); 
             
            if (!strstr($password, $char)) {  
                $password .= $char; 
                $i++; 
            } 
        } 
        return $password; 
    } 
    
}
