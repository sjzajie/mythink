<?php
header("Content-Type:text/html;charset=UTF-8");
//php中的条件语句

$married=false;
switch ($married) {
	case true:
		echo "祝你幸福";
		break;
	case false:
		echo "我喜欢你，在一起吧！";
		break;
	default:
		echo "你是个好人";
		break;
}


?>