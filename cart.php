<?php
    include_once 'Assets/Includes/connection.php';
    $u_id = $_SESSION['u_id'];
    $sql = "SELECT * FROM game WHERE g_id in (select g_id from user_has_game where `as`=0 and u_id='".$u_id."');";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>cart</title>
    <?php include_once 'Assets/Includes/headComponents.php'?>
    <style>
        .btn-custom{
            color: rgb(156, 156, 156);
        }
        .btn-custom:hover{
            color: whitesmoke;
        }
        .img-custom:hover{
            opacity: 50%;
        }
    </style>
</head>
<body class="bg-dark">
    <h1 class="display-1 text-light text-center fw-bold my-3">My Cart</h1>
    <?php if($resultCheck = 0) : ?>
        <h1 class="m-auto">Library Empty</h1>
    <?php else : ?>
	<div class="container text-light shadow-lg mb-5">
        <div class="row">
            <?php  
                while($game_row = mysqli_fetch_assoc($result)){
                    ?>
            <div class="col-md-9">
                <div class="row mb-3">
                    <div class="col-md-2 m-auto d-flex justify-content-center">
                        <div class="form-check form-switch" >
                            <input style="width: 3rem; height: 1.5rem;" class="form-check-input" type="checkbox" id="item" name="item" value="1">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="card bg-dark">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <a href="game.php?varname=<?php echo $game_row['g_id']?>">
                                        <img src="<?php echo $game_row['logo']?>" class="img-fluid rounded-start img-custom" alt="...">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h1 class="card-title display-6 lh-1"><small><?php echo $game_row['g_name']?></small></h1>
                                        <div class="d-flex" style="position: absolute; bottom: 0; left: auto;">
                                        <p class="mb-0 me-4" style="font-size: 14px;">Genre: 
                                            <?php
                                                $temp_sql = 'SELECT `cat_name` FROM `catagories` WHERE cat_id='.$game_row['main_catagory_id'];
                                                $temp_result = mysqli_query($con, $temp_sql);
                                                $value = mysqli_fetch_assoc($temp_result);
                                                echo $value['cat_name'];
                                            ?>
                                        </p>
                                        <p style="font-size: 14px;">Feature:
                                            <?php
                                                $temp_sql = 'SELECT `f_name` FROM `features` WHERE f_id='.$game_row['main_feature_id'];
                                                $temp_result = mysqli_query($con, $temp_sql);
                                                $value = mysqli_fetch_assoc($temp_result);
                                                echo $value['f_name'];
                                            ?>
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pt-5 p-2">
                                    <p class="card-text text-end" style="font-size: 12px;">$<?php echo $game_row['price']?></p>
                                    <!-- <ul class="list-inline card-text text-end" style="font-size: 12px;">
                                        <li class="list-inline-item px-1 rounded bg-success">-33%</li>
                                        <li class="list-inline-item card-text"><s>$2.99</s></li>
                                        <li class="list-inline-item card-text">$1.99</li>
                                    </ul>
                                    <p class="card-text text-end" style="font-size: 12px;">Sale ends 9/6/2022 at 9:00 PM</p> -->
                                    
                                    <div class="mb-3" style="position: absolute; bottom: 0; right: 0;">
                                        <button class="btn btn-floating btn-sm border-0 btn-custom">
                                            <i class="fa fa-plus-circle fa-xs"></i><small><u>Move To Wishlist</u></small>
                                        </button>
                                        <button class="btn btn-floating btn-sm border-0 btn-custom">
                                            <small><u>Remove</u></small>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 border-top border-primary border-2 px-4 pb-5" style="background-color: rgb(38, 45, 49); min-height: 500px">
                <h1 class="text-center my-5">Summary</h1>
                <div class="d-flex justify-content-between">
                    <p class="mb-0"><small>Price:</small></p>
                    <p class="mb-0"><small>$11.9</small></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p><small>Sale Discount:</small></p>
                    <p><small>$11.9</small></p>
                </div>
                <div class="border-bottom border-secondary"></div>
                <div class="d-flex justify-content-between">
                    <p><small>Subtotal:</small></p>
                    <p><small>$11.9</small></p>
                </div>
                <button class="btn btn-primary btn-sm w-100"><small>CHECK OUT</small></button>
            </div>
                    <?php
                }
            ?>
        </div>
	</div>
    <?php endif?>
</body>
</html>