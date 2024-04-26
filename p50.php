<?php 
$a=array(10,20,30,40,50);
$sum=0;
print_r($a);
echo '<br>';
for($i=0;$i<sizeof($a);$i++)
{
	echo '<br>'.$a[$i];
	$sum+=$a[$i];
}
echo '<br> Sum : '.$sum;


 ?>