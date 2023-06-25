<?php
require('conexion.php');
/**
 * Clase userStats 
 */ 
class UserStats{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    /**
     * Metodo solicitado para obtener resultados al pasarle los parametros, que obtiene del formulario del index
     * @param conexion
     * @param dateFrom
     * @param dateTo
     * @param totalClicks
     */
    public function getStats($dateFrom, $dateTo, $totalClicks){

        $timestamp_from = strtotime($dateFrom);
        $timestamp_to = strtotime($dateTo);

        //Valido las fechas
        if (!$timestamp_from !== false || !$timestamp_to !== false) {
            $response['success'] = false;
            $response['message'] = 'Al menos una fecha no es válida';

            $jsonResponse = json_encode($response);
            header('Content-Type: application/json');
            echo $jsonResponse;
            return;    
        }
        
        //Valido que sea integer totalClicks en caso de que no sea null para continuar
        if ($totalClicks != '') {
            if (!filter_var($totalClicks, FILTER_VALIDATE_INT) !== false) {
                $response['success'] = false;
                $response['message'] = 'No es un numero valido';
    
                $jsonResponse = json_encode($response);
                header('Content-Type: application/json');
                echo $jsonResponse;
                return;                   
            } 
        }            
        
       //Validado los datos armo la query para la consulta del requerimiento

       $where_total_clicks = '';
       if ($totalClicks) {
            $where_total_clicks .= 'AND clicks >= ' . $totalClicks;
       }

       $query = "SELECT CONCAT(u.first_name, ' ', u.last_name) as full_name, 
                        us.views as total_views,
                        us.clicks as total_clicks,
                        us.conversions as total_conversions,
                        ROUND(((us.conversions/us.clicks) * 100), 2) as cr,
                        DATE_FORMAT(MAX(us.date), '%Y-%m-%d') as last_date
                FROM user_stats us
                INNER JOIN users u ON u.id = us.user_id
                WHERE u.status LIKE 'active'
                AND us.date BETWEEN '$dateFrom' AND '$dateTo'
                $where_total_clicks
                GROUP BY u.first_name
       ";

       $result = $this->conexion->getConexion()->query($query);

       $data = $result->fetch_all(MYSQLI_ASSOC);

       return $data;
    }
}

?>