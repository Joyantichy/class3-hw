<?php


// // Nafisa get 80% number is ssc exam.What gpa she required?
$number =0;
function result ($number){
    if($number > 80 || $number === 80){
        echo "A+";
    }
    elseif ($number > 70 || $number === 70) {
        echo "A";
    }
     elseif($number >60 || $number === 60 ) {
        echo "A-";
    }
    elseif($number > 50 || $number === 50){
        echo "B";
    }
    elseif($number > 40 || $number === 40){
        echo "c";
    }
    elseif($number > 33){
        echo "d";
    }
    else{
        echo "f";
    }
}
result(60)



?>