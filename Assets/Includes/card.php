<?php
    $sql = "select * from game;";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($game_row = mysqli_fetch_assoc($result)){
            ?>
            <div class="col mb-2">
                <div class="card bg-dark text-white border-secondary" style="width: 12rem; position: relative; overflow: hidden;">
                    <div class="content">
                        <?php 
                            if(isset($_SESSION['u_id'])){
                                $as = -1;
                                $sql = "select `as` from user_has_game where u_id = '".$u_id."' and g_id = ".$game_row['g_id'];
                                $result2 = mysqli_query($con, $sql);
                                $resultCheck2 = mysqli_num_rows($result2);
                                if($resultCheck2 > 0){
                                    $as_row = mysqli_fetch_assoc($result2);
                                    $as = $as_row['as'];
                                }
                            }
                        ?>

                        <img src="<?php echo $game_row['logo']?>" class="card-img-top content-image" alt="Logo">
                        <div class="content-overlay p-2">
                            <?php 
                                if(isset($_POST['add-cart'])){
                                    if($as == 1){
                                        mysqli_query($con, "update user_has_game set `as`=0 where g_id=".$game_row['g_id']);
                                    }
                                    else{
                                        $sql = "insert into user_has_game (u_id, g_id, `as`) values(?, ?, 0)";
                                        $stmt = mysqli_stmt_init($con);
                                        if(!mysqli_stmt_prepare($stmt, $sql)){
                                            echo "sql statement failed";
                                        } else{
                                            mysqli_stmt_bind_param($stmt, "ss", $u_id, $game_row['g_id']); 
                                            mysqli_stmt_execute($stmt);
                                        }
                                    }
                                    //header("Location: store.php?cart=added");
                                }
                                if(isset($_POST['add-wl'])){
                                    if($as == 0){
                                        mysqli_query($con, "update user_has_game set `as`=1 where g_id=".$game_row['g_id']);
                                    }
                                    else{
                                        $sql = "insert into user_has_game (u_id, g_id, `as`) values(?, ?, 1)";
                                        $stmt = mysqli_stmt_init($con);
                                        if(!mysqli_stmt_prepare($stmt, $sql)){
                                            echo "sql statement failed";
                                        } else{
                                            mysqli_stmt_bind_param($stmt, "ss", $u_id, $game_row['g_id']); 
                                            mysqli_stmt_execute($stmt);
                                        }
                                    }
                                    //header("Location: store.php?wishlist=added");
                                }
                                if(isset($_POST['neg-cart']) || isset($_POST['neg-wl'])){
                                    mysqli_query($con, "DELETE FROM user_has_game WHERE u_id='".$u_id."';");
                                    //header("Location: store.php?=removed");
                                }
                            ?>

                            <a href="https://dayen-creation.itch.io/roll-it" role="button" class="btn btn-outline-light try-btn btn-floating rounded" >
                                Try It!
                            </a>
                            
                            <?php if(isset($_SESSION['u_id'])) : ?>

                                <?php if($as == 1) :?>
                                    <form action="store.php" method="POST">
                                        <button class="btn btn-outline-light btn-floating wishlist-btn"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from wishlist" type="submit" name="neg-wl">
                                            <i class="fa fa-check fa-fw"></i>
                                        </button>
                                    </form>
                                <?php elseif($as == 0 || $as == -1) :?>
                                    <form action="store.php" method="POST">
                                        <button class="btn btn-outline-light btn-floating rounded-circle wishlist-btn"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist" type="submit" name="add-wl">
                                            <i class="fa fa-plus fa-fw"></i>
                                        </button>
                                    </form>
                                <?php endif?>
                                
                                
                                <?php if($as == 0) :?>
                                    <form action="store.php" method="POST">
                                    <button class="btn btn-floating cart-btn" name="neg-cart" type="submit">
                                        <i class="fa fa-check fa-fw text-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from cart"></i>
                                    </button>
                                    </form>
                                <?php elseif($as == 1 || $as == -1) : ?>
                                    <form action="store.php" method="POST">
                                        <button class="btn btn-floating cart-btn" type="submit" name="add-cart" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to cart"> -->
                                            <i class="fa fa-shopping-cart fa-fw text-light"></i>
                                        </button>
                                    </form>
                                <?php endif?>
                                
                            <?php endif?>
                            <a href="game.php?varname=<?php echo $game_row['g_id']?>" class="w-100 h-100" style="position: absolute; top: 0; left: 0;"></a>
                        </div>
                    </div>
                    
                    <div class="card-body product p-0 w-100" style="height:95px;">
                        <div class="specifies bg-dark mt-0" style="padding: 16px 16px 16px 16px;">
                            <h6 class="card-title line-clamp"><small><?php echo $game_row['g_name']?></small></h6>
                            <p class="card-text base" style="font-size: 12px;">$<?php echo $game_row['price']?></p>
                            <!-- <ul class="list-inline card-text base" style="font-size: 12px;">
                                <li class="list-inline-item px-1 rounded bg-success">-33%</li>
                                <li class="list-inline-item card-text"><s>$2.99</s></li>
                                <li class="list-inline-item card-text">$1.99</li>
                            </ul> -->
                            <p class="mb-0" style="font-size: 14px;">Genre: 
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
                            <p class="mb-2 text-center">4.7</p>
                        </div>	
                    </div>
                </div>
            </div>
            <?php
        }
    }
?>