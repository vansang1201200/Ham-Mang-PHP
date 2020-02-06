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
 $array = [];
 for ($i=0 ;$i < 10 ; $i++) {
     $num = rand(1,100);
     array_push($array,$num);
 }

 foreach($array as $value){
     echo $value .',';
 }
 $min = $array[0];
 for ($i=0;$i<count($array); $i++) {
    if($min>$array[$i]) {
        $min=$array[$i];
    }
 }
echo '<br>'."số nhỏ nhất là".$min;
?>
</body>
</html>