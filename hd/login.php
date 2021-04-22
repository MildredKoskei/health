<?php require_once 'load.php'?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <?php require_once root.hw.inc.'/refence.php';?>

    <title>HEART DISEASE | Login</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="fit col-md-auto">
            <form action="index.php" method="post">
                <div class="form-group">
                    <h5 id="form_title"></h5>
                    <div class="fit mt-3"><a href="index.php" class="btn btn-sm btn-outline-warning" title="Go to dashboard">Dashboard</a></div>
                </div>
                <div class="form-group mt-5">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i id="id_icon" class="none"></i></span></div>
                        <input type="text" name="none" id="id_card" class="form-control" placeholder="none">
                    </div>
                </div>
                <div class="form-group mt-4">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-key"></i></span></div>
                        <input type="password" name="passwword" class="form-control" placeholder="Example Password123">
                    </div>
                </div>
                <div class="form-group mt-4">
                    <div class="col-sm-10">
                    <button type="submit" name="login" id="login_btn" class="btn btn-outline-primary" title="Access your account here">Login</button>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <div class="fit">Not yet a member ? <a href="#" id="signup_link" title="Open a new account">Sign Up</a></div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

var current_page = window.location.href;
var form_title = document.querySelector('#form_title');
var id_card = document.querySelector('#id_card');
var id_icon = document.querySelector('#id_icon');
var login_btn = document.querySelector('#login_btn');
var signup_link = document.querySelector('#signup_link');

if(current_page == 'http://localhost/hd/login.php?health_worker') {
    form_title.innerHTML = 'HEALTH WORKERS PANEL';
    id_icon.classList.remove('none');
    id_icon.classList.add('fa', 'fa-id-card');
    id_card.name = 'worker_id';
    id_card.placeholder = 'Example HW001';
    id_card.title = 'Enter your worker_id';
    login_btn.name = 'login_hw';
    signup_link.href = 'signup.php?health_worker';
}
else if(current_page == 'http://localhost/hd/login.php?patient') {
    id_icon.classList.remove('none');
    id_icon.classList.add('fa', 'fa-phone-alt');
    form_title.innerHTML = 'PATIENTS PANEL';
    id_card.name = 'patient_phone';
    id_card.placeholder = 'Example +254123456789';
    id_card.title = 'Enter your phone number';
    login_btn.name = 'login_patient';
    signup_link.href = 'signup.php?patient';
}
else {
    window.location.href = 'index.php';
}
</script>

</body>
</html>