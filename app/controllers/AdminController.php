<?php

require_once '../core/Controller.php';


class AdminController extends Controller
{

    private $notificationModel;
    // private $transactionModel;
    // private $sectionModel;
    private $scheduleModel;


    public function __construct($pdo)
    {
        parent::__construct($pdo);
        $this->notificationModel = $this->loadModel("NotificationModel");
        $this->scheduleModel = $this->loadModel("ScheduleModel");
        // $this->sectionModel = $this->loadModel('SectionModel');
    }

    public function viewAdminDashboard()
    {
        $this->renderView('/portals/admin/admin-dashboard');
    }

    /* 

    METHODS  TO VIEW SCHEDULES 
    
    */

    public function viewSchedules()
    {

        $schedules = $this->scheduleModel->fetchSchedules();
        $data = [
            'contentHeaderTitle' => 'Schedules',
            'breadcrumbActiveItem' => 'Schedules',
            'schedules' => $schedules
        ];
        $this->renderView('/portals/admin/management/schedules/list-of-schedule', $data);
    }

    /* 

    METHODS  TO VIEW ACTIVIIES
    */

    public function viewActivities()
    {

        $schedules = $this->scheduleModel->fetchSchedules();
        $data = [
            'contentHeaderTitle' => 'Schedules',
            'breadcrumbActiveItem' => 'Schedules',
            'schedules' => $schedules
        ];
        $this->renderView('/portals/admin/management/activities/list-of-activity', $data);
    }
}
