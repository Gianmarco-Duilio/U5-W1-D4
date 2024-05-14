<?php
include_once __DIR__ . '/MaterialeBibliotecario.php';

class Libri extends MaterialeBibliotecario
{
    private static $contatoreLibri = 0;
    public $autore;
    public $titolo;
    public $anno;

    public function __construct($titolo, $anno, $autore)
    {
        parent::__construct();

        $this->autore = $autore;
        $this->anno = $anno;
        $this->titolo = $titolo;
        self::$contatoreLibri++;
    }

    public static function contaLibri()
    {
        return self::$contatoreLibri;
    }

    public function presta()
    {
        echo "Il libro '{$this->titolo}' è stato prestato.<br>";
    }

    public function restituisci()
    {
        echo "Il libro '{$this->titolo}' è stato restituito.<br>";
    }
}
