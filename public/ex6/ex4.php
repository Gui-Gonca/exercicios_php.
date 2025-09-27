<?php

    function calcularMedia($nota1,$nota2,$nota3){

        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<p>A média do aluno é: $media</p>";

    }

    calcularMedia();

?>