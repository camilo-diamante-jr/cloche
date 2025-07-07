<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $sectionID = $_POST['sectionID'] ?? null;

    if ($sectionID) {
        $section = $this->sectionModel->fetchSectionById($sectionID);

        if ($section) {
            echo json_encode([
                'success' => true,
                'data' => $section
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Section not found.'
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Missing section ID.'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method.'
    ]);
}
