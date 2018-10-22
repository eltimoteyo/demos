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
 	$abc=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
 	$fehrenheit=$_POST['fehrenheit'];
 	$arrayStr=str_split($fehrenheit);
 	$strreturn='';
 	foreach ($arrayStr as $key => $value) {
 		$abcPos=array_search($value, $abc);
 		$newVal=$value;
 		if ($abcPos) {
 			if ($abcPos<26) {
 				$newVal=$abc[$abcPos+1];
 			}else{
 				$newVal=$abc[0];
 			}
 		}
 		$strreturn=$strreturn . $newVal;
 	}
 	print($strreturn);
 }else{
 	die("this script only works with GET and POST request.");
 }?>
</body>
</html>