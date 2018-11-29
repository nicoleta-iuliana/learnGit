<?php
declare(strict_types=1);


/**
 * Class StrReverse.
 *
 * @author Iulia Todirică <iuliat@dreamlabs.ro>
 */
class StrReverse
{
    
    /**
     * Write a function to reverse a string
     *
     * @param string $str
     *
     * @return string
     */
    public function reverseString(string $str)
    {
        if(strlen($str)===1){
            return $str;
        }
        return $this->reverseString(substr($str, 1, strlen($str))) . substr($str, 0, 1);
    }
}
