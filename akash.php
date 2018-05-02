<?php

class akash {

    public function add($x, $y) {
        echo 'total is:'($x + $y);
    }

    public function subtract($x, $y) {
        echo 'Subtotal is:' . ($x - $y);
    }

}

$a = new akash();
$a->add(20, 30);
$a->subtract(30, 12);
