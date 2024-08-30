<?php
// union type


declare(strict_types=1);

function sum(int|float $val1,int|float $val2) : int|float{
    return $val1 + $val2;

}
echo sum(20.22, 40);