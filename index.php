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
 * THERE ARE 3 TASKS TO DO IN THIS CODE
 *
 * TASK ONE: Make it so every vowel in the string is replaced by a lowercase x
 *
 *
 * TASK TWO: Make it so when a string ends in a consonant the string is finished with ", right?"
 *
 * TASK THREE: Make it so each string starts with the number of characters in the string in parenthesis, so for example:
 * (18) this is my example
 *
 * 18 because "this is my example" has 18 characters
 *
 *
 *
 * GOAL:
 * Make it so the feature flags can be turned on and off, independently, and that the behaviour is still respected for each task.
 *
 * Ideally the complexity of the code should NOT increase exponentially.
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
include "./advanced/use_this_only_if_you_are_a_feature_flags_expert_and_you_know_all_the_answers.php";



$formatter = new StringFormatter();

echo $formatter->format("This is A Funky String") ."\n";


echo "And the price would be: $" . PriceFetcher::forString($formatter->format("This is A Funky String"))."\n";
