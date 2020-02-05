<?php


/*
	1 - $c recebe o valor de $a / $c = 10.
	2 - $c recebe o valor de $b / $c = 5.
	3 - $c recebe o valor de $c + $b / $c = 10.
	4 - A uma comparação, se $c = $a. ? serve como um IF, $b é representado por verdadeiro e $a como falso. Como a comparação é verdadeira, $c recebe o valor do verdadeiro($b). Esta linha termina com $c = 5.
	5 - Aqui $c tenta receber o valor de $var, mas como o mesmo não existe, ele recebe 0. Então fica, $c = 0;
	6 - ++ serve como incremento(+1), geralmente usada em laço de repetição. Neste caso é igual declarar que $c = 1;
	7 - Resultado final: o valor de $c é 1.
	8 -

*/

$a = 10;
$b = 5;
$c = 0;

	$c = $a; 
	$c = $b; 
	$c += $b; 
	$c = $c === $a ? $b : $a; 
	$c = $var ?? 0;
	$c++ ;  

	
	 echo "O valor de C é igual a: ". ($c) 

?>