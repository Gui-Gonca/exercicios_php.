<?php

    function parimpar($numero = 7){
        if ($numero % 2 == 0){
            echo "<p>numero par</p>";
        }
        else{
            echo "numero impar";
        }
    }

    parimpar();

?>