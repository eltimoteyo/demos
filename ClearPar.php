<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ChangeString</title>
</head>
<body>
<?php if ($_SERVER['REQUEST_METHOD']=='GET') {?>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		Farenhuey temperture:
		<input type="text" name="fehrenheit"/>
		<br/>
		<input type="submit" value="Convert"/>
	</form>
 <?php }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
 	$fehrenheit=$_POST['fehrenheit'];
 	$arrayStr=str_split($fehrenheit);
 	$strreturn='';
 	$flagini=")";
 	foreach ($arrayStr as $key => $value) {
 			if ($value=="(") {
 				if ($flagini==")") {
 					$strreturn=$strreturn . $value;
 					$flagini=$value;
 				}
 			}elseif ($value==")") {
 				if ($flagini=="(") {
 					$strreturn=$strreturn . $value;
 					$flagini=$value;
 				}
 			}
 	}
 	print($strreturn);
 }else{
 	die("this script only works with GET and POST request.");
 }?>
</body>
</html>