<?php

require_once '../core/Controller.php';

class APIController extends Controller
{
    private $sectionModel;

    public function __construct($pdo)
    {

        parent::__construct($pdo);
        $this->sectionModel = $this->loadModel("SectionModel");
    }

    public function getSectionById()
    {
        require_once 'API/api-section.php';
    }

    public function getBellSchedule() {}
}
