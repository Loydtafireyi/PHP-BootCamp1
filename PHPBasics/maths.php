<?php

/**
 * PHP has a set of math functions that allows you to perform 
 * mathematical tasks on numbers.
 */

/**
  * PHP min() and max() Functions
  * php min() and max() functions are used to find the minimum and 
  *maximum value of an array.
    * The min() function returns the lowest value in an array.
    * The max() function returns the highest value in an array.
*/
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo "<br>";
echo(max(0, 150, 30, 20, -8, -200));  // returns 150

/**
 * PHP abs() Function
 * The abs() function returns the absolute value of a number.
 */

echo(abs(-8.7));  // returns 8.7

/**
 * PHP sqrt() Function
 * The sqrt() function returns the square root of a number.
 */

echo(sqrt(64));  // returns 8

/**
 * PHP round() Function
 * The round() function returns the value of a number rounded to the 
 * nearest integer.
 */

echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0

/**
 * Random Numbers
 * The rand() function returns a random number between 0 and 1.
 */

echo(rand());  // returns a random number between 0 and 1

