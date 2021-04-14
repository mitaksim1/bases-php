<?php

require_once 'Reptil.php';

class Tartaruga extends Reptil {
    // método sobreposto da classe Reptil
    public function locomover() {
        echo "<p>Andando bem devagar</p>";
    }
}