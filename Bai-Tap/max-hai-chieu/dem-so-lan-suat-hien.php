<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    aray = [1,2,3,4,5,6,1]
    <form action="" method="POST">
        <input type="number" name="fist" placeholder="so can tim:">
        <input type="submit" name="submit" value="chek">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $fist = $_POST['fist'];

        $aray = [1, 2, 3, 4, 5, 6, 1];
        $cout = 0;
        if ($fist == null || $fist > count($aray)) {
            echo 'error';
        }
         else {         
            for ($i = 0; $i < count($aray); $i++) {
                if ($fist == $aray[$i]) {
                    $cout++;
                }
            }
            echo $cout;
        }
    }
    ?>
</body>

</html>