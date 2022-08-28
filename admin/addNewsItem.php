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
    $first_showing_date = $_POST['first_showing_date'];
    $last_showing_date = $_POST['last_showing_date'];
    $news_description = $_POST['news_description'];
    $news_added_by = $_SESSION['loggedinuserrole'];
    $added_by_id = $_SESSION['loggedinuserid'];

echo$sql = "INSERT INTO news_items (first_showing_date, last_showing_date, news_description, news_added_by, added_by_id) VALUES ('$first_showing_date', '$last_showing_date', '$news_description', '$news_added_by', '$added_by_id')";    
    if (mysqli_query($db, $sql)) {
        header("Location: allNewsItems.php");
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
                                <h6 class="text-primary font-weight-normal mb-0">Add a news </h6>
                            </div>
                            <div class="card-body">
                                <form action="addNewsItem.php" method="post">
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Showing Date</label>
                                        <input type="date" class="form-control" name="first_showing_date" placeholder="First Showing Date" required>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Showing Date</label>
                                        <input class="form-control" name="last_showing_date" type="date" placeholder="Last Showing Date" required>
                                    </div>
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">News description</label>
                                        <textarea class="form-control" rows="10" name="news_description" placeholder="News description" required></textarea>
                                    </div>
                                    </div>
                                </div>

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


