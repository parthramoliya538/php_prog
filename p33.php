<?php 
for($i=1;$i<=5;$i++)
{
	echo'<br>';
	for($j=$i;$j<=5;$j++)
	{
		echo'&nbsp&nbsp';
	}
	for($j=$i;$j>=1;$j--)
	{
		echo $j; 
	}
}

 ?>