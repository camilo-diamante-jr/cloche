<?php //checkSession("Admin"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloche</title>
    <link rel="stylesheet" href="/css/import.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <main class="wrapper">

        <?php
        // Preloader
        // $this->renderView('/portals/partials/components/preloader');

        // Navbar
        $this->renderView('/portals/partials/components/navbar');

        // Sidebar
        $this->renderView('/portals/partials/components/sidebar');
        ?>