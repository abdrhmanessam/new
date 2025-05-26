<?php 

//arrays  index - associative - multi-d
//loops for -while - dowhile - foreach 
//function


$text = "black horse!!";
$len = strlen($text) ;
$limit = 10; 
$out = $len - $limit ; 

echo "length of ($text)   = $len <br>";
 

if ($len > $limit){
    echo " out of limit ($out)"   ;
}
else {
    echo "reminder" . $limit - $len ; 
}

strlen($text) ;

$search = strpos($text, 'a');
if ($search !== false){
    echo "the char a is inside"
}
else{
    echo "the char a is outside"
}

?>