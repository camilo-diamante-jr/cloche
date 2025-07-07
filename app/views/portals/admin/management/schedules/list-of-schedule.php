<?php
$this->renderView('/portals/partials/layouts/header', $data);
?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
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

            <section class="content mt-4">

                <div class="card">
                    <header class="card-header bg-light shadow-sm">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>List of Sections</h5>
                            <button type="button" class="btn btn-sm btn-primary" id="addSectionBtn">
                                <i class="fa fa-plus"></i>
                                <span>Add Sections</span>
                            </button>
                        </div>
                    </header>
                    <div class="card-body">

                        <table id="courseTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Day</th>
                                    <th>Time</th>
                                    <th>Activity</th>
                                    <th>Duration</th>
                                    <th>Counts</th>
                                    <th>Gap</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($schedules as $index => $schedule) : ?>
                                    <tr>
                                        <td><?= $index + 1 ?></td>
                                        <td><?= $schedule['day'] ?></td>
                                        <td><?= $schedule['time'] ?></td>
                                        <td><?= $schedule['activity'] ?? 'Unassigned' ?></td>
                                        <td><?= $schedule['duration'] ?></td>
                                        <td><?= $schedule['counts'] ?></td>
                                        <td><?= $schedule['gap'] ?></td>
                                        <td>
                                            <input type="checkbox" name="" id="">
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                        <small class="mt-3">
                            <em>Note: Please indicate ring duration, counts and gap per seconds.</em>
                        </small>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</div>




<?php
$this->renderView('/portals/partials/layouts/footer');
?>
<script>
    $(document).ready(function() {
        setInterval(loadBellInitialization, 1000); // Check every second
    });

    function loadBellInitialization() {
        const now = new Date();

        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');

        const currentTime = `${hours}:${minutes}:${seconds}`;
        console.log("Current Time:", currentTime);
        triggerBell(currentTime);
    }

    function triggerBell(currentTime) {
        if (currentTime === "13:58:00") {
            alert("⏰ It's 2:00 PM — Time to ring the bell!");
        }

        if (currentTime === "13:59:00") {
            alert("⏰ It's 2:01 PM — Time to ring the bell!");
        }
    }
</script>