<?php
session_start();
session_unset();
session_destroy();

header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json");

echo json_encode(['message' => 'Logged out']);
