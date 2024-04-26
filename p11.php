<?php 
$a=3;
$b=6;
$c=8;
$d=2;
$e=9;
 if($a>$b)
 {
 	if($a>$c)
 	{
 		if($a>$d)
 		{
 			if($a>$e)
 			{
 				echo'A is max';
 			}else
            {
                echo'E is max';
            }
 		}else
        {
            if($d>$c)
            {
                echo'D is max';
            }else
            {
                echo'C is max';
            }
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
            if($b>$e)
            {
                echo'B is max';
            }else
            {
                echo'E is max';
            }
        }else
        {
            if($d>$c)
            {
                echo'D is max';
            }else
            {
                echo'C is max';
            }
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