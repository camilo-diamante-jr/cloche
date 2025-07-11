<?php

// For views
$this->router->addRoute('/', ['AuthController', 'viewLogin']);
$this->router->addRoute('/login', ['AuthController', 'viewLogin']);

// For API
$this->router->addRoute('/auth-api/login', ['AuthController', 'loginAuthentication']);
$this->router->addRoute('/auth-api/registry', ['AuthController', 'loginAuthentication']);
