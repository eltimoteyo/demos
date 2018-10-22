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
		<input type="text" name="numcollection"/>
		<br/>
		<input type="submit" value="Convert"/>
	</form>
 <?php }elseif ($_SERVER['REQUEST_METHOD']=='POST') {
 	$numcollection=$_POST['numcollection'];
 	$arrayStr=explode(",", $numcollection);
 	$ini=$arrayStr[0];
 	$fin=$arrayStr[count($arrayStr)-1];
 	$for=$fin-$ini;
 	$strCollection='[';
 	for ($i=0; $i <= $for; $i++) { 
 		$num=  $ini + $i;
 		$strCollection=$strCollection . $num;
 		if ($i < $for) {
 			$strCollection=$strCollection . ',';
 		}
 	}
 	$strCollection=$strCollection . ']';
 	//for ($i=0; $i <= $for ; $i++) { 
 	//	$strCollection=$strCollection . $ini+$i . ',';
 	//}
 	//$strCollection=$strCollection . ']';
 	//$strreturn='';
 	//foreach ($arrayStr as $key => $value) {
 		//$abcPos=array_search($value, $abc);
 		//$newVal=$value;
 		//if ($abcPos) {
 			//if ($abcPos<26) {
 			//	$newVal=$abc[$abcPos+1];
 			//}else{
 			//	$newVal=$abc[0];
 			//}
 		//}
 		//$strreturn=$strreturn . $newVal;
 	//}
 	print($strCollection);
 }else{
 	die("this script only works with GET and POST request.");
 }?>
</body>
</html>