<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
    </style>
</head>
<body>
<h2>Nhap So</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhập so"/>
    <input type = "submit" id = "submit" value = "Tìm"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["search"];
    $Tr=(int)($num/100);
    $Ch=(int)(($num-100*$Tr)/10);
    $Dv=$num-100*$Tr-10*$Ch;
    $flag = 0;
    $numbers = array(
        "1"=>"one",
        "2"=>"two",
        "3"=>"three",
        "4"=>"four",
        "5"=>"five",
        "6"=>"six",
        "7"=>"seven",
        "8"=>"eight",
        "9"=>"nine",
        "10"=>"ten",
        "11"=>"eleven",
        "12"=>"twelve",

    );
    $arrNum = array(
        "2"=>"twenty",
        "3"=>"thirty",
        "4"=>"forty",
        "5"=>"fifty",
        "6"=>"sixty",
        "7"=>"seventy",
        "8"=>"eighty",
        "9"=>"ninety",
    );
    if ($num < 14) {
        foreach ($numbers as $N=>$description) {
            if($N==$num){
                echo "So: " . $N . ". <br/>Doc la: " . $description;
            }

        }
    }else if($num>20&&$num<100){
        foreach ($arrNum as $N=>$x){
            if($N==$Ch){
                echo "So: " . $num . ". <br/>Doc la: " . $x ." " ;
            }
        }
        foreach ($numbers as $N=>$x){
            if($N==$Dv){
                echo $x ;
            }
        }

    }else if($num>100&&$num<1000){
        foreach ($numbers as $N=>$x){
            if($N==$Tr){
                echo "So: " . $num . ". <br/>Doc la: " .$x." hundred and " ;
            }
        }
        foreach ($arrNum as $N=>$x){
            if($N==$Ch){
                echo $x ." " ;
            }
        }
        foreach ($numbers as $N=>$x){
            if($N==$Dv){
                echo $x ;
            }
        }

    }
}
?>
</body>
</html>