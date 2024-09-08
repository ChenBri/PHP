<?php 
class Validatior 
{
    public static function string($str){
        $trimmed_str = trim($str);
        return strlen($trimmed_str) === 0 || strlen($trimmed_str) > 1000;
    }

    public static function email($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}