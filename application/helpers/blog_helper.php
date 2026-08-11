<?php

function format_date($date)
{
    $timestamp = strtotime($date);
    
    $dias = [
        'Sunday' => 'domingo',
        'Monday' => 'segunda-feira',
        'Tuesday' => 'terça-feira',
        'Wednesday' => 'quarta-feira',
        'Thursday' => 'quinta-feira',
        'Friday' => 'sexta-feira',
        'Saturday' => 'sábado'
    ];
    
    $meses = [
        'January' => 'janeiro',
        'February' => 'fevereiro',
        'March' => 'março',
        'April' => 'abril',
        'May' => 'maio',
        'June' => 'junho',
        'July' => 'julho',
        'August' => 'agosto',
        'September' => 'setembro',
        'October' => 'outubro',
        'November' => 'novembro',
        'December' => 'dezembro'
    ];
    
    $dia_semana = $dias[date('l', $timestamp)];
    $dia = date('d', $timestamp);
    $mes = $meses[date('F', $timestamp)];
    $ano = date('Y', $timestamp);
    
    return "{$dia_semana}, {$dia} de {$mes} de {$ano}";
}

function limitePalavras($string, $numwords)
{
    $excerpt = explode(' ', $string, $numwords + 1);
    if (count($excerpt) >= $numwords) {
        array_pop($excerpt);
    }
    $excerpt = implode(' ', $excerpt);
    return $excerpt;
}
