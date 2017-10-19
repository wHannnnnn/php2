<?php 
function sum(){
printf("%d %s %d %s %d",1,"+",2,"=",1+2);
}

sum();
echo "<br/>";

function sum2($num1,$num2){
	printf("%d %s %d %s %d",$num1,"+",$num2,"=",$num1+$num2);
}
sum2(2,4);
echo "<br/>";


function sum3 ($num3,$num4){
return $num3+$num4;
}

$ss=sum3(1,3);
echo $ss."<br/>";
echo sum3(1,3);
echo "<br/>";


$num=111;
function fn (){
	global $num;
	echo $num;
}
function fn1 (){
	echo $GLOBALS["num"];
}
echo $num;
echo "<br/>";
fn();
echo "<br/>";
fn1();
echo "<br/>";


function func() {
    static $num = 1;  // 只会执行一次

    echo $num . "<br />\n";

    $num++;
}


func();
// 此时 $num 的值是 2
func();
// 此时 $num 的值是 3
func();

// echo $num;

?>
