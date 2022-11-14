<?php
    echo "<table>";
    $variable = 1;
    $space = "";
        for ($r =1; $r <= 100; $r++){
            echo'<tr>';
	    if($r == 1){
		echo '<td>' .$space.'</td>';
	    }
	    if($r != 1) {
               echo '<td>' .$variable.'</td>';
	    }
            for ($c = 1; $c <= 100; $c++) {   
                echo '<td>' .$c*$r.'</td>';
            }
	    if ($r == 1) {
		echo'<tr>';
		echo '<td>' .$variable.'</td>';
		for ($d = 1; $d <= 100; $d++) {     
                echo '<td>' .$d*$r.'</td>';
                }
	    }
            $variable += 1;     
           echo '</tr>';
        } 
    echo"</table>";
    ?>