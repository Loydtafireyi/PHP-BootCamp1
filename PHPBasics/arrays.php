<?php

// Indexed arrays
$cars = array("Volvo", "BMW", "Toyota");

// Manual index
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

// associative arrays
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// Multi-dimensional arrays
$cars = array(
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

// php sort() function
sort($cars); // sort arrays in ascending order
rsort($cars); // sort arrays in descending order
asort($cars); // sort arrays in ascending order, maintain key association
arsort($cars); // sort arrays in descending order, maintain key association
ksort($cars); // sort arrays in ascending order, maintain index association
krsort($cars); // sort arrays in descending order, maintain index association


