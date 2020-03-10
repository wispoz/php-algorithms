<?php
function merge ($one, $two) {
    $i = $j = 0;
    $res = [];
    
    while($i<count($one) && $j < count($two)) {
            if($one[$i] < $two[$j] ) {
                $res[] = $one[$i++];
                
            }else {
                 $res[] = $two[$j++];
            }
    }
    $res = array_merge($res,array_slice($one,$i),array_slice($two,$j));
    return $res;
}



function mergeSort (array $array) {
   $count = count($array);
    if ($count <= 1) {
        return $array;
    }
            $left = array_slice($array,0,$count/2);
            $right = array_slice($array,$count/2);
            $i = 0;
            $j = 0;
            $left = mergeSort($left);
            $right= mergeSort($right);
         return merge($left,$right);
}
