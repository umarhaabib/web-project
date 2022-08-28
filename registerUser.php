<?php
include('db.php');

 if($_POST['action']=="registerUser"){
    $user_data = "SELECT * FROM users WHERE  UserId = '".$_POST['UserID']."'";
            $u_data = mysqli_query($db, $user_data);
            $count_user = mysqli_num_rows($u_data);
            if ($count_user == 1) {
                echo"UserID Already exists, try another one";
                die;
            }
		$insert_user2="insert into users(UserID,email,password,CaptchaString,GroupNumber) VALUE 
        ('".$_POST['UserID']."','".$_POST['Email']."','".md5($_POST['Password'])."','".$_POST['CaptchaString']."','".$_POST['Group']."')";
				  if(mysqli_query($db,$insert_user2))
				  {
					  echo "Successfully Registered";
				  }else{
                      echo "Error: " . $insert_user2 . "<br>" . mysqli_error($db);
                  }
 }elseif($_POST['action']=="update"){
    //  update
    $update_user="update users set full_name='".$_POST['inputFullName']."',email='".$_POST['inputEmailAddress']."',password='".$_POST['inputPassword']."',phone='".$_POST['inputPhoneNumber']."',payment_method='".$_POST['inputPaymentMethod']."' where id='".$_POST['id']."'";
    if(mysqli_query($db,$update_user))
    {
        echo "Successfully Updated";
    }else{
        echo "Error: " . $update_user . "<br>" . mysqli_error($db);
    }
}
