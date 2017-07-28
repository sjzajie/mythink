<?php
header("Content-Type:text/html;charset=UTF-8");
//header()方法 是告诉浏览器 你怎么运行我给你的内容
//php中函数用法



//无参函数
// function sayHi(){
// 	echo "你好";
// }
// sayHi();
//有参函数
//如果不传参数的话 会给一个默认值
function sayHi($name='杨幂'){
	echo $name.",奔跑吧，running！";
}
sayHi("迪丽热巴");
?>