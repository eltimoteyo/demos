<?php 

$app->get("/listaremployees/",function() use($app)
{
  $str = file_get_contents(__DIR__ . '/../employees.json');
	try{
		$employees = json_decode($str, true);
		$var = '';
		$xml = new \SimpleXMLElement('<QueryRQ TransactionId="11" TransactionMode="Synchronous"></QueryRQ>');
		foreach ($employees as $i => $emp) {
			$employee=$xml->addChild('employee');
			$employee->addAttribute('id',(string)$emp["id"]);
			$employee->addChild('name',(string)$emp["name"]);
			$employee->addChild('email',(string)$emp["email"]);
			$employee->addChild('phone',(string)$emp["phone"]);
			$employee->addChild('address',(string)$emp["address"]);
			$employee->addChild('position',(string)$emp["position"]);
			$employee->addChild('salary',(string)$emp["salary"]);
			$skills=$employee->addChild('skills');
			foreach ($emp["skills"] as $key => $value) {
				$skills->addChild('skill',(string)$value["skill"]);
			}
		}
		$xml = $xml->asXML();
		$app->response->headers->set("Content-type","application/xlm");
		$app->response->status(200);
		$app->response->body($xml);
	}catch(PDOException $e)
	{
		echo "Error: ". $e->getMessage();
	}
});

?>