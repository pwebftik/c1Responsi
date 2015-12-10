<?php
<?php
$t = date("H");
if ($t < "10"){
	echo"Have a good morning!";
}
else if($t < "20") {
	echo "have good day!";
}
else{
	echo "have a good night!";
}
?>