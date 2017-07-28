<?php
header("Content-Type:text/html;charset=UTF-8");
//php中的数组

//索引数组：因为索引数组的索引都是数字
$IndexArr=array(1,2,3,"a","b","c");


//关联数组
$linkArr=$arrayName = array('baidu' =>'192.168.11.4','tencent'=>'192.168.22.1' );

//for循环遍历索引数组

//获取数组的长度 count(数组名称)
//$length=count($IndexArr);
//echo $length;

for ($i=0; $i <count($IndexArr) ; $i++) { 
	echo $IndexArr[$i]." <br>";
}

//foreach 遍历索引数组
//语法：
// foreach(数组名称 as 索引数组的键(自定义变量)=>索引数组的值(自定义变量)){
// }
foreach($IndexArr as $k =>$val){
	echo $k.'---'.$val.'<br>';
}

//foreach遍历关联数组
foreach ($linkArr as $key => $value) {
	echo $key.'-----'.$value.'<br>';
}
?>