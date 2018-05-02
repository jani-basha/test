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
            class index{
                public function add($x,$y){
                    echo "Total is:".($x+$y);
                }
            }            
            $object = new index();            
            $object->add(2,3);
        ?>
    </body>
</html>
