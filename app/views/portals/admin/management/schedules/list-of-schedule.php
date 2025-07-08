<?php
$this->renderView('/portals/partials/layouts/header', $data);

// Define schedule (can be fetched from database too)
$scheduleTimes = [
    ["time" => "09:19:00", "activity" => "Recess"],
    ["time" => "09:20:00", "activity" => "Lunch Break"]
];

// Find the earliest time (assuming format is consistent)
$startTime = min(array_column($scheduleTimes, 'time'));
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $contentHeaderTitle ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $breadcrumbActiveItem ?></li>
                    </ol>
                </div>
            </div>

            <!-- Dynamic Bell Start Time -->
            <div class="alert alert-info d-flex align-items-center mt-4" role="alert">
                <i class="fas fa-bell fa-lg me-2"></i>
                <div>
                    <strong>Bell schedule starts at:</strong> <?= $startTime ?>
                </div>
            </div>

            <!-- Clock Display -->
            <div class="card p-4 mb-4 bg-light shadow-sm">
                <h5 id="currentTime" class="mb-0 text-center text-primary fw-bold fs-4"></h5>
            </div>

            <!-- Schedule Table -->
            <section class="content">
                <div class="card shadow-sm">
                    <header class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Scheduled Activities</h5>
                        <button type="button" class="btn btn-sm btn-primary" id="addSectionBtn">
                            <i class="fa fa-plus me-1"></i>Add Section
                        </button>
                    </header>
                    <div class="card-body">
                        <table id="courseTable" class="table table-bordered table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Time</th>
                                    <th>Activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($scheduleTimes as $index => $schedule) : ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= $schedule['time'] ?></td>
                                        <td><?= $schedule['activity'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <small class="text-muted mt-3 d-block">
                            <em>Note: System rings automatically based on the scheduled time.</em>
                        </small>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php $this->renderView('/portals/partials/layouts/footer'); ?>

<script>
    $(document).ready(function() {
        setInterval(loadBellInitialization, 1000);
    });

    function loadBellInitialization() {
        const clock = $("#currentTime");
        const now = new Date();

        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');

        const currentTime = `${hours}:${minutes}:${seconds}`;
        clock.text(`Current Time: ${currentTime}`);
        triggerBell(currentTime);
    }

    function triggerBell(currentTime) {
        const schedules = [{
                time: "09:19:00",
                activity: "Recess"
            },
            {
                time: "11:30:00",
                activity: "Lunch Break"
            }
        ];

        schedules.forEach(schedule => {
            if (currentTime === schedule.time) {
                alert(`🔔 It's time for ${schedule.activity}!`);
            }
        });
    }
</script>