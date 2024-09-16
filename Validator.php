<?php
class Validator
{
    public static function string($str)
    {
        $trimmed_str = trim($str);
        return strlen($trimmed_str) === 0 || strlen($trimmed_str) > 1000;
    }

    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function password($password)
    {
        return strlen($password) >= 8 && preg_match('/[A-Za-z]/', $password) && preg_match('/[0-9]/', $password);
    }

    public static function integer($number, $min = null, $max = null)
    {
        if (filter_var($number, FILTER_VALIDATE_INT) === false) {
            return false;
        }
        if ($min !== null && $number < $min) {
            return false;
        }
        if ($max !== null && $number > $max) {
            return false;
        }
        return true;
    }
    public static function date($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }
}
