<?php
$n1= fgets(STDIN);
$n2= fgets(STDIN);
$n3= fgets(STDIN);
$media= ($n1+$n2+$n3)/3;

if($media>=6){
    echo "Aprovado!";
}
elseif($media>3 && $media<6){
    echo "Em recuperação!";
}
else{
    echo "Reprovado!";
}
?>