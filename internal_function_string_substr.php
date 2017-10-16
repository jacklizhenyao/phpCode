<?php
	//截取字符串
	$str="javascript";

	echo substr($str, 4), '</br></br>';//输出结果为script

	echo substr($str,0,1),'</br>';//输出结果为j,从j开始，取长度为一的值

	//长度为负数，则倒数 j为0，则t为-1，输出结果t
	echo substr($str, -1),'</br>';
	//从倒数第3位开始，长度为-2，输出结果为i  输出中间的数
	echo substr($str, -3,-2),'</br>';

	echo substr($str, -3,-1),'</br>';//输出结果为ip


	//具体应用 文件格式截取

	$filename="abc.efg.jgp";

	$number=strrpos($filename,'.');

	echo $number,'</br>';

	$filename=substr($filename, 0,7);

	echo $filename;
	
	//