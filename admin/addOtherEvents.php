<?php
include '../admin/head.php';
include '../admin/header.php';
include '../admin/sidebar.php';
include '../db.php';
// add category module with name and description
if($_SESSION['loggedinuserrole']=="User") {
  header('Location: ../index.php');
  die();
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $type = $_POST['type'];
    $location = $_POST['location'];

$sql = "INSERT INTO other_events (name, date, time, type, location) VALUES ('$name', '$date', '$time', '$type', '$location')";    
    if (mysqli_query($db, $sql)) {
        header("Location: allOtherEvents.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert Item.</p>";
    }
}
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <!-- Main page content-->
            <div class="container-xl px-12 mt-12">
                <!-- Account page navigation-->
                <div style="justify-content: center;margin-top: 20px" class="row">
                    <div class="col-lg-9">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="text-primary font-weight-normal mb-0">Add other events</h6>
                            </div>
                            <div class="card-body">
                                <form action="addOtherEvents.php" method="post">
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Event Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Event Name" required>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date</label>
                                        <input class="form-control" name="date" type="date" placeholder="date" required>
                                    </div>
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Time </label>
                                        <input class="form-control" name="time" type="time" placeholder="time" required>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type </label>
                                        <input class="form-control" name="type" placeholder="type" required>
                                    </div>
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Location</label>
                                        <input class="form-control" name="location" placeholder="location" required>
                                    </div>
                                    </div>
                                </di    v>

                                    <!-- full widhth button -->
                                    <div class="text-center col-sm-12 mt-5">
                                    <input type="submit" class="btn btn-primary col-sm-12" name="save" type="button" value="save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include '../admin/footer.php'; ?>
</body>
</html>


