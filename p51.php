<?php 
$a=array(10,20,30,40,50);
$sum=0;
print_r($a);
echo "<br>";

foreach($a as $k => $v)
{
	echo $k.'='.$v.'<br>';
	$sum+=$v;
}
echo '<br> Sum : '.$sum;



 ?>