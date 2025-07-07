<?php

// Define core classes to be included
$coreClasses = ['Route', 'App', 'Controller', 'View'];

// Load core class files
foreach ($coreClasses as $class) {
    $filePath = __DIR__ . "/{$class}.php";
    if (!file_exists($filePath)) {
        die("Core file missing: {$class}.php");
    }
    require_once $filePath;
}

// Define the controller directory
$controllerDir = __DIR__ . '/../app/controllers';

// Ensure the controllers directory exists and load controllers
if (is_dir($controllerDir)) {
    foreach (glob("{$controllerDir}/*.php") as $controllerFile) {
        require_once $controllerFile;
    }
} else {
    die("Controllers directory is missing: {$controllerDir}");
}

// Define the database configuration file
$databaseFile = __DIR__ . '/Database.php';

// Ensure the database configuration file exists and load it
if (!file_exists($databaseFile)) {
    die("Database configuration file is missing.");
}

// Initialize PDO for database connection
$pdo = require_once $databaseFile;
if (!$pdo instanceof PDO) {
    die("Failed to initialize database connection.");
}

// Optional: Load session helper file if it exists
$sessionHelper = __DIR__ . '/../app/helpers/session.php';
if (file_exists($sessionHelper)) {
    require_once $sessionHelper;
} else {
    // Uncomment if you want to handle missing session helper
    die("Session helper file is missing.");
}

// Start a session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
