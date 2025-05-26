<?php 

//variable
//function built-in 
//if condition 
/*
$len = strlen($text);
$limit = 10 ;

//echo  "the length of ($text) :" . $len;
if ($len > $limit){
    echo "Out of limit by " . $len-$limit . "char";
}
else {
    echo "reminder" . $limit-$len . "char"; 
}
*/

$text =" black horse";
$output = strpos( $text , 'a' );
if ($output !== false ){
    echo "the char a is exist in ($text)";
}
else {
    echo "the char a is not exist in ($text)";
}










?>