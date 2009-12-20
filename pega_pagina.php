#!/usr/bin/env php
<?php

require_once('./utils.php');

if ( $argc < 3 || in_array($argv[1], array('--help', '-help', '-h', '-?'))) {
    help();
    exit();
}

$pagina = curl(
    'http://emec.mec.gov.br/modulos/visao_cadastro/php/cadastroies/cadastro_cadastroies_consulta.php',
    array(
        'form'             => '1',
        'emec_next_page'   => $argv[2],
        'rad_busca'        => '2',
        'txt_no_curso'     => $argv[1],
        'rad_tp_busca'     => '1',
        'hid_no_ies_value' => '',
        'sel_sg_uf'        => '',
        'sel_co_municipio' => '',
        'pager_id'         => ''
    )
);

fwrite(STDOUT, $pagina . PHP_EOL);



function help()
{
$help = <<<EOT
Uso: emec_pega_pagina (CURSO PAGINA)
Exemplo: emec_crawler enfermagem 1

EOT;

    echo $help;
}