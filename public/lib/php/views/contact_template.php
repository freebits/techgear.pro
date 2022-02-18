<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">
        <title>Contact | Techgear.pro</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link type="text/css" rel="stylesheet" href="/lib/css/style.css"/>
	</head>
    <body>
		<div class="navbar-basic">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <p class="navbar-label">
                            <a href="/">
                                <img src="/lib/img/logo.svg" width="120px" class="navbar-image"/>
                            </a>
                        </p>
                    </div>
                    <div class="col-6 text-right">
                        <a href="/contact.php" class="btn-cta">Order Now</a>
                    </div>
                </div>
            </div>
		</div>
        <div class="contact-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="contact-text-box" style="margin-top:3vh;">
                            <div class="contact-brand-image">
                                <img src="/lib/img/logo.svg" width="150px"/>
                            </div>
                            <br/>
                            <br class="visible-lg visible-md"/>
                            <h1 style="font-size:2.3em;">Place your order.</h1>
                            <p style="font-size:1em;">Once we have verified your shipping details, we will send you a payment link.</p>
                            <hr/>
                                <br/>
                            <p style="font-size:1.2em;font-weight:800;">
                                <small><strong>Need Help?</strong></small>
                                <br/>
                                <small>sales@techgear.pro</small>
                                <br/>
                                <small>Brisbane, Queensland, Australia.</small>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 text-center">
                        <div class="panel form-panel" style="padding:50px;box-shadow:2px 2px 100px rgba(0,0,0,0.1);">
                            <form action="/contact.php" method="post" role="form" class="text-left">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Name:
                                        </label>
                                        <input name="name" type="text" class="form-control " id="name" placeholder=""
                                        value="<?php echo $name ?>" required>
                                        <?php if($name_error) { ?>
                                            <div class="error"><?php echo $name_error ?></div>
                                        <?php } ?>
                                        </div>
                                        <div class="form-group">
                                        <label for="phone">
                                            Phone Number:
                                        </label>
                                        <input name="phone" type="text" class="form-control " id="phone" placeholder=""
                                        value="<?php echo $phone ?>" required>
                                        <?php if($phone_error) { ?>
                                            <div class="error"><?php echo $phone_error ?></div>
                                        <?php } ?>
                                        </div>
                                        <div class="form-group">
                                        <label for="email">
                                            Email:
                                        </label>
                                        <input name="email" type="email" class="form-control " id="email" placeholder=""
                                        value="<?php echo $email ?>" required>
                                        <?php if($email_error) { ?>
                                            <div class="error"><?php echo $email_error ?></div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="email">
                                            Address: 
                                        </label>
                                        <input name="address" type="address" class="form-control " id="address" placeholder=""
                                        value="<?php echo $address ?>" required>
                                        <?php if($address_error) { ?>
                                            <div class="error"><?php echo $address_error ?></div>
                                        <?php } ?>
                                        </div>
                                        <div class="form-group">
                                        <label for="email">
                                            Country:
                                        </label>
                                        <input name="country" type="country" class="form-control " id="country" placeholder=""
                                        value="<?php echo $country ?>" required>
                                        <?php if($country_error) { ?>
                                            <div class="error"><?php echo $country_error ?></div>
                                        <?php } ?>
                                        </div>
                                        <div class="form-group">
                                        <label for="email">
                                            Postcode:
                                        </label>
                                        <input name="postcode" type="postcode" class="form-control " id="postcode" placeholder=""
                                        value="<?php echo $postcode ?>" required>
                                        <?php if($postcode_error) { ?>
                                            <div class="error"><?php echo $postcode_error ?></div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">   
                                        <br/>
                                        <input type="submit" value="Submit" class="btn btn-success btn-lg btn-block btn-submit">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                </div>
                </div>
                </div>
                <div class="footer" style="padding-top:10vh;padding-bottom:10vh;background-color:#fafafa;margin-top:12vh;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <img src="/lib/img/logo.svg" width="120px;"/>
                            </div>
                            <div class="col-sm-4 text-center">
                                <a href="/">AeroScan Pro</a>
                            </div>
                            <div class="col-sm-4 text-center">
                                <a href="/contact.php">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>

