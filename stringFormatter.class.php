<?php
/**
 * Created by PhpStorm.
 * User: nicolas.andrade
 * Date: 2018-11-08
 * Time: 2:49 PM
 */


$flagOne = (bool) ($_ENV['ONE'] ?? false);

class StringFormatterOriginal
{

    function format ($string){
        return strtoupper($string);
    }

}


class StringFormatterFeatureONE  extends StringFormatterOriginal {

    function format ($string){
        return str_replace(['a','e','i','o','u','A','E','I','O','U'], 'x', $string);
    }
}

if ($flagOne) {
    class StringFormatter extends StringFormatterFeatureONE {}
} else {
    class StringFormatter extends StringFormatterOriginal {}
}
