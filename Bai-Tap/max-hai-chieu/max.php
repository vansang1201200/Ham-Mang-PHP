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
        <p>nhập hàng: <input type="number" name="rows"></p>
        <p>nhập cột: <input type="number" name="cols"></p>
        <!-- hàm ramdum -->
        <p>Từ số: <input type="text" name='first' value='<?php echo isset($first) ? $first : '1'; ?>'></p>
        <p>Đến số: <input type="text" name='last' value='<?php echo isset($last) ? $last : '100'; ?>'></p>
        <input type="submit" name="submit" value="check">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $rows = $_POST['rows'];
        $cols = $_POST['cols'];
        $first = $_POST['first'];
        $last = $_POST['last'];

        $array = [];
        // tìm max
        $max = NULL;
        // tìm vị trí
        $position = NULL;
        // tổng số bằng nhau 
        $total = 0;
        // show và tạp mảng ma trận
        echo '<table>';
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            $array[$i] = array();
            for ($j = 0; $j < $cols; $j++) {
                $number = rand($first, $last);
                array_push($array[$i], $number);
                echo '<td>' . $array[$i][$j] . '</td>';
            }

            echo "</tr>";
        }

        echo "</table>";
        // tìm max
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                if ($max == NULL) {
                    $max = $array[$i][$j];
                } else {
                    if ($max < $array[$i][$j]) {
                        $max = $array[$i][$j];
                    }
                }
            }
        }
        for($i=0 ; $i<$rows ; $i++){
                for($j=0; $j<$rows; $j++){
                   if ($max== $array[$i][$j]){
                    $position = '[' .$i . ',' . $j. ']';
                }
            }
        }
        for($i=0 ; $i<$rows ; $i++){
            for($j=0; $j<$rows; $j++){
               if ($max== $array[$i][$j]){
               $total++;
            }
        }
    }
        
    

        //tìm vị trí && tổng số lớn nhất
        // for($i=0 ; $i<$rows;$i++){
        //     for($j=0; $j<$cols;$j++){
        //         if($max = $array[$i][$j]){
        //             $total++;
        //              $position .= '['.$i.','.$j.']'.',';
        //         }
        //     }
        // }


        // for ($i = 0; $i < $rows; $i++) {
        //     for ($j = 0; $j < $cols; $j++) {
        //         if ($max == $array[$i][$j]) {
        //             $total++;
        //             $position .= '[' . $i . ',' . $j . ']' . ', ';
        //         }
        //     }
        // }
        echo 'Giá trị lớn nhất ' . $max . '<br>';
        echo 'Số lượng' . $total . '<br>';
        echo 'Vị trí số lớn nhất' . $position . '<br>';
    }
    ?>
</body>

</html>