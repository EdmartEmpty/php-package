<?php 

namespace Hexlet\Phpunit\Fill;

function fill(array &$coll, mixed $value, int $start = 0, int $end = null)
{
    $end  = $end ?? count($coll);
    if ($end > count($coll)){
        $end = count($coll);
    }
    
    if ($start > count($coll) - 1){
        return $coll;
    }
   
     for ($i = $start; $i < $end; $i++){
        $coll [$i] = $value;
     }   
    return $coll;
}

// $array =  [1, 2, 3, 4];

// var_dump(fill($array, '*', 4));

// var_dump(fill($array, '*', 0, 2));