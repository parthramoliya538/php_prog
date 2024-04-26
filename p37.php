<?php 
for($i=1;$i<=5;$i++)
{
	echo'<br>';
	for($j=6-$i;$j>=1;$j--)
	{
		echo'&nbsp&nbsp';
	}
	for($j=1;$j<=$i;$j++)
	{
		echo $j; 
	}
	for($k=$j-2;$k>=1;$k--)
	{
		echo $k; 
	}
}
for($i=4;$i>=1;$i--)
{
	echo'<br>';
	for($j=6-$i;$j>=1;$j--)
	{
		echo'&nbsp&nbsp';
	}
	for($j=1;$j<=$i;$j++)
	{
		echo $j; 
	}
	for($k=$j-2;$k>=1;$k--)
	{
		echo $k; 
	}
}

 ?>