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
    $first = [];
    $second =[];
    $third =[];
    for($i= 0 ; $i<10;$i++){
        $number1= rand(1,100);
        array_push($first,$number1);
    }
    for($j=0 ; $j<10; $j++){
        $number2= rand(1,100);
        array_push($second,$number2);
    }
    for($i=0; $i<count($first);$i++){
        array_push($third,$first[$i]);
    }
    for($j=0; $j<count($second);$j++){
        array_push($third,$second[$j]);
    }
    echo "mang so nhat gom 10 phan tu la: </br>";
    foreach($first as $value){
        echo $value . ',' ; 
    }
    echo "</br> mang thu hai gom 10 phan tu la: </br>";
    foreach($second as $value){
        echo $value . ',';
    }
    echo "</br> mang thu ba la </br>";
    foreach($third as $value){
        echo $value . ',' ;
    }

    
    ?>
</body>
</html>