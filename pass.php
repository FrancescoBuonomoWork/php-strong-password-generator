<?php
require './partials/functions.php';
session_start();
// var_dump($_SESSION);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La tua password</title>
</head>
<body>
    <p>la tua password é <?php echo $_SESSION['password'] ?></p>
 

</body>
</html>