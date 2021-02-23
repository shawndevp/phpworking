<?php

//--- for($i = 0; $i < 10; $i = $i + 1){echo $i;}

//----- ovning 1

// function addition(){

// }


//--- ovning 2

// for ($i = 0; $i <10; $i +=2){
//     echo $i;
// }


//---- ovning 4 

// for($i = 0; $i < 20; $i++) {

//     if($i % 2 === 0){

//     echo ($i /2) . ", ";
//     }

// }

//--- ovning 5

// $y = 0;
// while ($y <= 10) {
//     if($y %2 == 0) {
//         echo $y;
//     }
//     $y++;
// }


//--- ovning 6

// do skriver ut 0 medans andra inte gör



//----- ovning 7

//  function sheepMultiplier() {
//      $numberOfSheep = 4;
//      for($monthNumber = 1; $monthNumber >= 12; $monthNumber++ ) {
//          $newNumberOfSheep = $numberOfSheep * 4;
//          echo "There will be $numberOfSheep sheep after $monthNumber month(s)! <br />";
//      }
//  }

//  sheepMultiplier();

//  function mjau($m) {

//     if($m > 0) {
//          for($m; $m >0; $m--)
//          echo "mjau ";
//      }

//      else {
//          echo "😾";
//      }

//  }

//  mjau(3)


//--------- ARRAY -----------------------------------------------

//---- array övning 1 

// $your_array = [23, 45, 54, 12, 77];

// echo $your_array [0];
// echo "<br>";
// echo $your_array [4];

//---- array övning 2






//---- array övning 3

// $best_array = [1,2,3,4,5];

// $count = count ($best_array);

// for($i = 0; $i < $count; $i++){
//     echo $best_array[$i] . "<br>";
// }





//---- övning 4 

//  $best_array = [1,2,3,4];

//  $count = count ($best_array);
//  $total = 1;

//  for($i = 0; $i < $count; $i++){
//     $total = $best_array[$i]  *$total;
// }

// echo $total;



//--- ovning 4 FOREACH

// $best_array = [1,2,3,4];

// $sum = $best_array[0];
// foreach($best_array as $value) {
//     $sum = $sum * $value;
// }

// echo $sum;





//--- övning 5 


// $ok_array = ["fine", "FINE", "good", "what is thisstuff?", "sweet", "i don't even live here"];

// $count = count($ok_array); 

// for ($i = 0; $i <$count; $i++) {
//     if(strlen($ok_array[$i]) <= 5){
//         echo $ok_array[$i] . "<br>";
//     }
// }


//--- ovning 5 FOREACH istället 

// $ok_array = ["fine", "FINE", "good", "what is thisstuff?", "sweet", "i don't even live here"];

// foreach($ok_array as $value) {
//     if(strlen($value) < 6 ) {
//         echo $value . " <br/> ";
//     }
// }



//--- övning 6 


// $worst_array_yet = ["string", true, 42, "another string",54, true, 1];

// $count = count($worst_array_yet);
// $sum = 0;
//  for ($i = 0; $i < $count; $i++) {
//     if(is_string($worst_array_yet[$i])){
//          echo $worst_array_yet[$i] . "<br>";
//      }

//      else { 
//          $sum = $worst_array_yet[$i] + $sum;
//       }

     
//  }

//  echo $sum;


?>