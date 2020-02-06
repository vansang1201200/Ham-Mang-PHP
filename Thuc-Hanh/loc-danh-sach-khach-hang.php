<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        From: <input type="text" name="From" size="30px" placeholder="yyy-mm-dd">
        To: <input type="text" name="To" size="30px" placeholder="yyy-mm-dd">
        <input type="submit" id="submit" value="Seach">
    </form>
    <?php
    $customer_list = array(
        "0" => array("name" => "levansang", "day_of_birth" => "12/1/2000", "address" => "thua_thien_hue", "images" => "https://zicxa.com/hinh-anh/wp-content/uploads/2019/07/T%E1%BB%95ng-h%E1%BB%A3p-h%C3%ACnh-%E1%BA%A3nh-g%C3%A1i-xinh-d%E1%BB%85-th%C6%B0%C6%A1ng-cute-nh%E1%BA%A5t-1.jpg"),
        "1" => array("name" => "ledangkhoi", "day_of_birth" => "11-5-1996", "address" => "cho_ben_ngu", "images" => "https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiimM3c-rbnAhWExosBHbZTBrIQjRx6BAgBEAQ&url=%2Furl%3Fsa%3Di%26source%3Dimages%26cd%3D%26ved%3D2ahUKEwiij_OJ-rbnAhX5xosBHV79AhUQjRx6BAgBEAQ%26url%3Dhttps%253A%252F%252Fthuthuatnhanh.com%252Fanh-girl-xinh-toc-ngan%252F%26psig%3DAOvVaw0JyhlbwHGhYp4SoXS1JNDk%26ust%3D1580873287554670&psig=AOvVaw0JyhlbwHGhYp4SoXS1JNDk&ust=1580873287554670"),
        "2" => array("name" => "nguyen_tien", "day_of_birth" => "12-2-1996", "address" => "thanh_hoa", "images" => "https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjB5um5-7bnAhWOMd4KHQEGDkQQjRx6BAgBEAQ&url=https%3A%2F%2Fpt-br.facebook.com%2Fhaivl.com%2Fphotos%2Fchuy%25C3%25AAn-m%25E1%25BB%25A5c-cmt-%25E1%25BA%25A3nh-g%25C3%25A1i-xinh-b%25E1%25BA%25AFt-%25C4%2591%25E1%25BA%25A7u-v%25E1%25BA%25A3nh-ch%25C3%25A2u-ho%25C3%25A0ng-l%25C3%25AA%2F2263594803688967%2F&psig=AOvVaw0JyhlbwHGhYp4SoXS1JNDk&ust=1580873287554670")

    );
    function searchByDate($customers,$from_date,$to_date) {
        if(empty($from_date) && empty($to_date)){
           return $customers;
        }
        $filtered_customer = [];
        foreach($customers as $customer){
            if(!empty($from_date) && (strtotime($customer['day-of-birth']) < strtotime($from_date)))
            continue;
            if(!empty($to_date) && (strtotime($customer['day-of-birth']) < strtotime($to_date)))
            continue;
            $filtered_customer[] = $customer;
        }
        return $filtered_customers;
    }
    $from_date = NULL;
    $to_date = NULL;
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $from_date = $_POST["From"];
        $to_date = $_POST["To"];
    }
    $filtered_customers = searchByDate($customer_list, $from_date, $to_date);
    
  ?>   
  <table border="0">
  <caption><h2>Danh sách khách hàng</h2></caption>
  <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Ngày sinh</th>
    <th>Địa chỉ</th>
    <th>Ảnh</th>
  </tr>
  <?php if(count($filtered_customers) === 0):?>
    <tr>
        <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
    </tr>
  <?php endif; ?>
  <?php foreach($filtered_customers as $index => $customer):?>
  <tr>
  <td><?php echo $index + 1; ?></td>
  <td><?php echo $customer['name'];?></td>
  <td><?php echo $customer['day_of_birth'];?></td>
  <td><?php echo $customer['address'];?></td>
  <td><div class="profile"><img src="<?php echo $customer['profile'];?>"></div></td>
  </tr>
  <?php endforeach; ?>

  </table>
</body>
</html>