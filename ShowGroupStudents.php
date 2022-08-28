<?php
include 'head.php';
include 'header.php';
include 'db.php';


if (isset($_POST['DeleteComment'])) {
    // file upload

    $id = mysqli_real_escape_string($db, $_POST['delete_hidden_id']);
    $UserId = mysqli_real_escape_string($db, $_POST['delete_hidden_UserId']);
    $CommentorId = mysqli_real_escape_string($db, $_POST['delete_hidden_CommentorId']);
    $sql = "delete from user_comments where CommentorId = '{$CommentorId}' and UserId = '{$UserId}' and id = '{$id}'";
    if (mysqli_query($db, $sql)) {
        header("Location: admin/abc.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert Item.</p>";
    }
}

if (isset($_POST['editable'])) {
    // file upload

    $file_name = $_FILES['File']['name'];
    $file_size = $_FILES['File']['size'];
    $file_tmp = $_FILES['File']['tmp_name'];
    $file_type = $_FILES['File']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['File']['name'])));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images");
        echo "Success";
    } else {
        print_r($errors);
    }


    $Ref = 'editable';
    $UserId = mysqli_real_escape_string($db, $_POST['hidden_FormUserId']);
    $Rating = mysqli_real_escape_string($db, $_POST['hidden_FormRating']);
    $Message = mysqli_real_escape_string($db, $_POST['Message']);
    $CommentorId = $_SESSION['LoggedInUserID'];
    $sql = "INSERT INTO user_comments (CommentorId,UserId,Rating,Message,Image,edit_status)
                      VALUES ('{$CommentorId}','{$UserId}','{$Rating}','{$Message}','{$file_name}','{$Ref}')";
    if (mysqli_query($db, $sql)) {
        // header("Location: abc.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert Item.</p>";
    }
}


if (isset($_POST['finalize'])) {
    // file upload
    // file upload

    $file_name = $_FILES['File']['name'];
    $file_size = $_FILES['File']['size'];
    $file_tmp = $_FILES['File']['tmp_name'];
    $file_type = $_FILES['File']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['File']['name'])));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images");
        echo "Success";
    } else {
        print_r($errors);
    }


    $Ref = 'finalize';
    $UserId = mysqli_real_escape_string($db, $_POST['hidden_FormUserId']);
    $Rating = mysqli_real_escape_string($db, $_POST['hidden_FormRating']);
    $Message = mysqli_real_escape_string($db, $_POST['Message']);
    $CommentorId = $_SESSION['LoggedInUserID'];
    $sql = "INSERT INTO user_comments (CommentorId,UserId,Rating,Message,Image,edit_status)
                      VALUES ('{$CommentorId}','{$UserId}','{$Rating}','{$Message}','{$file_name}','{$Ref}')";
    if (mysqli_query($db, $sql)) {
        // header("Location: abc.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert Item.</p>";
    }
}


if (isset($_POST['editable_update'])) {
    // file upload

    $file_name = $_FILES['UpdateFile']['name'];
    $file_size = $_FILES['UpdateFile']['size'];
    $file_tmp = $_FILES['UpdateFile']['tmp_name'];
    $file_type = $_FILES['UpdateFile']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['UpdateFile']['name'])));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images");
        echo "Success";
    } else {
        print_r($errors);
    }


    $Ref = 'editable';
    $id = mysqli_real_escape_string($db, $_POST['hidden_id_update']);
    $UserId = mysqli_real_escape_string($db, $_POST['hidden_FormUserId_update']);
    $Rating = mysqli_real_escape_string($db, $_POST['hidden_FormRating_update']);
    $Message = mysqli_real_escape_string($db, $_POST['UpdateMessage']);
    $CommentorId = $_SESSION['LoggedInUserID'];
    $sql = "update user_comments set Message='{$Message}',Rating = '{$Rating}',Image = '{$file_name}',
    edit_status = '{$Ref}'
     where id='{$id}' and CommentorId='{$CommentorId}' and UserId='{$UserId}' ";
    if (mysqli_query($db, $sql)) {
        // header("Location: abc.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert Item.</p>";
    }
}


if (isset($_POST['finalize_update'])) {
    // file upload
    // file upload

    
    $file_name = $_FILES['UpdateFile']['name'];
    $file_size = $_FILES['UpdateFile']['size'];
    $file_tmp = $_FILES['UpdateFile']['tmp_name'];
    $file_type = $_FILES['UpdateFile']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['UpdateFile']['name'])));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images");
        echo "Success";
    } else {
        print_r($errors);
    }


    $Ref = 'finalize';
    $id = mysqli_real_escape_string($db, $_POST['hidden_id_update']);
    $UserId = mysqli_real_escape_string($db, $_POST['hidden_FormUserId_update']);
    $Rating = mysqli_real_escape_string($db, $_POST['hidden_FormRating_update']);
    $Message = mysqli_real_escape_string($db, $_POST['UpdateMessage']);
    $CommentorId = $_SESSION['LoggedInUserID'];
    $sql = "update user_comments set Message='{$Message}',Rating = '{$Rating}',Image = '{$file_name}',
    edit_status = '{$Ref}'
     where id='{$id}' and CommentorId='{$CommentorId}' and UserId='{$UserId}' ";
    if (mysqli_query($db, $sql)) {
        // header("Location: abc.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert Item.</p>";
    }
}


?>



<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comment Form</h5>

            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <h2>Rating</h2>
                    <span onclick="getRating(this.id)" id="1" class="fa fa-star "></span>
                    <span onclick="getRating(this.id)" id="2" class="fa fa-star "></span>
                    <span onclick="getRating(this.id)" id="3" class="fa fa-star "></span>
                    <span onclick="getRating(this.id)" id="4" class="fa fa-star"></span>
                    <span onclick="getRating(this.id)" id="5" class="fa fa-star"></span>
                    <span onclick="getRating(this.id)" id="6" class="fa fa-star "></span>
                    <span onclick="getRating(this.id)" id="7" class="fa fa-star "></span>
                    <span onclick="getRating(this.id)" id="8" class="fa fa-star "></span>
                    <span onclick="getRating(this.id)" id="9" class="fa fa-star"></span>
                    <span onclick="getRating(this.id)" id="10" class="fa fa-star"></span>
                    <input type="hidden" id="hidden_FormUserId" name="hidden_FormUserId">
                    <input type="hidden" id="hidden_FormRating" name="hidden_FormRating">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="Message" name="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Choose Imoji</label>
                        <input type="file" onchange="validateImage(this.id), SubmitComment(this.id)" id="File" name="File" class="form-control">

                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="CloseModal()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Save" name="editable" class="btn btn-primary">
                        <input type="submit" value="Finalize changes" name="finalize" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Comment</h5>

            </div>
            <div id="whereUpdateFormShow" class="modal-body">

            </div>

        </div>
    </div>
</div>

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
                                    Welcome to Group members
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
                                    <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="public/assets/img/illustrations/at-work.svg" style="max-width: 26rem" /></div>
                                    <div class="card-body custom-card bg-light pt-0 pb-0 mt-5">
                                        <div class="row ">
                                            <?php
                                            $query = "SELECT * FROM users where GroupNumber = " . $_SESSION['LoggedInUserGroup'] . " and UserId != " . $_SESSION['LoggedInUserID'];
                                            $result = mysqli_query($db, $query);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                //make a proper time format
                                            ?>
                                                <div class="col-9 pl-3 pr-0 pt-2">
                                                    <div class="image-wrapper pt-1">
                                                        <input type="hidden" id="<?php echo $row['UserId'] ?>" value="<?php echo $row['UserId'] ?>">
                                                        <p class="text-purple mb-0">Email :
                                                            <?php echo $row['email'] ?></p>
                                                        <h4 class="text-white-tint text-lg-left">User ID :
                                                            <?php echo $row['UserId'] ?></h4>

                                                        <p style="cursor:pointer; " onclick="ShowModal('<?php echo $row['UserId'] ?>')" class="text-secondary mb-1"> Click For Comment...</p>

                                                    </div>
                                                </div>


                                                <?php
                                                $query_comments = "SELECT * FROM user_comments where CommentorId = " . $_SESSION['LoggedInUserID'] . " and UserId = " . $row['UserId'];
                                                $result_comments = mysqli_query($db, $query_comments);
                                                while ($row_comments = mysqli_fetch_assoc($result_comments)) {

                                                ?>
                                                    <div style="display: flex;justify-content:space-between">
                                                        <div>

                                                            <p><?php echo $row_comments['Message'] ?></p>
                                                        </div>
                                                        <div>
                                                            <?php
                                                            for ($a = 1; $a <= $row_comments['Rating']; $a++) {
                                                            ?>
                                                                <span class="fa fa-star checked"></span>
                                                            <?php } ?>
                                                        </div>
                                                        <div style="padding:10px 0 10px 0 ">
                                                            <?php if ($row_comments['edit_status'] == 'editable') { ?>
                                                                <button onclick="getDataForEdit(<?php echo $row_comments['UserId'] ?>,<?php echo $row_comments['CommentorId'] ?>,<?php echo $row_comments['id'] ?>)" class="btn btn-success form-group">Edit</button>

                                                            <?php } ?>

                                                        </div>

                                                        <div style="padding:10px 0 10px 0 ">
                                                            <?php if ($row_comments['edit_status'] == 'editable') { ?>
                                                                <form method="post">
                                                                    <input type="hidden" value="<?php echo $row_comments['id'] ?>" name="delete_hidden_id">
                                                                    <input type="hidden" value="<?php echo $row_comments['UserId'] ?>" name="delete_hidden_UserId">
                                                                    <input type="hidden" value="<?php echo $row_comments['CommentorId'] ?>" name="delete_hidden_CommentorId">
                                                                    <input type="submit" value="Delete" name="DeleteComment" class="btn btn-success">
                                                                </form>

                                                            <?php } ?>

                                                        </div>

                                                    </div>

                                                <?php } ?>


                                                <div class="col-12 p-3 mt-3 pt-0 border-top border-secondary event-action-buttons-container">

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
<script>
    var UserId_ForComment_update = 0;

    function getDataForEdit(UserId, CommentorId, id) {
        // alert(UserId+" "+CommentorId+" "+id)
        UserId_ForComment_update = UserId;
        $.ajax({
            url: 'getDataForEdit.php',
            type: 'get',
            data: {
                UserId: UserId,
                CommentorId: CommentorId,
                id: id,
            },
            success: function(data) {
                console.log(data)
                var result = JSON.parse(data);
                console.log(result.Rating)
                var abc = `
                
                <form method="post" enctype="multipart/form-data">
                    <h2>Update Rating</h2>
                    <span onclick="getRating_Update(this.id)" id="11" class="fa fa-star "></span>
                    <span onclick="getRating_Update(this.id)" id="12" class="fa fa-star "></span>
                    <span onclick="getRating_Update(this.id)" id="13" class="fa fa-star "></span>
                    <span onclick="getRating_Update(this.id)" id="14" class="fa fa-star"></span>
                    <span onclick="getRating_Update(this.id)" id="15" class="fa fa-star"></span>
                    <span onclick="getRating_Update(this.id)" id="16" class="fa fa-star "></span>
                    <span onclick="getRating_Update(this.id)" id="17" class="fa fa-star "></span>
                    <span onclick="getRating_Update(this.id)" id="18" class="fa fa-star "></span>
                    <span onclick="getRating_Update(this.id)" id="19" class="fa fa-star"></span>
                    <span onclick="getRating_Update(this.id)" id="20" class="fa fa-star"></span>
                    <input type="hidden" id="hidden_id_update" name="hidden_id_update" value="${id}">
                    <input type="hidden" id="hidden_FormUserId_update" name="hidden_FormUserId_update">
                    <input type="hidden" id="hidden_FormRating_update" name="hidden_FormRating_update">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="UddateMessage" name="UpdateMessage">${result.Message}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Choose Imoji</label>
                        <input type="file" onchange="validateImage(this.id), SubmitComment(this.id)" id="UpdateFile" name="UpdateFile" class="form-control">

                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="CloseModal_Update()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Save" name="editable_update" class="btn btn-primary">
                        <input type="submit" value="Finalize changes" name="finalize_update" class="btn btn-primary">
                    </div>
                </form>
                
                `;
                document.getElementById('whereUpdateFormShow').innerHTML = abc;
                var whereLoopBreak = result.Rating;
                for (var b = 11; b <= 20; b++) {
                    document.getElementById(b).classList.add('checked');
                    if (b == (10 + parseInt(whereLoopBreak))) {
                        break;
                    }

                }

                $('#UpdateModal').modal('show');


            }
        })

    }

    var UserId_ForComment = 0;

    function ShowModal(UserId) {
        UserId_ForComment = UserId;
        for (var a = 1; a <= 10; a++) {
            document.getElementById(a).classList.remove('checked');
        }
        document.getElementById('Message').value = '';
        document.getElementById('File').value = '';
        $('#Modal').modal('show');
    }

    function CloseModal() {
        $('#Modal').modal('hide');
    }

    function CloseModal_Update() {
        $('#UpdateModal').modal('hide');
    }

    var RatingNumber = 0;

    function getRating(id) {
        RatingNumber = id;
        for (var a = 1; a <= 10; a++) {
            document.getElementById(a).classList.remove('checked');
        }
        for (var a = 1; a <= id; a++) {
            document.getElementById(a).classList.add('checked');
        }
        document.getElementById('hidden_FormUserId').value = UserId_ForComment;
        document.getElementById('hidden_FormRating').value = RatingNumber;

    }

    var RatingNumber_Update = 0;

    function getRating_Update(id) {
        RatingNumber_Update = parseInt(id) - 10;
        for (var a = 11; a <= 20; a++) {
            document.getElementById(a).classList.remove('checked');
        }
        for (var a = 11; a <= id; a++) {
            document.getElementById(a).classList.add('checked');
        }
        document.getElementById('hidden_FormUserId_update').value = UserId_ForComment_update;
        document.getElementById('hidden_FormRating_update').value = RatingNumber_Update;

    }


    function validateImage(id) {

        var file = document.getElementById(id).files[0];

        var t = file.type.split('/').pop().toLowerCase();

        if (t != "jpeg" && t != "jpg" && t != "png") {
            alert('Please select a valid image file In Jpg, jpeg, png');
            document.getElementById(id).value = '';
            return false;
        }
        return true;
    }

    function SubmitComment(id) {
        let maxMb = 2; //maximum allowed size (MB) of image
        let kb = document.getElementById(id).files[0].size / 1024; // convert the file size into byte to kb
        let mb = kb / 1024; // convert kb to mb
        if (mb > maxMb) { // if the file size is gratter than maxMb
            return alert(`Image should be less than ${maxMb} MB`);
            return false;
        }

    }
</script>