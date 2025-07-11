<?php
$this->renderView('/portals/partials/layouts/header', $data);


$startTime = min(array_column($schedules, 'time'));


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



            <!-- Schedule Table -->
            <section class="content">
                <div class="card elevation-4">
                    <header class="card-header bg-white">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">List of Bell Schedules</h5>
                            <div class="d-flex justify-content-end mb-3 gap-2">
                                <button class="btn btn-success btn-sm"><i class="fas fa-download"></i> Export</button>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Create</button>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-upload"></i> Import</button>
                            </div>

                        </div>
                    </header>
                    <div class="card-body">
                        <table id="courseTable" class="table table-bordered table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Time</th>
                                    <th>Duration </th>
                                    <th>Counts</th>
                                    <th>Gap</th>
                                    <th>Activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($schedules as $index => $schedule) : ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= $schedule['time'] ?></td>
                                        <td><?= $schedule['duration'] ?></td>
                                        <td><?= $schedule['counts'] ?></td>
                                        <td><?= $schedule['gap'] ?></td>
                                        <td><?= $schedule['activity'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <small class="text-muted d-block mt-3">
                            <em>Note: Schedule durations are set in seconds. Time format follows the 24-hour format.</em><br>
                            <em>The system rings automatically based on the scheduled time.</em>
                        </small>



                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php $this->renderView('/portals/partials/layouts/footer'); ?>