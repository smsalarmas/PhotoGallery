<?php
namespace Photo;

/**
 * @internal
 */
final class Galery
{ 
    public $idsrc; 
    public $imagename;

    function __construct($statusCode, $body)
    {
        $this->statusCode = $statusCode;
        $this->body = $body;
    }

    public function Count() {
        echo "llamada a BaseClass::test()\n";
    }

   public function Add() {
       echo "llamada a BaseClass::test()\n";
   }
       
   public function Show() {
       echo "llamada a BaseClass::test()\n";
   }
}
/*
Requerimientos
Cree un programa que podemos usar para agregar imágenes promocionales a nuestros anuncios. Nuestros anuncios
Varían en tamaño y, a veces, podemos incluir una imagen grande o, a veces, podemos incluir
Varias imágenes en una galería paginada dentro del anuncio. Este programa puede ser un programa de línea de comandos,
Una biblioteca o una API.
Expected Input
● Number of images to output
● Image keywords to match as a comma-separated-value, i.e. “blue, flowers, desert”
Expected Output
● Total number of results
● Image URL
● Image Width
● Image Height*/