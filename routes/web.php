<?php



$this->router->addRoute('/admin/dashboard', ['AdminController', 'viewAdminDashboard']);
$this->router->addRoute('/admin/schedules', ['AdminController', 'viewSchedules']);
$this->router->addRoute('/admin/activities', ['AdminController', 'viewActivities']);
