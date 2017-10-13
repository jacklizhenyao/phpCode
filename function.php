<?php 
$a=3;
$b=4;

function change($c)
{
	$c = 5;
	
}
change($a);//只是使用，不会改变引用变量$a
echo $a;

//通过参数，改变变量值，参数 变量使用&取地址符号

function change1(&$c){
	$c=5;
}

change1($a);

echo $a;

//创建对象 设置对象属性
$obj=new stdClass();
$obj->a=5;
//print_r($obj);

//对象作为参数，可以修改对象属性值
/**
		栈内存 存放基本的数值内容 存放对象变量（地址）
		堆内存 存放大型的数据 如通过关键字new 创建的对象

		所以通过通过对象变量可以拿到对象的地址，不用&取值符号
*/
function change2($o){
	$o->b=5;
}

change2($obj);

print_r($obj);

//传递参数的默认值
function test($a=3,$b=4){
		echo $a;
		echo $b;
}

//可以把没有带默认是的参数放在参数的第一位
function test1($b,$a=3){
		echo $a;
		echo $b;
}

	test1(8);

//可变参数列表
	$s=5;
	//var_dump($s,"hello world",[1,3]);

	//func_num_args  可变参数列表 通过以下方法实现
	//func_get_args
function test2(){
		//echo func_num_args();//打印参数列表个数
		//echo $b;
		//echo func_get_args();//只打印Array
		print_r(func_get_args());//打印Array数组中的参数
}	

test2(1,2,3);	//输出结果 3  传入几个参数，计算几个参数

function var_dump2(){
	if(func_num_args()<=0){ //如果参数个数为0的话，不在向下执行
		return;
	}
	$params=func_get_args();//取出参数数组中的元素

	foreach ($params as $param) {
		if(is_integer($param)){
			echo 'int('.$param.')';//. 为连接字符串
			continue;
		}

		if (is_string($param)) {
			echo 'string('.strlen($param).')'.$param.'';
			continue;
		}
	}
}

var_dump2(1,2,3,"2323");


//参数的类型 array、对象、callable

function test3(array $a)  {
		print_r($a);
}

function test4(stdClass $a=NULL)  {	//stdClass 标准类 传递对象 可以为null
		print_r($a);
}


test3(array(10,10));//使用[10,10]报错

test4($obj);

function test5($a)  {	//stdClass 标准类 传递对象 可以为null 当前php版本不支持callable 类型的参数 
		$a();
}
	$obj=new stdClass();

function callBack(){
	echo "hello";
}

test5('callBack');

//可变函数

// 函数名字可以变动 函数名作为变量

function test6(){
	echo "可变函数";
}

$func="test6";

//有两种方式判断是否存在这个函数

//（1）
if(is_callable($func)){//有可能要调用的函数没有在这个文件中，判断是否有这个函数 如果存在，则调用
	$func();
}
//（2）
if(function_exists($func)){
	$func;
}

$func();


//函数的嵌套 

function foo(){
	 $a="wai ceng zhi ";
	//$a="zhi shi yi ge a "
	function bar($a){//使用use关键字，调用外层函数
		echo "zhe shi bar hanshu ";
		//echo $a;//不能使用外层函数
		//echo $a;//X 不可以使用最外层函数的变量
	}
}


foo();//只有调用了foo，才可以调用bar()
bar("this a bar ");

//递归调用 自己调用自己

//n +(n+1)+...+m(n>0,m>n)

function sum($n,$m){
	if($m<=$n){
		return $sn;
	}

	return sum($n,$m-1)+$m;
}

//斐波那契函数

function fbnq($n){


	if($n<=2){
		return 1;
	}

	return fbnq($n-1)+fbnq($n-2);
}


//匿名函数

$say=function($str){
	echo $str;
};//赋值语句，需要分号结束

$say("anonymous");


function test8(){

	$message="test8";

/*	$test88=function($str) use(&$message){//方便外部调用使用
	echo $str;
	echo $message;
};*/

	$test88=function($str,$message){
		echo $str;
		echo $message;
	};
			$test88("this a test88",$message);


}

test8();

 

?>


