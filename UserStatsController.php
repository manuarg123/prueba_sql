<?php
include('UserStats.php');

$user_stats = new UserStats();

/**
 * Manejo de solicitudes HTTP para lo solicitado
 */ 
if (isset($_POST['dateFrom']) && isset($_POST['dateTo'])) {
   $dateFrom = $_POST['dateFrom'];
   $dateTo = $_POST['dateTo'];
   $totalClicks = isset($_POST['totalClicks']) ? $_POST['totalClicks'] : '';
   
   //Obtengo los stats de la clase user_stats
   $stats = $user_stats->getStats($dateFrom, $dateTo, $totalClicks);
    
   //Envio resultados a plantilla html
   include('results.php');
}
?>