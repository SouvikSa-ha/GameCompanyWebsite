<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: login.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM accounts WHERE account_mail='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $query1 = mysqli_query($conn, "SELECT * FROM user_info WHERE account_no='{$row['account_no']}'");
        $row1 = mysqli_fetch_assoc($query1);
        $_SESSION['SESSION_USERNAME'] = $row1['user_name'];
        $_SESSION['u_id'] = $row1['u_id'];
        echo "Welcome " . $row1['user_name'] . " <a href='index.php'>go back</a>";
        //$msg = "<div class='alert alert-info'>Welcome " . $row1['user_name'] ."</div>";
        //echo $msg;
    }
?>