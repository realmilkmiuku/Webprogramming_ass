<!--พัชรธัญ สุทธิชาติ 60050214-->
<!DOCTYPE html>
<html>
<head>
    <title> Patcharathan Suttichat 60050214 </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1> กิจกรรมที่ 1 เขียนโปรแกรมสร้างฟอร์มรับราคารวมของสินค้า เพื่อคิดส่วนลดให้ลูกค้าโดยมีเงื่อนไข ถ้าซื้อสินค้าครบ 500 บาท ขึ้นไป จะได้รับส่วนลด 5% แล้วแสดงราคารวม ส่วนลด และรวมสุทธิ </h1>
    <form method="GET">
         ระบุราคาสินค้า :
        <input type ="text" name="price" > บาท <br>
        <input type ="submit" value="คำนวณ">
        <input type ="reset" value="ยกเลิก"> 
    </form>
    <hr>
</body>
</html>

<?php
if (isset($_GET['price'])) {
    $get_price  = $_GET["price"];
    $percent = 5/100;
    $sale   = $get_price * $percent;
    $total  = $get_price - $sale;

    echo "" ,$get_price ,"<br>";
    echo "ส่วนลด      : 5% <br>";
    echo "ราคารวมสุทธิ : " ,$total ,"<br>";
} else {
    $get_id = '';
} 
?>

