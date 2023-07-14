<!DOCTYPE html>
<html lang="th">

<head>
    <script src="<?= base_url().'/';?>/fontawesome-free-6.4.0-web/js/all.js" data-auto-replace-svg="nest"></script>
      

    <script>
    <? if (!isset($_SESSION['user_name'])) {?>
        window.location.href = "http://<?=$_SERVER['HTTP_HOST']?>/"; 
    <? }?>
    </script>
    <meta charset="utf-8">
    <title>
        สำนักงานเลขาธิการคุรุสภา
    </title>
    <meta name="description" content="ColumnFilter">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="<?= base_url().'/';?>css/vendors.bundle.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url().'/';?>css/app.bundle.css">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url().'/';?>img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url().'/';?>img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="<?= base_url().'/';?>img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="<?= base_url().'/';?>css/customstyle.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url().'/';?>css/formplugins/select2/select2.bundle.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url().'/';?>css/datagrid/datatables/datatables.bundle.css">

    <link rel="stylesheet" href="<?= base_url().'/';?>css/bootstrap-float-label.min.css" />
    

</head>

<body class="mod-bg-1 ">
    <!-- DOC: script to save and load page settings -->
    <script>
    /**
     *	This script should be placed right after the body tag for fast execution
     *	Note: the script is written in pure javascript and does not depend on thirdparty library
     **/
    'use strict';

    var classHolder = document.getElementsByTagName("BODY")[0],
        /**
         * Load from localstorage
         **/
        themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
        {},
        themeURL = themeSettings.themeURL || '',
        themeOptions = themeSettings.themeOptions || '';
    /**
     * Load theme options
     **/
    if (themeSettings.themeOptions) {
        classHolder.className = themeSettings.themeOptions;
        console.log("%c✔ Theme settings loaded", "color: #148f32");
    } else {
        console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
    }
    if (themeSettings.themeURL && !document.getElementById('mytheme')) {
        var cssfile = document.createElement('link');
        cssfile.id = 'mytheme';
        cssfile.rel = 'stylesheet';
        cssfile.href = themeURL;
        document.getElementsByTagName('head')[0].appendChild(cssfile);
    }
    /**
     * Save to localstorage
     **/
    var saveSettings = function() {
        themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item) {
            return /^(nav|header|mod|display)-/i.test(item);
        }).join(' ');
        if (document.getElementById('mytheme')) {
            themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
        };
        localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
    }
    /**
     * Reset settings
     **/
    var resetSettings = function() {
        localStorage.setItem("themeSettings", "");
    }
    </script>
    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-inner">
            <!-- BEGIN Left Aside -->
            <aside class="page-sidebar">
                <div class="page-logo">
                    <!-- <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut"> -->
                    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
                        <img src="<?= base_url().'/';?>img/logo.png" alt="KSP WebApp" aria-roledescription="logo"
                            style='width:50px;'>
                        <span class="page-logo-text mr-1 kspname"
                            style='font-size:20px !important;'>สำนักงานเลขาธิการคุรุสภา</span>
                        <!-- <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span> -->
                        <!-- <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i> -->
                    </a>
                </div>
                <?
                if ($pages != 'dashboard'){
                  echo view("templates/navmenu.php");// เมนูฝั่งซ้าย
                }

                ?>

            </aside>
            <!-- END Left Aside -->
            <div class="page-content-wrapper">
                <?=view("templates/header.php")?>

                <main id="js-page-content" role="main" class="page-content">
                    <?=view("templates/breadcrumb.php")?>
                    <? 
                        if ($pages != 'filenotfound'){
                            echo view($description_en.'/'.$pages.'/'.$pages.'.php');
                        }
                        ?>
                    <? //echo $description_en.'/'.$pages.'/'.$pages.'.php'?>
                </main>

                <?=view("templates/footer.php");?>
                <?=view("templates/shortcut.php");?>
            </div>
        </div>
    </div>
    <!-- END Page Wrapper -->
    <?=view("templates/quickmenu.php")?>
    <?=view("templates/messenger.php")?>
    <?=view("templates/pagesetting.php")?>

    <?=view("templates/modal.php")?>
                        
</body>

</html>

<style>
.kspname {
    font-size: 20px !important;
    color: white;
    font-family: 'TH Sarabun New' !important;
}
.error { 
 color: #ff0000;
 font-weight: normal;
}
</style>

