<?php

class SectionModel
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAllSections()
    {
        require 'API/api-section.php';

        return $sections;
    }


    public function fetchSectionById($sectionID)
    {

        require 'API/api-section.php';

        foreach ($sections as $section) {
            if ($section['sectionID'] == $sectionID) {
                return $section;
            }
        }

        return null; // Return null if not found
    }
}
