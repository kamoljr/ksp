<!-- BEGIN PRIMARY NAVIGATION -->
<nav id="js-primary-nav" class="primary-nav" role="navigation">
	<div class="nav-filter">
		<div class="position-relative">
			<input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
			<a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle"
				data-class="list-filter-active" data-target=".page-sidebar">
				<i class="fal fa-chevron-up"></i>
			</a>
		</div>
	</div>
	<!-- <img src="<? //= base_url().'/';?>img/spic.jpg"> -->
	<? //=$_SESSION['cropimage'] ?>
	<!-- profile-image -->
	<div class="info-card" style='display:block !important;text-align:center;padding-left:10px;padding-right:10px;'>
		<div class="row" style='padding-top:23px !important;padding-bottom:10px !important;'>
			<div class="col" style='z-index: 1;'>
				<!-- <img src="<? //=$_SESSION['cropimage'] ?>" class="rounded-circle" alt="<? //=$_SESSION['user_name'] ?>"  style = 'max-width: 60px !important;height: auto!important;'> -->
			</div>
		</div>


		<div class="row">
			<div class="col">
				<div class="info-card-text" style='margin-left:0 !important;font-size:12px;'>
					<a href="#" class="d-flex  text-white">
						<span class="d-inline-block">
							<?
							echo $_SESSION['user_name'];
							//echo $_SESSION['user_id'];
							?>
						</span>
					</a>
					<span class="d-inline-block opacity-80" style='font-size:12px;padding-top:10px;'>
						<?
						echo $_SESSION['group_name'];
						?>
					</span>
				</div>
			</div>
		</div>
		<img src="<?= base_url() . '/'; ?>img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
	</div>

	<!-- <div id = 'Div_nav'></div> -->
	<ul id="js-nav-menu" class="nav-menu">
<!-- 		
		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-user-gear fs-lg text-white"></i></span><span class="nav-link-text">จัดการผู้ใช้งานระบบ</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>

		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-chess fs-lg text-white"></i></span><span class="nav-link-text">แผนยุทธศาสตร์และแผนงาน</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>

		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-coins fs-lg text-white"></i></span><span class="nav-link-text">งบประมาณ</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>

		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-money-bill-transfer fs-lg text-white"></i></span><span class="nav-link-text">เบิกจ่าย</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>

		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-receipt fs-lg text-white"></i></span><span class="nav-link-text">การเงิน</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>

		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-hand-holding-dollar fs-lg text-white"></i></span><span class="nav-link-text">รายรับและนำส่งเงิน</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>

		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-file-invoice fs-lg text-white"></i></span><span class="nav-link-text">จัดซื้อ/จัดจ้าง</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>
		
		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-people-carry-box fs-lg text-white"></i></span><span class="nav-link-text">ครุภัณฑ์</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>
		
		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-boxes-packing fs-lg text-white"></i></span><span class="nav-link-text">วัสดุ</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>
		
		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-van-shuttle fs-lg text-white"></i></span><span class="nav-link-text">จองรถ</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>
		
		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-calendar-days fs-lg text-white"></i></span><span class="nav-link-text">จองห้องประชุม</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>
		
		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-square-poll-vertical fs-lg text-white"></i></span><span class="nav-link-text">ติดตามผล</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li>
		
		<li><a href="javascript:void(0);" title="จัดการผู้ใช้งานระบบ" class=" waves-effect waves-themed"><span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-screwdriver-wrench fs-lg text-white"></i></span><span class="nav-link-text">แจ้งงานบริการ</span><b class="collapse-sign"><em class="fal fa-angle-down"></em></b></a></li> -->


	</ul>
	<div class="filter-message js-filter-message bg-success-600"></div>
</nav>

<style>
	/* body { font-family: 'TH Sarabun New' !important;font-size:20px; !important;font-weight: bold !important;} */
</style>
<script src="<?= base_url() . '/'; ?>js/gral.js"></script>
<script src="<?= base_url() . '/'; ?>js/vendors.bundle.js"></script>
<script src="<?= base_url() . '/'; ?>js/app.bundle.js"></script>
<script src="<?= base_url() . '/'; ?>js/datagrid/datatables/datatables.bundle.js"></script>
<script src="<?= base_url() . '/'; ?>js/formplugins/select2/select2.bundle.js"></script>
<script src="<?= base_url() . '/'; ?>js/validate.js"></script>
<script src="<?= base_url() . '/'; ?>js/datetimepicker.js"></script>

<script>
	function createmenu() {
		var str_select;
		var aoData = 'user_id=<?= $_SESSION['user_id'] ?>&description_id=<?= $description_id ?>';
		$.ajax({
			type: "POST",
			url: "/public/pages/navigation",
			dataType: "json",
			async: false,
			data: aoData,
			success: function (response) {
				str_select = '';
				zz = 0;

				$.each(response, function (zz) {
					app_name = response[zz].app_name;
					app_id = response[zz].app_id;
					url_main = response[zz].url;
					count_child = response[zz].count_child;
					aactive = '';
					nav_tab = '';
					href = '';
					plus_circle = '';
					
					if (count_child > 0) {
						href = 'javascript:void(0);';
						 plus_circle = '<i class="fal fa-plus-circle"></i>';
						 //plus_circle = '<span class="icon-stack" style = "padding-right:30px;"><i class=" fal fa-solid fa-user-gear fs-lg text-white"></i></span>';
						nav_tab = '';
						if (app_id == '<?= $mom_id ?>') {
							aactive = 'class= "active open"';
						}
					} else {
						href = url_main;
						plus_circle = '';
						nav_tab = 'style="padding-left:32px;"';
						if (app_id == '<?= $app_id ?>') {
							aactive = 'class= "active"';
						}
					}

					str_select = str_select + '<li ' + aactive + '><a href="'+href+'" title="' + app_name + '">';
					str_select = str_select + plus_circle
					str_select = str_select + '<span class="nav-link-text"' + nav_tab + '>' + app_name + '</span></a>';

					if (count_child > 0) {
						
						var str_select_sub = '';
						var aoData = 'user_id=<?= $_SESSION['user_id'] ?>&description_id=<?= $description_id ?>&mom_id='+app_id;
						$.ajax({
							type: "POST",
							url: "/public/pages/navigationsub",
							dataType: "json",
							async: false,
							data: aoData,
							success: function (responsesub) {
								str_select_sub = str_select_sub + '<ul>';
								ii = 0;

								$.each(responsesub, function (ii) {
									app_name_sub = responsesub[ii].app_name_sub;
									app_id_sub = responsesub[ii].app_id_sub;
									url_main_sub = responsesub[ii].url_sub;
									count_child_sub = responsesub[ii].count_child_sub;
									active_sub = '';
									nav_tab_sub = '';
									href_sub = '';
									plus_circle_sub = '';
									if (app_id_sub == '<?= $app_id ?>') {
										active_sub = 'class= "active"';
									}
								
									href_sub = url_main_sub;
						
									nav_tab = 'style="padding-left:32px;"';
									str_select_sub = str_select_sub + '<li ' + active_sub + '><a href="'+href_sub+'" title="' + app_name_sub + '">';
								
									str_select_sub = str_select_sub + '<span class="nav-link-text"' + nav_tab_sub + '>' + app_name_sub + '</span></a>';

									// if (count_child > 0) {
									// 	str_select = str_select + '<ul>';
									// 	str_select = str_select + '<li class="">';
									// 	str_select = str_select + '<a href="utilities_typography.html" title="Typography">';
									// 	str_select = str_select + '<span class="nav-link-text">Typography</span>';
									// 	str_select = str_select + '</a>';
									// 	str_select = str_select + '</li>';
									// 	str_select = str_select + '</ul>';
									// }

									ii++;
									str_select_sub = str_select_sub + `</li>`;
								});
								str_select_sub = str_select_sub + '</ul>';
								str_select = str_select + str_select_sub;
							},
							error: function (responsesub) {
								//console.log(response);
							}
						});
						
						
					}

					zz++;
					str_select = str_select + `</li>`;
				});
				$("#js-nav-menu").append(str_select);
			},
			error: function (response) {
				//console.log(response);
			}
		});
	}
	
	
	window.onload = function () {
		createmenu();
	}

	$(document).ready(function () {
		//  alert('jq');

		$(".select2-placeholder").select2({
			placeholder: "ทั้งหมด",
			allowClear: true
		});
	});
	var thaiYear = function (ct) {
        var leap=3;  
        var dayWeek=["พฤ.", "ศ.", "ส.", "อา.","จ.", "อ.", "พ."];  
        if(ct){  
            var yearL=new Date(ct).getFullYear()-543;  
            leap=(((yearL % 4 == 0) && (yearL % 100 != 0)) || (yearL % 400 == 0))?2:3;  
            if(leap==2){  
                dayWeek=["ศ.", "ส.", "อา.", "จ.","อ.", "พ.", "พฤ."];  
            }  
        }              
        this.setOptions({  
            i18n:{ th:{dayOfWeek:dayWeek}},dayOfWeekStart:leap,  
        })                
    };    
	$(function(){
  
 
    
     
    $(".datepk").datetimepicker({
     
        timepicker:false,
        format:'d-m-Y',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
        lang:'th',  // แสดงภาษาไทย
        onChangeMonth:thaiYear,          
        onShow:thaiYear,                  
        yearOffset:543,  // ใช้ปี พ.ศ. บวก 543 เพิ่มเข้าไปในปี ค.ศ
        closeOnDateSelect:true,
    });       
 
     
     
});
//create_select_group(gid);
</script>