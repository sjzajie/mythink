<?php
//php中的对象(传统的面向对象语言有 java php c#)

//1 画图纸(声明类)
class Car{
	 public $Color;
	 public $Brand;
}
//2组装(实例化)
$Aodi=new Car();
//3喷漆(赋值)
$Aodi->Color="red";
$Aodi->Brand="aodi";

var_dump($Aodi);

// object(Car)[1]
//   public 'Color' => string 'red' (length=3)
//   public 'Brand' => string 'aodi' (length=4)
?>