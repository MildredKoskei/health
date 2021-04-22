<?php require_once 'load.php'?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <?php require_once root.hw.inc.'/refence.php';?>

    <title>HEART DISEASE | Sign Up</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="fit col-md-auto">
            <form action="index.php" method="post">
                <div class="form-group">
                    <h5 id="form_title">Health Workers Panel</h5>
                    <div class="fit mt-3"><a href="index.php" class="btn btn-sm btn-outline-warning" title="Go to dashboard">Dashboard</a></div>
                </div>
                <div class="form-group mt-5">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i id="id_icon" class="none"></i></span></div>
                        <input type="text" name="none" id="id_card" class="form-control" placeholder="none" aria-describedby="id_block">
                    </div>
                    <small id="id_block" class="form-text text-muted"></small>
                </div>
                <div class="form-group mt-5">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i id="contact_icon" class="none"></i></span></div>
                        <input type="none" name="none" id="contact_card" class="form-control" placeholder="none" aria-describedby="contact_block">                        
                    </div>
                    <small id="contact_block" class="form-text text-muted"></small>
                </div>
                <div class="form-group mt-5" id="role">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-md"></i></span></div>
                        <select name="role" class="form form-control" aria-describedby="roleBlock">
                            <option value="choose" selected hidden>Choose medical role</option>
                            <option value="doctor">Doctor</option>
                            <option value="nurse">Nurse</option>
                        </select>
                    </div>
                    <small id="roleBlock" class="form-text text-muted">
                        Work category
                    </small>
                </div>
                <div class="form-group mt-4">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-key"></i></span></div>
                        <input type="password" name="passwword" class="form-control" id="inputEmail3" placeholder="Example Password123" aria-describedby="passwordBlock">
                    </div>
                </div>
                <small id="passwordBlock" class="form-text text-muted">
                    Password should contain numbers, upper case and lower case letters
                </small>
                <div class="form-group mt-4">
                    <div class="col-sm-10">
                    <button type="submit" name="new" id="signup_btn" class="btn btn-outline-primary" title="Open a new account">Sign Up</button>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <div class="fit">Already a member ? <a href="login.php" id="login_link" title="Access your accunt here">Login</a></div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
var current_page = window.location.href;
var form_title = document.querySelector('#form_title')
var id_icon = document.querySelector('#id_icon');
var id_card = document.querySelector('#id_card');
var id_block = document.querySelector('#id_block');
var contact_icon = document.querySelector('#contact_icon');
var contact_card = document.querySelector('#contact_card');
var contact_block = document.querySelector('#contact_block');
var role = document.querySelector('#role');
var signup_btn = document.querySelector('#signup_btn');
var login_link = document.querySelector('#login_link');

if(current_page == 'http://localhost/hd/signup.php?health_worker') {
    form_title.innerHTML = 'HEALTH WORKERS PANEL';
    id_icon.classList.remove('none');
    id_icon.classList.add('fa', 'fa-id-card');
    id_card.name = 'worker_id';
    id_card.placeholder = 'Example HW001';
    id_card.title = 'Enter your worker_id';
    id_block.innerHTML = "Worker ID should contain letters and numbers<br/>As the one you were given by your organization";
    contact_icon.classList.remove('none');
    contact_icon.classList.add('fa', 'fa-envelope');
    contact_card.type = 'email';
    contact_card.name = 'worker_id';
    contact_card.placeholder = 'Example JohnDoe@gmail.com';
    contact_card.title = 'Enter your working email address';
    contact_block.innerHTML = "Please provide a working email address";
    signup_btn.name = 'new_hw';
    login_link.href = 'login.php?health_worker';
}
else if(current_page == 'http://localhost/hd/signup.php?patient') {
    id_icon.classList.remove('none');
    id_icon.classList.add('fa', 'fa-user');
    form_title.innerHTML = 'PATIENTS PANEL';
    id_card.name = 'patient_names';
    id_card.placeholder = 'Example John Doe';
    id_card.title = 'Enter your full names';
    id_block.innerHTML = 'Please provide your full names';
    contact_icon.classList.remove('none');
    contact_icon.classList.add('fa','fa-phone-alt');
    contact_card.type = 'text';
    contact_card.name = 'patient_number';
    contact_card.placeholder = 'Example +254123456789';
    contact_card.title = 'Enter your mobile phone number';
    contact_block.innerHTML = 'Please provide a working phone number';
    role.hidden = true;
    signup_btn.name = 'new_patient';
    login_link.href = 'login.php?patient';
}
else {
    window.location.href = 'index.php';
}
</script>

</body>
</html>