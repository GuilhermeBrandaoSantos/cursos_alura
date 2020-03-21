<?php


// for ($count=0; $count <= 100 ; $count++) { 
    
//     if ($count % 2 != 0) {
//         echo '<b>'.$count . '</b> Impar <br>';
//     }else {
//         echo $count . ' Par <br>';
//     }
// }

$tabuada_do = 10 ;

for ($i=0; $i <= 10; $i++) { 

    $resultado = $tabuada_do * $i;
    echo $tabuada_do .' x '. $i .' = '. $resultado .'<br>';
}