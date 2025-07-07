<?php

// For views
$this->router->addRoute('/login', ['AuthController', 'viewLogin']);

// For API
$this->router->addRoute('/auth/login', ['AuthController', 'loginAuthentication']);
$this->router->addRoute('/auth/registry', ['AuthController', 'loginAuthentication']);
