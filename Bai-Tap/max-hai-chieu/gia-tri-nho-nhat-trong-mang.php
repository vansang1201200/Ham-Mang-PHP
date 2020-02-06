<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $fist = [];  
    for ($i = 0; $i < 7; $i++) {
        $number = rand(1, 100);
        array_push($fist, $number);
    }
    //tim min
     $min = $fist[0];
    for ($i = 0; $i < count($fist); $i++) {
        if ($min > $fist[$i]) {
            $min = $fist[$i];
        }
    }
    
    echo "Mang co cac phan tu la : ";
    foreach ($fist as $value) {
        echo $value . ',';
    }
    echo "</br> so phan tu nho nhat la </br>";
    echo $min;



    ?>
</body>

</html>