<?php

 $nota1 = rand(1, 10);
 $nota2 = rand(1, 10);
 $nota3 = rand(1, 10);
 $media = ($nota1 + $nota2 + $nota3)/3;

 echo("Nota 1: {$nota1} </br>");
 echo("Nota 2: {$nota2} </br>");
 echo("Nota 3: {$nota3} </br>");
 

 if($media > 6){
    echo ("O Aluno recebeu a nota ").number_format($media, 1).(" e foi APROVADO!!!");
 }else{
   echo ("O Aluno recebeu a nota ").number_format($media, 1).(" e foi REPROVADO!!!");
 }


 
 ?>