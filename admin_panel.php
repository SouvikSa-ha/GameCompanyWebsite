
<?php
    include_once 'Assets/Includes/connection.php';
    //$_SESSION['gamename'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Legacy Creation/admin_panel</title>
    <?php include_once 'Assets/Includes/headComponents.php'?>
    <link rel="stylesheet" type="text/css" href="Assets/css/virtual-select.min.css">
    <link rel="stylesheet" href="Assets/css/tab.css">
    <link rel="stylesheet" href="Assets/css/card_style.css">
</head>
<body class="bg-dark">
    <div class="container text-light">
        <div class="tab-content" id="myTabContent">
            <ul class="nav nav-tabs mb-2">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#ng">Upload New Game</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#n">Add News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#e">Add Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#c">Add Coupons</a>
                </li>
            </ul>
            <div class="tab-pane fade active show" id="ng" role="tabpanel">
                <form action="">
                    <div class="form-floating text-dark">
                        <input type="text" class="form-control" id="a" placeholder="a">
                        <label for="a">DISPLAY NAME</label>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="n" role="tabpanel">
                
            </div>
            <div class="tab-pane fade" id="e" role="tabAndroid">
                
            </div>
            <div class="tab-pane fade" id="c" role="tabAndroid">
                <form action="" >
                    <div class="form-floating m-auto text-dark" style="width: 300px;">
                        <input type="text" class="form-control" id="c" placeholder="c">
                        <label for="c">NEW COUPON</label>
                    </div>
                    <div class="d-flex m-0">
                        <button class="btn btn-primary">CLEAR</button>
                        <button type="submit" class="btn btn-primary">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>