<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 100;

    switch($number){

        case 34:
            echo "it is 34";
            break;
        case 37:
            echo "is it 34";
            break;
        case 35:
            echo "is it 34";
            break;
        case 24:
            echo "is it 24";
            break;

        default :
            echo "we could not find anything";
            break;


    }

    ?>
</body>
</html>