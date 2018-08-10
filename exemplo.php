<?php

// Mostra erros
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('default_socket_timeout', 300);

include 'CotacaoBCB.class.php';


$cotacao = new \CotacaoBCB();

echo '<pre>';

$usd = $cotacao->get("USD") ;

echo '### Nome Completo: ' . $usd->nomeCompleto ."\n";
echo '### Nome Abreviado: ' . $usd->nomeAbreviado ."\n";
echo '### Fonte: ' . $usd->fonte ."\n";
echo '### Data: ' . $usd->data . "\n";
echo '### Valor: ' . $usd->valor. "\n\n";

$eur = $cotacao->get("EUR") ;

echo '### Nome Completo: ' . $eur->nomeCompleto ."\n";
echo '### Nome Abreviado: ' . $eur->nomeAbreviado ."\n";
echo '### Fonte: ' . $eur->fonte ."\n";
echo '### Data: ' . $eur->data . "\n";
echo '### Valor: ' . $eur->valor. "\n\n";

$uyu = $cotacao->get("UYU") ;

echo '### Nome Completo: ' . $uyu->nomeCompleto ."\n";
echo '### Nome Abreviado: ' . $uyu->nomeAbreviado ."\n";
echo '### Fonte: ' . $uyu->fonte ."\n";
echo '### Data: ' . $uyu->data . "\n";
echo '### Valor: ' . $uyu->valor. "\n\n";


$jpy = $cotacao->get("JPY") ;

echo '### Nome Completo: ' . $jpy->nomeCompleto ."\n";
echo '### Nome Abreviado: ' . $jpy->nomeAbreviado ."\n";
echo '### Fonte: ' . $jpy->fonte ."\n";
echo '### Data: ' . $jpy->data . "\n";
echo '### Valor: ' . $jpy->valor. "\n\n";


$gbp = $cotacao->get("GBP") ;

echo '### Nome Completo: ' . $gbp->nomeCompleto ."\n";
echo '### Nome Abreviado: ' . $gbp->nomeAbreviado ."\n";
echo '### Fonte: ' . $gbp->fonte ."\n";
echo '### Data: ' . $gbp->data . "\n";
echo '### Valor: ' . $gbp->valor. "\n\n";

$ars = $cotacao->get("ARS") ;

echo '### Nome Completo: ' . $ars->nomeCompleto ."\n";
echo '### Nome Abreviado: ' . $ars->nomeAbreviado ."\n";
echo '### Fonte: ' . $ars->fonte ."\n";
echo '### Data: ' . $ars->data . "\n";
echo '### Valor: ' . $ars->valor. "\n\n";





echo '<pre>';