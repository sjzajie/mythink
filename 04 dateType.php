<?php
header("Content-Type:text/html;charset=UTF-8");
//PHP变量的数据类型有哪些

//声明php变量

//书写有严格规范 后面必须加分号


//1.字符串(在php中如果是字符创，尽量用单引号)
$name="迪丽热巴";

echo $name;
//2.数字
//整数变量 代表整数
// 浮点型  代表小数
$height=1.65;

$age=18;

echo "<br>";
echo $height;
echo "<br>";
echo $age;
echo "<br>";
//3.布尔值
echo "---------------------";

/*$married=true;
echo "<br>";
echo $married; // true的结果为1
echo "<br>";*/


$married=false;
echo "<br>";
echo $married; //false的结果为空
?>