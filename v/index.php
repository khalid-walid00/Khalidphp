<!-- <?php 
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $input = $_POST["input"];

//     $lang = $_POST["lang"];

//     echo $input;
//     if($lang == "PHP"){
//     header("Location: arabic.php");
//     exit();
// }else if($lang == "c#"){
//     header("Location: csharp.php");
//     exit();
// }else if($lang == "js"){
//     header("Location: english.php");
//     exit();
// }
// }


// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
       <input type="text" name="input">
       <select name="lang">
        <option>PHP</option>
        <option>c#</option>
        <option>js</option>
</select>
<button>submit</button>
   </form> 
</body>
</html> -->

<?php
// $price = 100;
// $array =["PHP","c#","js"];
// $disounts =["eg"=>0.15,"sa"=>0.1,"ae"=>0.05];
// foreach($array as $key => $lang){
 

// foreach($disounts as $disount => $value){
//     $total=$price*$value;
//     echo " for $lang $ $disount :$total<br>";
// }
// }


// $array = ["10","20","30","40","50"];
// $additinal = 10;
//   $result = array_map(fn($item)=>$item+10+$additinal,$array);
//   echo "<pre>";
//   print_r($result);
//   echo "<pre>";


// $str ="khalid";

// $str =fn($st) => "hello $str";

// echo $str("khalid");
// echo "<br>";
// echo strlen($str("khalid"));
// for ($i = 0; $i < strlen($str("khalid")); $i++) {
//     echo $str("khalid")[$i] . "<br>";  
//   }
// $kh="haidy khalid walid morad ";
// echo ucfirst("halid");
// echo "<br>";
// echo strtolower("KHALID");
// echo "<br>";
// echo strtoupper("khalid");
// echo "<br>";
// echo ucwords("khalid");
// echo "<br>";
// echo ucwords("khalid |halid","|");
// echo "<br>";
// echo str_repeat("khalid and haidy <br>",8);
// echo "<br>";
// $array = ["khalid","haidy"];
// echo implode(" ",$array);
// echo "<br>";
// print_r( explode(" ",$kh,2));

// // echo str_shuffle("khalid");
// echo (trim("%%khalid&&&&","%&"));
// echo "<br>";
// echo chunk_split("khalid",2,"&");
// echo "<br>";
// print_r (str_split("khalid",2));
// echo "<br>";
// echo strip_tags("<h1>khalid</h1>");
// echo strip_tags("<h1>khalid</h1>","<h1>");
// echo "<br>";
// echo nl2br("hello\n khalid and haidy");
// echo "<br>";
// echo strpos("khalid and haidy","haidy");
// echo "<br>";
// echo substr_count("khalid and haidy","h",0);
// echo "<br>";
// echo parse_str("khalid=haidy&haidy=khalid",$query);
// print_r($query);
// echo "<br>";
// // echo str_pad("khalid",10,"*",STR_PAD_BOTH);
// // echo str_pad("haidy",10,"*",STR_PAD_BOTH);
// echo "<br>";
// echo strtr("khalid and haidy","haidy","khalid");
// echo "<br>";
// echo str_replace(["and","khalid"],["khali","haidy"],"khalid and haidy");
// echo "<br>";
// echo substr_replace("khalid and haidy <br>","2",2,3);
// echo substr_replace("khalid and haidy","@",2,0);
// echo "<br>";
// // echo wordwrap(" khalid and haidy",1,"<br>");
// echo "<br>";
// similar_text("khalidy","haidy",$percent);
// echo $percent;
// echo "<br>";
// echo strstr("khalid and haidy and khalid","haidy");
// echo "<br>";
// echo number_format(1000000.44242,3,".","_");
// echo "<br>";
// $khalid =["khalid","haidy","walid","morad",["khalid","haidy","walid","morad"],true];
// echo "<pre>";
// print_r(array_chunk($khalid,2));
// echo "<pre>";
// $khalidd=["yu"=>"khalid","j"=>"haidy","k"=>"walid","y"=>"morad"];
// print_r(array_change_key_case($khalidd,CASE_UPPER));
// echo "<br>";
// $count = ["k","h","i","l","l","o"];
// print_r (array_count_values($count));
// echo "<br>";
// print_r(array_reverse($khalid,true));
// echo "<br>";
// print_r(array_flip($khalid));
// echo "<br> n";
// print_r(array_keys($khalid,["khalid"]));
// echo "<br>";
// var_dump(array_key_exists("yu",$khalidd));
// echo "<br>";
// var_dump(in_array("khalid",$khalid));

// echo "<pre>";
// $array=["k"=>"khalid","h"=>"haidy","w"=>"walid","m"=>"morad"];
// $k=[20>"khalid",30=>"haidy"];
// $h=[50=>"haidyabdelazez",20=>"khalidwalid"];
// $nums =[1,2,3,4,5,6,7,8,9,10];
// echo "<br>";
// print_r(array_keys($array,"khalid"));
// echo "<br>";
// print_r(array_values($array));

// echo "<br>";
// print_r(array_pad($array,5,"khalidandhaidy"));
// echo "<br>";
// echo array_product($nums);
// echo "<br>";
// echo array_sum($nums);
// echo "<br>";
// echo current($nums);
// echo "<br>";
// echo next($nums);
// echo "<br>";
// echo current($nums);
// echo "<br>";
// echo end($nums);
// echo "<br>";
// echo current($nums);
// echo "<br>";
// echo reset($nums);
// echo "<br>";
// print_r(array_merge($k,$h));
// echo "<br>";
// print_r(array_replace($k,$h));
// echo "<br>";
// print_r( array_rand($array,2));
// echo "<br>";
// shuffle($array);
// print_r($array);
// echo "<br>";
// echo array_shift($array);
// echo array_pop($array);
// array_push($array,"khalidandhaidy");
// array_unshift($array,"khalidandhaidy");
// print_r(array_slice($array,0,2,true));
// print_r(array_splice($array,0,2,"khalid and haidy"));
// print_r(sort($array));
// function array_ma($k,$h){
//   return "hallo $k we $h";
// }

// array_map("array_ma",$k,$h);
// print_r($array);

// echo "<br>";
// $receiptNo = @ $_GET['receipt_no'] | die("no data yet") ;
// $totalAmount = @ $_GET['total_amount'] | die("no data yet") ;

// // قم بطباعة البيانات للتأكد من استقبالها بشكل صحيح
// echo "Receipt No: " . $receiptNo . "<br>";
// echo "Total Amount: " . $totalAmount . "<br>";

// echo "<br>";

// echo "<br>";

// echo "<br>";

// echo "<br>";

// HYPERLINK("http://localhost/Khalidphp/index.php?receipt_no="&[Receipt No.]&"&total_amount="&[Total Amount]&"&amount_Paid="&[Amount Paid]&"&address="&[Address]&"&Shop_Name="&[Shop Name]&"&shop_phone="&[Shop Phone]&"&print="&[Print]&"&time="&[time]&"&date="&[Date]&"&item_name="&select(Sales[Item Name],[Receipt No.]=[_THISROW].[Receipt No.])&"&item_qty="&select(Sales[QTY],[Receipt No.]=[_THISROW].[Receipt No.])&"&item_price="&select(Sales[Unit Price],[Receipt No.]=[_THISROW].[Receipt No.])&"&item_amount="&select(Sales[Amount],[Receipt No.]=[_THISROW].[Receipt No.]), "طباعة سريعة")

// ?>


<?php 
// $number =["1","2","3","4","5","6","7","8","9","0"];
// print_r(array_filter($number,function($number){
//     return $number % 2 != 0;
// }));
// print_r(array_reduce($number,function($number,$number2){
//    return $number + $number2;
// }))

// echo rand(1,9);

?>


<?php

$receiptNo = $_GET['receipt_no'] ?? '';
$totalAmount = $_GET['total_amount'] ?? '';
$amount_Paid = $_GET['amount_Paid'] ?? '';
$address = $_GET['address'] ?? '';
$shopPhone = $_GET['shop_phone'] ?? '';
$print = $_GET['print'] ?? '';
$date = $_GET['date'] ?? '';
$time = $_GET['time'] ?? '';
$Shop_Name = $_GET['Shop_Name'] ?? '';

/////items///
$item_name = $_GET['item_name'] ?? '';
$item_qty = $_GET['item_qty'] ?? '';
$item_price = $_GET['item_price'] ?? '';
$item_amount = $_GET['item_amount'] ?? '';


$array_item_name = explode(",", $item_name);
$array_item_qty = explode(",", $item_qty);
$array_item_price = explode(",", $item_price);
$array_item_amount = explode(",", $item_amount);
$array_item_price = explode(",", $item_price);


?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css.css"/>
</head>
<body>
    <div class="container">
        <div style="padding-top: 40px;display: flex;justify-content: around;">
        <div class="img"></div>
        <div class="id">
            <div style="height: 50%;text-align: center;font-weight: bold;">N°: Facture</div>
            <div style="border-top: 2px solid gray;text-align: center;font-weight: bold;font-size: x-large;"><?php echo $receiptNo ?></div>
        </div>
       
    </div>
    <div class="title"><?php echo strstr($Shop_Name,":",true)?></div>
    <div class="">
        <div><span style="font-weight: bold;margin: 0px 4px;">Address:</span><?php echo $address ?>.</div>
        <div style="margin: 20px 0px;"><span style="font-weight: bold;margin: 0px 4px;">Phone:</span><?php echo $shopPhone ?>.</div>
        <div class="date-container">
            <div><span style="font-weight: bold"></span><?php echo $date ?></div>
            <div><span style="font-weight: bold"></span><?php echo $time ?></div>
        </div>
    </div>
    <div class="items">
      <table style="width: 100%;border-bottom: 2px solid gray;">
        <thead>
            <tr >
            <th >Item</th>
            <th >Qty</th>
            <th >Price</th>
            <th >Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php for($i = 0; $i < count($array_item_name); $i++) :?>
          <tr>
            <td><?php echo $array_item_name[$i] ?></td>
            <td><?php echo $array_item_qty[$i] ?></td>
            <td><?php echo $array_item_price[$i] ?></td>
            <td><?php echo $array_item_amount[$i] ?></td>
          </tr>
          <?php endfor; ?>
        </tbody>
      </table>
      <div style="margin: 20px 0px;">

        <div style="display:flex;justify-content:end;margin-bottom: 10px"><span style="font-weight: bold;">Total Amount:</span><span style="font-size:large;margin:0px 2px" ><?php echo $totalAmount ?></span> DH.</div>
        <div style="display:flex;justify-content:end"><span style="font-weight: bold;">Amount Paid:  </span><span style="font-size:large;margin:0px 2px" ><?php echo $amount_Paid ?></span>  DH.</div>
    
      </div>
    </div>
    </div>
    <script src="./hs.js"></script>
    <script>

         window.print();
    </script>
</body>
</html> 
