<!-- Maths Functions: -->

<?php 

	echo "Maths Function <br> ";
	echo "==============";

// abs():
	echo "<br> abs = ".abs(-65); 
	echo "<br> abs = ".abs(-42.5);

// ceil( )
	echo "<br> ceil = ".ceil(5.7); 
	echo "<br> ceil = ".ceil(-2.2);

// floor( )
	echo "<br> floor = ".floor(5.7);

// round( )
	echo "<br> round = ".round(5.7565,2); 
	echo "<br> round = ".round(2.2222,3);

// fmod( )
	echo "<br> fomd = ".fmod(5.75,2.25); 
	echo "<br> fomd = ".fmod(4.5,1.5);

//  min( )
	echo "<br> min = ".min(3,55,1,9);

// max( )
	echo "<br> max = ".max(3,55,1,9);

// pow( )
	echo "<br> pow = ".pow(3,2);

// sqrt( )
	echo "<br> sqrt = ".sqrt(16);

// rand( )
	echo"<br> rand = ". rand(1,100);

// bindec( )
	echo"<br> bindec = ".bindec("110110");

//  octdec( )
	echo "<br> octdec = ".octdec("54"); 

// hexdec( )
	echo "<br> hexdec = ".hexdec("A7");

// decbin( )
	 echo "<br> decbin = ".decbin("54");

//  decoct( )
	  echo "<br> decoct = ".decoct("44");

// dechex( )
	  echo "<br> dechex = ".dechex("167");


 ?>