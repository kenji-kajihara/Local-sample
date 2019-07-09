<?php

/*
1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
*/
function double($a){
  $result = 0;
  $result = 2*$a;
  return $result;
}
echo double(7);
 ?>

 <?php
/*
2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
*/
function f($a,$b){
  $result = 0;
  $result = $a + $b;
  return $result;
}
echo f(4,6);
?>

<?php
/*
3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
*/
$arr = array(1,3,5,7,9);
function b($arr){
  $result = 1;
  $i = 0;
  $i=$arr[$i];
  for($i=0; $i<=4; $i++){
    $result *= $arr[$i];
  }
  return $result;
}
echo b($arr);
 ?>

 <?php
/*
4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
*/

$arr = array(8,6,10,4,2,80);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
foreach($arr as $a){
  if ($a > $max_number){
    $max_number = $a;
  }

}
return $max_number;
}
echo max_array($arr);
  ?>

<?php
/*
5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
strip_tags
array_push
array_merge
time, mktime
date
*/
$str ="<h1>tech</h1>"."<p>boost</p>";
echo strip_tags($str)."\n";

$fruits = array("apple","lemon","orange");
array_push($fruits,"grape","banana");
print_r($fruits);

$animals1 = array("dog","cat");
$animals2 = array("deer","elephant");
$result = array_merge($animals1,$animals2);
print_r($result);

$nextweek = time() + (7*24*60*60);
echo 'Now:     '. date('Y-m-d')."\n";
echo "Next Week". date('Y-m-d', $nextweek)."\n";

echo "MY BIRTHDAY IS : ".date("Y-m-d",mktime(0,0,0,7,12,1994))."\n";
 ?>
