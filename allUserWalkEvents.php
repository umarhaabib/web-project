<?php
include 'head.php';
include 'header.php';
include 'db.php';
if(!isset($_SESSION['loggedinuseremail'])) {
    header('Location: index.php');
    die();
}
?>


<div id="" style="display: block;">
    <div id="layoutSidenav_content" >
        <main>
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container-xl px-4" >
                    <div class="page-header-content pt-4"  style="margin-top: 50px;">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="activity"></i></div>
                                    All Proposed events
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mt-4">
                                <!-- show all posts -->
                                <div class="card mb-4">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->

            <main>
            <div class="container-xl px-4 mt-n10">
                <div class="card mb-4">
                    <div class="card-header">Walk Events</div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Walk Name</th>
                                    <th>Date</th>
                                    <th>Start time</th>
                                     <th>End time</th>
                                    <th>Meeting point</th>
                                    <th>Distance</th>
                                    <th>Leader</th>
                                    <th>Status</th>
                                    <th>Comments</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name Name</th>
                                    <th>Date</th>
                                    <th>Start time</th>
                                     <th>End time</th>
                                    <th>Meeting point</th>
                                    <th>Distance</th>
                                    <th>Leader</th>
                                    <th>Status</th>
                                    <th>Comments</th>
                                    <!-- <th>Action</th> -->

                                </tr>
                            </tfoot>
                            <tbody id="UserWalkEventsList">


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
        <?php
        include 'footer.php';
        ?>
    </div>

</div>

<script>
        loadWalkEvent();

        function loadWalkEvent() {
            document.getElementById("UserWalkEventsList").innerHTML = "";
            $.post('loadUserWalkEvents.php', {
                ID: "UserWalkEventsList"
            }, function(res) {
                document.getElementById("UserWalkEventsList").innerHTML = res.trim();
            });
        }

        function deleteWalkEvent(id) {


            $.ajax({
                type: 'POST',
                url: 'deleteWalkEvent.php',
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