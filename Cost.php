<html>

	<head>
	<title></title>
	</head>

	<body>
			<table border='1' cellspacing='0'>
				<tr>
					<th width=250>Name</th>
					<th width=80>Qty</th>
					<th width=100>Unit price</th>
					<th width=100>Total price</th>
				</tr>

			<?php
			$total = 0;
			
			
			$meals = array(
						array("hamburgers","Chocolate","Cola"),
						array(2,1,1),
						array(4.95,1.95,85)
			);

			for($a=0;$a<3;$a++) {
					$name = $meals[0][$a];
					$qty = $meals[1][$a];
					if($meals[2][$a] ==85 ){
						$unit_price = number_format( $meals[2][$a]/100, 2);
					}else{
						$unit_price = number_format( $meals[2][$a], 2);
					}
					
					$total_price = number_format( $qty * $unit_price, 2);
					$total += $total_price;
					echo("<tr>");
					echo("<td>$name</td>");
					echo("<td>$qty</td>");
					echo("<td>$$unit_price</td>");
					echo("<td>$$total_price</td>");
					echo("</tr>");
			}	
			echo("<tr>");
			echo("<td colspan='3'>Sub total</td>");
			echo("<td>$" . number_format($total,2) . "</td>");
			echo("</tr>");
			echo("<tr>");
			echo("<td colspan='3'>Sales Tax Rate</td>");
			echo("<td>$" . number_format(($total*7.5)/100,2) . "</td>");
			echo("</tr>");
			echo("<tr>");
			echo("<td colspan='3'>Pre_Tax Tip</td>");
			echo("<td>$" . number_format(($total*16)/100,2) . "</td>");
			echo("</tr>");
			echo("<tr>");
			echo("<td colspan='3'><b>TOTAL</b></td>");
			echo("<td><b>$" . number_format(((($total*(7.5+16))/100)+$total),2) . "</b></td>");
			echo("</tr>");
			?>
			</table>
		</div>
	</body>

</html