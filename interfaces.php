<?php
	
	interface EquipamentoEletronicoInterface{
		public function ligar();
		public function desligar();

	}

	//--------------------------------------------------




	class Geladeira implements  EquipamentoEletronicoInterface {

		public function abrirPorta(){

		}

		public function ligar(){
			echo 'ligar';
		}

		public function desligar(){
			echo 'desligar';
		}

	}


	

	class Tv implements EquipamentoEletronicoInterface {

		public function trocarCanal(){

		}

		public function ligar(){
			echo 'ligar';
		}

		public function desligar(){
			echo 'desligar';
		}

	}


	$x = new Geladeira();

	$y = new Tv();

	

	//---------------------------------------------------------

	interface MamiferoInterface{

		public function respirar();

	}

	interface TerrestreInterface{

		public function andar();
	}

	interface AquaticoInterface {

		public function nadar();
	}

	class Humano implements MamiferoInterface, TerrestreInterface {

		public function andar(){
			echo 'Andar';
		}
		public function respirar(){
			echo 'Respirar';
		}

		public function conversar(){
			echo 'conversar';
		}

	}

	
	class Baleia implements MamiferoInterface, AquaticoInterface{

		public function respirar(){

			echo 'Respirar';
		}

		public function nadar(){

			echo 'Nadar';
		}

		protected function esguichar(){
			echo 'Esguichar';
		}


	}


	//--------------------------------------------------------

	interface AnimalInterface{

		public function comer();

	}

	interface AveInterface extends AnimalInterface{

		public function voar();
	}

	class Papagaio implements AveInterface{

		public function voar(){
			echo 'voar';
		}

		public function comer(){
			echo 'comer';
		}
	}





?>