<?php

/**
 * Dump and die function based on the example from Laracasts.
 * Displays the contents of the variable passed in an easy-to-read
 * format then exits the program
 *
 * @param   Mixed  $value  Any variable of mixed data type
 *
 * @return  Nothing          
 */
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    exit();
}
