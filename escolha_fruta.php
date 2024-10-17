<?php

	$fruta = $_POST['fruta'];
	$esc = "Você escolheu a fruta ";

	switch ($fruta) {
		case '1':
			echo "$esc abacaxi";
			break;
		case '2':
			echo "$esc banana";
			break;
		case '3':
			echo "$esc morango";
			break;
		case '4':
			echo "$esc maracujá";
			break;
		case '5':
			echo "$esc pera";
			break;

		default:
			echo "Erro"		;	
			break;
	}

 ?>