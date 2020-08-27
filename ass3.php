<!-- พัชรธัญ สุทธิชาติ 60050214-->
<DOCTYPE html>
<html>
<head>
    <title> กิจกรรมที่ 4 </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0" >
    <style>
        table { width:100%}
        table, th,td { 
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td {
            padding: 15px;
            text-align: center; 
        }
        th { 
            background-color: black;
            color: white; 
        }    
    </style>
</head>
<body>
    <p><b> กิจกรรมที่ 4 </b>ให้นักเรียนเขียนโปรแกรมติดเกรด โดยรับค่าคะแนนเข้ามาแล้วคำนวณเกรดโดยใช้คำสั่ง If else ตรวจสอบเงื่อนไข หลายทางเลือก </p>
    <table>
    <tr>
        <th> ช่วงคะแนน </th>
        <th> ผลการเรียน </th>
    </tr> 
    <tr>
        <td> 80 - 100 </td> 
        <td> 4 </td> 
    </tr>
    <tr>
        <td> 70 - 79 </td> 
        <td> 3 </td> 
    </tr>
    <tr>
        <td> 60 - 69 </td> 
        <td> 2 </td> 
    </tr>
    <tr>
        <td> 50 - 59 </td> 
        <td> 1 </td> 
    </tr>
    <tr>
        <td> 0 - 49 </td> 
        <td> 0 </td> 
    </tr>
    </table>
    <br><hr><br>
    <form method = "GET">
        กรุณาป้อนคะแนน :
        <input type ="text" name = "score" > <br><br>
        <input type ="submit" value = "ตรวจสอบ">
        <input type ="reset" value = "ยกเลิก">
    </form>
    <br><hr><br>
</body>
</html>

<?php
    if (isset($_GET['score'])) {
        $get_score = $_GET["score"];
        if ($get_score >= 80) {
            $get_grade = 4;
        }
            elseif ($get_score >= 70 && $get_score <= 79) {
                $get_grade = 3;
            }
            elseif ($get_score >= 60 && $get_score <= 69) {
                $get_grade = 2;
            }
            elseif ($get_score >= 50 && $get_score <= 59) {
                $get_grade = 1;
            }
            elseif ($get_score >= 0 && $get_score <= 49) {
                $get_grade = 0;
            }
            else { 
                echo "<b> คุณกรอกข้อมูลผิด</b> <br>" ;
                $get_grade = 'ERROR'; }
         
        echo "คุณได้คะแนนรวม = " ,$get_score, " ผลการเรียนอยู่ในระดับ " ,$get_grade ;

    } else {
        $get_score ='';
    }
  
?>