<?php

/**
 * while loop
 */

$x = 1;

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

// do while loop
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

//While loop checks the condition first and then executes the 
//statement(s), whereas do while loop will execute the statement(s) 
//at least once, then the condition is checked. ... While loop 
//statement(s) is executed zero times if the condition is false 
//whereas do while statement is executed at least once

/**
 * for loop
 * The for loop - Loops through a block of code a specified number 
 * of times.
 * 
 * syntax:
 * for (initialization; condition; increment) {
 *     statement(s);
 * }
 * 
 * parameters:
 * 1. initialization - The initialization parameter is used to set
 * the variable before the loop starts.
 * 2. condition - The condition parameter is used to determine when
 * the loop should stop executing.
 * 3. increment - The increment parameter is used to increment the
 * variable after each loop iteration.
 * 
 */ 
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

/**
 * foreach loop
 * The foreach loop - Loops through each array element or each 
 * object property.
 * 
 * syntax:
 * foreach ($array as $value) {
 *     statement(s);
 * }
 * 
 * parameters:
 * 1. array - The array parameter is used to loop through the 
 * array elements.
 * 2. value - The value parameter is used to assign each array 
 * element to a variable.
 * 
 */
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

