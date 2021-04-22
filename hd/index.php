<?php require_once 'load.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once root.hw.inc.'/refence.php';?>
    <title>HEART DISEASE</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <h5>HEART DISEASE PREDICTION PROGRAM</h5>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-auto shadow-lg rounded">
            <div class="form-group">
                <p class="text"><!-- brief description--></p>
            </div>
            <div class="form-group">
                <a href="login.php?health_worker" class="btn btn-outline-primary shadow-lg rounded" title="proceed as a health worker">Health Worker</a>
                <a href="login.php?patient" class="btn btn-outline-dark shadow-lg rounded  ml-5" title="proceed as a patient">Patient</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>