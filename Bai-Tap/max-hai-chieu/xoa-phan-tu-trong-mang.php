<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    array = [4, 5, 6, 7, 8, 9]
    <form action="" method="POST">
        <input type="number" name="find" placeholder="vị trí cần xóa :">
        <input type="submit" name="submit" value="chek">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $find = $_POST['find'];
        $array = [4, 5, 6, 7, 8, 9];

        if($find >= count($array) || $find == null || $find < 0){
            echo 'error';
            } else {
                array_splice($array, $find, 1);
                foreach ($array as $value) {
                    echo $value . ',';
                }
            }
        }
    

    ?>
</body>

</html>