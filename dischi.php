<?php
header('Content-Type: application/json');

// percorso del file JSON
$json_file = 'dischi.json';

// verifica se il file esiste
if (file_exists($json_file)) {
    // legge il contenuto del file JSON
    $json_data = file_get_contents($json_file);
    
    echo $json_data;
} else {
    // Se il file non esiste, restituisce un errore
    $response = [
        'error' => 'File JSON non trovato'
    ];
    echo json_encode($response);
}
?>