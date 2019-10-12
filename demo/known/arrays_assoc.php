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
    <?
        $number = array('juanita', 'maria', 'jose');

        //print_r($number);

        echo $number[0] . "<br>";
        echo "<br>";


        // Associative Array Below

        $names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz' );

        //print_r($names);

        echo $names['first_name'] . " " . $names['Last_Name'];
    ?>
</body>
</html>