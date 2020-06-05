<?php 

/**
 * Creare e modellizzare classi per gestire i prodotti di magazzino
 * - Creare una classe generale e poi creare altre classi che estendono questa classe generale
 * - Eseguire degli output istanziando oggetti delle varie classi
 */

include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/Liquid.php';

$prodotto = new Product('Mattone XYM', 'Mattone di ceramica');
$prodotto_liquido = new Liquid('Vetril', 'Detergente per vetri', 0.375, 'Non pericoloso');

$prodotto -> printDetails();
$prodotto_liquido -> printDetails();



