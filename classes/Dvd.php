<?php
include_once __DIR__ . '/MaterialeBibliotecario.php';


class DVD extends MaterialeBibliotecario
{
    private static $contatoreDVD = 0;
    private $titolo;
    private $regista;
    private $annoPubblicazione;

    public function __construct($titolo, $regista, $annoPubblicazione)
    {
        parent::__construct();
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->annoPubblicazione = $annoPubblicazione;
        self::$contatoreDVD++;
    }

    public static function contaDVD()
    {
        return self::$contatoreDVD;
    }

    public function presta()
    {
        echo "Il DVD '{$this->titolo}' è stato prestato.<br>";
    }

    public function restituisci()
    {
        echo "Il DVD '{$this->titolo}' è stato restituito.<br>";
    }
}
