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
                "time" => "14:30:00",
                "activity" => "Flag Ceremony",
                "duration" => 60,
                "counts" => 2,
                "gap" => 60 // per seconds

            ],

            [
                "schedID" => 2,
                "day" => "Monday",
                "time" => "14:31:00",
                "activity" => "Second Period",
                "duration" => 60,
                "counts" => 2,
                "gap" => 60 // per seconds

            ],





        ];
    }
}
