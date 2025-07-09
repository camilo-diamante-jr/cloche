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
                <div class="card shadow-sm">
                    <header class="card-header bg-white">
                        <h5 class="mb-0">Scheduled Activities</h5>
                        <button type="button" class="btn btn-sm btn-primary" id="addSectionBtn">
                            <i class="fa fa-plus me-1"></i>Assign schedule
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
                                <?php foreach ($schedules as $index => $schedule) : ?>
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