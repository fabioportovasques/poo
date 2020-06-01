<?php

	namespace A;

	class Cliente implements CadastroInterface{

		public $nome = 'Fábio';

		public function __construct(){

			echo '<pre>';
			print_r(get_class_methods($this)); //Função Nativa do PHP ->Obtém o nome da classe do dado object.
			echo '</pre>';

		}

		public function __get($attr){
			return $this->$attr;
		}

		public function salvar(){
			echo 'salvando';
		}

	}

	interface CadastroInterface{

		public function salvar();
	}

	
	namespace B;

	class Cliente implements CadastroInterface{

		public $nome = 'Jamilton';

		public function __construct(){

			echo '<pre>';
			print_r(get_class_methods($this)); //Função Nativa do PHP ->Obtém o nome da classe do dado object.
			echo '</pre>';

		}

		public function __get($attr){
			return $this->$attr;
		}

		public function remover(){
			echo 'Removendo';
		}

	}

	interface CadastroInterface{
		public function remover();
	}

	//-------------------------------------------

	$c =  new \A\Cliente(); //Acessa o namespace A
	echo '<pre>';
		print_r($c);
		echo $c->__get('nome');
	echo '</pre>';


?>