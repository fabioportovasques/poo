<?php

	
	try{


		//lógica onde possa ocorrer um potencial erro
		echo '<h3>***try***</h3>';

		//$sql = 'sql * FROM clientes';
		//msql_query($sql); //Erro

		if (!file_exists('require_arquivo_a.php')){ //file_exists função havalia se o arquivo existe ou não
			throw new Exception('O arquivo em questão deveria estar disponível as' . date('d/m/y H:i:s') . 'horas, porém não estava. Vamos seguir mesmo assim!');
			
		} 


	}catch(Error $e ) {

			echo '<h3>***catch Error***</h3>';
			echo '<p style="color:red">' . $e . '</p>';
			//armazenando o erro no BD

	} catch(Exception $e){

		echo '<h3>***catch Exception***</h3>';
		echo '<p style="color:blue">' . $e . '</p>';
		//armazenando o erro no BD

	}finally {

			echo '<h3>***finally***</h3>';
	}

	//tenha uma lógica



?>