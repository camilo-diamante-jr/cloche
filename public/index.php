<?php

require_once '../core/init.php';
$app = new App($pdo);
$app->initializeRouter();
