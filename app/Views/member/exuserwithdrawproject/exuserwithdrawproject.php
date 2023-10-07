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
                        ปีงบประมาณ
                      </label>
                      <div id = "div_search_budget_year"></div>
                      
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="unit_name_search">
                        โครงการ
                      </label>
                      <div id = "div_search_project_id"></div>
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
      <!-- ค้นหาโดย : ปี 2566 -->
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 0px;">
          <div class="frame-wrap mt-3 mb-0 w-100">
            <button id="btnadd" type="button" class="btn btn-primary" data-toggle="modal"
            data-target=".default-example-modal-right" style="display: flex;">
              <span class="ni ni-big-plus fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                เพิ่ม
              </span>
            </button>
          </div>
          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width = "20px;">
                </th>
                <th class="text-center">
                  ชื่อ-สกุล
                </th>
                <th class="text-center">
                  ส่วนงาน
                </th>
                <th class="text-center">
                  กลุ่มงาน
                </th>
                <th class="text-center">
                  โครงการ
                </th>
                <th width="90">
                </th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <td>
                  1
                </td>
                <td>
                  นางสาวดวงแก้ว อดิศวร 
                </td>
                <td>
                  สำนักอำนวยการ/</br>กลุ่มการประชุมและประสานงาน
                </td>
                <td>
                  โครงการทดสอบ 1
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit'>
                    <i class="ni ni-pencil">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="ni ni-trash">
                    </i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                  นายวีระ เทพทัต
                </td>
                <td>
                  สำนักอำนวยการ/</br>กลุ่มการเงินและบัญชี
                </td>
                <td>
                  โครงการทดสอบ 2
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit'>
                    <i class="ni ni-pencil">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="ni ni-trash">
                    </i>
                  </a>
                </td>
              </tr> -->
              
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
<script>

$(document).ready(function() {
	// ------------------open สร้าง select------------------------

	//-------open------
	const select_var = {
		ele_name:"search_budget_year",
		value_edit:"",
		option_type:"",
		placeholder:"ปีงบประมาณ",
		classselect:"select2 searchdata",
	};
	create_one_select(select_var);
	//--------close-----

  //-------open------
	const select_var1 = {
		ele_name:"search_project_id", 
		value_edit:"",
		option_type:"all",
		placeholder:"โครงการ",
		classselect:"select2 searchdata",
		ctr1:$("#search_budget_year").val(),
	};
	create_one_select(select_var1);
	//--------close-----
	//--------open-----
	$(document).on('change', '#search_budget_year', function() {
		const select_var1 = {
			ele_name:"search_project_id", // ชื่อ element
			value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
			option_type:"all", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
			placeholder:"โครงการ",
			classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
			ctr1:this.value,//เงื่อนไขแสดงข้อมูล
		};
		// console.log(this.value);
	  create_one_select(select_var1);
		$(".select2").select2();
  });
	//--------close-----

  


	searchdata();
	// ------------------close สร้าง select ทั้งหมด------------------------

	$(".select2").select2();
  $(".boss1").hide();
	
  $(document).on('click', '#btn_boss1', function() {
	  $(".boss1").show();
  });
  $('#boss1').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
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
						name: 'search_budget_year',
						value: $("#search_budget_year").val(),
				});
				aoData.push({
						name: 'search_project_id',
						value: $("#search_unit_id").val(),
				});
				
				// ปิด แก้ไข ใส่ค่า ตัวค้นหา

			},
			columns: [
					// เปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
					{
						data: "user_withdraw_id",
					},
					{
						data: "user_name",
					},
					{
						data: "unit_name",
					},
					{
						data: "group_name",
					},
					{
						data: "project_name",
					},
					{
						data: "user_withdraw_id",
						render: function(data, type, row) {
								
							txtex = 'data-toggle="modal" data-target=".default-example-modal-right-lg"';
						
							str_btn = "";
							str_btn = str_btn +
								`<a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode = 'view'><i class="ni ni-eye"></i></a>&nbsp;&nbsp;`;

							str_btn = str_btn +
								`<a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode = 'edit'><i class="ni ni-pencil"></i></a>&nbsp;&nbsp;`;

							str_btn =
								str_btn +
								`<a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"data-toggle="modal" data-target="#example-modal-alert" onclick=set_del_id('${row.user_withdraw_id}')><i class="ni ni-trash"></i></a>`;
							return str_btn;
						},
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
							targets: [5],
							orderable: false,
					},
					{
							targets: [0,5],
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
    
		$("#lbl_budget_year_add").text($("#search_budget_year option:selected" ).text());
		// $("#form_add_unitname").text($("#search_unit_id option:selected" ).text());
		
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
		
  //--------สร้าง select หน้าเพิ่ม--------
    //-------open------
    const select_var2 = {
      ele_name:"project_id_add", 
      value_edit:"",
      option_type:"-",
      placeholder:"โครงการ",
      classselect:"ele_select_add",
      ctr1:$("#search_budget_year").val(),
    };
    create_one_select(select_var2);
    //--------close-----
     //-------open------
    const select_var3 = {
      ele_name:"user_id_add", 
      value_edit:"",
      option_type:"-",
      placeholder:"ผู้ใช้งาน",
      classselect:"ele_select_add",
      ctr1:"",
    };
    create_one_select(select_var3);
    //--------close-----
    $('.ele_select_add').select2({
			dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
		});
    //---------------------------------------

	});
	// ------------------close เพิ่ม จุดที่ 1/1-----------------------


	//------------------ไม่ต้องแก้------------------
	$(document).on('click', '#btn_dialog_close', function() {//ปุ่มปิด dialog
			$('.default-example-modal-right').modal('toggle');
	});
	//------------------ปิด ไม่ต้องแก้------------------

	
	
	$("#form_save").validate({
		rules: {
			user_id_add: "required",
			project_id_add: "required",
		},
		messages: {
			user_id_add: "กรุณาป้อน ผู้ใช้งาน",
			project_id_add: "กรุณาป้อน โครงการ",
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
	
		text1 = "ปีงบประมาณ : ";
		sval1 = $("#search_budget_year option:selected" ).text();
		if (sval1 == '') { sval1 = 'ทั้งหมด'; }
		text1 = text1+"<b>"+sval1+"</b>";

		text2 = "โครงการ : ";
		sval2 = $("#search_project_id option:selected" ).text();
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
		
		$("#lbl_budget_year_add").text($("#search_budget_year option:selected" ).text());

		$('.default-example-modal-right').modal('toggle');
		$(".dialog-data").show();
		$(".dialog-success").hide();
		$("#icon_add_form").hide();
		$("#rowid").show();

		// เปิด แก้ไข ใส่ค่า 
		$("#ids").val(d.user_withdraw_id);
		
		// ปิด แก้ไข ใส่ค่า
		
		let aoData = "ids=" + d.user_withdraw_id;
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/edit_data",
			dataType: "json",
			beforeSend: function () {
				$("#overlay").fadeIn(200);
			},
			data: aoData,
			success: function (response) {

			
				
				
				$("#user_id_add").val(response[0].user_id);
				$("#project_id_add").val(response[0].project_id);
        //--------สร้าง select หน้าเพิ่ม--------
        //-------open------
        const select_var2 = {
          ele_name:"project_id_add", 
          value_edit:response[0].project_id,
          option_type:"-",
          placeholder:"โครงการ",
          classselect:"ele_select_add",
          ctr1:$("#search_budget_year").val(),
        };
        create_one_select(select_var2);
        //--------close-----
        //-------open------
        const select_var3 = {
          ele_name:"user_id_add", 
          value_edit:response[0].user_id,
          option_type:"-",
          placeholder:"ผู้ใช้งาน",
          classselect:"ele_select_add",
          ctr1:"",
        };
        create_one_select(select_var3);
        //--------close-----
        $('.ele_select_add').select2({
          dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
        });
        //---------------------------------------

		
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
			
			
		}

		$('#lbl_rowid').text("รหัส " + d.user_withdraw_id);

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

function set_del_id(ids,group_id){
	$("#ids").val(ids);
	$("#del_detail").text('รหัส ' + ids);  
	url = "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/chk_del";
	aoData = 'group_id='+group_id+'&search_structure_name='+$("#search_structure_name").val();// เงื่อนไขการลบ
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
	$(".dialog-success").hide();
	return `<?=view("{$description_en}/{$pages}/{$pages}add.php")?>`;
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
	
	// -----ใส่ค่า--------
	var aoData = $('#form_save').serialize()+"&search_budget_year="+$("#search_budget_year").val();
	//----------------
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
				//alert("ชื่อรายการนี้มีอยู่แล้ว ไม่สามารถเพิ่มได้");
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
  // var table = $("#dynamic-table").DataTable({
  //   orderCellsTop: true,
  //   fixedHeader: true,
  //   bLengthChange: false,
  //   searching: false,
  //   bAutoWidth: false,
  //   bStateSave: true,
  //   processing: true,
  //   bPaginate: true,
  //   columnDefs: [{
  //     targets: [3,4],
  //     orderable: false,
  //   },
  //   {
  //     targets: [0,3],
  //     className: "text-center",
  //   },
  //   {
  //     targets: [1, 2],
  //     className: "text-left",
  //   }]

  // });
</script>