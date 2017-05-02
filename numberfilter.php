<?php

?><!-- This function takes a single input, called listOfNums, which will be an Array
numbers. The last line of the function to run must return an Array of the
numbers from listOfNums, except those that are 10 or greater.

All of your code should go inside this function's { and } braces. -->

<?php 

function numberFilterer(){
    // $our_numbers = array('30, 5, 9, 10, 11' => );
    
    // there is a starting list
    $our_numbers = array(30, 5, 9, 10, 11);
    // filter out numbers that are 10 or greater
        // move through the list
        for ($x = 0; $x <= count($our_numbers); $x++) {
            // evaluate if each number is < 10
        if ($x = <=10);{
            $newArray[$key]= $value;
        else ($x = >10);      
    unset($array[$key]);
        // php - conditionals
            $our_numbers[$x]
            // if the number is less than 10, collect it in a new list/array
            // think about where this empty array should be defined
        } 
        
    // return the new list
    return ();
}

}
// change the function so that the value of the array is not hard coded within the function, but passed into the function as an argument.
?>

<!-- Below, you'll find the code that checks for correctness of your work.

Do feel free to read it. It can help you get a clearer understanding of
what your function should do.

BUT DO NOT MODIFY THE BELOW CODE AT ALL. -->

<?php

$testInput1 = array(30, 5, 9, 10, 11);
$result1    = numberFilterer(testInput1);

$testInput2 = array(0, 10, 10, 9, 9, 8);
$result2    = numberFilterer(testInput2);

$expected1 = array(5, 9);
$expected2 = array(0,8,9,9);

if (implode(", ", $result1) === implode(", ", $expected1)){
    echo("Test #1 Passed!");
}
else {
    echo("Test #1 Failed!");
    echo("Tried with [30, 5, 9, 10, 11]");
    echo("Expected to get: 5, 9");
    echo("Instead, got: " + (implode(", ", $result1));
}

echo("\nMoving onto Test #2...\n");

if (implode(", ", $result2) === implode(", ", $expected2)){
    echo("Test #2 Passed!");
}
else {
    echo("Test #2 Failed!");
    echo("Tried with [0, 10, 10, 9, 9, 8]");
    echo("Expected to get: 0, 8, 9, 9");
    echo("Instead, got: " + implode(", ", $result2));
}

?>