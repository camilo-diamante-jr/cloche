<?php

require_once 'View.php';

class App
{
    protected $pdo;
    protected $router;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->router = new Router($pdo);
    }

    public function initializeRouter()
    {
        require_once '../routes/auth.php';
        require_once '../routes/web.php';
        require_once '../routes/api.php';


        $this->router->initializeRouter();
    }

    public function renderView($view, $data = [])
    {
        View::render($view, $data);
    }
}
