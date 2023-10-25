<?php

function myTest()

{

$x = 5; // local scope

echo "Variable x inside function is: $x";

}

myTest();

echo "Variable x outside function is: $x";

?>