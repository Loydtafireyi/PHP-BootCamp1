<?php

/***
 * PHP Operators
 * 
 * PHP divides the operators in the following groups:
    Arithmetic operators
    Assignment operators
    Comparison operators
    Increment/Decrement operators
    Logical operators
    String operators
    Array operators
    Conditional assignment operators

 */

 // Arithmetic operators
 1+1; // 2 addition
 1-1; // 0 subtraction
 1*1; // 1 multiplication
 1/1; // 1 division
 1%1; // 0  modulus
 1**1; // 1 exponentiation

// PHP Assignment Operators
$x = 1; // The left side of the assignment operator is the variable name assigned to the value of one
$x += 1; // The left side of the assignment operator is the variable name assigned to the value of one plus one
$x -= 1; // The left side of the assignment operator is the variable name assigned to the value of one minus one
$x *= 1; // The left side of the assignment operator is the variable name assigned to the value of one times one
$x /= 1; // The left side of the assignment operator is the variable name assigned to the value of one divided by one
$x %= 1; // The left side of the assignment operator is the variable name assigned to the value of one modulus one
$x **= 1; // The left side of the assignment operator is the variable name assigned to the value of one exponentiated by one

// Comparison operators
1 == 1; // true
1 === 1; // true
1 != 1; // false
1 !== 1; // false
1 < 1; // false
1 > 1; // false
1 <= 1; // true
1 >= 1; // true

// Increment/Decrement operators
$x = 1;
$x++; // Increment $x by one
$x--; // Decrement $x by one

// Logical operators
1 && 1; // true
1 || 1; // true
!1; // false


// String operators
"1" . "1"; // "11"
"1" . 1; // "11"
1 . "1"; // "11"
1 . 1; // "11"

// PHP Conditional Assignment Operators ternary operator
$x = 1;
$x = $x == 1 ? 2 : 1; // $x is now 2
// coalesce operator
$x = $x ?? 1; // $x is now 1


    