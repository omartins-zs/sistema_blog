<?php


function format_date($date)
{
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    
    // Só a Data 
    // return strftime('%d/%m/%Y', strtotime($date));

    // DATA POR EXTENSO
    return strftime('%A , %d de %B de %Y', strtotime($date));
}
