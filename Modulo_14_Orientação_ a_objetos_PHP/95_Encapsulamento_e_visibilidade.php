<!--(video 230)
---------------------------------------------------------------------------

Encapsular na programação significa esconder as propriedades contidos no método de uma classse. (Encapsulamento)

-->
<?php

	//Classe mãe ou superclasse
	class Veiculo {

		/*Modificadores:
			public
			private
			protected */

		//Atributos
		public $placa; //= var $placa (var "seco" é sempre public) public $placa= var $placa
		private $cor;
		private $tipo = 'Caminhonete';
		protected $potencia_do_motor='1.0';

		//Métodos
		public function setCor($cor_da_placa) { //estamos encapsulando o atributo cor
			$this->cor = $cor_da_placa;
		}

		public function getCor() { //estamos encapsulando o atributo cor
			return $this->cor;
		}

	}

//-------------------------------------------------------------------------
	class Carro extends Veiculo {
		public function exibirTipo() {
			echo $this->tipo; //GERA ERRO, pois quando definimos um atributo ou método como private, ele só pode ser alterado dentro da própria classe (AP: no video da Udemy gera erro, no meu PC ele simplesmente não mostra o echo na tela, mas não dá erro). Para resolver isso usamos a variavel como tipo protected: não pode ser alterado de modo externo, mas pode ser alterado nas classes filha.
		}

		public function exibirPotencia() {
			echo $this->potencia_do_motor; //Resolve o problema que foi detalhado em exibirTipo() acima.
		}
	}
//-------------------------------------------------------------------------

	$veiculo = new Veiculo();
//-------------------------------------------------------------------------	
	$veiculo->placa = 'JAM1234';
	echo $veiculo->placa;
	
	//$veiculo->cor = 'azul';
	//echo $veiculo->cor;  //GERA ERRO FATAL, pois o atributo private só pode ser alterado (AP:acessado?) dentro da classe
	
	//$veiculo->tipo = 'Caminhonete';
	//echo $veiculo->tipo; //GERA ERRO FATAL, pois não conseguimos acessar uma propriedade tipo protected fora da classe

	echo '<br />';

	$veiculo->setCor('Amarela');
	echo $veiculo->getCor();
//-------------------------------------------------------------------------
		
	$carro = new Carro();
	$carro->exibirTipo(); //GERA ERRO, pois quando definimos um atributo ou método como private, ele só pode ser alterado dentro da própria classe (AP: no video da Udemy gera erro, no meu PC ele simplesmente não mostra o echo na tela, mas não dá erro). Para resolver isso usamos a variavel como tipo protected: não pode ser alterado de modo externo, mas pode ser alterado nas classes filha.

	echo '<br />';

	$carro->exibirPotencia();  //Resolve o problema que foi detalhado em exibirTipo() acima.


//-------------------------------------------------------------------------
?>
 
