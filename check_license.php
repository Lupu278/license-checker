<?php
// Ia lista de chei valide din variabila de mediu (LICENSE_KEYS)
$envKeys = getenv("LICENSE_KEYS");

// Dacă variabila nu este setată, folosește o listă default (opțional)
if (!$envKeys) {
    $envKeys = "ANTICHEAT-EMPIRE-123,ALTALICENTA-456";
}

// Desparte cheile după virgulă într-un array
$valid_keys = explode(",", $envKeys);

// Ia cheia trimisă în GET
$key = $_GET["key"] ?? "";

// Verifică dacă cheia este validă
if (in_array($key, $valid_keys)) {
    echo "OK";
} else {
    http_response_code(403); // Cod de acces interzis
    echo "INVALID";
}
