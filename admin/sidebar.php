<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
              
                    <!-- Sidenav Menu Heading (Core)-->
                    <div class="sidenav-menu-heading">Core</div>
                    <!-- Sidenav Accordion (Dashboard)-->
                    <?php

                    if ($_SESSION['Role'] == 'Admin') {

                    ?>
                        <a class="nav-link collapsed" href="dashboard.php">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Dashboard
                            <div class="sidenav-collapse-arrow"></div>
                        </a>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Users
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link" href="allUsers.php">
                                    All Users
                                    <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                                </a>
                                <a class="nav-link" href="addUser.php">Add Users</a>
                            </nav>
                        </div>


                        <!-- Sidenav Accordion (Applications)-->

                        <!-- Sidenav Accordion (Flows)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                            <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                            Walk events
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="addWalkEvent.php">Add event</a>
                                <a class="nav-link" href="allWalkEvents.php">All events</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Category" aria-expanded="false" aria-controls="Category">
                            <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                            Other Events
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Category" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="addOtherEvents.php">Add Other Event</a>
                                <a class="nav-link" href="allOtherEvents.php">All Other Events</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#NewsItem" aria-expanded="false" aria-controls="NewsItem">
                            <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                            News items
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="NewsItem" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="addNewsItem.php">Add News</a>
                                <a class="nav-link" href="allNewsItems.php">All News Items</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#Announcemnt" aria-expanded="false" aria-controls="Announcemnt">
                            <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                            Announcements
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Announcemnt" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="createAnnouncement.php">Schedule An Announcement</a>
                                <a class="nav-link" href="allAnnouncemnts.php">All Announcemnts</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="../index.php" >
                            <div class="nav-link-icon"><i data-feather="globe"></i></div>
                           Go to website
                        </a>
      
                    <?php
                    } 
                    ?>

                </div>
            </div>
            <!-- Sidenav Footer-->
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                    <div class="sidenav-footer-title"><?php if (isset($_SESSION['Role'])) {
                                                            echo $_SESSION['Role'];
                                                        } ?></div>
                </div>
            </div>
        </nav>
    </div>
</div>