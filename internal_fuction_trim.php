<?php
	header('content-type:text/html;charset=utf-8');


	//一般用于数据采集时，去掉字符串中的空格

	//	ltrim函数  left（左边）
	/*
	*功能：删除字符串开始位置的空格或其他字符串
	*语法：string ltrim(string $str,[string $charlist])
	*说明：charlist 规定从字符串中删除那些字符，如果省略该参数，则移除下列
	*所有的字符
	* \0 NULL  \t 制表符  \r 回车  "" 空格  \n  换行   \x0B 垂直制表符
	**/
	$str="\n\r\t\tABC\t\t";


	echo ltrim($str,"\n");//查看效果，需要查看源文件

	//rtrim函数删除字符串结束的空格或其他字符串
	// trim函数 删除字符串开始和结束位置空格或者其他字符串




