<?php
    include_once 'Assets/Includes/connection.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Legacy Creation</title>
    <?php include_once 'Assets/Includes/headComponents.php'?>
    <link rel="stylesheet" href="Assets/css/card_style.css">

    <style>
        #smart-scroll{
            position: fixed;
            top: 56px;
            right: 0;
            left: 0;
            z-index: 10;
            transition: top 0.3s ease-out;
        }
        
        .icon{
            border: 1px solid silver; border-radius: 50%; padding: 0.5em;
        }

        .game-card{
            min-width: 12rem;
            width: 12rem;
            position: relative;
            overflow: hidden;
        }

        .horizontal-scroll{
            overflow-y: hidden;
            overflow-x: scroll;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }

        .horizontal-scroll::-webkit-scrollbar {
            border-radius: .25rem;
            height: 5px;
        }
        .horizontal-scroll::-webkit-scrollbar-track {
            background: #323232;
        }
        .horizontal-scroll::-webkit-scrollbar-thumb {
            background: rgb(110, 110, 110);
        }
        .horizontal-scroll::-webkit-scrollbar-thumb:hover {
            background: rgb(218, 218, 218);
        }
        
        @media only screen and (min-width:991.99px) { 
            .custom-width{
                max-width:fit-content;
            } 
        }
        @media only screen and (min-width:991.99px) { 
            .custom-spacing{
                margin-left: 3rem;
            } 
        }

    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: black;">
        <nav class="container-fluid" aria-label="Main navigation">
            <a class="navbar-brand d-none d-lg-block" href="#">
                <img src="images/p01.webp" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Legacy Creation
            </a>
    
            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#stickyNavbarSupportedContent" aria-controls="stickyNavbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <a class="navbar-brand me-xs-2 d-block d-lg-none" href="#" aria-label="Bootstrap">
                <img src="images/p01.webp" alt="" width="30" height="24" class="d-inline-block align-text-top">
            </a>
    
            <?php
                if (isset($_SESSION['SESSION_EMAIL'])) {
                    ?>
                        <button class="navbar-toggler d-block <?/*replace d-none to d-block when signed in*/?>" type="button" data-bs-toggle="collapse" data-bs-target="#stickyNavbarSupportedContent2" aria-controls="stickyNavbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <?php
                }
                else{
                    ?>
                        <button class="navbar-toggler d-none <?/*replace d-none to d-block when signed in*/?>" type="button" data-bs-toggle="collapse" data-bs-target="#stickyNavbarSupportedContent2" aria-controls="stickyNavbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <?php
                }
            ?>
            <div class="collapse navbar-collapse justify-content-center" id="stickyNavbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="store.php">Store</a>
                    </li>
    
                    <li class="nav-item dropdown show px-2">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="action.html">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            
            <?php
                if (isset($_SESSION['SESSION_EMAIL'])) {
                    ?>
                        <div class="collapse navbar-collapse custom-width" id="stickyNavbarSupportedContent2">
                            <ul class="navbar-nav mb-2 mb-lg-0 align-items-center"> <?/*remove d-none when signed in*/?>
                                <li class="nav-item px-2">
                                    <a class="nav-link" aria-current="page" href="index.php"><i class="fa fa-heart fa-xl"></i></a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart fa-xl"></i></a>
                                </li>
                                <li class="nav-item dropstart px-2">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="Assets/images/p01.webp" class="rounded-circle" alt="" style="height: 30px; width: 30px;"></a>
                                    </a>
                                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                        <li class="ps-3 text-light">UserName</li>
                                        <li><hr class="dropdown-divider text-secondary"></li>
                                        <li><a class="dropdown-item text-light" href="account.php">Account</a></li>
                                        <li><a class="dropdown-item text-light" href="#">Coupons</a></li>
                                        <li><a class="dropdown-item text-light" href="#">FAQ</a></li>
                                        <li><a class="dropdown-item text-light" href="#">Terms Of Services</a></li>
                                        <li><a class="dropdown-item text-light" href="#">Privacy Policy</a></li>
                                        <li><hr class="dropdown-divider text-secondary"></li>
                                        <li><a class="dropdown-item text-light" href="logout.php">Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                
                        <button class="btn btn-success d-none custom-spacing" type="button"> <?/*replace d-block to d-none when signed in*/?>
                            Sign In
                        </button>
                    <?php
                }
                else{
                    ?>
                        <div class="collapse navbar-collapse custom-width" id="stickyNavbarSupportedContent2">
                            <ul class="navbar-nav mb-2 mb-lg-0 d-none align-items-center"> <?/*remove d-none when signed in*/?>
                                <li class="nav-item px-2">
                                    <a class="nav-link" aria-current="page" href="index.php"><i class="fa fa-heart fa-xl"></i></a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="store.php"><i class="fa fa-shopping-cart fa-xl"></i></a>
                                </li>
                                <li class="nav-item dropstart px-2">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="Assets/images/p01.webp" class="rounded-circle" alt="" style="height: 30px; width: 30px;"></a>
                                    </a>
                                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                        <li class="ps-3 text-light">UserName</li>
                                        <li><hr class="dropdown-divider text-secondary"></li>
                                        <li><a class="dropdown-item text-light" href="account.php">Account</a></li>
                                        <li><a class="dropdown-item text-light" href="#">Coupons</a></li>
                                        <li><a class="dropdown-item text-light" href="#">FAQ</a></li>
                                        <li><a class="dropdown-item text-light" href="#">Terms Of Services</a></li>
                                        <li><a class="dropdown-item text-light" href="#">Privacy Policy</a></li>
                                        <li><hr class="dropdown-divider text-secondary"></li>
                                        <li><a class="dropdown-item text-light" href="#">Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                
                        <a href="login.php" class="btn btn-success d-block custom-spacing" type="button"> <?/*replace d-block to d-none when signed in*/?>
                            Sign In
                        </a>
                    <?php
                }
            ?>
            
        </nav>
    </header>

    <main class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-lg m-3 rounded" id="smart-scroll">
            <div class="container p-1">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#news">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#trending">Trending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#featured">Featured</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#popular">Popular</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#all">All Games</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div data-bs-spy="scroll" data-bs-target="#smart-scroll" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <section id="news">
                <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <a class="carousel-item active" data-bs-interval="3000" href="action.html">
                            <img src="Assets/images/index.jpeg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </a>
                        <a class="carousel-item" data-bs-interval="3000">
                            <img src="Assets/images/7445.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </a>
                        <a class="carousel-item" data-bs-interval="3000">
                            <img src="Assets/images/future-gaming.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </a>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <div class="text-light d-grid gap-5">
                <section id="trending" class="container">
                    <h1 class="display-4 mb-3 mt-5">Trending Right Now!</h1>
                    <div class="border-top border-secondary py-3"></div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-4 mb-0">Windows</p>
                        <a href="" class="text-light"><small>See All</small></a>
                    </div>
                    <div class="horizontal-scroll">
                        <div class="d-flex">
                            <div class="card bg-dark text-white border-secondary me-3 game-card">
                                <div class="content">
                                    <img src="Assets/images/1.jpg" class="card-img-top content-image" alt="Logo">
                                    <div class="content-overlay p-2">
                                        <button class="btn btn-outline-light btn-floating rounded-circle wishlist-btn">
                                            <i class="fa fa-plus fa-fw"></i>
                                        </button>
                                        <a href="index.php" role="button" class="btn btn-outline-light try-btn btn-floating rounded" >
                                            Try It!
                                        </a>
                                        <button class="btn btn-floating cart-btn">
                                            <i class="fa fa-shopping-cart fa-fw text-light"></i>
                                        </button>
                                        <button class="btn btn-floating cart-btn">
                                            <i class="fa fa-check fa-fw text-light d-none"></i>
                                        </button>
                                        <a href="game.php" class="w-100 h-100" style="position: absolute; top: 0; left: 0;"></a>
                                    </div>
                                </div>
                                
                                <div class="card-body product p-0 w-100" style="height:95px;">
                                    <div class="specifies bg-dark mt-0" style="padding: 16px 16px 16px 16px;">
                                        <h6 class="card-title line-clamp"><small> Clans Clash of ClanClash of Clans dsbhdhbf dfsbhbfj</small></h6>
                                        <!-- <p class="card-text base" style="font-size: 12px;">$1.99</p> -->
                                        <ul class="list-inline card-text base" style="font-size: 12px;">
                                            <li class="list-inline-item px-1 rounded bg-success">-33%</li>
                                            <li class="list-inline-item card-text"><s>$2.99</s></li>
                                            <li class="list-inline-item card-text">$1.99</li>
                                        </ul>
                                        <p class="mb-0" style="font-size: 14px;">Genre: Action</p>
                                        <p style="font-size: 14px;">Feature: Multi-Player</p>
                                        <p class="mb-2 text-center">4.7</p>
                                    </div>	
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-4 mb-0">Mac</p>
                        <a href="" class="text-light"><small>See All</small></a>
                    </div>
                    <!-- vertical scroll goes here -->
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-4 mb-0">Android</p>
                        <a href="" class="text-light"><small>See All</small></a>
                    </div>
                    <!-- vertical scroll goes here -->
                </section>
    
                <section id="featured">
                    <div class="my-5"></div>
                    <div class="bg-info pb-5">
                    <div class="container">
                        <div class="row justify-content-around">
                            <h1 class="display-4 mb-3 mt-4">Featured Games</h1>
    
                            <div class="col-sm-6">
                                <div class="card bg-danger" style="max-width: 720px;">
                                    <div class="row g-0">
                                        <a href="" class="col-md-4">
                                            <img src="Assets/images/1.jpg" class="img-fluid rounded-start" alt="...">
                                        </a>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title fs-3">hello</h5>
                                                    <p><small class="text-light opacity-75">Free</small></p>
                                                </div>
                                                
                                                <p class="card-text lh-1" style="text-align: justify;"><small>Some quick example text to build on the card title and make up the bulk of the card's content.</small></p>
                                                <p class="mb-0" style="font-size: 14px;">Genre: Action</p>
                                                <p style="font-size: 14px;">Feature: Multi-Player</p>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#" class="btn btn-primary px-5">Play</a>
                                                    <div>
                                                        <button class="btn btn-floating border-0">
                                                            <i class="fa fa-plus-circle fa-lg fa-fw text-light"></i>
                                                        </button>
                                                        <button class="btn btn-floating border-0" role="button">
                                                            <i class="fa-solid fa-cart-plus fa-lg fa-fw text-light"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-center">
                                <div class="card bg-danger" style="max-width: 720px;">
                                    <div class="row g-0">
                                        <a href="" class="col-md-4">
                                            <img src="Assets/images/1.jpg" class="img-fluid rounded-start" alt="...">
                                        </a>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title fs-3">hello</h5>
                                                    <p><small class="text-light opacity-75">Free</small></p>
                                                </div>
                                                
                                                <p class="card-text lh-1" style="text-align: justify;"><small>Some quick example text to build on the card title and make up the bulk of the card's content.</small></p>
                                                <p class="mb-0" style="font-size: 14px;">Genre: Action</p>
                                                <p style="font-size: 14px;">Feature: Multi-Player</p>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#" class="btn btn-primary px-5">Play</a>
                                                    <div>
                                                        <button class="btn btn-floating border-0">
                                                            <i class="fa fa-plus-circle fa-lg fa-fw text-light"></i>
                                                        </button>
                                                        <button class="btn btn-floating border-0" role="button">
                                                            <i class="fa-solid fa-cart-plus fa-lg fa-fw text-light"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    </div>
                </section>
    
                <section id="popular">
                    <div class="my-5"></div>
                    <div class="container">
                        <h1 class="display-4 mb-3">Most Popular</h1>
                        <div class="border-top border-secondary py-3"></div>

                    </div>
                </section>
        
                <section id="alert">
                    <div class="my-5"></div>
                    <div class="bg-warning py-5" style="padding-left: 15%;">
                            <h1 class="display-4 mb-3 fw-bolder"><strong>New Game<br>Alerts!</strong></h1>
                            <p class="fs-5">Get notified when we release a<br>new game or a major update.</p>
                            <button class="btn btn-info text-white">Subscribe</button>
                    </div>
                </section>  
            </div>
        </div>
    </main> 

    <footer class="bg-dark bg-gradient text-center text-white">
        <div class="container p-4">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1 icon" href="#!" role="button">
                    <i class="fa-brands fa-facebook-f fa-lg fa-fw"></i>
                </a>
                <a class="btn btn-outline-light btn-floating m-1 icon" href="#!" role="button">
                    <i class="fa-brands fa-instagram fa-lg fa-fw"></i>
                </a>
                <a class="btn btn-outline-light btn-floating m-1 icon" href="#!" role="button">
                    <i class="fa-brands fa-twitter fa-lg fa-fw"></i>
                </a>
                <a class="btn btn-outline-light btn-floating m-1 icon" href="#!" role="button">
                    <i class="fa-brands fa-youtube fa-lg fa-fw"></i>
                </a>
            </section>

            <section class="mb-4 border-bottom">
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
            </section>

            <section class="mb-4">
                <div class="row justify-content-center text-secondary">
                    All requests will be processed manually by our developer or our support staff during
                </div>

                <div class="row justify-content-center text-white-50">
                    24 hours (Monday - Friday, 10.00 - 20.00 GMT+6)
                </div>

                <div class="row justify-content-center text-secondary">
                    We will try to reply as fast as we can. Will be in touch.
                </div>
            </section>
            
            <section class="mb-5">
                <button type="button" class="btn btn-outline-warning">Ask Question</button>
            </section>
            
            <section class="mb-4">
                <h6 class="fw-bold mb-4">CONTACT</h6>
                <div class="fw-light">
                    <p>
                        <i class="fa fa-home fa-fw me-2"></i>
                        Modhubag, Mogbazar, Dhaka-North
                    </p>
                    <p>
                        <i class="fa-regular fa-envelope fa-fw me-2"></i>
                        info@example.com
                    </p>
                    <p>
                        <i class="fa fa-phone fa-fw me-2"></i>
                        + 9 234 567 88
                    </p>
                </div>
            </section>
            
        </div>
        
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.4);">
            © 2020 Copyright: Legacy Creation
        </div>

    </footer>

    <script src="Assets/js/bootstrap.bundle.min.js"></script>
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("smart-scroll").style.top = "56px";
            } else {
                document.getElementById("smart-scroll").style.top = "-30px";

            }
            prevScrollpos = currentScrollPos;
        }
    </script>
</body>
</html>