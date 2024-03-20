<?php 

namespace App\Helper;

class Helper {

    /**
     * Format salary
     * 
     * @param string $salary
     * @return string Formatted Salary
     */
    public static function slugify ($string)
    {   
        $string = utf8_encode($string);
        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $string = preg_replace('/[^a-z0-9- ]/i', '', $string);
        $string = str_replace(' ', '-', $string);
        $string = trim($string, '-');
        $string = strtolower($string);
        
        if (empty($string)) {
            return 'n-a';
        }

        return $string;
    }

    /**
     * Format price
     * 
     * @param string $price
     * @return string Formatted Price
     */
    public static function formatNumber($price) {
        return number_format(floatval($price)); 
    }
}