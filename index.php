<?php
define ("GEN_NUM",10);
function myprint( $arr)
{
	 $str=' '; 
	for ($i=0;$i< sizeof($arr);$i++){
		 $str .= ($arr[$i].' ');
	}
	$str .= '';
	print ''.$str;
	echo '\r\n';
}
function b_sort ( $arr){
	for ($i=0;$i< sizeof($arr);$i++){
			for($j=0;$j+1< sizeof($arr)-$i;$j++){
				if ($arr[$j] > $arr[$j+1]){
					$tmp = $arr[$j];
					$arr[$j] =$arr[$j+1];
					$arr[$j+1]=$tmp;
				}
				
			}
	}
	myprint ($arr);
}

for ($i=0;$i<GEN_NUM;$i++) {
	$num[$i] =  mt_rand(0,100);
}
myprint ($num);
b_sort ($num);


?>
