<?php
class akash{
    public function subtract($x,$y){
        echo 'Subtotal is:'.($x-$y);
    }    
}
$a = new akash();
$a->subtract(30,12);
