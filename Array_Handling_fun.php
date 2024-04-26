<?php 

echo "Array Handling Eunction";
echo "<br>==================";
echo "<br><br><br>";

// 1. count( ):
	$student=array(1,"Ravi","Lathi");
	echo "No of Count Ele:".count($student);

// 2. list( ): 

	$student=array(1,"Ravi","Lathi");
	list($no,$name,$city)=$student;
	echo "<br><br>No = ".$no;
	echo "<br>Name = ".$name;
	echo "<br>City = ".$city;

// 3. is_array():

	$student=array(1,"Ravi","Lathi");
	if(is_array($student))
	echo "<br><br>It is array variable";
	else
	echo "<br><br>Sorry its not an array variable"; 

// 4.  in_array( ):

	$student=array(1,"Ravi","Lathi");
	if(in_array("Rav",$student))
	echo "<br><br>Value is found";
	else
	echo "<br><br>Value is NOT Found";

// 5. current( ):

	$student=array("parth","Raviraj");
	echo"<br><br>" .current($student);

// 6. next( ):

	$student=array("Ravi","Umang");
	echo"<br><br>" .current($student);
	echo"&nbsp" .next($student);

//  7.  prev( ):

	$student=array("Ravi","Umang");
	echo"<br><br>" .next($student);
	echo"&nbsp" .prev($student);

// 8. reset()

	$student=array("Ravi","Umang");
	echo"<br><br>" .next($student);
	echo"&nbsp" .reset($student);

// 9. end() 


	$student=array("Ravi","Umang","Uma");
	echo"<br><br>" .end($student);
	echo"&nbsp" .reset($student);

// 10.  each( ):

	// $stu = array(1,"Monarch");
	// $each = each($stu);
	// print_r($each);

// 11. sort( ):

	$rno=array(2,5,4,3,1);
	sort($rno);
	foreach($rno as $roll)
	echo"<br>" .$roll;

// 12.  rsort( )

	$rno=array(2,5,4,3,1);
	rsort($rno);
	echo "<br>";
	foreach($rno as $roll)
	echo"<br>" .$roll;


// 13.  asort( )

	$rno=array(2,5,4,3,1);
	asort($rno);
	echo "<br>";
	foreach($rno as $roll)
	echo"<br>" .$roll;

// 14. array_merge( )

	$no1=array(1,2,3);
	$no2=array(4,5,6);
	$no=array_merge($no1,$no2);
	echo "<br>";
	foreach($no as $roll)
	echo"<br>" .$roll;

// 15.  array_values( )

	$student=array("Rno"=>1,"nm"=>"Ramesh");
	$onlyval=array_values($student);
	foreach($onlyval as $val)
	echo "<br><br>".$val;

// 16. array_keys( ):

	$student=array("Rno"=>1,"name"=>"Ram");
	$onlykey=array_keys($student);
	foreach($onlykey as $key)
	echo"<br><br>" .$key;

// 17. print_r( )

	$student=array('Rno'=>1,'name'=>'Ram');
	echo "<br><br>";
	print_r($student);

// 18. array_key_exists( )

	$student=array("Rno"=>1,"name"=>"Ram");
	if(array_key_exists("Rno",$student))
	echo "<br><br>Given Key is found in array"; 

// 19. array_reverse( ):

	$sub=array("PHP", "Oracle", "VB.Net");
	echo"<br><br>";
	$revsub=array_reverse($sub);
	print_r($revsub);

// 20. array_push( )

	echo "<br><br>";
	$sub=array("PHP", "Oracle");
	array_push($sub,"VB.Net");
	print_r($sub);

// 21. array_pop( ):

	echo "<br><br>";
	$sub=array("PHP", "Oracle");
	array_pop($sub);
	print_r($sub);

 ?>