<?php
$a = "3";
$b = "7";
echo $a + $b;

$array_month = [
    "1月",
    "2月",
    "3月",
    "4月",
    "5月",
    "6月",
    "7月",
    "8月",
    "9月",
    "10月",
    "11月",
    "12月"
    ];
echo $array_month[7];

$hello = "hello,";
$name =  "John";
$world = "'s world!";
echo $hello.$name.$world;

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost


?>

$2018_calendar = {
  "January" => "1月",
  "February" => "2月"、
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" = "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => 10月,
  "November" => "11月",
  "December" => "12月"
};

// 12月を表示する
echo $2018_calendar[December];

間違い箇所
1.10月,　→　"10月"
2."2月"、→　"2月",
3.{ }は[ ]にしなければならない。

<?php
//PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう
// 課題１
$name = "katano";
if($name = "katano") {
  echo "私は katano です";
} 

//課題２
$total = 1;
echo $total;

for($i = 1; $i <= 10000; $i++){
  $total += $i;
}
echo $total;

//課題3
$fruits = array("Pitaya", "Pineapple", "Mango","Avocado","Pomegranate");
foreach($fruits as $fruit){
  echo "要素は" . $fruit;
  echo "\n";
}


$i = 1;
while($i <= 50){
    if($i % 5 ==0){
        echo $i .'<br>';
    }
    $i++;
}

?>