<?php

$shape = readline("What shape is it: ");


function rectangle($length, $width) {
  return $length * $width;
}

function square($length) {
  return $length * $length;
}

function circle($radius) {
  return M_PI * ($radius * $radius);
}

function regularpolygon($sidelength, $sideamount) {
  return ((($sidelength/2) / tan((360/$sideamount)/2)) * 2) * ($sideamount);
}

"\n";
 if ($shape == "rectangle") {
   echo "Your shape is ". $shape . "\n";
   $length = readline ("What is the length: ");
   $width =  readline ("What is the width: ");
   echo "The area of your rectangle is: " . rectangle($length, $width) . "\n";
} else if ($shape == "square"){
    echo "Your shape is " . $shape . "\n";
    $length = readline ("What is the length: ");
    echo "The area of your square is: " . square($length) . "\n";
} else if ($shape == "circle"){
    echo "Your shape is " . $shape . "\n";
    $radius = readline ("What is the radius: ");
    echo "The area of your circle is: " . circle($radius) . "\n";
} else if ($shape == "regular polygon") {
    echo "Your shape is: " . $shape . "\n";
    $sidelength = readline ("What is the length of one side: ");
    $sideamount = readline ("How many sides are there: ");
    echo "The area of your shape is: " . regularpolygon($sidelength, $sideamount) . "\n";
    echo "\n";
}

?>
