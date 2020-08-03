<?php
/*
 * Esse eh o arquivo header global
 * Usado para importar de uma soh vez
 * O que serah usado nos arquivos php
 */

// carregando as bibliotecas importadas pelo composer
require __DIR__ . '/vendor/autoload.php';

// carregando arquivos de configuracoes
//contem as configuracoes do banco de dados
//...globalmente para todo o projeto
require_once __DIR__ . '/config.php';

// importando a tag html <head> globalmente
require_once __DIR__ . '/head.php';

// importando o menu global
require_once __DIR__ . '/menu.php';
 ?>