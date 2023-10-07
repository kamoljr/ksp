<?
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get full url
?>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel" style="margin-bottom: 15px;">
      <div class="panel-container">
        <div id="js_list_accordion" class="accordion accordion-hover accordion-clean">
          <div class="card border-top-left-radius-0 border-top-right-radius-0">
            <div class="card-header">
              <a href="javascript:void(0);" class="card-title" data-toggle="collapse"
              data-target="#js_list_accordion-a" aria-expanded="true" data-filter-tags="settings">
                <i class="fal fa-search width-2 fs-xl">
                </i>
                ค้นหาโดย
                <span class="ml-auto">
                  <span class="collapsed-reveal">
                    <i class="fal fa-chevron-up fs-xl">
                    </i>
                  </span>
                  <span class="collapsed-hidden">
                    <i class="fal fa-chevron-down fs-xl">
                    </i>
                  </span>
                </span>
              </a>
            </div>
            <!-- จุดที่ 1 เปิด แก้ส่วนค้นหาโดย -->
            <div id="js_list_accordion-a" class="collapse show" data-parent="#js_list_accordion">
              <div class="card-body">
                <form action="<?=$actual_link?>" method="post" accept-charset="utf-8"
                id="form-search" name="form-search">
                  <div class="row">
                    <div class="col-sm-6">
                      <label class="form-label" for="year_search">
                        วันที่
                      </label>
                      <input type="text" class="form-control form-ele clear-element datepk searchdata" id="search_make_date" name="search_make_date" placeholder="วันที่" value="" >
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="unit_name_search">
                        ผู้ใช้งาน
                      </label>
                      <div id = "div_search_make_id"></div>
                      
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- ปิด แก้ส่วนค้นหาโดย -->
          </div>
        </div>
      </div>
    </div>
    <div class="alert alert-warning" id='searchresults' name='searchresults'
    style="margin-bottom: 15px;">
      ค้นหาโดย : ทั้งหมด
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 0px;">
        
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                
                <th class="text-center" width="60px;">
                  วันที่
                </th>
                <th class="text-center" width="60px;">
                  เวลา
                </th>
                <th class="text-center" width="150px;">
                  ชื่อ-สกุล
                </th>
                <th class="text-center" width="100px;">
                  เมนู
                </th>
                <th class="text-center">
                  สิ่งที่ทำ
                </th>
                <th class="text-center" width="30px;">
                  รหัส
                </th>
                <th class="text-center">
                  รายละเอียด
                </th>
            
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <td>
                  11/06/66
                </td>
                <td>
                  1:44 pm
                </td>
                <td>
                  นายวีระ เทพทัต
                </td>
                <td>
                  Login
                </td>
                <td>
                  Login เข้าระบบ
                </td>
                <td>
                  -
                </td>
                <td>
                  Login เข้าระบบ
                </td>
              </tr>
              <tr>
                <td>
                  11/06/66
                </td>
                <td>
                  2:12 pm
                </td>
                <td>
                  นายวีระ เทพทัต
                </td>
                <td>
                  ผู้ใช้งาน
                </td>
                <td>
                  เพิ่มผู้ใช้งานระบบ
                </td>
                <td>
                  37
                </td>
                <td>
                  เพิ่มผู้ใช้งาน : นายทดสอบระบบ 3</br>เพิ่มผู้ใช้งาน : กลุ่มพัฒนาระบบงาน
                </td>
              </tr>
              <tr>
                <td>
                  11/06/66
                </td>
                <td>
                  3:29 pm
                </td>
                <td>
                  นางสาวดวงแก้ว อดิศวร
                </td>
                <td>
                  เบิกจ่าย
                </td>
                <td>
                  เพิ่มรายการเบิกจ่าย
                </td>
                <td>
                  37
                </td>
                <td>
                  เรื่อง : ขออนุมัติเบิกเงินค่าโทรศัพท์ ประจำเดือน สิงหาคม ๒๕๖๕</br>รายการ : ค่าโทรศัพท์ </br>จำนวนเงิน : 3,000 บาท
                </td>
              </tr>
              <tr>
                <td>
                  11/06/66
                </td>
                <td>
                  4:12 pm
                </td>
                <td>
                  นายวีระ เทพทัต
                </td>
                <td>
                  -
                </td>
                <td>
                  Logout
                </td>
                <td>
                  -
                </td>
                <td>
                  Logout ออกจากระบบ
                </td> -->
              </tr>
              
              
            </tbody>
          </table>
          <!-- datatable end -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>

$(document).ready(function() {
	
	searchdata();
	// ------------------open สร้าง select------------------------
	
  //-------open------
  const select_var1 = {
    ele_name:"search_make_id", 
    value_edit:"",
    option_type:"-",
    placeholder:"ผู้ใช้งาน",
    classselect:"select2 searchdata",
    ctr1:"",
  };
  create_one_select(select_var1);
  //--------close-----
	
	// ------------------close สร้าง select ทั้งหมด------------------------

	$(".select2").select2();
  
	
  
	$(document).ready(function() {
		$('.ele_select_add').select2({
			dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
		});
	});

	// ------------------open datatable------------------------
	var table = $("#dynamic-table").DataTable({
			orderCellsTop: true,
			fixedHeader: true,
			bLengthChange: false,
			searching: false,
			bAutoWidth: false,
			bStateSave: true,
			processing: true,
			bPaginate: true,
			serverSide: true,
			bProcessing: true,
			iDisplayLength: 8,
			bServerSide: true,
			sAjaxSource: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/load_data",
			async: false,
			aaSorting: [],
			fnServerParams: function(aoData) {
				var acolumns = this.fnSettings().aoColumns,
				columns = [];
				$.each(acolumns, function(i, item) {
					columns.push(item.data);
				});
				aoData.push({
					name: "columns",
					value: columns,
				});

				// เปิด แก้ไข ใส่ค่า ตัวค้นหา
				aoData.push({
						name: 'search_make_date',
						value: $("#search_make_date").val(),
				});
				aoData.push({
						name: 'search_make_id',
						value: $("#search_make_id").val(),
				});
				// ปิด แก้ไข ใส่ค่า ตัวค้นหา

			},
			columns: [
					// เปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
					{
						data: "make_date_mktime",
            render: function(data, type, row) { 
						return conventmktimetoddmmyythai(row.make_date_mktime);
						},
					},
					{
						data: "make_date_mktime",
            render: function(data, type, row) { 
						return conventmktimetotime(row.make_date_mktime);
						},
					},
					{
						data: "user_name",
					},
					{
						data: "app_name",
					},
					{
						data: "action_menu",
					},
					{
						data: "get_id",
					},
					{
						data: "action_detail",
					},
					
					//ปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
			],
			order: [
					[0, "desc"]
			],
			lengthMenu: [
					[10, 25, 50, 100],

					[10, 25, 50, 100],
			],
			oLanguage: {
					sLengthMenu: "_MENU_",
			},
			fnInitComplete: function() {
					//oTable.fnAdjustColumnSizing();
			},
			fnServerData: function(sSource, aoData, fnCallback) {
					$.ajax({
							dataType: "json",
							async: true,
							type: "POST",
							url: sSource,
							data: aoData,
							success: fnCallback,
					});
			},
			fnDrawCallback: function() {
					$("body").css("min-height", $("#table1 tr").length * 50 + 200);
					$(window).trigger("resize");
			},
			// เปิด แก้ไข การเรียง
			columnDefs: [{
							targets: [2,3,4,5,6],
							orderable: false,
					},
					{
							targets: [0, 3,5],
							className: "text-center",
					},
			],
			// ปิด แก้ไข การเรียง
	});
// ------------------close datatable------------------------
	
// ------------------open ค้าหา จุดที่ 1/2-----------------------
	$(document).on('change', '.searchdata', function() {
			searchdata();
	});
// ------------------close ค้าหา จุดที่ 1/2-----------------------



	// ------------------open แกไข จุดที่ 1/2-----------------------
	$('#dynamic-table tbody').on('click', 'td .edit-data', function() {
			let mode = $(this).attr("mode");
			var tr = $(this).closest('tr');
			var row = table.row(tr);
			var d = row.data();
			editdata(d, mode);   
	});
	// ------------------close แกไข จุดที่ 1/2-----------------------


	// ------------------open เพิ่ม จุดที่ 1/1-----------------------
	$(document).on('click', '#btnadd', function() {
		$(".boss1").hide();
		$("#btn_boss1").show();
		
		$('#chift_unit_add').select2({
   	 dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  	});
		$("#ids").val('');
		$(".lblmode").text("เพิ่ม");
		$("#icon_add_form").show();
		$("#icon_edit_form").hide();
		$("#icon_view_form").hide();

		$(".div_show_rowid").hide();

		$(".clear-element").val('');
		
			
		$('.form-ele').prop('disabled', false);

		$('.stars').show(); // ซ่อนดาวแดง

		$(".dialog-data").show();
		$(".dialog-success").hide();

		$("#btn_save_change").show();
		$("#btn_dialog_close").show();
			
	});
	// ------------------close เพิ่ม จุดที่ 1/1-----------------------


	//------------------ไม่ต้องแก้------------------
	$(document).on('click', '#btn_dialog_close', function() {//ปุ่มปิด dialog
			$('.default-example-modal-right').modal('toggle');
	});
	//------------------ปิด ไม่ต้องแก้------------------

	
	
	$("#form_save").validate({
		rules: {
			unit_name: "required",
		},
		messages: {
			unit_name: "กรุณาป้อนชื่อ ส่วนงาน",
		},
		errorPlacement: function(error, element) {
			if (element.is(":radio")) {
				error.appendTo(element.parents('.form-group'));
			} else { // This is the default behavior 
				error.insertAfter(element);
			}
		},
		submitHandler: function(form) {
			savedata();
		}
	});

});



	// ------------------open ค้าหา จุดที่ 2/2-----------------------
	function searchdata(){
	
		text1 = "วันที่ : ";
    sval1 = $("#search_make_date" ).val();
		if (sval1 == '') { sval1 = ''; }
		text1 = text1+"<b>"+sval1+"</b>";

		text2 = "ผู้ใช้งาน : ";
		sval2 = $("#search_make_id option:selected" ).text();
		if (sval2 == '') { sval2 = 'ทั้งหมด'; }
		text2 = text2+"<b>"+sval2+"</b>";

		txt_all = text1+"&ensp;&ensp;&ensp;"+text2;
		let txt = `
		<strong>ผลการค้นหา : </strong>
		${txt_all}
		`;

		$("#searchresults").html(txt);

		$(function(){
			table = $('#dynamic-table').DataTable();
			table.draw();
		});
	}
	// ------------------close ค้าหา จุดที่ 1/2-----------------------
// ------------------open แกไข จุดที่ 2/2-----------------------
	function editdata(d, mode) {
		console.log(d);
		$('.default-example-modal-right').modal('toggle');
		$(".dialog-data").show();
		$(".dialog-success").hide();
		$("#icon_add_form").hide();
		$("#rowid").show();

		// เปิด แก้ไข ใส่ค่า 
		$(".boss1").hide();
		$("#ids").val(d.structure_unit_id);
		
		// ปิด แก้ไข ใส่ค่า
		
		let aoData = "ids=" + d.structure_unit_id;
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/edit_data",
			dataType: "json",
			beforeSend: function () {
				$("#overlay").fadeIn(200);
			},
			data: aoData,
			success: function (response) {

				if (response[0].unit_chief != 0 && response[0].unit_chief != null){
					$(".boss1").show();
					
					$('#chift_unit_add').select2({
						dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
					});
				}
				
				
				$("#unit_name").val(response[0].unit_name);
				$("#chift_unit_add").val(response[0].unit_chief);
			},
			complete: function () {
				setTimeout(function () {
					$("#overlay").fadeOut(200);
				}, 100);
			},
			error: function (response) {
				//console.log(response);
			}
		});
		let txt = '';

		$("#btn_dialog_close").show();

		if (mode == 'edit') {
			$("#btn_boss1").show();
			txt = 'แก้ไข';
			$('.form-ele').prop('disabled', false);
			$('.stars').show(); // ซ่อนดาวแดง
			$("#btn_save_change").show();

			$("#icon_edit_form").show();
			$("#icon_view_form").hide();

		} else {
			txt = 'แสดง';
			setTimeout(function () {
				$('.form-ele').prop('disabled', true);
			}, 1000);
				
			

			$('.stars').hide(); // ซ่อนดาวแดง
			$("#btn_save_change").hide();

			$("#icon_view_form").show();
			$("#icon_edit_form").hide();
			$("#btn_boss1").hide();
			
		}

		$('#lbl_rowid').text("รหัส " + d.structure_unit_id);

		$('.div_show_rowid').show();
		
		$(".lblmode").text(txt);

	}
	// ------------------open แกไข จุดที่ 2/2-----------------------

// ------------------open ลบ จุดที่ 1/1-----------------------

function deldata() {
	$("#del_detail").text('');
	var aoData = 'ids='+$("#ids").val()+"&for_log_app_id=<?=$app_id?>&for_log_app_name=<?=$app_name?>";
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/del_data",
		dataType: "json",
		beforeSend: function () {
			$("#overlay").fadeIn(200);　
		},
		data: aoData,
		success: function(response) {
			if (response == "cannotdel"){
				alert("รายการถูกใช้แล้ว ไม่สามารถลบได้");
			}
			GoCurrentPage();
				
		},
		complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
			setTimeout(function(){
				
				$("#overlay").fadeOut(200);
				console.log("ss");
			},100);
		},
		error: function(response) {
				//console.log(response);
		}
	});
}

function find_count_reccord(url,aoData) { // not found return 0
	var aoData = aoData;
	ans = "";
	$.ajax({
			type: "POST",
			url: url,
			dataType: "json",
			async:false,
			beforeSend: function () {

			},
			data: aoData,
			success: function(response) {
				ans = response[0].count_reccord;
			},
			complete: function () {
				
			},
			error: function(response) {
		
			}
	});
	return ans;
}

function set_del_id(ids,unit_id){
	$("#ids").val(ids);
	$("#del_detail").text('รหัส ' + ids);  
	url = "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/chk_del";
	aoData = 'unit_id='+unit_id+'&search_structure_name='+$("#search_structure_name").val();
	ans = find_count_reccord(url, aoData);
	//ans = 0;
	if (ans == 0) {
		console.log("not found");
		$("#btn_del_data").show();
		$("#div_del_detail").hide();
	} else { 
		console.log('found');
		$("#btn_del_data").hide();
		$("#div_del_detail").show();
	}
}
// ------------------close ลบ จุดที่ 1/1-----------------------

//------------------ไม่ต้องแก้------------------
function format(d) {
	//$(".dialog-success").hide();
	//return `<?//=view("{$description_en}/{$pages}/{$pages}add.php")?>`;
}
function GoCurrentPage(){
	var table = $('#dynamic-table').DataTable();
	var info = table.page.info();
	var CurrentPage = info.page;
	table.page(CurrentPage).draw(false);
}
//------------------ปิด ไม่ต้องแก้------------------


// ------------------open save จุดที่ 1/1-----------------------
function savedata() {
	
	var aoData = $('#form_save').serialize()+"&search_structure_name="+$("#search_structure_name").val();
	console.log(aoData);
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/save_data",
		dataType: "json",
		beforeSend: function () {
			$("#overlay").fadeIn(200);　
		},
		data: aoData,
		success: function(response) {
			console.log("response=".response);
			if (response == "duplicatename"){
				alert("ชื่อรายการนี้มีอยู่แล้ว ไม่สามารถเพิ่มได้");
			}else{
				$(".dialog-data").hide();
				$(".dialog-success").show();


				$("#btn_save_change").hide();
				$("#btn_dialog_close").hide();
				
				setTimeout(() => {
					if ($("#ids").val() == "") {
						table = $('#dynamic-table').DataTable();
						table.draw();
					} else { 
						GoCurrentPage();
					}
					
					$('.default-example-modal-right').modal('toggle');
				}, "500");
			}
		},
		complete: function () {
			$("#overlay").fadeOut(200);
		},
		error: function(response) {
				//console.log(response);
		}
	});
}
// ------------------close save จุดที่ 1/1-----------------------




</script>
<style>
.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>

<script>
    
// $(document).ready(function() {

//   var table = $("#dynamic-table").DataTable({
//     orderCellsTop: true,
//     fixedHeader: true,
//     bLengthChange: false,
//     searching: false,
//     bAutoWidth: false,
//     bStateSave: true,
//     processing: true,
//     bPaginate: true,
//     columnDefs: [{
//       targets: [6],
//       orderable: false,
//     },
//     {
//       targets: [0,3,5],
//       className: "text-center",
//     },
//     {
//       targets: [1, 2],
//       className: "text-left",
//     }]

//   });

// });

</script>