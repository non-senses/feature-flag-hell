<?php
/**
 * Created by PhpStorm.
 * User: nicolas.andrade
 * Date: 2018-11-08
 * Time: 2:48 PM
 */


/**
 *
 * Challenge:
 *
 * THERE ARE 2 TASKS TO DO IN THIS CODE
 *
 * TASK ONE: Make it so every vowel in the string is replaced by a lowercase x
 *
 *
 * TASK TWO: Make it so when a string ends in a consonant the string is finished with ", right?"
 *
 *
 *
 * GOAL:
 * Make it so the feature flags can be turned on and off, independently, and that the behaviour is still respected.
 *
 *
 *
 *
 *
 *
 * Quick help:
 *
 * I'm doing TASK ONE with the feature flag named ONE, so
 *
 *  >>> runs feature flag ONE on <<<<
 * ONE=1 php index.php
 **
 *  >>> runs feature flag ONE off <<<<
 * ONE=0 php index.php
 * php index.php
 *
 *
 *
 */


include "./stringFormatter.class.php";

$formatter = new StringFormatter();

echo $formatter->format("This is A Funky String");
