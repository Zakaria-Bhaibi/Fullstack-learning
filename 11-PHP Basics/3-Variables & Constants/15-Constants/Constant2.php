<!-- Change the value of a constant -->

<?php
    //Sample 1
    //Define constant
      //  define(name of constant,value of the constant); try always to make it uppercase

use JetBrains\PhpStorm\Language;

define("LANGUAGE","PHP");
        $lang = LANGUAGE;

    echo "this program is written ising $lang <br>";
    echo "this program is written ising LANGUAGE <br>";
    echo "this program is written ising". LANGUAGE. "<br>";

    //Sample 2

    define("LANGUAGE","JAVA");
    echo "this program is written ising". LANGUAGE. "<br>";
    // the constant value doesnt change


