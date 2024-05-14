<?php
include_once __DIR__ . '/../interface/Prestito.php';

abstract class MaterialeBibliotecario implements Prestito
{

    protected static $contatoreMateriali = 0;

    function __construct()
    {
        self::$contatoreMateriali++;
    }
    public static function getContatoreMateriali()
    {
        return self::$contatoreMateriali;
    }

    abstract  public function presta();
    abstract public function restituisci();
}
