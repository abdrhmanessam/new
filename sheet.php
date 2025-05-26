<?php 
// $arrays = ["Indexed Arrays" , "Associative Arrays" , "Multidimensional Arrays"] 

//------------Indexed Arrays
 $employees= [ "ali",  "yasin","ahmed" , "omar"] ;
 echo "employee no 1 :  " . $employees[1] . "<br>*";


//------------Associative Arrays
$staff = [
    "name"=> "ahmed", 
    "age" => "25", 
    "salary" => "2500"
];
echo "staff member ". "<br>" . "name : " . $staff["name"]. "<br>" . "age : " . $staff["age"]. "<br>". "salary:".$staff["salary"];

foreach ($staff as $key => $value) {
    echo "$key"."$value"."<br>";
}

//------------Multidimensional Arrays 
$players = [
    ["name"=> "ahmed", "age" => 25] , 
    ["name"=> "mohamed", "age" => 26] , 
    ["name"=> "samy", "age" => 28] , 
];
foreach ($players as $playercopy)
echo "player : " ; 


//------------Function
function calculatetax($price){
     return $price*0.14 ;
}

echo "price:".calculatetax(100);



//------------file handling 
$file = "data.txt"; 
$content = file_get_contents($file);
echo $content;


//---------------for loop
for ($x=0 ; $x < 5 ; $x++){
    echo "Iteration: $x <br>";
}

//---------------while
$i = 0;
while ($i < 5) {
    echo "Iteration: $i <br>";
    $i++; 
}

//-------------------do while
do {
    echo "Hello<br>";
    $x++;
} while ($x > 5);

//-------------------built in functions
$text = "I love PHP!";
$newText = str_replace("PHP", "programming", $text);
echo $newText;


$text = "Hello, World!";
echo strlen($text); // 13


echo strtoupper($text); // "HELLO, WORLD!"
echo strtolower($text); // "hello, world!"


$array = ["apple", "banana", "orange"];
$text = implode(" - ", $array);

echo $text; // "apple - banana - orange"







?>