<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Get a custom website for your next project.">
        <meta name="author" content="web997.com">
        <link rel="icon" href="favicon.ico">
        <title>Contact | web997.com</title>
        <link rel="preload" as="font" type="font/woff2" crossorigin href="/lib/fonts/fontawesome-webfont.woff2?v=4.5.0"/>
        <link rel="stylesheet" href="/lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="/lib/css/font-awesome.min.css">
        <link rel="stylesheet" href="/lib/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://www.google-analytics.com">
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-67908236-7', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body class="contact-body">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-label="menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <div class="navbar-brand-image">
                        <img src="/lib/img/logo.jpg"/>
                    </div>
                    <p class="navbar-brand-text">Web997</p>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/contact.php">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="secondary-nav visible-xs visible-sm text-center">
            <p class="secondary-nav-text"><strong>Brisbane Office:</strong></p>
            <br class="visible-xs"/>
            <p class="secondary-nav-text"><span class="fa fa-phone"></span> +61 478 202 665</p>
            <p class="secondary-nav-text"><span class="fa fa-envelope"></span> jackson@web997.com</p>
        </div>
        <div class="container jumbo-container jumbo-container-contact" style="width:80%;">
            <div class="row">
                    <div class="col-xs-12 text-right visible-lg visible-md">
                        <div class="secondary-nav">
                            <p class="secondary-nav-text"><strong>Brisbane Office:</strong></p>
                            <a href="/contact.php" class="secondary-nav-text">
                                <span class="fa fa-comments"></span> Enquire Online
                            </a>
                            <p class="secondary-nav-text">
                                <span class="fa fa-phone"></span> +61 478 202 665
                            </p>
                            <p class="secondary-nav-text">
                                <span class="fa fa-envelope"></span> jackson@web997.com
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="contact-text-box">
                            <div class="contact-brand-image">
                                <img src="/lib/img/logo.jpg"/>
                            </div>
                            <br/>
                            <br class="visible-lg visible-md"/>
                            <h1>Contact Us</h1>
                            <p style="font-size:1.5em;">Request quotes, assistance and <br class="visible-lg"/> audits for websites and web services.</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-8 text-center">
                        <div class="panel form-panel">
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
                                        <label for="message">
                                            Message:
                                        </label>
                                        <textarea name="message" type="text" class="form-control" id="message"
                                        placeholder="" required style="height:180px;margin-bottom:0;resize:none"><?php echo $message ?></textarea>
                                        <?php if($message_error) { ?>
                                                <div class="error"><?php echo $message_error ?></div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">   
                                        <br/>
                                        <input type="submit" value="Submit" class="btn btn-success btn-lg btn-block btn-hollow">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>

