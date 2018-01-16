<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //Part 1

    //Define array
    $animals = array('panda', 'alpaca', 'boa');

    /*foreach ($animals as $key => $val) {
        echo "$val";
        echo "<br>";
    }
    */

    //Sort array

    $animals = sortArray($animals);


    //Function to sort
    function sortArray($array){

        if(!is_array($array)){
            echo 'This array is not an array';
            return $array;
        }
        else {
            sort($array);
            foreach ($array as $key => $val) {
                echo "$val";
            }
            return $array;
        }

    }

    //Add animal to array

    echo "<br>";
    echo "adding goat to array";
    echo "<br>";

    $animals = addToArray($animals, 'goat');


    function addToArray($array, $animal){

        if(empty(preg_grep("/$animal/i", $array))){
            array_push($array, $animal);
            return $array;
        }
        else {
            return $array;
        }

    }

    echo "<br>";
    foreach ($animals as $key => $val) {
        echo "$val ";
    }
    echo "<br>";

    echo "<br>";
    echo "adding Boa to array";
    echo "<br>";

    $animals = addToArray($animals, 'Boa');

    echo "<br>";
    foreach ($animals as $key => $val) {
        echo "$val ";
    }
    echo "<br>";

    //Part 2

    $cupcakes = array('grasshopper' => 'The Grasshopper', 'maple' => 'Whisky Maple Bacon',
                        'carrot' => 'Carrot Walnut', 'caramel' => 'Salted Caramel Cupcake',
                        'velvet' => 'Red Velvet', 'lemon' => 'Lemon Drop', 'tiramisu' => 'Tiramisu');



    echo "<br>";
    foreach ($cupcakes as $key => $val) {
        echo "<input type=\"checkbox\" name=\"flavors[]\" value=\"$key\">$val<br>";
    }