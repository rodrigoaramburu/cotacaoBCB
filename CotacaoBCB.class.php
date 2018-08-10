<?php


class CotacaoBCB{
	
	private $wsdl = 'https://www3.bcb.gov.br/sgspub/JSP/sgsgeral/FachadaWSSGS.wsdl';
	private $client = null;

	private $codigos = [
		'USD' => 1, //dolar
		'GBP'=>21623, // libra,
		'ARS'=>14001, // peso argentino
		'UYU'=>21559, //peso argentino
		'EUR'=>21619, // euro
		'JPY'=>21621, // Iene
	];

	public function __construct(){
		$this->client = new Soapclient($this->wsdl, array('trace' => 1, 'exceptions' => true));
	}

	public function get($codigo){
		$data = $this->client->getUltimoValorVO($this->codigos[ $codigo ]) ;
		
		$cotacao = new Cotacao();
		$cotacao->valor = $data->ultimoValor->valor;
		$cotacao->data = $data->ultimoValor->ano.'-'.sprintf('%02d',$data->ultimoValor->mes).'-'.sprintf('%02d',$data->ultimoValor->dia);
		$cotacao->fonte = $data->fonte;
		$cotacao->nomeAbreviado = $data->nomeAbreviado;
		$cotacao->nomeCompleto = $data->nomeCompleto;
		
		return  $cotacao ;
	}


	public function getBCB($codigo){
		return $this->client->getUltimoValorVO( $codigo) ;
	}

}

class Cotacao{
	public $valor;
	public $data;
	public $fonte;
	public $nomeAbreviado;
	public $nomeCompleto;
}


