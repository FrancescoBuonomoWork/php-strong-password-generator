<?php
include './functions.php';

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