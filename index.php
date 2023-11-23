<?php
include './functions.php';
session_start();

// var_dump($_GET);

// controllo che esista la chiave lenght_pass nell array $_GET 
if(array_key_exists('lenght_pass',$_GET)){
    $lenght_pass = $_GET['lenght_pass'] ?? 0;
    // aggiungo al elemento $_SESSION  la chiave password a cui assegno il valore generato dalla mia funzione 
    $_SESSION['password'] = generatePass($lenght_pass);
    // rendirizzo ad un altra pagina ovvero pass.php
    header('Location: '. 'pass.php');
}
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
</body>
</html>