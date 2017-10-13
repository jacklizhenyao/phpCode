<?php 
$num=10;//全局变量


//方法 

function sum($x){
	$sum=0;//局部动态变量 在函数体内声明的变量，在函数体外无法访问
	for ($i=$x; $i<=100 ; $i++) { 
		$sum+=$i;
	}
	echo $sum;
}
sum(3);

//函数的返回
function test($name){

	global $num;//使用global 告诉编译器可以调用全局变量，不使用报错 必须是全局变量
	$num=12;
	
	static $a=12;//局部静态变量，每次调用函数不会释放这个变量
	$a+=1;
	echo $a;
	echo $num;
	return $name;
}
//方法被执行
$result=test("lizhen"); 
echo $result;
test("lizhen");
test("lizhen");