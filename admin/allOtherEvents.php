<?php
include '../admin/head.php';
include '../admin/header.php';
include '../admin/sidebar.php';

if($_SESSION['loggedinuserrole']=="User") {
    header('Location: ../index.php');
    die();
}
?>
<!-- all OtherEvents -->
<div id="layoutSidenav">

    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container-xl px-4">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="filter"></i></div>
                                    Other Events 
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-n10">
                <div class="card mb-4">
                    <div class="card-header">Other Events </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Type</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Type</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody id="allOtherEventsList">




                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>
<?php
include '../admin/footer.php';
?>
<script>
        loadOtherEvents();

function loadOtherEvents() {
    document.getElementById("allOtherEventsList").innerHTML = "";
    $.post('loadOtherEvents.php', {
        ID: "List"
    }, function(res) {
        document.getElementById("allOtherEventsList").innerHTML = res.trim();
    });
}

function deleteOtherEvent(id) {


    $.ajax({
        type: 'POST',
        url: 'deleteOtherEvent.php',
        data: {
            Del_id: id
        },
        success: function(res) {
            alert(res);
            window.location.reload();
            console.log(res)
        }
    });
}
</script>
</body>




