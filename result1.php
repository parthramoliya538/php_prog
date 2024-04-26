<?php 

    $student=array();
    for ($i=1; $i <=5; $i++) { 
        $sub=array();
        for ($j=0; $j <5 ; $j++) { 
            $sub['sub'.$j]=rand(0,100);
        }
        $student['student'.$i]=$sub;
    }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>STUDENT RESULT</title>
 </head>
 <body>
        <table border="1">
            <th>No.</th>
            <th>Name</th>
            <th>Sub1</th>
            <th>Sub2</th>
            <th>Sub3</th>
            <th>Sub4</th>
            <th>Sub5</th>
            <th>Total</th>
            <th>Avg</th>
            <th>Min</th>
            <th>Max</th>
            <th>Result</th>
            <th>Grade</th>
            <?php $id=1;
            foreach ($student as $student_name => $value) { 
                $total=0;
                $min=101;
                $max=0;
                $cnt=0;
                $color=''; // initialize color variable
            ?>
            	
<?php 
                    foreach ($value as $marks) { 
                        $total += $marks;
                        if ($min > $marks) {
                            $min = $marks;
                        }
                        if ($max < $marks) {
                            $max = $marks;
                        }
                        if ($marks <= 35) {
                            $cnt += 1;
                        }
                    }
                    if ($cnt >= 3) {
                        $result = "fail";
                    } elseif ($cnt >= 1) {
                        $result = "ATKT";
                    } else {
                        $result = "pass";
                    }

                    if (($total / 5) >= 90) {
                        $avg = "A+";
                    } elseif (($total / 5) >= 80) {
                        $avg = "A";
                    } elseif (($total / 5) >= 70) {
                        $avg = "B";
                    } elseif (($total / 5) >= 60) {
                        $avg = "C";

                    } elseif (($total / 5) >= 35) {
                        $avg = "D";
                    } else {
                        $avg = "---";
                    }

                    if($result == "pass") {
                        $color = "green";
                    } else if($result == "fail") {
                        $color = "red";
                    } else {
                        $color = "blue";
                    }
                ?>
            
            <tr width="4%"  style="background-color:<?php echo $color;?>">
            
                <td> <?php  echo $id; ?></td>
                <td><?php  echo $student_name; ?></td>
                
                <td><?php echo $value['sub0']; ?></td>
                <td><?php echo $value['sub1']; ?></td>
                <td><?php echo $value['sub2']; ?></td>
                <td><?php echo $value['sub3']; ?></td>
                <td><?php echo $value['sub4']; ?></td>
                <td><?php echo $total; ?></td>
                <td><?php echo ceil($total / 5); ?></td>
                <td><?php echo $min; ?></td>
                <td><?php echo $max; ?></td>
                <td><?php echo $result; ?></td>
                <td><?php echo $avg; ?></td>
            </tr>
            <?php $id++; }?>
        </table>
 
 </body>
 </html>
