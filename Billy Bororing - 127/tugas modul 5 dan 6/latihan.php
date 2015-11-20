<!DOCTYPE html>
<html>
<head>
	<title></title>	
<body>
<?php
echo "Hello world". "<br>";
$x= 5 /* +15 */ + 5;
echo $x .  "<br>";
$color = " red " ;	
echo "my car is" . $color. "<br>";
echo "my house is" . $color. "<br>";
echo "my boat is" . $color. "<br>";
$txt= "ftikom";
echo "I'am $txt" . "<br>";
$x=5;
$y=4;
echo $x + $y. "<br>";

function writeMsg(){
	echo "Hello World" ."<br>";
}
writeMsg();
function familyname($fname) {
	echo "$fname ftik". "<br>";

}
familyname("susi");
familyname("agus");
familyname("dian");


?>
</body>
</html>

