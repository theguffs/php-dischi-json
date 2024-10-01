<?php
header('Content-Type: application/json');

// Inviamo una risposta semplice
$response = [
    'message' => 'Comunicazione con API riuscita!'
];

// Convertiamo l'array PHP in formato JSON
echo json_encode($response);
?>