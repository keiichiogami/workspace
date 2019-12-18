<?php
//1.　引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($integer){
    $doubleInteger = $integer * 2;
    return $doubleInteger;
}
echo double(5);
echo ' ';

//2.　$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function addition($a,$b){
    return $a + $b;
}
echo addition(3,4);
echo ' ';

//3.　$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function multiplication($arr){
    $total = 1;
    // $arr = array(1,3,5,7,9);
    foreach($arr as $ar){
        $total *= $ar;
    }
    return $total;
}

$arr = array(1, 3, 5 ,7, 9);
echo multiplication($arr);
echo ' ';

//4.　【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
        $max_number = $a;
        }
    }
    return $max_number;
}
$abc = array(30,20,100,40);
echo max_array($abc);
echo ' ';
 
// 5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

$text = '<p>テストです</p>';
echo strip_tags($text)."\n";
echo ' ';

$test = array('リンゴ','オレンジ');
array_push($test,'ブドウ','イチゴ');
print_r($test);

$array1 = array(1,2,3);
$array2 = array('リンゴ',10,'バナナ');
$result = array_merge($array1, $array2);
print_r($result);

echo 'UNIXタイムスタンプを表示する '.time()."\n"."\n";

// ------------mktime----------------------------------------
$today = getdate();
$today_month = $today['mon'];
$today_day = $today['mday'];
$today_year = $today['year'];

$timestamp = mktime(0, 0, 0, $today_month, $today_day, $today_year);

print('現在の日時は');
print(date('Y年m月d日', $timestamp));
print('です。'."\n");
//print('タイムスタンプは'.$timestamp.'です。');

print('今日から45日後は');

$today_day += 45;
$timestamp = mktime(0, 0, 0, $today_month, $today_day, $today_year);
print(date('Y年m月d日', $timestamp));
print('です。'."\n"."\n");
//print('タイムスタンプは'.$timestamp.'です。');
// ------------mktime----------------------------------------

date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s") . "\n"; //「2015/03/10 06:00:00」

?>