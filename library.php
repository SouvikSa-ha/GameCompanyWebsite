<?php
    include_once 'Assets/Includes/connection.php';

    $u_id = 1;
    $sql = 'SELECT * FROM `game` WHERE g_id in (select g_id from user_has_game where as=2 and u_id='.$u_id.');';
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Legacy Creation</title>
    <?php include_once 'Assets/Includes/headComponents.php'?>
</head>
<body class="bg-dark">
    <?php if($resultCheck = 0) : ?>
        <h1 class="m-auto">Library Empty</h1>
    <?php else : ?>
        <?php  
            while($game_row = mysqli_fetch_assoc($result)){
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col mb-2">
                            <a href="">
                                <div class="card bg-dark text-white border-secondary" style="width: 12rem;">
                                    <img src="<?php echo $game_row['logo']?>" class="card-img-top content-image" alt="Logo">
                                    <div class="card-body">
                                        <h6 class="card-text line-clamp"><small><?php echo $game_row['g_name']?></small></h6>
                                        <p>Install</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
    <?php endif;?>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>