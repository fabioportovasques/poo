<?php


	class Pai {

		private $nome = 'Fabio';
		protected $sobrenome = 'Vasques';
		public  $humor = 'Feliz';

		
		public function __get ($attr){
			return $this->$attr;
		}

		public function __set($attr, $value){
			$this->$attr = $value;
		}

		

		private function executarMania(){
			echo 'assobiar';
		}

		protected function responder (){
			echo 'Oi';
		}

		public function executarAcao(){
			$x = rand(1, 10); //funcao rand, gera números aleatórios

			if($x >=1 && $x <= 8) {
				$this->responder(); 
			} else {
				$this->executarMania();
			}

			
			
			
		}

		/*
		public function getNome (){
			return $this->nome;
		}

		public function setNome ($value){
			$this->nome = $value;
		}

		*/


	}


	class Filho extends Pai{


		public function __construct (){
			//Exibir os metodos do objeto
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		/*

		public function getAtributo($attr){
			return  $this->$attr;
		}

		public function setAtributo($attr, $value){
			$this->$attr = $value;
		}
	}

	
		*/

	}


	$filho = new Filho();
	echo '<pre>';
	print_r($filho);
	echo '</pre>';

	$filho->executarAcao();


	//Exibir o s metodos do objeto

	/*get_class_methods Função nativa do PHP Expera receber por parametro um objeto e retorna um array com metodos internos do objeto
	*/

	/*

	echo '<pre>';
	print_r(get_class_methods($filho)); 
	echo '</pre>';


	echo $filho->__get('nome');

	$filho->__set('nome','Jamiltom');
	echo '<br />';
	echo $filho->__get('nome');


	//echo $filho->__get('humor');

	/*

	echo '<br />';
	echo $filho ->getAtributo('humor');
	echo '<br />';

	
	$filho->setAtributo('nome','Teste'); //Acessa o atributo e modifica o valor
	echo '<pre>';
	print_r($filho);
	echo '<pre />';
	echo $filho->getAtributo('nome');



	*
	$pai = new  Pai();
	echo $pai->executarAcao();
	echo $pai ->sobrenome = 'porto';
	echo '<hr />';
	echo $pai->humor;
	*/
	//$pai->setNome('teste');
	//echo $pai->getNome('teste');

		


	



?>