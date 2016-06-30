<?php


function calculate($x,$y,$op){
    switch($op){
        case '+':
            return $x+$y;
        case '-':
            return $x-$y;
        case '*':
            return $x*$y;
        case '/':
            return $x/$y;
        default:
            return null;

    }

}

assert(4==calculate(2,2,'+'));
assert(6==calculate(12,6,'-'));
assert(18==calculate(9,2,'*'));
assert(8==calculate(24,3,'/'));