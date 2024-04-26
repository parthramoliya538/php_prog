<?php 

// func_num_args():

	// function a() {
	// 	$argnum=func_num_args();
	// 	echo $argnum;
	// }
	// a(40,50,60,70,80);

// func_get_arg():

	// function a()
	// {
	// 	$argnum=func_get_arg(4);
	// 	echo $argnum;
	// }
	// a(40,50,60,70,80);


// func_get_args():

	function a()
	{ 
		$num=func_num_args();
		$array=func_get_args();
		
		for($i=0;$i<$num;$i++)
		{
			echo$array[$i];
			echo ",";
		}
	} a(40,50,60); 

	
 ?>