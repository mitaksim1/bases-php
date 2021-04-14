<?php

// Caracteristica de métodos abstratos : eles soa declarados, mas nao implementados
// Eles serao implementados no momento da implementaçao da interface na classe
interface AcoesVideo {
    public function play();
    public function pause();
    public function like();
}