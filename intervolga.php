<?php
$a=2703;
$mas=array(0,22,222,32,23,1,20,2,3,45,675,223);
$length=count($mas);
    for($i=0;$i<$length;$i++){
        if(strpos($mas[$i],"2")!==false){ //используется !== , так как '2' находится в нулевой позиции
            $length++;
            for($j=$length-1;$j>$i;$j--){
                $mas[$j]=$mas[$j-1];
            }
            $i++;
            $mas[$i]=$a;
        }
    }
    print_r($mas);
?>
