<?php //include_once 'Assets/Includes/connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Legacy Creation</title>
    <?php include_once 'Assets/Includes/headComponents.php'?>
</head>
<body class="bg-dark">
    <div class="container pt-5">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-5" style="min-width: fit-content;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active text-light" id="v-pills-general-tab" data-bs-toggle="pill" data-bs-target="#v-pills-general" type="button" role="tab" aria-controls="v-pills-general" aria-selected="true"><small>GENERAL</small></button>
                <button class="nav-link text-light" id="v-pills-card-tab" data-bs-toggle="pill" data-bs-target="#v-pills-card" type="button" role="tab" aria-controls="v-pills-card" aria-selected="false"><small>PAYMENT MANAGEMENT</small></button>
                <button class="nav-link text-light" id="v-pills-tramnsaction-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tramnsaction" type="button" role="tab" aria-controls="v-pills-tramnsaction" aria-selected="false"><small>TRANSACTIONS</small></button>
                <button class="nav-link text-light" id="v-pills-pass-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pass" type="button" role="tab" aria-controls="v-pills-pass" aria-selected="false"><small>PASSWORD AND SECURITY</small></button>
            </div>
            <div class="tab-content shadow-lg text-white w-100 p-4" id="v-pills-tabContent" style="background-color: #343a40;">
                <div class="tab-pane fade show active " id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
                    <div class="d-grid gap-4">
                        <h3>GENERAL SETTINGS</h3>
                        <P>Manage the account details you've shared with Legacy Creation including your name, contact info and more</P>
                        <h3 class="mt-2">ACCOUNT INFO</h3>
                        <p><b>ID:</b> 78be75d5343643579ecef784a00449f4</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="form-floating text-dark" style="width: 500px">
                                        <input type="text" class="form-control" id="dn" placeholder="dn" value="USer" disabled>
                                        <label for="dn">DISPLAY NAME</label>
                                    </div>
                                    <button class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#namechange"><i class="fa fa-pencil"></i></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="form-floating text-dark" style="width: 500px">
                                        <input type="text" class="form-control" id="de" placeholder="de" value="user@gamil.com" disabled>
                                        <label for="de">EMAIL ADDRESS</label>
                                    </div>
                                    <button class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#updateemail"><i class="fa fa-pencil"></i></button>
                                </div>
                            </div>
                        </div>
                        <h3>PERSONAL DETAILS</h3>
                        <form class="d-grid gap-4">
                            <div class="form-floating text-dark">
                                <input type="text" class="form-control" id="n" placeholder="n" required>
                                <label for="n">NAME</label>
                            </div>
                            <div class="form-floating text-dark">
                                <input type="text" class="form-control" id="a" placeholder="a" required>
                                <label for="a">AGE</label>
                            </div>
                            
                            <button class="btn btn-secondary">discard</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    
                    </div>  
                </div>
                <div class="tab-pane fade" id="v-pills-card" role="tabpanel" aria-labelledby="v-pills-card-tab">
                    <h1 class="fs-4">Save Your Card</h1>
                    <p><small>Email verification required</small></p>
                    <form class="text-dark d-grid gap-4">
                        <div class="form-floating">
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
                        <button class="btn btn-secondary m-auto">Send code</button> <?/*disable card info input so cannot change during verification*/?>
                        <p class="text-light">Confirm verification code</p>
                        <input type="text" class="form-control w-50 m-auto" id="vc" disabled> <?/*remove d-disabled after send code all from*/?>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-secondary me-3">CANCEL</button> <?/*clears all from*/?>
                            <button type="submit" class="btn btn-primary">CONFIRM</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-tramnsaction" role="tabpanel" aria-labelledby="v-pills-tramnsaction-tab">...</div>
                <div class="tab-pane fade" id="v-pills-pass" role="tabpanel" aria-labelledby="v-pills-pass-tab">

                </div>
            </div>
        </div>  
    </div>
    
    <div class="modal fade" id="namechange" tabindex="-1" aria-labelledby="namechange" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="exampleModalLabel">
                        <p class="fs-5">Confirm display name change</p>
                        <p><small><b>Please note: </b>If you changed your display name, you can't change it again for 2 weeks after you confirm this change.</small></p>
                        <p><b>Current Display Name: </b>username</p>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="" class="d-grid gap-4">
                        <div class="form-floating text-dark">
                            <input type="text" class="form-control" id="nn" placeholder="nn" required>
                            <label for="nn">NEW NAME</label>
                        </div>
                        <div class="form-floating text-dark">
                            <input type="text" class="form-control" id="cn" placeholder="cn" required>
                            <label for="cn">CONFIRM NAME</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I understand I can not change my display name again for 2 weeks after this change.</label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-secondary me-3" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn btn-primary">CONFIRM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateemail" tabindex="-1" aria-labelledby="updateemail" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="updateemaillabel">
                        <h1 class="display-6 mb-3">Please Update Your Email</h1>
                        <p><small>Change Account Email Address</small></p>
                        <p><b>Note: </b>A security code verification is required to make this change. You will not be able to change this email address again for 90 days after this change is saved to this account.</p>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="" class="d-grid gap-4">
                        <div class="form-floating text-dark">
                            <input type="text" class="form-control" id="ne" placeholder="ne" required>
                            <label for="ne">NEW EMAIL</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">I understand I can not change my email again for90 days after this change.</label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-secondary me-3" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn btn-primary">CONFIRM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
