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

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size =$_FILES['fileToUpload']['size'];
    $file_tmp =$_FILES['fileToUpload']['tmp_name'];
    $file_type=$_FILES['fileToUpload']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
    
    $extensions= array("jpeg","jpg","png","gif","svg","webp","pdf");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"../public/attachments/".$file_name);
       echo "Success";
    }else{
       print_r($errors);
    }

    $subject = $_POST['subject'];
    $date_to_sent = $_POST['sent_date'];
 

$sql = "INSERT INTO announcements (subject, date_to_sent, attachment) VALUES ('$subject', '$date_to_sent', '$file_name')";    
    if (mysqli_query($db, $sql)) {
        header("Location: allAnnouncement.php");
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
                                <form action="createAnnouncement.php" method="post" enctype="multipart/form-data">
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject" placeholder="Write any subject" required>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <label class="form-label">Specify a date</label>
                                        <label class="form-label"></label>
                                        <input class="form-control" name="sent_date" type="date" placeholder="Specify a date" required>
                                    </div>
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Attachment</label>
                                        <input type="file" class="form-control" name="fileToUpload" placeholder="Specify attachment" required>
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


