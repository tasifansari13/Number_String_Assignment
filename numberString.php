<?php
$multiArray = [
    'Linio' => [3],
    'IT' => [5],
    'Linianos' => [3,5],
];
for($i = 1; $i <= 100; $i++){
    $number = $i;
    foreach ($multiArray as $key => $multiArrays) {
        $string = '';
        foreach($multiArrays as $value){
            if( (count($multiArrays) == 1 && $i % $value == 0 && $i % array_product($multiArray['Linianos']) != 0) || (count($multiArrays) == 2 && $i % array_product($multiArray['Linianos']) == 0) ) {
                $number = '';
                $string = $key;
            }
        }
        echo $string. '';
    }
    echo $number . ' ';
}
