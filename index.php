<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class test{
            public function subtract($x,$y){
                echo 'Value is:'.($x-$y);
            }
        }
        $object = new test();
        $object->subtract(20,15);
        ?>
    </body>
</html>
