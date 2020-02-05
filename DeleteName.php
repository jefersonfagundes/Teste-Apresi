<?php

$nomes = ["João", "Tiago", "Mateus", "Carlos", "Marcos"];
print_r($nomes);
echo "<br> <br>";

$pesquisa = array_search("Mateus", $nomes);
echo $pesquisa;
echo "<br> <br>";

	if($pesquisa == 2){ //Pode fazer um exemplo usando o número 5 para cair no Else.
		unset($nomes[2]);
		print_r($nomes);
	}
	else {
		echo "<p> Nome não encontrado </p>";
	}

?>