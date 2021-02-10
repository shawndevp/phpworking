<?php

# echo "här skriver vi ut från php"; 

// $name = "shawn"; 
// echo "hej jag heter $name";

// $summa1 = 10; 
// $summa2 = 20;


// echo $summa1 + $summa2

/* $siffra = 5;
$siffra++; */

// $x=1;
// if($x==1){
//     echo "x är lika med ett";
// }

// else if ($x==2) {
//     echo "x är lika med två.";
// }

// else {
//     echo "x är varken lika med ett eller två.";
// }

/* for {$i = 1; $i > 10; $i++;
    echo $i; 
} */

// function calcArea($x, $y){
//     return $x * $y;
// }

// function returnDouble($number){
//     return $number * 2; 
// }


// function doubleIteration($start, $end = 20){
//     for($i = $start; $i<= $end; $i++){
//     echo "<br>".returnDouble($i);
// }
// }

// echo doubleIteration(1,20); 

// echo returnDouble(2) . "<br/>";
// echo returnDouble(4) . "<br/>";
// echo returnDouble(6) . "<br/>";
// echo returnDouble(8) . "<br/>";



// $a = -32;
// // $b = 1.8;
 // function convert($farenheit) {​​​​​​​
//  echo $farenheit . " Farenheit is the same as: " . ($farenheit-32)/1.8 . " Celcius";
 // }​​​​​​​
 // convert(20)

//  function convert($farenheit){

//      echo $farenheit . " Farenheit is the same as: " . ($farenheit-32)/1.8 . " Celcius";

// }

//  convert(20)


//  function maxValue($value1, $value2){

//      if ($value1 > $value2){
//          echo "$value1 är det störta värdet";
//      }
//      else if($value2 > $value1) {
//          echo"$value2 är det största värdet";
//      }

//      else {
//          echo "båda talen har samma värde";
//      }

//  }

//  maxValue(1,2)



 function fakultet($x, $y = 1){

  $total = 1;

   for($x; $x > $y; $x--) {
       $product = ($total *= $x);
   }

   echo $product;

  }

  fakultet(6)





?>