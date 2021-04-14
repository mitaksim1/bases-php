<?php

require_once 'Lobo.php';

class Cachorro extends Lobo {
    public function emitirSom()
    {
        echo "<p>Au! Au! Au!</p>";
    }

    public function reagirFrase($frase) {
        if ($frase == "<p>Toma comida</p>" || $frase == "<p>Ola</p>") {
            echo "<p>Abanar e latir</p>";
        }
        else {
            echo "Rosnar";
        }
    }

    public function reagirHora($hora, $min) {
        if ($hora < 12) {
            echo "<p>Abanar</p>";
        }
        elseif ($hora > 18) {
            echo "<p>Ignorar</p>";
        }
        else {
            echo "<p>Abanar e latir</p>";
        }
    }

    public function reagirDono($dono) {
        if ($dono) {
            echo "<p>Abanar</p>";
        }
        else {
            echo "<p>Rosnar e latir</p>";
        }
    }

    public function reagirIdadePeso($idade, $peso) {
        // se ele tem menos de 5 anos
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar</p>";
            } else {
                echo "Latir";
            }
         } 
         // se ele nao tiver menos de 5 anos
         else {
                if ($peso < 10) {
                    echo "<p>Rosnar</p>";
                } else {
                    echo "<p>Ignorar</p>";
                }
            }
        }
    }