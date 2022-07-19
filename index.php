<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once('functions.php');
    $colors = ['red', 'green', 'black', 'yellow', 'blue', 'brown'];
    create4Div($colors);

    for ($i = 1; $i < 14; $i++) {
        calendar($i);
    }

    ?>
    <table></table>
</body>
</html>