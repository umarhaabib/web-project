<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
        <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="dashboard.php">Web Application Project</a>
        <!-- Navbar Items-->
        <ul class="navbar-nav align-items-center ms-auto">
            <!-- Documentation Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-md-block me-3">
                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="../index.php">
                    <div class="fw-500">Website</div>
                </a>

            </li>

            <?php

            if ($_SESSION['Role'] != 'Admin') {

            ?>
                <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="cart.php"><i data-feather="shopping-cart"></i></a>

                </li>

            <?php
            }
            ?>
            <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img class="img-fluid" src="../public/../public/assets/img/illustrations/profiles/profile-1.png" /></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="../public/../public/assets/img/illustrations/profiles/profile-1.png" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">Name</div>
                            <div class="dropdown-user-details-email">Email</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <!-- userProfile.php?id=<?php echo $_SESSION['Role'] ?> -->

                    <a class="dropdown-item" href="../logout.php">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <script>
        compareDate();

        function compareDate() {
            var date = new Date();
            var today = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
            $.ajax({
                url: 'checkAnnouncement.php',
                type: 'post',
                data: {
                    today: today
                },
                success: function(data) {
                    //decode json data
                    var result = JSON.parse(data);
                    console.log(result.id);
                    ids = result.id.toString();
                    console.log(ids);
                    if (result.status == 'success') {
                        $.ajax({
                            url: 'sentAnnouncement.php',
                            type: 'post',
                            data: {
                                ids: ids
                            },
                            success: function(data) {
                                console.log(data);
                            }
                        });

                    }




                }
            });

        }
    </script>