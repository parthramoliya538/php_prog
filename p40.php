<?php 
$n1=1;
$n2=4;
$n=2;
$sum=0;

do
{
	if($n1%$n==0)
	{
		echo '<br>'.$n1;
		$sum+=$n1;
	}
	$n1++;
}while($n1<=$n2);
echo '<br> Sum : '.$sum


 ?>