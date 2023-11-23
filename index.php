<?php
$lenght_pass = $_GET['lenght_pass'] ?? 0;
var_dump($lenght_pass);

var_dump(generatePass($lenght_pass));
function generatePass($lenght){
    (int)$lenght;
    $alphabet = 'abcdefghijkmnlopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $new_pass = [];
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i=0; $i < $lenght;$i++){
        $n = rand(0, $alphaLength);
        $new_pass[] = $alphabet[$n];
    };
    return implode($new_pass); //turn the array into a string

};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>
<body>
    

    <form action="" method="GET">
        <input type="number" name="lenght_pass">
        <input type="submit" value="invio">
    </form>
    <p><?php echo generatePass($lenght_pass) ?></p>
</body>
</html>