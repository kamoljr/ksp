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
    
    <link rel="stylesheet" media="screen, print" href="<?= base_url().'/';?>css/datagrid/datatables/datatables.bundle.css">

    <link rel="stylesheet" href="<?= base_url().'/';?>css/bootstrap-float-label.min.css" />
    
    <link rel="stylesheet" media="screen, print" href="<?= base_url().'/';?>css/formplugins/select2/select2.bundle.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->


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
                <div class="page-logo" >
                    <!-- <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut"> -->
                    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
                        <img src="<?= base_url().'/';?>img/logoksp1.png" alt="KSP WebApp" aria-roledescription="logo"
                            style='height:55px;'>
                        <span class="page-logo-text mr-1 kspname"
                            style='font-size:18px !important;'>สำนักงานเลขาธิการคุรุสภา</span>
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
                        

<div class="modal fade default-example-modal-left-sm-ex" tabindex="-1" role="dialog" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-left modal-sm" style="max-width:430px !important;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4">รายชื่อคณะกรรมการ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="panel-tag" style = "margin-bottom:0px;">
                    	[1]ข้อมูลชื่อชุดคณะกรรมการ ชุดที่ 1
                </div>

                <!-- datatable start -->
                <table id="dynamic-table-ex" class="table table-md table-bordered table-hover table-striped w-100">
                    <thead class="bg-primary-600">
                    <tr>
                        <th width = "20px;">
                        </th>
                        <th class="text-center" width = "120px;">
                        เลขบัตรประชาชน
                        </th>
                        <th class="text-center">
                        ชื่อ-นามสกุล
                        </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                
                    <tr>
                        <td>
                        1
                        </td>
                        <td>
                        8-7925-06788-08-4
                        </td>
                        <td>
                        นางสาวชุติมณฑน์ แสงสุวรรณ
                        </td>
                      
                    </tr>
                    <tr>
                        <td>
                        2
                        </td>
                        <td>
                        
                        7-6895-40528-89-7
                        </td>
                        <td>
                        นางนัทนิธิ แสงดารา
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                        3
                        </td>
                        <td>
                        
                        0-8352-23100-01-1
                        </td>
                        <td>
                        นายป้องเกียรติ โชตวาณิช
                        </td>
                        
                    </tr>
                    
                    
                    
                    
                    </tbody>
                </table>
                <!-- datatable end -->


            </div>
            
        </div>
    </div>
</div>

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

<script>
//------------ ที่เก็บ functon รวม เท่านั้น---------------

//---------------open create_one_select----------------------
// ใช้สร้าง select 
// const select_var1 = {
// 	ele_name:"search_unit_id", // ชื่อ element
// 	value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
// 	option_type:"", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
// 	placeholder:"ส่วนงาน",
// 	classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
// 	ctr1:this.value,//เงื่อนไขแสดงข้อมูล
// };
// create_one_select(select_var1);
function create_one_select(select_var){

	var aoData = "a=''";
	//console.log(select_var.ele_name+"||"+select_var.ctr1);
	if (select_var.ctr1 != undefined){
		aoData = aoData+"&ctr1="+select_var.ctr1;
	}
	if (select_var.ctr2 != undefined){
		aoData = aoData+"&ctr2="+select_var.ctr2;
	}
	
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/"+select_var.ele_name,
		dataType: "json",
		async:false,
		data: aoData,
		success: function(response) {
			var str_select = '<select class="'+select_var.classselect+'" id="'+select_var.ele_name+'" name="'+select_var.ele_name+'" placeholder="'+select_var.placeholder+'">';
			if (select_var.option_type == "all"){
				str_select = str_select+'<option value="" >ทั้งหมด</option>';
			}
			if (select_var.option_type == "-"){
				str_select = str_select+'<option value="" >-</option>';
			}
            if (response == ""){
							str_select = str_select+'<option value="" >ไม่พบข้อมูล</option>';
            }else{
							$.each(response,function(i){
								selected = '';
								if (select_var.value_edit == response[i].field_id){selected = 'selected';}
								str_select = str_select+'<option value="'+response[i].field_id+'" '+selected+' >'+response[i].field_name+'</option>';
							});
            }
			
			str_select = str_select+'</select>';
			$("#div_"+select_var.ele_name).html(str_select);
		},
		error: function(response) {
				//console.log(response);
		}
	});
}
	//---------------close create_one_select----------------------

function conventmktimetoddmmyythai(timestamp) { //แปลง mktime =เป็น วันที่ 23/04/2566
  // Create a Date object and set its time using the Unix timestamp
  const date = new Date(timestamp * 1000);

  // Get the individual components of the date
  const year = date.getFullYear()+543;
  const month = date.getMonth() + 1; // Month is 0-indexed, so add 1
  const day = date.getDate();
  const hours = date.getHours();
  const minutes = date.getMinutes();
  const seconds = date.getSeconds();

  // You can format the date as a string in any desired way
  const formattedDate = `${day}/${month}/${year}`;
  //const formattedDate = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
  return formattedDate;
}
function conventmktimetotime(timestamp) { //แปลง mktime =เป็น วันที่ 23/04/2566
  // Create a Date object and set its time using the Unix timestamp
  const date = new Date(timestamp * 1000);

  // Get the individual components of the date
  const year = date.getFullYear()+543;
  const month = date.getMonth() + 1; // Month is 0-indexed, so add 1
  const day = date.getDate();
  const hours = date.getHours();
  const minutes = date.getMinutes();
  const seconds = date.getSeconds();

  // You can format the date as a string in any desired way
  const formattedDate = `${hours}:${minutes}:${seconds}`;
  //const formattedDate = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
  return formattedDate;
}

</script>