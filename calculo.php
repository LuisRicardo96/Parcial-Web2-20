/* <UNIME>
* <BSI>
* <PROGAMAÇÃO PARA WEB 2>
* <PABLO ROXO>
* <LUIS RICARDO SOUSA BORGES>
*/

<?php

$vmaior = $_GET["n1"];
$vmenor = $_GET["n2"];
$resultado = 0;

for($i= 0; $i <= $vmaior; $i++){
	$div = $i % $vmenor;
	if($div ==0)
	{
		echo $i."<br>";
	}

}

?>
