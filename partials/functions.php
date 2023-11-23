<?php 


// var_dump($lenght_pass);

// var_dump(generatePass($lenght_pass));
function generatePass($lenght){
    (int)$lenght; // int mi permette di trasformare una stringa in numero 
    $alphabet = 'abcdefghijkmnlopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $new_pass = [];
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i=0; $i < $lenght;$i++){
        $n = rand(0, $alphaLength);
        $new_pass[] = $alphabet[$n];
    };
    return implode($new_pass); //turn the array into a string

}