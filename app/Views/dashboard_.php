<!DOCTYPE html>
<!--
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.0.0
Author: Sunnyat Ahmmed
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">

<head>
    <script>
    // $(document).ready(function() {
    //   alert('a');
    // });
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
    <link rel="stylesheet" media="screen, print" href="/css/vendors.bundle.css">
    <link rel="stylesheet" media="screen, print" href="<?= base_url().'/';?>css/app.bundle.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url().'/';?>img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url().'/';?>img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="<?= base_url().'/';?>img/favicon/safari-pinned-tab.svg" color="#5bbad5">

    <link rel="stylesheet" media="screen, print" href="<?= base_url().'/';?>css/formplugins/select2/select2.bundle.css">
    <link rel="stylesheet" media="screen, print"
        href="<?= base_url().'/';?>css/datagrid/datatables/datatables.bundle.css">


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

            <!-- END Left Aside -->
            <div class="page-content-wrapper">
                <?=view("templates/header_dashboard.php")?>
                <!-- content -->
                <main id="js-page-content" role="main" class="page-content">
                    <div class="row">
                        <div class="col">

                            <!-- <div class="row">
                          <div class="col-md-6 offset-md-3"> -->

                            <!-- </div>
                          </div> -->
                            <div id="panel-6" class="panel">
                                <div class="panel-hdr">
                                    <h2>Timeline การใช้งานล่าสุด</h2>
                                </div>
                                <div class="panel-container show">

                                    <div class="panel-content">
                                        <link rel="stylesheet"
                                            href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
                                        <h4>วันนี้</h4>

                                        <ul class="cbp_tmtimeline">
                                            <li>
                                                <!-- <time class="cbp_tmtime" datetime="2017-11-04T03:45"><span class = 'd-flex mt-2 mb-1 fs-xs text-dark'>03:45 AM</span>
                                          <span class="large"></span></time>
                                          <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-label"></i></div>
                                          <div class="cbp_tmlabel empty"> <span>[112]  ขออนุมัติเบิกค่าใช้จ่ายในการจัดประชุมคณะกรรมการคัดแยกและจัดเก็บเอกสารเพื่อทำลาย </span> <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"> <i class="fal fa-edit"></i></a> </div> -->

                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-11-04T03:45"><span
                                                        class='d-flex mt-2 mb-1 fs-xs text-dark'>13:45 น.</span>
                                                    <span></span></time>
                                                <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-money"></i></div>
                                                <div class="cbp_tmlabel">

                                                    [112]
                                                    ขออนุมัติเบิกค่าใช้จ่ายในการจัดประชุมคณะกรรมการคัดแยกและจัดเก็บเอกสารเพื่อทำลาย
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed">
                                                        <i class="fal fa-edit"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-11-04T03:45"><span
                                                        class='d-flex mt-2 mb-1 fs-xs text-dark'>14:45 น.</span>
                                                    <span></span></time>
                                                <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-archive"></i></div>
                                                <div class="cbp_tmlabel">
                                                    [222] งานมอบนโยบาย กำกับและติดตาม (ปี 2564) <a
                                                        href="javascript:void(0);"
                                                        class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed">
                                                        <i class="fal fa-edit"></i></a>
                                                </div>
                                            </li>
                                            <li class='cbp_tmtimeline_edit'>
                                                <time class="cbp_tmtime" datetime="2017-11-04T03:45"><span
                                                        class='d-flex mt-2 mb-1 fs-xs text-dark'>14:00 น.</span>
                                                    <span></span></time>
                                                <div class="cbp_tmicon bg-danger"><i class="zmdi zmdi-card"></i></div>
                                                <div class="cbp_tmlabel">
                                                    [234] ขอจัดประชุมเชิงปฎิการพัฒนาระบบงบประมาณและการเบิกจ่าย ณ
                                                    ห้องมาลากุล เวลา 9.00 - 16.00 น <a href="javascript:void(0);"
                                                        class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed">
                                                        <i class="fal fa-edit"></i></a>
                                                </div>
                                            </li>

                                        </ul>
                                        <h4>เมื่อวาน</h4>

                                        <ul class="cbp_tmtimeline">
                                            <li class='cbp_tmtimeline_edit'>
                                                <time class="cbp_tmtime" datetime="2017-11-04T18:30"><span
                                                        class='d-flex mt-2 mb-1 fs-xs text-dark'>25/12/2017</span> <span
                                                        class="large"></span></time>
                                                <div class="cbp_tmicon"><i class="zmdi zmdi-account"></i></div>
                                                <div class="cbp_tmlabel"> <span>No Activity</span> </div>
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col">
                            <div id="panel-6" class="panel">
                                <div class="panel-hdr">
                                    <h2>จำนวนเข้าใช้งานของระบบต่างๆ</h2>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content p-0 mb-g">
                                        <!-- <div class="alert alert-success alert-dismissible fade show border-faded border-left-0 border-right-0 border-top-0 rounded-0 m-0" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                      </button>
                                      <strong>Last update was on <span class="js-get-date"></span></strong> - Your logs are all up to date.
                                  </div> -->
                                    </div>
                                    <div class="panel-content">
                                        <div class="row  mb-g">
                                            <div class="col-md-6 d-flex align-items-center">
                                                <div id="flotPie" class="w-100" style="height:250px"></div>
                                            </div>
                                            <div class="col-md-6 col-lg-5 mr-lg-auto">
                                                <div class="d-flex mt-2 mb-1 fs-xs text-primary">
                                                    ระบบงบประมาณ
                                                </div>
                                                <div class="progress progress-xs mb-3">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex mt-2 mb-1 fs-xs text-info">
                                                    ระบบเบิกจ่าย
                                                </div>
                                                <div class="progress progress-xs mb-3">
                                                    <div class="progress-bar bg-info-500" role="progressbar"
                                                        style="width: 30%;" aria-valuenow="30" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex mt-2 mb-1 fs-xs text-warning">
                                                    ระบบงานการเงิน
                                                </div>
                                                <div class="progress progress-xs mb-3">
                                                    <div class="progress-bar bg-warning-500" role="progressbar"
                                                        style="width: 40%;" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex mt-2 mb-1 fs-xs text-danger">
                                                    ระบบติดตามผล
                                                </div>
                                                <div class="progress progress-xs mb-3">
                                                    <div class="progress-bar bg-danger-500" role="progressbar"
                                                        style="width: 15%;" aria-valuenow="15" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex mt-2 mb-1 fs-xs text-success">
                                                    ระบบจองรถ
                                                </div>
                                                <div class="progress progress-xs mb-3">
                                                    <div class="progress-bar bg-success-500" role="progressbar"
                                                        style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex mt-2 mb-1 fs-xs text-dark">
                                                    ระบบจองห้องประชุม
                                                </div>
                                                <div class="progress progress-xs mb-3">
                                                    <div class="progress-bar bg-fusion-500" role="progressbar"
                                                        style="width: 10%;" aria-valuenow="10" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col">
                          1 of 2
                      </div>
                      <div class="col">
                          1 of 2
                      </div>
                  </div> -->
                </main>
                <!-- /content -->
                <?=view("templates/footer.php");?>
                <?=view("templates/shortcut.php");?>
            </div>
        </div>
    </div>
    <!-- END Page Wrapper -->
    <?=view("templates/quickmenu.php")?>
    <?=view("templates/messenger.php")?>
    <?=view("templates/pagesetting.php")?>

</body>

</html>
<script src="<?= base_url().'/';?>js/gral.js"></script>
<script src="<?= base_url().'/';?>js/vendors.bundle.js"></script>
<script src="<?= base_url().'/';?>js/app.bundle.js"></script>
<script src="<?= base_url().'/';?>js/formplugins/select2/select2.bundle.js"></script>
<script src="<?= base_url().'/';?>js/datagrid/datatables/datatables.bundle.js"></script>
<script src="<?= base_url().'/';?>js/budget/project.js"></script>
<script src="<?= base_url().'/';?>js/statistics/flot/flot.bundle.js"></script>
<script>
$(document).ready(function() {

    var dataSetPie = [{
            label: "Asia",
            data: 4119630000,
            color: myapp_get_color.primary_500
        },
        {
            label: "Latin America",
            data: 590950000,
            color: myapp_get_color.info_500
        },
        {
            label: "Africa",
            data: 1012960000,
            color: myapp_get_color.warning_500
        },
        {
            label: "Oceania",
            data: 95100000,
            color: myapp_get_color.danger_500
        },
        {
            label: "Europe",
            data: 727080000,
            color: myapp_get_color.success_500
        },
        {
            label: "North America",
            data: 344120000,
            color: myapp_get_color.fusion_400
        }
    ];


    $.plot($("#flotPie"), dataSetPie, {
        series: {
            pie: {
                innerRadius: 0.5,
                show: true,
                radius: 1,
                label: {
                    show: true,
                    radius: 2 / 3,
                    threshold: 0.1
                }
            }
        },
        legend: {
            show: false
        }
    });


    $.plot('#flotBar1', [{
            data: [
                [1, 0],
                [2, 0],
                [3, 0],
                [4, 1],
                [5, 3],
                [6, 3],
                [7, 10],
                [8, 11],
                [9, 10],
                [10, 9],
                [11, 12],
                [12, 8],
                [13, 10],
                [14, 6],
                [15, 3]
            ],
            bars: {
                show: true,
                lineWidth: 0,
                fillColor: myapp_get_color.fusion_50,
                barWidth: .3,
                order: 'left'
            }
        },
        {
            data: [
                [1, 0],
                [2, 0],
                [3, 1],
                [4, 2],
                [5, 2],
                [6, 5],
                [7, 8],
                [8, 12],
                [9, 10],
                [10, 11],
                [11, 3]
            ],
            bars: {
                show: true,
                lineWidth: 0,
                fillColor: myapp_get_color.success_500,
                barWidth: .3,
                align: 'right'
            }
        }
    ], {
        grid: {
            borderWidth: 0,
        },
        yaxis: {
            min: 0,
            max: 15,
            tickColor: '#F0F0F0',
            ticks: [
                [0, ''],
                [5, '$5000'],
                [10, '$25000'],
                [15, '$45000']
            ],
            font: {
                color: '#444',
                size: 10
            }
        },
        xaxis: {
            mode: 'categories',
            tickColor: '#F0F0F0',
            ticks: [
                [0, '3am'],
                [1, '4am'],
                [2, '5am'],
                [3, '6am'],
                [4, '7am'],
                [5, '8am'],
                [6, '9am'],
                [7, '10am'],
                [8, '11am'],
                [9, '12nn'],
                [10, '1pm'],
                [11, '2pm'],
                [12, '3pm'],
                [13, '4pm'],
                [14, '5pm']
            ],
            font: {
                color: '#999',
                size: 9
            }
        }
    });
});
</script>
<style>
.kspname {
    font-size: 20px !important;
    color: white;
    font-family: 'TH Sarabun New' !important;
}

.cbp_tmtimeline {
    margin: 0;
    padding: 0;
    list-style: none;
    position: relative
}

.cbp_tmtimeline:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 3px;
    background: #eee;
    left: 20%;
    margin-left: -6px
}

.cbp_tmtimeline_edit:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 3px;
    background: #ffffff;
    left: 20%;
    margin-left: -6px
}

.cbp_tmtimeline>li {
    position: relative
}

.cbp_tmtimeline>li:first-child .cbp_tmtime span.large {
    color: #444;
    font-size: 17px !important;
    font-weight: 700
}

.cbp_tmtimeline>li:first-child .cbp_tmicon {
    background: #fff;
    color: #666
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmtime span:last-child {
    color: #444;
    font-size: 13px
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel {
    background: #f0f1f3
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
    border-right-color: #f0f1f3
}

.cbp_tmtimeline>li .empty span {
    color: #777
}

.cbp_tmtimeline>li .cbp_tmtime {
    display: block;
    width: 23%;
    padding-right: 70px;
    position: absolute
}

.cbp_tmtimeline>li .cbp_tmtime span {
    display: block;
    text-align: right
}

.cbp_tmtimeline>li .cbp_tmtime span:first-child {
    font-size: 15px;
    color: #3d4c5a;
    font-weight: 700
}

.cbp_tmtimeline>li .cbp_tmtime span:last-child {
    font-size: 14px;
    color: #444
}

.cbp_tmtimeline>li .cbp_tmlabel {
    margin: 0 0 15px 25%;
    background: #f0f1f3;
    padding: 1.2em;
    position: relative;
    border-radius: 5px
}

.cbp_tmtimeline>li .cbp_tmlabel:after {
    right: 100%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-right-color: #f0f1f3;
    border-width: 10px;
    top: 10px
}

.cbp_tmtimeline>li .cbp_tmlabel blockquote {
    font-size: 16px
}

.cbp_tmtimeline>li .cbp_tmlabel .map-checkin {
    border: 5px solid rgba(235, 235, 235, 0.2);
    -moz-box-shadow: 0px 0px 0px 1px #ebebeb;
    -webkit-box-shadow: 0px 0px 0px 1px #ebebeb;
    box-shadow: 0px 0px 0px 1px #ebebeb;
    background: #fff !important
}

.cbp_tmtimeline>li .cbp_tmlabel h2 {
    margin: 0px;
    padding: 0 0 10px 0;
    line-height: 26px;
    font-size: 16px;
    font-weight: normal
}

.cbp_tmtimeline>li .cbp_tmlabel h2 a {
    font-size: 15px
}

.cbp_tmtimeline>li .cbp_tmlabel h2 a:hover {
    text-decoration: none
}

.cbp_tmtimeline>li .cbp_tmlabel h2 span {
    font-size: 15px
}

.cbp_tmtimeline>li .cbp_tmlabel p {
    color: #444
}

.cbp_tmtimeline>li .cbp_tmicon {
    width: 40px;
    height: 40px;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    font-size: 1.4em;
    line-height: 40px;
    -webkit-font-smoothing: antialiased;
    position: absolute;
    color: #fff;
    background: #46a4da;
    border-radius: 50%;
    box-shadow: 0 0 0 5px #f5f5f6;
    text-align: center;
    left: 20%;
    top: 0;
    margin: 0 0 0 -25px
}

@media screen and (max-width: 992px) and (min-width: 768px) {
    .cbp_tmtimeline>li .cbp_tmtime {
        padding-right: 60px
    }
}

@media screen and (max-width: 65.375em) {
    .cbp_tmtimeline>li .cbp_tmtime span:last-child {
        font-size: 12px
    }
}

@media screen and (max-width: 47.2em) {
    .cbp_tmtimeline:before {
        display: none
    }

    .cbp_tmtimeline>li .cbp_tmtime {
        width: 100%;
        position: relative;
        padding: 0 0 20px 0
    }

    .cbp_tmtimeline>li .cbp_tmtime span {
        text-align: left
    }

    .cbp_tmtimeline>li .cbp_tmlabel {
        margin: 0 0 30px 0;
        padding: 1em;
        font-weight: 400;
        font-size: 95%
    }

    .cbp_tmtimeline>li .cbp_tmlabel:after {
        right: auto;
        left: 20px;
        border-right-color: transparent;
        border-bottom-color: #f5f5f6;
        top: -20px
    }

    .cbp_tmtimeline>li .cbp_tmicon {
        position: relative;
        float: right;
        left: auto;
        margin: -64px 5px 0 0px
    }

    .cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
        border-right-color: transparent;
        border-bottom-color: #f5f5f6
    }
}

.bg-green {
    background-color: #50d38a !important;
    color: #fff;
}

.bg-blush {
    background-color: #ff758e !important;
    color: #fff;
}

.bg-orange {
    background-color: #ffc323 !important;
    color: #fff;
}

.bg-info {
    background-color: #2CA8FF !important;
}
</style>