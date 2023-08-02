<?php
require_once "./Database.php";

// Crear una instancia de la clase Database
$database = new Database();
$connection = $database->getConnection();

// Obtener la dirección IP del visitante
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener la fecha actual en formato Y-m-d
$currentDate = date('Y-m-d');

// Obtener la fecha actual en formato d-m-Y
$today = date("d-m-Y");

// Calcular la fecha y hora hace dos horas en formato Y-m-d
$twoHoursAgo = date('Y-m-d', strtotime('-2 hours'));

try {
    // Obtener el registro de visitas para todas las direcciones IP
    $sql = "SELECT SUM(visits) AS total_visits FROM visitsip";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $totalVisitsResult = $stmt->fetch(PDO::FETCH_ASSOC);
    $totalVisits = $totalVisitsResult['total_visits'];

    // Consultar el registro de visita más reciente para la dirección IP actual
    $sql = "SELECT * FROM visitsip WHERE ip = :ip";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':ip', $ip);
    $stmt->execute();
    
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($results) {
        // Si hay un registro existente
        if ($results['last_visit'] < $twoHoursAgo) {
            // Si han pasado más de dos horas desde la última visita, incrementar el contador de visitas y actualizar la última visita
            $updateSql = "UPDATE visitsip SET visits = visits + 1, last_visit = NOW() WHERE ip = :ip";
            $updateStmt = $connection->prepare($updateSql);
            $updateStmt->bindParam(':ip', $ip);
            $updateStmt->execute();
        }
    } else {
        // Si no hay un registro existente, insertar un nuevo registro para la dirección IP actual
        $insertSql = "INSERT INTO visitsip (ip, visits, last_visit) VALUES (:ip, 1, :currentDate)";
        $insertStmt = $connection->prepare($insertSql);
        $insertStmt->bindParam(':ip', $ip);
        $insertStmt->bindParam(':currentDate', $currentDate);
        $insertStmt->execute();
    }
    
    $response = [
        'visits' => $totalVisits,
        'date' => $today
    ];
    
    // Establecer la cabecera Content-Type a application/json
    header('Content-Type: application/json');
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
