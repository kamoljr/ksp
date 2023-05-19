<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Login - - SmartAdmin v4.0.1
    </title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="/public/css/vendors.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/public/css/app.bundle.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="/public/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="/public/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <!-- Optional: page related CSS-->
    <link rel="stylesheet" media="screen, print" href="/public/css/page-login.css">
</head>

<body>
    <div class="blankpage-form-field">
        <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4"
            style='padding-top:5px;'>
            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                <img src="/public/img/logo.png" style='width:55px;' alt="SmartAdmin WebApp" aria-roledescription="logo">
                <span class="page-logo-text mr-1">สำนักงานเลขาธิการคุรุสภา</span>
                <!-- <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i> -->
            </a>
        </div>

        <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
            <form method="post" action="<?php echo base_url('login') ?>">
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="your username"
                        value="">
                    <span class="help-block">
                        Your unique username to app
                    </span>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="password"
                        value="">
                    <span class="help-block">
                        Your password
                    </span>
                </div>
                <?php
                    if(session("message")){
                           echo session("message");
                     }
                      ?>

                <button type="submit" class="btn btn-default float-right">Login</button>
            </form>
        </div>

    </div>
    <div class="login-footer p-2">
        <div class="row">

        </div>
    </div>
    <video poster="/public/img/backgrounds/clouds.png" id="bgvid" playsinline autoplay muted loop>
        <source src="/public/media/video/cc.webm" type="video/webm">
        <source src="/public/media/video/cc.mp4" type="video/mp4">
    </video>
    <script src="/public/js/vendors.bundle.js"></script>
    <script src="/public/js/app.bundle.js"></script>
</body>

</html>