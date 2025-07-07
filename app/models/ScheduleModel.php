<?php

class ScheduleModel
{

    private $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function fetchSchedules()
    {

        return [
            [
                "schedID" => 1,
                "day" => "Monday",
                "time" => "7:30 AM",
                "activity" => "Flag Ceremony",
                "duration" => 60,
                "counts" => 2,
                "gap" => 60 // per seconds

            ],




        ];
    }
}
