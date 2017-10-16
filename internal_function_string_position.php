<?php
	//strpos  返回一个字符串第一次出现的位置
	//区分大小写
	$str='javascript';

	$str1='0';

	//echo strpos($str, $str1);// 运算结果为1

	//如果当前字符串没有在另外一个字符串中出现，则返回false

	var_dump(strpos($str, $str1));

	//stripos  不区分大小写


	//strrpos函数
	//将返回一个字符串在另一个字符串中最后一次出现的位置，不区分大小写

	//strripos函数
	//不区分大小写