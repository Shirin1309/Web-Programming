<html>
<head>
	
</head>
<body>
	<center>
		<h1>BILL</h1>
		<form action='' method='POST'>
			Name:<input type=text name=name placeholder="Enter Name" required="">
			<textarea name="add" required=""> Address:</textarea>
			PH NO:<input type="number" name="num">
			<table border=1><tr><th>Item:</th><th>QTY</th><th>Price</th></tr>
				<tr><td><input type="text" name="item"></td><td><input type="number" name="qty"></td><td><input type="number" name="price"></td></tr>
				<tr><td><input type="text" name="item"></td><td><input type="number" name="qty"></td><td><input type="number" name="price"></td></tr>
			</table>
			<input type="submit" name="go" value="set">
		</form>
	</center>
</body>
</html>

<?php

if(isset($_POST['go']))
{
	$n=$_POST['name'];
	$a=$_POST['add'];
	$ph=$_POST['num'];
	$it=$_POST['item'];
	$q=$_POST['qty'];
	$p=$_POST['price'];
   $arr=array(array("Rice","Chapatti","Tea","Coffee","Chillie Chicken"),
	    array(2,10,4,2,4), array(150,100,40,30,200));
		echo '<br>Name:'.$n.'<br>Address:'.$a.'<br>PHNo:'.$ph.'<br><table border=1><tr><th>ITEM</th><th>QTY</th><th>Price</th></tr><tr><td>'.$it.'</td><td>'.$q.'</td><td>'.$p.'</td></tr>' ;
	$tot=0;
		for($a=0;$a<5;$a++) {
			$item1 = $arr[0][$a];
			$qty1 = $arr[1][$a];
			$pri = $arr[2][$a];
			$tot += $pri;
			echo("<tr>");
			echo("<td>$item1</td>");
			echo("<td>$qty1</td>");
			echo("<td>$pri</td>");
			echo("</tr>");
	}
	echo '<tr><td colspan=2>Total</td><td>'.$tot.'</td></tr>';
	echo "</table>";
	
}

?>
