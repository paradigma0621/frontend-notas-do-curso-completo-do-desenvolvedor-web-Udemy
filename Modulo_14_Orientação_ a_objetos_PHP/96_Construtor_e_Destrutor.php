<!-- (video 231)
---------------------------------------------------------------------------

Método mágico: começa com "__"
Método construtor (__construct) : É chamado automaticamente quando um novo objeto é criado, sendo possível definir informações iniciais necessárias ao objeto. 

Método destrutor (__destruct) : É chamado automaticamente quando um novo objeto é deslocado da memária (ou seja, quando execução é finalizada).

-->


<?php

	class Pessoa {
		private $nome;

		public function correr(){
			echo $this->nome . ' correndo <br />';
		}

		function __construct($parametro_nome) { //pode deixar sem argumento também
			echo 'Construtor iniciado <br />';
			$this->nome = $parametro_nome;
			//echo $this->nome;
			//echo ' <br />';
		}

		function __destruct() { 
			echo 'Objeto removido <br />';
		}
	}

$pessoa = new Pessoa('João Pedro');
$pessoa->correr();

?>
