<!-- Modal trigger button -->


<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div
    class="modal"
    id="createBellScheduleModal"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"

    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true">
    <div
        class="modal-dialog modal-dialog-scrollable modal-lg"
        role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Modal title
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div
                    class="alert alert-info mb-4"
                    role="alert">
                    <h4 class="alert-heading">Reminders</h4>

                    <small>
                        <ol class="px-3">
                            <li> Time should be 24 hours format </li>
                            <li> Duration should be in seconds </li>
                        </ol>
                    </small>
                </div>

                <form id="bellScheduleForm" class="mt-3">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control form-sm" name="time" id="time" placeholder="Time" required />
                            <small class="text-muted"><em></em></small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control form-sm" name="duration" id="duration" placeholder="Duration" required />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control form-sm" name="counts" id="counts" placeholder="Counts" required />
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control form-sm" name="gap" id="gap" placeholder="Gap" required />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>