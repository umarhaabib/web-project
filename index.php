<?php
include 'header.php';
include 'head.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-image: url("public/images/hero_image2.jpg");
        }
    </style>
</head>


<body onload="MakeCaptchaString()">

    <div class="d-flex flex-column h-100">

        <main>
            <div class="container-xl px-4" style="margin-top: 50px;">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <!-- Basic registration form-->
                        <div class="card shadow-lg border-0 rounded-lg " style="margin-top: 100px;">
                            <div class="card-header justify-content-center">
                                <h3 class="fw-light my-4">Create Account</h3>
                            </div>
                            <div class="card-body">
                                <!-- Registration form-->
                                <form>
                                    <!-- Form Row-->
                                    <div class="row gx-3">
                                        <div class="col-md-6">
                                            <!-- Form Group (first name)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputFullName">User ID</label>
                                                <input class="form-control" type="number" id="UserID" placeholder="Enter User ID" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control" required id="Password" type="password" placeholder="Enter password" />

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)            -->

                                    <!-- Form Row    -->
                                    <div class="row gx-3">
                                        <div class="col-md-6">
                                            <!-- Form Group (password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control" required id="Email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Form Group (confirm password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputConfirmPassword">Captcha String</label>
                                                <input class="form-control" required id="CaptchaString" type="text" placeholder="Enter Generated Captcha" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-md-12">
                                            <!-- Form Group (password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputPaymentMethod">Group</label>
                                                <select required class="form-control" id="Group">
                                                    <option value="" disabled selected>Choose Group...</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <label style="color: red;" id="CaptchaLable"></label>
                                    <!-- Form Group (create account submit)-->
                                    <a style="float: right;" class="btn btn-primary btn-block" href="#" onclick="registerUser();">Create Account</a>
                                </form>

                            </div>

                            <div class="row" style="margin: 10px;">

                                <input readonly class="form-control form-group" type="text" id="captchaStringId">
                                <button onclick="MakeCaptchaString()" class="btn btn-primary">Change Captcha String</button>

                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="login.php">Have an account? Go to login</a></div>
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





</body>

</html>
<script>
    var captchaStringVariable;

    function MakeCaptchaString() {
        var FirstValue = String.fromCharCode(Math.floor(Math.random() * 26 + 65));
        var SecondValue = Math.floor((Math.random() * 10));
        var ThirdValue = String.fromCharCode(Math.floor(Math.random() * 26 + 65));
        var FourthValue = Math.floor((Math.random() * 10));
        var FifthValue = Math.floor((Math.random() * 10));
        var SixthhValue = Math.floor((Math.random() * 10));

        captchaStringVariable = FirstValue.toString() + SecondValue.toString() + ThirdValue.toString() + FourthValue.toString() + FifthValue.toString() + SixthhValue.toString();
        document.getElementById("captchaStringId").value = captchaStringVariable;
    }



    function registerUser() {

        var UserID = document.getElementById("UserID").value;
        var Password = document.getElementById("Password").value;
        var Email = document.getElementById("Email").value;
        var CaptchaString = document.getElementById('CaptchaString').value;
        var Group = document.getElementById('Group').value;


        const EmailFormate = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/gi;

        if (!EmailFormate.test(Email)) {
            alert("Email Formate Is Not Correct");
            return;
        }


        if ((document.getElementById('UserID').value).length > 9 || (document.getElementById('UserID').value).length < 9) {
            alert("User ID Should Be Equal To 9 Digits !")
            return;
        }

        if (UserID == "" || Password == "0" || Email == "" || CaptchaString == "" || Group == "") {
            alert("Please fill all the fields");
            return;
        }



        var CaptchaString = document.getElementById("CaptchaString").value;

        if (CaptchaString == captchaStringVariable) {

            $.ajax({
                url: 'CheckingEmail.php',
                type: 'POST',
                data: {
                    Email: Email
                },
                success: function(res) {
                    console.log(res);
                    if (res == "Change Email") {
                        alert("Please Change Email, This Email is Aleardy Taken ! ");
                        // location.reload();
                        return;

                    }
                }
            })

            $.ajax({
                type: 'POST',
                url: 'CheckingGroup.php',
                data: {
                    Group: Group,
                },
                success: function(res) {
                    console.log(res);
                    if (res == "Change Group") {
                        alert("Please Change Group, The limit of this group is completed! ");
                        // location.reload();

                    } else {
                        $.ajax({
                            type: 'POST',
                            url: 'registerUser.php',
                            data: {
                                UserID: UserID,
                                Password: Password,
                                Email: Email,
                                CaptchaString: CaptchaString,
                                Group: Group,
                                'action': 'registerUser'
                            },
                            success: function(res) {
                                console.log(res);
                                if (res == "UserID Already exists, try another one") {
                                    alert(res);
                                    location.reload();

                                } else if (res == "Successfully Registered") {
                                    alert(res);
                                    window.location.replace('login.php');

                                } else {
                                    alert("Something went wrong please try again")

                                }
                            }
                        });
                    }
                }
            });


        } else {
            document.getElementById('CaptchaLable').innerText = "Captcha Not Matching !";
        }



    }
</script>