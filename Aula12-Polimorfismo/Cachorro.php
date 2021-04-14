<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero {

    public function enterrarOsso() {
        echo "<p>Enterrando osso<p>";
    }

    public function abanarRabo() {
        echo "<p>Abanando o rabo<p>";
    }
    // método sobreposto da classe Mamifero
    public function emitirSom() {
        echo "<p>Au au au</p>";
    }

}