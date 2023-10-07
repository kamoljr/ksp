<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        สำนักงานเลขาธิการคุรุสภา
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
    <script src="<?= base_url().'/';?>/fontawesome-free-6.4.0-web/js/all.js" data-auto-replace-svg="nest"></script>
</head>

<body>
    <div class="blankpage-form-field">
        <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4"
            style='padding-top:0px;'>
            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                <img src="/public/img/logoksp1.png" style='width:55px;' alt="SmartAdmin WebApp" aria-roledescription="logo">
                <span class="page-logo-text mr-1">สำนักงานเลขาธิการคุรุสภา</span>
                <!-- <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i> -->
            </a>
        </div>

        <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
            <form method="post" action="<?php echo base_url('index.php/login') ?>">
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
                <div class = "row">
                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-default text-center" style = "width:100%">Login</button>
                    </div>
                    

                    <div class="form-group col-sm-12 text-right" >
                     <a href="javascript:void(0);" style = "padding:3px;" class=" rounded px-1 " data-toggle="tooltip" data-placement="top" title="" data-original-title="ส่งรหัสผ่านใหม่ทาง Email">
                        <!-- <i class="fal fa-exclamation-triangle"></i> -->
                        <!-- <i class="fal fa-wrench"></i> -->
                        <!-- <i class="fa-solid fa-envelope"></i> -->
                        <!-- <i class="fa-regular fa-envelope"></i> -->
                        <small >หากลืมรหัสผ่าน</small>
                    </a>
                    <!-- <button type="button" class="btn btn-xs btn-default float-right">Reset Password</button> -->
                    </div>
                </div>
                
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