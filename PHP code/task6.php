<?php

function search ($search) {

   $array = [2,28,12,88,36,8,56,98,48,56];

   for ($i=0; $i<sizeof($array); $i++)
   {
       if($array[$i]==$search){
           echo "Number= " . $search. "<br> the number was found in the array";
           return 0;
       }
   } 

   echo "Number= " . $search. "<br> the number was not found in the array";
}

search (16);

?>