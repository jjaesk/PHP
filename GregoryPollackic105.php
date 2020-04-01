<?php

 /** PHP MIDTerm
 *  Student  : Gregory Pollack
 *  Student# : 17GP159BIM
 *  Docent   : Fabian Lewis
 */ 

 // Declareer variabelen, function mb_strrev en array.

 $arr = array("a" => "y","y" => "a","g" => "d","d" => "g","t" => "k","k" => "t"); 
 $word = "Hallo World! Nice to meet you."; 

 function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
 

 // Print het resultaat naar het scherm
 echo mb_strrev(strtr($word,$arr)); 



?>