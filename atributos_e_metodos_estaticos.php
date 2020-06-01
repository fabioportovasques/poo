<?php


	class Exemplo{

		public static $atributo1 = 'Eu sou um atributo estático';
		public $atributo2 = 'Eu sou um atributo normal';



		public static function metodo1(){
			echo 'Eu sou um metodo estático';
		}


		public function metodo2(){
			echo 'eu sou um metodo normal';
		}
	}



	//$x = new Exemplo(); =>Quando usamos atributos e metodos estáticos não precisa estanciar o objeto, segue abaixo:

	echo Exemplo::$atributo1;
	echo '<br />';
	Exemplo::metodo1(); //:Significa resolução de escopo
	

?>