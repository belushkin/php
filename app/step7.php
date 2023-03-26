<?php
// Example #1 Pseudo code to demonstrate function uses

// function foo($arg_1, $arg_2, /* ..., */ $arg_n)
// {
//     echo "Example function.\n";
//     return $retval;
// }

// Example 2 Conditional functions

echo "<b>Conditional functions</b><br/>";
$makefoo = true;

/* We can't call foo() from here 
   since it doesn't exist yet,
   but we can call bar() */

bar2();

if ($makefoo) {
    function foo2()
    {
        echo "I don't exist until program execution reaches me.<br/>";
    }
}

/* Now we can safely call foo()
   since $makefoo evaluated to true */

if ($makefoo) foo2();

function bar2()
{
    echo "I exist immediately upon program start.<br/>";
}


// Example #3 Functions within functions
echo "<br/><b>Functions within functions</b><br/>";
function foo3()
{
    function bar3()
    {
        echo "I don't exist until foo() is called.<br/>";
    }
}

/* We can't call bar() yet
   since it doesn't exist. */

foo3();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */

bar3();


// Example #4 Recursive functions
echo "<br/><b>Recursive functions</b><br/>";
function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}
recursion(1);