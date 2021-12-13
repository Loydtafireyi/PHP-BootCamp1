<?php

/**
 * Variables are "containers" for storing information.
 * Variables are also used to pass data to functions.
 * Think of variables as containers for storing data.
 * 
 * Variables are declared using the $ sign followed by the name of the variable.
 * Variables are case sensitive.
 * 
 * Variables can be of any data type.
 * 
 * Variables can be global or local.
 * 
 * Variables can be constant.
 * 
 * Variables can be declared in any order.
 * 
 * Variables can be declared in any scope.
 * 
 */

 /**
  * Rules for PHP variables:
    A variable starts with the $ sign, followed by the name of the variable
    A variable name must start with a letter or underscore
    A variable name cannot start with a number
    A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    Variable names are case sensitive (age, Age and AGE are three different variables)
    Variable names should be meaningful
    Variable names should be descriptive
    Variable names should be short
    Variable names should be unique
    Variable names should not be reserved keywords
  */
  

$who = 'Mark Zuckerberg';
$what = 'Facebook';
$where = 'California';
$when = 'March 14, 2014';
$why = 'Because I want to be popular';

echo "$who is a $what. He was born in $where on $when. He is $why.";