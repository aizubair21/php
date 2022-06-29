<?php

//--------------------- Local Variable -----------------------//
//variable inside the php function known as the local variable. this is scope variable. can access the scope inside the function only. if you try to access outside the function it give you an error.
function testing()
{
    $x = 15; // $x is local variable. it can access only this function scope.
    echo "X is local variable.";
}
testing();

//access X outside. it'll give an error.
// echo ($x); //error undefine variable
