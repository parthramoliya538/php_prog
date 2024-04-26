<?php 
$a=10;
$b=13;
$c=15;
$d=20;
if($a>$b)
{
	if($a>$c)
	{
		if($a>$d)
		{
			echo'A is max';
		}else
		{
			echo'D is max';
		}
	}else
	{
		if($c>$d)
		{
			echo'C is max';
		}else
		{
			echo'D is max';
		}
	}
}else
{
	if($b>$c)
	{
		if($b>$d)
		{
			echo'B is max';
		}else
		{
			echo'D is max';
		}
	}else
	{
		if($c>$d)
		{
			echo'C is max';
		}else
		{
			echo'D is max';
		}
	}
}

 ?>