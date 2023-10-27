<?php 

function generateCharactersRandom($number) {
    $randomPsw = '';
    $characters = 'abcdefghijklmnopqrstuvwxyz1234567890!_?+-$%';

    for($i = 0; $i < $number; $i++){
        $randomPsw .= $characters[rand(0, strlen($characters) -1 )];
    }
    return $randomPsw;
}


?>