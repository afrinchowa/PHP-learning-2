<?php
// mixed type

declare(strict_types=1);
function sum(mixed $param1 ,mixed $param2) :mixed{
    return $param1+$param2;
}
echo sum(20.54,98234);
?>