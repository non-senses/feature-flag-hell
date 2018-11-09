<?php
/**
 * Created by PhpStorm.
 * User: nicolas.andrade
 * Date: 2018-11-09
 * Time: 11:54 AM
 */


class Price {
    public $price;
    public $currencyId;

    public function __construct($price, $currencyId) {
        $this->price = (float) $price;
        $this->currencyId = (int) $currencyId;
    }

    public function __toString()
    {
        return "{$this->price} in currency {$this->currencyId}";
    }


}


class PriceFetcher {
    static function forString($string){
        // Similarly to API (https://github.com/Groupe-Atallah/SSENSE-API/blob/fcf7300eef797a62b8cb781f129fa930943482ff/src/be/models/entities/ShoppingBag.php#L256)
        // this function might return an array or an object, depending on who knows what...

        // Don't forget the challenge is to implement feature flags in a codebase which was not well designed, so this kind of things
        // might (and certainly will) happen


        $someStrangeCondition = rand(0,10) > 5;

        $price = floor((int) str_replace('abcdef', '', strtolower(md5($string)))) / 400;

        if ($someStrangeCondition) {
            // You might receive an array...
            return [
                'price' => $price, 'currencyId' => 5
            ];
        }

        // Or you might get an instance of Price
        return new Price($price, 5);

    }


}
