<?php
isset ($_REQUEST['i'])?$i=$_REQUEST['i']:$i="";
echo "
<html>
<head><title>PHP Random Number HW</title></head>
<body>
<form method=post action=hw1.php>
<p>Type a number between 0 and 20
<input type=\"number\" id=\"i\" name=\"i\">
<input type=\"submit\" value=\"Submit\" /></p>
</form>
";

if ($i!=NULL && $i>=0 && $i<=20){
	$x=rand(0,20);
	if ($i>$x){
		echo "Your number $i is higher than $x";
	} elseif ($i==$x){
		echo "Your number $i and $x are equal";
	} else {
		echo "Your number $i is lower than $x";
	}
} else {
	echo "Type a valid number";
}
echo "</body></html>";
?>
