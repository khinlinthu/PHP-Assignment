<!DOCTYPE html>
<html>
<head>
	<title>Chess Board</title>
</head>
<body>
	<table border="1" cellspacing="0px" cellpadding="20px" width="50%" align="center">
		<?php

      		for($row=1;$row<=8;$row++)
	  		{
          		echo "<tr>";
         	for($col=1;$col<=8;$col++){
         		if ($row %2 == 0){
         			if($col%2==0){
          			echo "<td bgcolor=#FFF width=30px height=30px></td>";
          			}else{
          			echo "<td bgcolor=#000 width=30px height=30px></td>";
         			}
         		}else{
         			if($col%2==0){
          			echo "<td bgcolor=#000 width=30px height=30px></td>";
          			}else{
          			echo "<td bgcolor=#FFF width=30px height=30px></td>";
         		}
         		}
          		
          	}
         	 	echo "</tr>";
    		}
        ?>
	</table>

</body>
</html>