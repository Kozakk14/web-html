<?php
/**
 *Insére un titre d'un certain niveau, suivi d'un paragraphe
  */
  function titlePara(string $title,string $paragraphe, int $level=1){
    return "<h$level>$title</h$level><p>$paragraphe</p>";
    }
/**
 * Affiche n fois le même texte
 */
function repeatText(string $text,int $n){
    for($i=0;$i<$n;$i++){
        echo $text;
    }
}

