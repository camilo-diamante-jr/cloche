<?php

require_once '../core/Controller.php';

class APIController extends Controller
{
    private $scheduleModel;

    public function __construct($pdo)
    {

        parent::__construct($pdo);
        $this->scheduleModel = $this->loadModel("ScheduleModel");
    }

    public function getSectionById()
    {
        require_once 'API/api-section.php';
    }

    public function getBellSchedule()
    {
        $schedules = $this->scheduleModel->fetchSchedules();

        header('Content-Type: application/json');
        echo json_encode(['schedules' => $schedules]);
    }
}
