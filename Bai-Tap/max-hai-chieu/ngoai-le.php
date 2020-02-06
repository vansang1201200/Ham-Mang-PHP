<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p><input type="number" name="so-nguyebn-thu-1" placeholder="so thu nhat"></p>
        <p><input type="number" name="so-nguyen-thu-2" placeholder="so thu hai"></p>
        <p><input type="submit" value="check" name="submit"></p>
    </form>
    <?php
    function total($a, $b)
    {
        //điều kiện để xác định
        if ($a == 0 && $b == 0 || $b == 0) {
            throw new Exception("Error");
        }
        return $a + $b;
    }
    function hieu($a, $b)
    {
        if ($a == 0 && $b == 0 || $b == 0) {
            throw new Exception("Error");
        }
        return $a - $b;
    }
    function nhan($a, $b)
    {
        if ($a == 0 && $b == 0 || $b == 0) {
            throw new Exception("Error");
        }
        return $a * $b;
    }
    function chia($a, $b){
        if ($a == 0 && $b == 0 || $b == 0) {
            throw new Exception("Error");
        }
        return $a / $b;
    }
    if (isset($_POST['submit'])) {
        $first = $_POST['so-nguyebn-thu-1'];
        $second = $_POST['so-nguyen-thu-2'];
        try {
            echo total($first, $second) .  " la tong " . "</br>";
            echo hieu($first, $second)  . " la hieu " . "</br>";
            echo nhan($first, $second) . " la nhan " . "</br>";
            echo chia($first, $second) . " la thuong " . "</br>";
 } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    ?>
</body>

</html>