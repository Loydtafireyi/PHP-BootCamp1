<?php

/**
 * Constants are like variables except that once they are defined they cannot be changed or undefined.
 * 
 * A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
 * A valid constant name starts with a letter or underscore (no $ sign before the constant name).
 * Note: Unlike variables, constants are automatically global across the entire script.
 * 
 */

 const PI = 3.14159;
 const Num = 5;

 var_dump(PI, Num);

 define('MY_CONSTANT', 'Hello World');
 var_dump(MY_CONSTANT);

 /**
  * Create an Array constant:
  */
  define("cars", [
    "Subaru",
    "Mercedes",
    "Ford"
  ]);
  echo cars[0];