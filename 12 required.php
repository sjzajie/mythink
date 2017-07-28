<?php
header("Content-Type:text/html;charset=UTF-8");
$linkArr=array("张三","李四","laodaun","yoyo");

for ($i=0; $i < count($linkArr); $i++) { 
	echo "<li> <a herf='javascript:;'>".$linkArr[$i]."</a></li>";
}

?>