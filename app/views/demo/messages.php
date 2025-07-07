<?php
$this->renderView('partials/header');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Messages</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Messages</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <form id="messages">
                <textarea name="" id="message_box" class="form-control" rows="5"></textarea>
                <input class="notif-type" type="hidden" name="" value="Referrals" />
                <div class="text-center mt-3">
                    <button type="submit" class="btn bg-pink trigger-notif">Sent</button>
                </div>
            </form>

        </div>
    </section>

</div>


<?php
$this->renderView('partials/footer');
?>

<script>
    let count = 0;

    $(document).ready(function() {
        $("#messages").on("submit", (e) => {
            e.preventDefault();

            loadNotif();
        })

    })

    function loadNotif() {

        const notifType = $('.notif-type').val();

        switch (notifType) {
            case "Referrals":
                const messages = "New Referral Added";
                referrals(messages)
                break;

            default:
                alert("Error fetching notifications!");
                break;
        }


    }


    function referrals(messages) {

        $('.notif-container').prepend(
            `<a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i>
                    ${messages}
                <span class="float-end text-muted text-sm">3 mins</span>
            </a>`
        );

        badgeCount();

    }



    function badgeCount() {

        $("#notifications .badge").removeClass("d-none");

        count++;
        $('.notifCounts').text(count);
    }
</script>