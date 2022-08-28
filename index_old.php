<?php
include 'head.php';
include 'header.php';
include 'db.php';
?>
 
<div id="layoutSidenav" style="display: block;">
    <div id="">
        <main>
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container-xl px-4">
                    <div class="page-header-content pt-4 " style="margin-top: 50px;">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="activity"></i></div>
                                   Open University Walking Club  ffffffffff
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
            <div class="container-xl px-4 mt-n10">
                <div class="row">
                    <div class="col-xxl-4 col-xl-12 mb-4">
                        <div class="card h-100">
                            <div class="card-body h-100 p-5">
                                <div class="row align-items-center">
                                    <div class="col-xl-8 col-xxl-12">
                                        <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                            <h1 class="text-primary">Welcome to club members</h1>
                                            <p class="text-gray-700 mb-0">The way a team plays as a whole determines its
                                                success. You may have the greatest bunch of individual stars in the
                                                world, but if they don't play together, the club won't be worth a dime!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid"
                                            src="public/assets/img/illustrations/at-work.svg"
                                            style="max-width: 26rem" /></div>
                                    <div class="card-body custom-card bg-light pt-0 pb-0 mt-5">
                                        <div class="row ">
                                            <?php 
                                            $query = "SELECT * FROM other_events";
                                            $result = mysqli_query($db, $query);
                                            while($row = mysqli_fetch_assoc($result)) {
                                            //make a proper time format
                                            $time = $row['time'];
                                            $time = date('h:i A', strtotime($time));
                                                ?>
                                            <div class="col-sm-12 mt-2 col-md-3">
                                                <div class="right-auto bg-dark rounded ml-0 mt-3 text-white">
                                                    <p
                                                        class="bg-danger p-1 w-100 text-center rounded-top mb-0 text-white-tint border border-bottom-0 light-border">
                                                        <?php echo $row['date']?></p>
                                                    <div
                                                        class="p-1 text-center text-white-tint border border-top-0  rounded-bottom light-border">
                                                        <?php echo $time?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-9 pl-3 pr-0 pt-2">
                                                <div class="image-wrapper pt-1">

                                                    <p class="text-purple mb-0" style="">Type :
                                                        <?php echo $row['type']?></p>
                                                    <h4 class="text-white-tint text-lg-left">Name :
                                                        <?php echo $row['name']?></h4>
                                                    <p class="text-secondary mb-1">Location :
                                                        <?php echo $row['location']?></p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-12 p-3 mt-3 pt-0 border-top border-secondary event-action-buttons-container">

                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
        include 'footer.php';
        ?>
    </div>
</div>