<?php

function sum($a, $b) {
    return $a + $b;
}

test('sum', function () {
   $result = sum(1, 2);
 
   expect($result)->toBe(3);
});