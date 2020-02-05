 <?php
	
	$num = 16; //Basta modificar o valor da variável para que o cálculo seja feito.
	function calculaDobro($num){

		$dobro;

		$dobro = $num * 2;
		return $dobro;

	}

	echo "O dobro de ".$num. " é: ". calculaDobro($num);
?>