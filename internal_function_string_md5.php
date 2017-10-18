<?php
	//md5 加密字符串函数
	$str1='mooc';
	echo md5($str1),'</br>';
	// 存储到数据库 27533b7d39f9e6acc2180cf33cfed0e8
//用户输入 mooc---》MD5（'mooc'）-->27533b7d39f9e6acc2180cf33cfed0e8

	//随机打乱字符串
	echo str_shuffle($str1),'</br>';

	//分割字符串

	$str='A|B|C|D';
	$arr=explode('|', $str);

	//print_r($arr,'</br>');//输出结果

	//implode 将一维数组转化为字符串
	$arr2=array('tom','john','rose');
	$str2=implode(',',$arr2);//输出结果 tom,john,rose 
	echo $str2,'</br>';