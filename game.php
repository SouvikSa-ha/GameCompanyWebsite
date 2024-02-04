<?php
    include_once 'Assets/Includes/connection.php';
    $game_id = $_GET['varname'];
    $sql = 'SELECT * FROM `game` WHERE g_id='.$game_id;
    $result = mysqli_query($con, $sql);
    $game = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Legacy Creation/Game</title> 
    <?php include_once 'Assets/Includes/headComponents.php'?>
    <link rel="stylesheet" href="Assets/css/circular_progress.css">
    <link rel="stylesheet" href="Assets/css/tab.css">
    <!-- 2nd stroke-dasharray copy 51.54.., 5 as many times as stroke to fill -->
</head>
<body>
    <main class="bg-dark">
        <div class="container text-light">
            <div class="d-flex justify-content-between">
                <div class="mt-4">
                    <h1 class="display-3"><?php echo $game['g_name']?></h1>
                    <div class="d-flex justify-content-start">
                        <p>
                            <?php
                                /*$temp_sql = 'SELECT `legacy_rating` FROM `rating` WHERE rating_id='.$game['rating_id'];
                                $temp_result = mysqli_query($con, $temp_sql);
                                $value = mysqli_fetch_assoc($temp_result);
                                echo $value['cat_name'];*/
                            ?>    
                        </p>
                        <p class="px-5"><i class="fa fa-dot-circle fa-2xs px-2"></i>
                            <?php
                                $sql = 'SELECT `cat_name` FROM `catagories` WHERE cat_id='.$game['main_catagory_id'];
                                $result = mysqli_query($con, $sql);
                                $value = mysqli_fetch_assoc($result);
                                echo $value['cat_name'];
                            ?>   
                        </p>
                        <p><i class="fa fa-dot-circle fa-2xs px-2"></i>
                            <?php
                                $sql = 'SELECT `f_name` FROM `features` WHERE f_id='.$game['main_feature_id'];
                                $result = mysqli_query($con, $sql);
                                $value = mysqli_fetch_assoc($result);
                                echo $value['f_name'];
                            ?>
                        </p>
                    </div>
                </div>
                <img class="mt-5 me-4" src="<?php echo $game['esrb_image']?>" alt="" height="128px" width="auto">
            </div>
            <h1 class="display-5 border-bottom border-secondary opacity-75">OverView</h1>
            <div class="row py-5 justify-content-between align-items-center">
                <div class="col-md-8">
                    <div id="carouselGameContents" class="carousel slide carousel-fade" data-bs-interval="false" data-bs-pause="false">
                        <div class="carousel-inner mb-5 shadow-1-strong rounded-3">
                            <div class="carousel-item active">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/<?php echo $game['trailer_link']?>" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/7445.jpg" class="d-block w-100" alt="..." />
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/index.jpeg" class="d-block w-100" alt="..." />
                            </div>
                        </div>
                        <div class="carousel-indicators" style="margin-bottom: -20px;">
                            <button type="button" class="active bg-dark" data-bs-target="#carouselGameContents" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" style="width: 100px;">
                                <img class="d-block w-100 shadow-1-strong rounded" src="assets/images/future-gaming.jpg" class="img-fluid" />
                            </button>
                            <button type="button" class="bg-dark" data-bs-target="#carouselGameContents" data-bs-slide-to="1" aria-label="Slide 2" style="width: 100px;">
                                <img class="d-block w-100 shadow-1-strong rounded" src="assets/images/7445.jpg" class="img-fluid" />
                            </button>
                            <button type="button" class="bg-dark" data-bs-target="#carouselGameContents" data-bs-slide-to="2" aria-label="Slide 3" style="width: 100px;">
                                <img class="d-block w-100 shadow-1-strong rounded" src="assets/images/index.jpeg" class="img-fluid" />
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-gradient border-top-0" style="background-color: black; width: 18rem">
                        <img src="<?php echo $game['banner']?>" class="card-img-top px-4 mt-3" alt="This is a banner">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text text-light opacity-75"><small>$<?php echo $game['price']?></small></p>
                                <a class="btn btn-outline-primary btn-sm" type="button" href="#"><span>Try it!<span></a>
                            </div>
                            <button class="btn btn-success w-100 bg-gradient"></i>BUY NOW</button>
                            <button class="btn btn-outline-light w-100 my-2"><i class="fa fa-shopping-cart me-3"></i>ADD TO CART</button>
                            <button class="btn btn-outline-light s w-100"><i class="fa fa-plus-circle me-3"></i>ADD TO WISHLIST</button>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-light border-top border-secondary lh-1 d-flex justify-content-between"
                                style="background-color: black; --bs-border-opacity: .75">
                                <p class="opacity-75">Developer</p>
                                <p class="opacity-75"><?php echo $game['developer']?></p>
                            </li>
                            <li class="list-group-item text-light border-top border-secondary lh-1 d-flex justify-content-between"
                                style="background-color: black; --bs-border-opacity: .75">
                                <p class="opacity-75">Publisher</p>
                                <p class="opacity-75"><?php echo $game['publisher']?></p>
                            </li>
                            <li class="list-group-item text-light border-secondary d-flex justify-content-between"
                                style="background-color: black; --bs-border-opacity: .75">
                                <p class="opacity-75">Release Date</p>
                                <p class="opacity-75"><?php echo $game['release_date']?></p>
                            </li>
                            <li class="list-group-item text-light border-secondary d-flex justify-content-between"
                                style="background-color: black; --bs-border-opacity: .75">
                                <p class="opacity-75">Updated On</p>
                                <p class="opacity-75"><?php echo $game['update_date']?></p>
                            </li>
                            <li class="list-group-item text-light border-secondary d-flex justify-content-between"
                                style="background-color: black; --bs-border-opacity: .75">
                                <p class="opacity-75">Platform</p>
                                <div>   
                                    <?php if(!empty($game['w_id'])) : ?>
                                        <i class="fa-brands ms-2 fa-windows"></i>
                                    <?php endif; ?>  

                                    <?php if(!empty($game['m_id'])) : ?>
                                        <i class="fa-brands ms-2 fa-apple"></i>
                                    <?php endif; ?>

                                    <?php if(!empty($game['a_id'])) : ?>
                                        <i class="fa-brands ms-2 fa-android"></i>
                                    <?php endif; ?> 
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="fs-5 lh-sm" style="text-align: justify;">
                <?php echo $game['abstract']?>
            </p>
            <div class="row px-3 pb-5">
                <div class="col-sm-6 border-start pb-3">
                    <p>
                        <span class="text-white opacity-75">Genres</span><br>
                        <?php 
                            $sql = "select cat_name from catagories where cat_id in (select cat_id from game_has_catagories where g_id=".$game_id.");";
                            $result = mysqli_query($con, $sql);
                            while($cat_row = mysqli_fetch_assoc($result)){?>
                                <a href="#" class="text-white me-1"><?php echo $cat_row['cat_name']?></a>
                        <?php        
                            }
                        ?>
                    </p>
                </div>
                <div class="col-sm-6 border-start">
                    <p>
                        <span class="text-white opacity-75">Features</span><br>
                        <?php 
                            $sql = "select f_name from features where f_id in (select f_id from game_has_features where g_id=".$game_id.");";
                            $result = mysqli_query($con, $sql);
                            while($f_row = mysqli_fetch_assoc($result)){?>
                                <a href="#" class="text-white me-1"><?php echo $f_row['f_name']?></a>
                        <?php        
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="d-grid gap-5">
                <!-- About -->
                <div>
                    <h6>About</h6>
                    <p class="lh-sm" style="text-align: justify;"><small>
                        <?php echo $game['description']?>
                    </small></p>
                </div>
                <!-- Follow -->
                <div>
                    <h3>Follow Us</h3>
                    <div class="p-4 text-center" style="background-color: black;">
                        <a class="btn btn-floating m-1" href="#!" role="button">
                            <i class="fa-brands fa-discord fa-xl fa-fw text-light"></i>
                        </a>
                        <a class="btn btn-floating m-1" href="#!" role="button">
                            <i class="fa-brands fa-facebook fa-xl fa-fw text-light"></i>
                        </a>
                        <a class="btn btn-floating m-1" href="#!" role="button">
                            <i class="fa fa-earth fa-xl fa-fw text-light"></i>
                        </a>
                        <a class="btn btn-floating m-1" href="#!" role="button">
                            <i class="fa-brands fa-instagram fa-xl fa-fw text-light"></i>
                        </a>
                        <a class="btn btn-floating m-1" href="#!" role="button">
                            <i class="fa-brands fa-twitter fa-xl fa-fw text-light"></i>
                        </a>
                        <a class="btn btn-floating m-1" href="#!" role="button">
                            <i class="fa-brands fa-youtube fa-xl fa-fw text-light"></i>
                        </a>
                        <a class="btn btn-floating m-1" href="#!" role="button">
                            <i class="fa-brands fa-twitch fa-xl fa-fw text-light"></i>
                        </a>
                    </div>
                </div>
                <!-- rating -->
                <div>
                    <h3>Legacy Rating</h3>
                    <p class="opacity-50"><small>Captured from players in the Legacy Games ecosystem.</small></p>
                    <div class="row text-center py-3">
                        <h1 class="display-1">
                            <?php
                            /*$temp_sql = 'SELECT `legacy_rating` FROM `rating` WHERE rating_id='.$game['rating_id'];
                            $temp_result = mysqli_query($con, $temp_sql);
                            $value = mysqli_fetch_assoc($temp_result);
                            echo $value['cat_name'];*/
                            ?>
                        </h1>
                    </div>
                    <div class="row text-center py-3">
                        <h1 class="display-3"><?php echo $game['downloads']?></h1>
                        <p class="fs-3 lh-1">Downloads</p>
                    </div>
                    <h3>Ratings</h3>
                    <div class="row pt-5">
                        <div class="col-sm-2">
                            <div class="box">
                                <div id="b1">
                                    <svg>
                                        <circle cx="50" cy="50" r="35" />
                                        <circle cx="50" cy="50" r="35" />
                                    </svg>
                                    <p>90%</p>
                                </div>
                            </div>
                            <p class="text-center">Critics Recommend</p>
                        </div>
                        <div class="col-sm-2">
                            <div class="box">
                                <div id="b2">
                                    <svg>
                                        <circle cx="50" cy="50" r="35" />
                                        <circle cx="50" cy="50" r="35" />
                                    </svg>
                                    <p>70%</p>
                                </div>
                            </div>
                            <p class="text-center">Top Critic Average</p>
                        </div>
                        <div class="col-sm-2">
                            <div class="_box">
                                <svg>
                                    <circle cx="50" cy="50" r="36"></circle>
                                    <circle cx="50" cy="50" r="36"></circle>
                                </svg> 
                                <p><small>Mighty</small></p>
                            </div>
                            <p class="text-center">OpenCritic Rating</p>
                        </div>
                        <div class="col-sm-6 d-flex align-items-end justify-content-end px-5 py-3">
                            <a href="https://opencritic.com/game/9783/far-cry-6" class="text-light" style="font-size: 10px; text-decoration: none;">
                                SEE ALL REVIEWS
                                <i class="ms-1 fa-fw fa-sm fa fa-external-link-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row px-5 justify-content-around">
                        <div class="col-md-3 m-2 p-4 rounded-3" style="background-color: black; border: solid 3px orangered; position: relative;">
                            <blockquote class="blockquote pb-3 border-bottom">
                                <h1 class="mb-3 fs-5">IGN</h1>
                                <footer class="blockquote-footer fs-6 ms-2"><small>by Some One</small></footer>
                            </blockquote>
                            <p>
                                9/10
                            </p>
                            <p>
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                optio, eaque rerum! Provident similique accusantium nemo autem."
                            </p>
                            <div style="position: absolute; bottom: 1.5rem;">
                                <a href="https://www.ign.com/articles/far-cry-6-review" class="text-light">
                                    READ FULL REVIEW
                                    <i class="ms-1 fa-fw fa fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 m-2 p-4 rounded-3" style="background-color: black; border: solid 3px orangered; position: relative;">
                            <blockquote class="blockquote pb-3 border-bottom">
                                <h1 class="mb-3 fs-5">IGN</h1>
                                <footer class="blockquote-footer fs-6 ms-2"><small>by Some One</small></footer>
                            </blockquote>
                            <p>
                                9/10
                            </p>
                            <p class="mb-5">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                optio, eaque rerum! Provident similique accusantium nemo autem."
                            </p>
                            <div style="position: absolute; bottom: 1.5rem;">
                                <a href="https://www.ign.com/articles/far-cry-6-review" class="text-light">
                                    READ FULL REVIEW
                                    <i class="ms-1 fa-fw fa fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 m-2 p-4 rounded-3" style="background-color: black; border: solid 3px orangered; position: relative;">
                            <blockquote class="blockquote pb-3 border-bottom">
                                <h1 class="mb-3 fs-5">IGN</h1>
                                <footer class="blockquote-footer fs-6 ms-2"><small>by Some One</small></footer>
                            </blockquote>

                            <p>9/10</p>
                            <p class="mb-5">
                                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                optio."
                            </p>
                            <div style="position: absolute; bottom: 1.5rem;">
                                <a href="https://www.ign.com/articles/far-cry-6-review" class="text-light">
                                    READ FULL REVIEW
                                    <i class="ms-1 fa-fw fa fa-external-link-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center opacity-75"><small>Reviews provided by OpenCritic</small></p>
                </div>
                <!-- spec -->
                <div>
                    <h3>Specifications</h3>
                    <div class="container rounded-5 m-5 p-5 w-auto" style="background-color: rgb(21, 21, 21);">
                        <ul class="nav nav-tabs mb-2">
                            <?php 
                                $active = 0;
                                $tab = '';
                            ?>
                            <?php if(!empty($game['w_id'])) : $active = 1; $tab = 'w';?>
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#tabWindows">Windows</a>
                                </li>
                            <?php endif; ?>  

                            <?php if(!empty($game['m_id'])) : ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($active === 0) : $active = 1; $tab = 'm';?>active<?php endif; ?>" data-bs-toggle="tab" href="#tabMac">Mac</a>
                                </li>
                            <?php endif; ?>

                            <?php if(!empty($game['a_id'])) : ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($active === 0) : $active = 1; $tab = 'a';?>active<?php endif; ?>" data-bs-toggle="tab" href="#tabAndroid">Android</a>
                                </li>
                            <?php endif; ?> 
                        </ul>
                        
                        <div class="tab-content text-white" id="myTabContent">
                            <div class="tab-pane fade <?php if($tab === 'w') : ?>active show<?php endif; ?>" id="tabWindows" role="tabpanel">
                                <?php 
                                    $sql = "select * from windows where w_id=".$game['w_id'].';';
                                    $result = mysqli_query($con, $sql);
                                    $w_specs = mysqli_fetch_assoc($result) ;
                                ?> 
                                <div class="row mx-5">
                                    <div class="col-md-6">
                                        <p class="text-secondary mb-5">Minimum</p>
                                        <div class="d-grid gap-1">
                                            <p><span class="text-secondary">OS</span><br><?php echo $w_specs['m_os']?></p>
                                            <p><span class="text-secondary">CPU</span><br><?php echo $w_specs['m_cpu']?></p>
                                            <p><span class="text-secondary">GPU</span><br><?php echo $w_specs['m_gpu']?></p>
                                            <p><span class="text-secondary">Memory</span><br><?php echo $w_specs['m_memory']?></p>
                                            <p><span class="text-secondary">Storage</span><br><?php echo $w_specs['m_storage']?></p>
                                            <p><span class="text-secondary">Direct X</span><br><?php echo $w_specs['m_directx']?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-secondary mb-5">Recommended</p>
                                        <div class="d-grid gap-1">
                                            <p><span class="text-secondary">OS</span><br><?php echo $w_specs['r_os']?></p>
                                            <p><span class="text-secondary">CPU</span><br><?php echo $w_specs['r_cpu']?></p>
                                            <p><span class="text-secondary">GPU</span><br><?php echo $w_specs['r_gpu']?></p>
                                            <p><span class="text-secondary">Memory</span><br><?php echo $w_specs['r_memory']?></p>
                                            <p><span class="text-secondary">Storage</span><br><?php echo $w_specs['r_storage']?></p>
                                            <p><span class="text-secondary">Direct X</span><br><?php echo $w_specs['r_directx']?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-5">
                                    <p><span class="text-secondary">Logins</span><br><?php echo $game['login_requirements']?></p>
                                </div>
                                <div class="row m-5 border-bottom">
                                    <p>
                                        <span class="text-secondary">Languages Supported</span><br>
                                        <?php echo $game['language_support']?>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade <?php if($tab === 'm') : ?>active show<?php endif; ?>" id="tabMac" role="tabpanel">
                                <?php 
                                    $sql = "select * from mac where m_id=".$game['m_id'].';';
                                    $result = mysqli_query($con, $sql);
                                    $m_specs = mysqli_fetch_assoc($result) ;
                                ?> 
                                <div class="row mx-5">
                                    <div class="col-md-6">
                                        <p class="text-secondary mb-5">Minimum</p>
                                        <div class="d-grid gap-1">
                                            <p><span class="text-secondary">OS</span><br><?php echo $m_specs['m_os']?></p>
                                            <p><span class="text-secondary">Processor</span><br><?php echo $m_specs['m_processor']?></p>
                                            <p><span class="text-secondary">Memory</span><br><?php echo $m_specs['m_memory']?></p>
                                            <p><span class="text-secondary">Storage</span><br><?php echo $m_specs['m_storage']?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-secondary mb-5">Recommended</p>
                                        <div class="d-grid gap-1">
                                            <p><span class="text-secondary">OS</span><br><?php echo $m_specs['r_os']?></p>
                                            <p><span class="text-secondary">Processor</span><br><?php echo $m_specs['r_processor']?></p>
                                            <p><span class="text-secondary">Memory</span><br><?php echo $m_specs['r_memory']?></p>
                                            <p><span class="text-secondary">Storage</span><br><?php echo $m_specs['r_storage']?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-5">
                                    <p><span class="text-secondary">Graphics</span><br><?php echo $m_specs['graphics']?></p>
                                </div>
                                <div class="row m-5">
                                    <p><span class="text-secondary">Logins</span><br><?php echo $game['login_requirements']?></p>
                                </div>
                                <div class="row m-5 border-bottom">
                                    <p>
                                        <span class="text-secondary">Languages Supported</span><br>
                                        <?php echo $game['language_support']?>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade <?php if($tab === 'a') : ?>active show<?php endif; ?>" id="tabAndroid" role="tabAndroid">
                                <?php 
                                    $sql = "select * from android where a_id=".$game['a_id'].';';
                                    $result = mysqli_query($con, $sql);
                                    $a_specs = mysqli_fetch_assoc($result) ;
                                ?> 
                                <div class="row mx-5">
                                    <p class="text-secondary mb-5">Compatibility</p>
                                    <div class="col-md-6">
                                        <div class="d-grid gap-1">
                                            <p><span class="text-secondary">Version</span><br><?php echo $a_specs['a_version']?></p>
                                            <p><span class="text-secondary">Memory</span><br><?php echo $a_specs['a_memory']?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-grid gap-1">
                                            <p><span class="text-secondary">Download Size</span><br><?php echo $a_specs['a_down_size']?></p>
                                            <p><span class="text-secondary">Requires</span><br><?php echo $a_specs['a_requires']?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-5">
                                    <p><span class="text-secondary">Logins</span><br><?php echo $game['login_requirements']?></p>
                                </div>
                                <div class="row m-5 border-bottom">
                                    <p><span class="text-secondary">Permissions</span><br></p>
                                    <?php echo $a_specs['a_permission']?>         
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="text-secondary">
                            <?php echo $game['copyright']?>
                            </p>
                            <a href="https://thqnordic.com/legal/privacy" class="text-light" style="text-decoration: none;">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>