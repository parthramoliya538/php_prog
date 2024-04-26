<?php 
$a=array();
$total_subjects=5;
$cnt=0;
//For studen8s
for($i=1;$i<=8;$i++)
{
	$b=array();
	for($j=1;$j<=$total_subjects;$j++)
	{
		$b['sub'.$j]=rand(0,100);
	}
	$a['student'.$i]=$b;
}
echo '<pre>';
print_r($a);  

?>
// Table
<table border="2">
	<tr>
		<th>Name</th>
		<?php 
for($k=1;$k<=$total_subjects;$k++)
{?>
	<th>sub <?php echo $k; ?></th>
<?php } ?>
	<th>total</th>
	<th>Min</th>
	<th>Max</th>
	<th>Per</th>
	<th>Result</th>
	<th>Grade</th>
	</tr>

	
		<?php
		foreach($a as $k => $v){
		?>
		<tr>
			<td><?php echo $k; ?></td>
			<?php 
			$total=0;
			$Min=$v['sub2']; 
			$Max=$v['sub2'];
			$Per=$total/$total_subjects;
			foreach($v as $marks)
			{
				$total+=$marks;
 
				if($marks<$Min)
				{
					$Min=$marks;
				}
				if($marks>$Max)
				{
					$Max=$marks;
				}
				if($marks<33)
				{
					$cnt++;
				}

				if($cnt==2)
				{
					$Result="ATKT";
				}
				else if($marks>33)
				{
					$Result="Pass";
				}
				else
				{
					$Result="Fail";
				}

				if($Per>70)
				{
					$Grade="Grade A";
				}
				else if($Per>60)
				{
					$Grade="Grade B";
				}
				else if($Per>50)
				{
					$Grade="Grade C";
				}
				else if($Per>33)
				{
					$Grade="Grade D";
				}
				else
				{
					$Grade="-";
				}

			?>
			<td> <?php echo $marks; ?></td>

		<?php } ?>
		<td><?php echo $total; ?></td>
		<td><?php echo $Min; ?></td>
		<td><?php echo $Max; ?></td>
		<td><?php echo $Per; ?></td>
  		<td><?php echo $Result; ?></td>
		<td><?php echo $Grade; ?></td>
		</tr>
	<?php } ?>
	
</table>

 