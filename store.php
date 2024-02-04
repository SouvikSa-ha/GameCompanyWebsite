<?php
    include_once 'Assets/Includes/connection.php';
    if(isset($_SESSION['u_id'])){
        $u_id = $_SESSION['u_id'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Legacy Store</title>
    <?php include_once 'Assets/Includes/headComponents.php'?>
    <link rel="stylesheet" type="text/css" href="Assets/css/virtual-select.min.css">
    <link rel="stylesheet" href="Assets/css/tab.css">
    <link rel="stylesheet" href="Assets/css/card_style.css">
    <style>
        .icon{
            border: 1px solid silver; border-radius: 50%; padding: 0.5em;
        }
        div::-webkit-scrollbar {
            border-radius: .25rem;
            width: 5px;
        }
        div::-webkit-scrollbar-track {
            background: #323232;
        }
        div::-webkit-scrollbar-thumb {
            background: rgb(110, 110, 110);
        }
        div::-webkit-scrollbar-thumb:hover {
            background: rgb(218, 218, 218);
        }
    </style>
</head>
<body class="bg-dark">
    <header class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: black;">
        <nav class="container-fluid d-flex justify-content-between" aria-label="Main navigation">
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
    
            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#stickyNavbarSupportedContent" aria-controls="stickyNavbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-center" id="stickyNavbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item px-2">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" href="store.php">Store</a>
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
    
            <button class="btn btn-success d-none d-lg-block ms-5" type="button">
                Sign In
            </button>
        </nav>
    </header>
    <Main class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-6 overflow-auto" style="height: 100vh;">
                <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-windows-tab" data-bs-toggle="tab" data-bs-target="#nav-windows" type="button" role="tab" aria-controls="nav-windows" aria-selected="true">Windows</button>
                    <button class="nav-link" id="nav-mac-tab" data-bs-toggle="tab" data-bs-target="#nav-mac" type="button" role="tab" aria-controls="nav-mac" aria-selected="false">Mac</button>
                    <button class="nav-link" id="nav-android-tab" data-bs-toggle="tab" data-bs-target="#nav-android" type="button" role="tab" aria-controls="nav-android" aria-selected="false">Android</button>
                </div>
                <h1 class="display-6 fs-3 mx-3 text-light"><small>All Games</small></h1>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active text-light mb-2" id="nav-windows" role="tabpanel" aria-labelledby="nav-windows-tab" style="height: 10000px;">
                        <div class="container-fluid">
                            <div class="row">
                                <?php include 'Assets/Includes/card.php'?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade text-light mb-2" id="nav-mac" role="tabpanel" aria-labelledby="nav-mac-tab">
                        
                    </div>
                    <div class="tab-pane fade text-light mb-2" id="nav-android" role="tabpanel" aria-labelledby="nav-android-tab">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 pt-5 text-light" style="height: 100vh;">
                <div class="d-flex align-items-center">
                    <p class="mb-0 me-3 opacity-75">Show: </p>
                    <select class="form-select form-select-sm bg-dark text-light border-secondary" style="width: max-content;">
                        <option selected value="1">All</option>
                        <option value="2">Trending</option>
                        <option value="3">Most Popular</option>
                        <option value="4">Paid</option>
                        <option value="4">Free</option>
                    </select>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex">
                        <p class="mb-0 me-3 opacity-75">Order: </p>
                        <select class="form-select form-select-sm bg-dark text-light border-secondary" style="width: max-content;">
                            <option selected value="1">Alphabetical</option>
                            <option value="2">Size</option>
                            <option value="3">Cost</option>
                            <option value="4">Release Date</option>
                        </select>
                    </div>
                    
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio" id="inlineRadioAsc" value="asc" checked />
                            <label class="form-check-label" for="inlineRadioAsc">Asc</label>
                        </div>
                          
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio" id="inlineRadioDesc" value="desc" />
                            <label class="form-check-label" for="inlineRadioDesc">Desc</label>
                        </div>
                    </div>
                </div>
                <h6 class="border-bottom">Filters</h6>
                <div class="px-3 d-grid gap-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <label class="me-3">Genre</label>
                        <select id="multi_option" multiple name="native-select" placeholder="Select Genre" data-silent-initial-value-set="false">
                            <option value="1">HTML</option>
                            <option value="2">CSS</option>
                            <option value="3">JavaScript</option>
                            <option value="4">Python</option>
                            <option value="5">JAVA</option>
                            <option value="6">PHP</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <label class="me-3">Feature</label>
                        <select id="multi_option" multiple name="native-select" placeholder="Select Feature" data-silent-initial-value-set="false">
                            <option value="1">HTML</option>
                            <option value="2">CSS</option>
                            <option value="3">JavaScript</option>
                            <option value="4">Python</option>
                            <option value="5">JAVA</option>
                            <option value="6">PHP</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <label class="me-3">Year</label>
                        <select id="multi_option" multiple name="native-select" placeholder="Select Release Year" data-silent-initial-value-set="false">
                            <option value="1">2019</option>
                            <option value="2">2020</option>
                            <option value="3">2021</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <label class="me-3">Content</label>
                        <select id="multi_option" multiple name="native-select" placeholder="Select Content Rating" data-silent-initial-value-set="false">
                            <option value="1">Everyone</option>
                            <option value="2">Everyone 10+</option>
                            <option value="3">Teen</option>
                            <option value="4">Mature 17+</option>
                            <option value="5">18+</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <label class="me-3">Price</label>
                        <select id="multi_option" multiple name="native-select" placeholder="Select Price Range" data-silent-initial-value-set="false">
                            <option value="1">$0-5</option>
                            <option value="2">$6-10</option>
                            <option value="3">$11-15</option>
                            <option value="4">$</option>
                            <option value="5">JAVA</option>
                            <option value="6">PHP</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </Main>
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
    <script type="text/javascript" src="Assets/js/virtual-select.min.js"></script>
    <script type="text/javascript">
        VirtualSelect.init({ 
            ele: '#multi_option' 
        });
    </script>
</body>
</html>