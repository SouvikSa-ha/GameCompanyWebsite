<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Demo</title>
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
	<link href="Assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="Assets/icons/css/all.css" rel="stylesheet">
    <style>
        .btn-custom{
            color: rgb(156, 156, 156);
        }
        .btn-custom:hover{
            color: whitesmoke;
        }

    </style>
</head>
<body class="bg-dark">
	<div class="container text-light">
        <div class="row">
            <div class="col-md-9 p-3">
                <h1 class="display-6 border-bottom border-warning">CHECKOUT</h1>
                <p>OTHER PAYMENT METHODS</p>
                
                <div class="accordion d-grid gap-3 form-check" id="accordionExample">
                    <div class="accordion-item bg-dark border-0 text-light">
                        <div class="accordion-header form-check bg-secondary rounded-0 rounded-top pb-1" id="headingOne">
                            <input class="form-check-input fs-2 ms-0" type="radio" name="flexRadioDefault" id="one" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"></input>
                            <label class="form-check-label display-6 ms-2" for="one">
                                <i class="fa fa-credit-card px-2"></i> Credit Card
                            </label>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse <--show--> " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-secondary rounded-0 rounded-bottom">
                                <div class="d-flex justify-content-between">
                                    <p>CARD DETAILS</p>
                                    <span>
                                        <i class="fab fa-cc-mastercard fa-2xl"></i>
                                        <i class="fab fa-cc-visa fa-2xl"></i>
                                        <i class="fab fa-cc-amex fa-2xl"></i>
                                        <i class="fab fa-cc-diners-club fa-2xl"></i>
                                        <i class="fab fa-cc-discover fa-2xl"></i>
                                        <i class="fab fa fa-cc-jcb fa-2xl"></i>
                                        <i class="fab fa fa-cc-stripe fa-2xl"></i>
                                    </span>
                                </div>
                                <div class="text-dark">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="card" placeholder="7234 329XXXXXXXXX" required>
                                        <label for="card">Card Number</label>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="exp" placeholder="exp" required>
                                                <label for="exp">Expiration Date</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="cvv" placeholder="cvv" required>
                                                <label for="cvv">CVV</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-dark border-0 text-light">
                        <div class="accordion-header form-check bg-secondary rounded-0 rounded-top pb-1" id="headingTwo">
                            <input class="form-check-input fs-2 ms-0" type="radio" name="flexRadioDefault" id="two" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"></input>
                            <label class="form-check-label display-6 ms-2" for="two">
                                <i class="fab fa-cc-paypal px-2"></i> PayPal
                            </label>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-secondary rounded-0 rounded-bottom">
                                hello world
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-0 pt-3 min-vh-100" style="background-color: black; position: relative;">
                <div class="px-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="my-0">ORDER SUMMART</p>
                        <button class="btn btn-floating border-0 btn-custom"><i class="fa fa-times fa-fw"></i></button>
                    </div>
                    <div class="row g-0 mb-3">
                        <div class="col-md-4">
                            <img src="Assets/images/1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body h-100 d-flex align-items-center">
                                <div class="ps-3 d-grid gap-3">
                                    <h1 class="card-title fs-5 lh-1"><small>Clans Clash sdddfgdgdg of ClanClash of Clans dsbhdhbf dfsbhbfj</small></h1>
                                    <!-- <p class="card-text text-end" style="font-size: 12px;">$1.99</p> -->
                                    <ul class="list-inline card-text" style="font-size: 12px;">
                                        <li class="list-inline-item px-1 rounded bg-success">-33%</li>
                                        <li class="list-inline-item card-text"><s>$2.99</s></li>
                                        <li class="list-inline-item card-text">$1.99</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="mb-0">Price:</p>
                        <p class="mb-0">$7.75</p>
                    </div>
                    <div class="d-flex justify-content-between border-bottom">
                        <p>Sale Discount:</p>
                        <p>$7.75</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Total:</p>
                        <p>$7.75</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <input type="text" class="form-control rounded-start rounded-0" id="coupon" aria-describedby="discount coupon" placeholder="Enter Coupon Code">
                        <button class="btn btn-primary btn-sm rounded-0 rounded-end"><small>CHECK</small></button>
                    </div>
                    <p class="mt-3 text-center">Need Help?<a href="">Contact Us</a></p>
                </div>
                <div class="shadow-lg text-center p-4 w-100" style="position: absolute; bottom: 0;">
                    <button class="btn btn-primary btn-lg w-100 btn-floating">PLACE ORDER</button>
                </div>
            </div>
        </div>
		
	</div>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>