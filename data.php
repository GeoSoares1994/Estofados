<?php

date_default_timezone_set('America/Maceio');

$data = date('Y-m-d');
$hora = date('H:i');



// $diferencia = strtotime($anoquevem) - strtotime($data);

$dias = floor($diferencia / (60*60*24));

$explode = explode('-', $data);
$hoje = $explode[2]."/" . $explode[1]."/" .$explode[0]; 







?>