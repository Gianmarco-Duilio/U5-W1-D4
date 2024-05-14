<?php
include_once __DIR__ . '/classes/Libri.php';
include_once __DIR__ . '/classes/DVD.php';

$libro1 = new Libri("1984", "George Orwell", 1949);
$libro2 = new Libri("Il Signore degli Anelli", "J.R.R. Tolkien", 1954);
$dvd1 = new DVD("Inception", "Christopher Nolan", 2010);
$dvd2 = new DVD("The Matrix", "Wachowski Sisters", 1999);

$libro1->presta();
$libro2->presta();
$libro1->restituisci();
$dvd1->presta();
$dvd2->presta();
$dvd1->restituisci();

echo "Numero totale di materiali: " . MaterialeBibliotecario::getContatoreMateriali() . "<br>";
echo "Numero totale di libri: " . Libri::contaLibri() . "<br>";
echo "Numero totale di DVD: " . DVD::contaDVD() . "<br>";
