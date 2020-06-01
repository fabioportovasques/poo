<?php

/*

Exception é uma classe nativa do PHP

*/

class MinhaExceptionCustomizada extends Exception {
	private $erro = '';

	public function __construct($erro){
		$this->erro = $erro;
	}

	public function ExibirMensagemCustomizada() {
		echo '<div style="border :solid 1px #000; padding:15px; background-color: red; color:white;">';
		echo $this->erro;
		echo '</div>';
	}
}
	
//try->tente catch -> pegar (tente pegar o erro);

try{

	throw new MinhaExceptionCustomizada('Esse é um erro de teste'); //throw força um erro;

	//Error(erros internos do PHP);
	//Exception (é mais usada, são desenvolvidas por programadores);
	//customizadas (é mais usada, são desenvolvidas por programadores para lançamento de erros personalizados);
	

}catch(MinhaExceptionCustomizada $e){
	$e->ExibirMensagemCustomizada();
}


?>