<?php
//php 中输出语句
//echo 只能输出简单类型的数据  
//如果是复杂类型 输出数据类型 不输出值


$IndexArr=array(1,2,3,'a','b','c');
$married=false;
//echo $IndexArr; //Array

//print_r(); 能输出数组的值，还能输出结构
print_r($IndexArr); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => a [4] => b [5] => c )


var_dump($IndexArr); 
// var_dump();可以输出数组的详细信息
  //输出结果如下：
  // array
  // 0 => int 1
  // 1 => int 2
  // 2 => int 3
  // 3 => string 'a' (length=1)
  // 4 => string 'b' (length=1)
  // 5 => string 'c' (length=1)
  
  var_dump($married); // boolean false
?>