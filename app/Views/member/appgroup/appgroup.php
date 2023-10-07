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
                    
                    <div class="col-sm-12">
                      <label class="form-label" for="group_permission_search">
                        ระดับผู้ใช้งาน
                      </label>
                      <input id="group_permission_search" name="group_permission_search" class="form-control searchdata"
                      type="text" placeholder="ระดับผู้ใช้งาน" />
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
                <th class="text-center" width = "300px;">
                  ระดับผู้ใช้งาน
                </th>
                <th class="text-center">
                  คำอธิบาย
                </th>
                <th width="90">
                </th>
              </tr>
            </thead>
            <tbody>
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
  create_tab();
  create_permission();

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
						name: 'group_permission_search',
						value: $("#group_permission_search").val(),
				});
				// ปิด แก้ไข ใส่ค่า ตัวค้นหา

			},
			columns: [
					// เปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
					{
						data: "group_permission_id",
					},
					{
						data: "group_permission",
					},
					{
						data: "group_permission_comment",
					},
					{
						data: "group_permission_id",
						render: function(data, type, row) {
								
							txtex = 'data-toggle="modal" data-target=".default-example-modal-right-lg"';
						
							str_btn = "";
							str_btn = str_btn +
								`<a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode = 'view'><i class="ni ni-eye"></i></a>&nbsp;&nbsp;`;

							str_btn = str_btn +
								`<a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode = 'edit'><i class="ni ni-pencil"></i></a>&nbsp;&nbsp;`;

							str_btn =
								str_btn +
								`<a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"data-toggle="modal" data-target="#example-modal-alert" onclick=set_del_id('${row.group_permission_id}')><i class="ni ni-trash"></i></a>`;
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
							targets: [3],
							orderable: false,
					},
					{
							targets: [0,3],
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
    $("input[type=checkbox]").prop("checked",false);
		$("#form_add_structure").text($("#search_structure_name option:selected" ).text());
		$("#form_add_unitname").text($("#search_unit_id option:selected" ).text());
		
		$(".boss1").hide();
		$("#btn_boss1").show();
		create_chift_unit_add("");
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
			unit_name: "กรุณาป้อนชื่อ กลุ่มงาน",
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

function create_chift_unit_add(value_select){
		var aoData = '';
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_chift_unit_add",
			dataType: "json",
			async:false,
			data: aoData,
			success: function(response) {
				var str_select = '<select class="form-ele clear-element ele_select_add" id="chift_unit_add" name="chift_unit_add">';
				str_select = str_select+'<option value="" >-</option>';
				$.each(response,function(i){
					selected = '';
					if (value_select == response[i].user_id){selected = 'selected';}
					str_select = str_select+'<option value="'+response[i].user_id+'" '+selected+' >'+response[i].user_name+'</option>';
				});
				str_select = str_select+'</select>';
				$(".boss1").html(str_select);

			},
			error: function(response) {
					//console.log(response);
			}
		});
	}

	// ------------------open ค้าหา จุดที่ 2/2-----------------------
	function searchdata(){
	
		
		text1 = "ระดับผู้ใช้งาน : ";
		sval1 = $("#group_permission_search" ).val();
		if (sval1 == '') { sval1 = 'ทั้งหมด'; }
		text1 = text1+"<b>"+sval1+"</b>";
  
		txt_all = text1+"&ensp;&ensp;&ensp;";
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
		
		$('.default-example-modal-right').modal('toggle');
		$(".dialog-data").show();
		$(".dialog-success").hide();
		$("#icon_add_form").hide();
		$("#rowid").show();

		// เปิด แก้ไข ใส่ค่า 
		
		$("#ids").val(d.group_permission_id);
		
		// ปิด แก้ไข ใส่ค่า
		
		let aoData = "ids=" + d.group_permission_id;
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/edit_data",
			dataType: "json",
			beforeSend: function () {
				$("#overlay").fadeIn(200);
			},
			data: aoData,
			success: function (response) {

		
				
				
				$("#group_permission").val(response[0].group_permission);
				$("#group_permission_comment").val(response[0].group_permission_comment);

        $("input[type=checkbox]").prop("checked",false);

        //---- permission-----
          aoData = "group_permission_id="+d.group_permission_id;
          $.ajax({
            type: "POST",
            url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/show_edit",
            dataType: "json",
            async:false,
            data: aoData,
            success: function(responsepermission) {
              
              $.each(responsepermission,function(ii){
                //console.log('xxxx');
                app_id = responsepermission[ii].app_id;
                show_p = responsepermission[ii].show_p;
                add_p = responsepermission[ii].add_p;
                edit_p = responsepermission[ii].edit_p;
                del_p = responsepermission[ii].del_p;

                if (show_p == "Y"){
                  $("input[type=checkbox][name=show_"+app_id+"]").prop("checked",true);
                }
                if (add_p == "Y"){
                  $("input[type=checkbox][name=add_"+app_id+"]").prop("checked",true);
                }
                if (edit_p == "Y"){
                  $("input[type=checkbox][name=edit_"+app_id+"]").prop("checked",true);
                  //console.log("app_p = "+add_p+" || edit_p="+edit_p);
                }
                if (del_p == "Y"){
                  $("input[type=checkbox][name=del_"+app_id+"]").prop("checked",true);
                }
              });
            },
            error: function(response) {
                
            }
          });
        //--------------------
	
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

		$('#lbl_rowid').text("รหัส " + d.group_permission_id);

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
	// url = "/public/index.php/<?//=$description_en;?>/<?//=$pages;?>_cn/chk_del";
	// aoData = 'a=a';// เงื่อนไขการลบ
	// ans = find_count_reccord(url, aoData);
	ans = 0;
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
	
	// -----ใส่ค่า--------
	var aoData = $('#form_save').serialize();
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



function create_tab(){
  
	var aoData = "a=''"; 

	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_tab",
		dataType: "json",
		async:false,
		data: aoData,
		success: function(response) {
			
      str = "";
      $.each(response,function(i){
				str = str+'<a class="list-group-item list-group-item-action" href="#spyscroll-2-'+response[i].description_id+'" style="padding:10px;">';
        str = str+'<i class="fa-solid '+response[i].icon_system_s+'"></i>';
        str = str+'<label class="mobileHide">&nbsp; '+response[i].description+'</label>';
        str = str+'</a>';
			});
    
      $("#div_create_tab").html(str);
		},
		error: function(response) {
				
		}
	});
  
}
function create_permission(){
  
	var aoData = "a=''"; 

	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_permission",
		dataType: "json",
		async:false,
		data: aoData,
		success: function(response) {
			
      str = "";
      $.each(response,function(i){

        str = str+'<div class="row bg-primary-200 text-white rounded" style = "padding-top:20px;margin-bottom:20px;" id="spyscroll-2-'+response[i].description_id+'">';
          str = str+'<div class="col" >';
            str = str+'<h4 >'+response[i].description+'</h4>';
          str = str+'</div>';
          str = str+'<div class="col text-right" style = "padding-bottom:20px;">';
            str = str+'<div class="custom-control custom-checkbox custom-control-inline" >';
              str = str+'<input type="checkbox" class="custom-control-input" id="systemmenu'+response[i].description_id+'" onchange="fn_systemcheck('+response[i].description_id+')">';
              str = str+'<label class="custom-control-label" for="systemmenu'+response[i].description_id+'">ทั้งหมด</label>';
            str = str+'</div>';
          str = str+'</div>';
        str = str+'</div>';
        // open row menu
        var aoData = "description_id="+response[i].description_id; 
        $.ajax({
          type: "POST",
          url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_menu",
          dataType: "json",
          async:false,
          data: aoData,
          success: function(response_nemu) {
            
            //str = "";
            $.each(response_nemu,function(i){
              let app_name = response_nemu[i].app_name_des;
              let app_name1 = app_name.replace("&nbsp;", "");
              let app_name2 = app_name1.replace("&emsp;", "");
              let app_name3 = app_name2.replace("&emsp;&emsp;", "");
              let app_name4 = app_name3.replace("&emsp;&emsp;&emsp;", "");
              let app_name5 = app_name4.replace("&emsp;&emsp;&emsp;&emsp;", "");
              let app_name6 = app_name5.replace("&emsp;&emsp;&emsp;&emsp;&emsp;", "");
              let app_name7 = app_name6.replace("&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;", "");
              
              if (response_nemu[i].menu_group == "N"){
              str = str+'<div class="row">';
                str = str+'<div class="col-sm-12" style = "padding-left:20px;" >';
                  str = str+'<h5><b>'+app_name7+'</b></h5>';
                  // str = str+'<h5><b>'+app_name7+'||'+response_nemu[i].mom_id+'</b></h5>';
                str = str+'</div>';
              str = str+'</div>';
              

              str = str+'<div class="row frame-wrap" style = "margin-bottom:25px;padding-top:3px;padding-bottom:3px;">';
                str = str+'<div class="col-sm-4" style = "padding-left:20px;">';
                  str = str+'<div class="custom-control custom-checkbox custom-control-inline" >';
                  //str = str+'<input id="mom_id" name="mom_id" type="hidden" value="'+response_nemu[i].mom_id+'"/>';
                    str = str+'<input type="checkbox" class="custom-control-input" value = "'+response_nemu[i].app_id+'" id="row_'+response_nemu[i].app_id+'" onchange="fn_rowcheck('+response_nemu[i].app_id+')">';
                      str = str+'<label class="custom-control-label" for="row_'+response_nemu[i].app_id+'">ทั้งหมด</label>';
                  str = str+'</div>';
                str = str+'</div>';
                str = str+'<div class="col-sm-2">';
                  str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                    str = str+'<input type="checkbox" class="row_per'+response_nemu[i].app_id+' systemcheck'+response_nemu[i].description_id+' custom-control-input" value = "'+response_nemu[i].app_id+'" id="show_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'" name="show_'+response_nemu[i].app_id+'">';

                      str = str+'<label class="custom-control-label" for="show_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'">แสดง</label>';
                  str = str+'</div>';
                str = str+'</div>';
                str = str+'<div class="col-sm-2">';
                  str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                    str = str+'<input type="checkbox" class="row_per'+response_nemu[i].app_id+' systemcheck'+response_nemu[i].description_id+' custom-control-input" value = "'+response_nemu[i].app_id+'" id="add_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'" name="add_'+response_nemu[i].app_id+'">';

                      str = str+'<label class="custom-control-label" for="add_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'">เพิ่ม</label>';
                  str = str+'</div>';
                str = str+'</div>';
                str = str+'<div class="col-sm-2">';
                  str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                    str = str+'<input type="checkbox" class="row_per'+response_nemu[i].app_id+' systemcheck'+response_nemu[i].description_id+' custom-control-input" value = "'+response_nemu[i].app_id+'" id="edit_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'" name="edit_'+response_nemu[i].app_id+'">';

                      str = str+'<label class="custom-control-label" for="edit_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'">แก้ไข</label>';
                  str = str+'</div>';
                str = str+'</div>';
                str = str+'<div class="col-sm-2">';
                  str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                    str = str+'<input type="checkbox" class="row_per'+response_nemu[i].app_id+' systemcheck'+response_nemu[i].description_id+' custom-control-input" value = "'+response_nemu[i].app_id+'" id="del_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'" name="del_'+response_nemu[i].app_id+'">';

                      str = str+'<label class="custom-control-label" for="del_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'">ลบ</label>';
                  str = str+'</div>';
                str = str+'</div>';
              str = str+'</div>';
              }



              if (response_nemu[i].menu_group == "Y"){
             // if (response_nemu[i].menu_group == "Y"){
              // -------------app chiid---------------
              
              var aoData = "description_id="+response_nemu[i].description_id+"&mom_id="+response_nemu[i].app_id;
              $.ajax({
                type: "POST",
                url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_menu_sub",
                dataType: "json",
                async:false,
                data: aoData,
                success: function(response_nemu_sub) {
                  
                  //str = "";
                  $.each(response_nemu_sub,function(i){
                    let app_name = response_nemu_sub[i].app_name_des;
                    let app_name1 = app_name.replace("&nbsp;", "");
                    let app_name2 = app_name1.replace("&emsp;", "");
                    let app_name3 = app_name2.replace("&emsp;&emsp;", "");
                    let app_name4 = app_name3.replace("&emsp;&emsp;&emsp;", "");
                    let app_name5 = app_name4.replace("&emsp;&emsp;&emsp;&emsp;", "");
                    let app_name6 = app_name5.replace("&emsp;&emsp;&emsp;&emsp;&emsp;", "");
                    let app_name7 = app_name6.replace("&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;", "");
                    //console.log( app_name7);
                    str = str+'<div class="row">';
                      str = str+'<div class="col-sm-12" style = "padding-left:20px;" >';
                        str = str+'<h5><b>'+app_name7+'</b></h5>';
                        // str = str+'<h5><b>'+app_name7+'||xx'+response_nemu_sub[i].mom_id_sub+'</b></h5>';
                      str = str+'</div>';
                    str = str+'</div>';
                    
                    str = str+'<div class="row frame-wrap" style = "margin-bottom:25px;padding-top:3px;padding-bottom:3px;">';
                    str = str+'<div class="col-sm-4" style = "padding-left:20px;">';
                      str = str+'<div class="custom-control custom-checkbox custom-control-inline" >';
                        //str = str+'<input id="mom_id" name="mom_id" type="hidden" value="'+response_nemu_sub[i].mom_id_sub+'"/>';
                        str = str+'<input type="checkbox" class="custom-control-input" value = "'+response_nemu_sub[i].app_id_sub+'" id="row_'+response_nemu_sub[i].app_id_sub+'" onchange="fn_rowcheck('+response_nemu_sub[i].app_id_sub+')">';
                          str = str+'<label class="custom-control-label" for="row_'+response_nemu_sub[i].app_id_sub+'">ทั้งหมด</label>';
                      str = str+'</div>';
                      str = str+'</div>';
                      str = str+'<div class="col-sm-2">';
                        str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                          str = str+'<input type="checkbox" class="row_per'+response_nemu_sub[i].app_id_sub+' systemcheck'+response_nemu_sub[i].description_id+' custom-control-input" value = "'+response_nemu_sub[i].app_id_sub+'" id="show_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'" name="show_'+response_nemu_sub[i].app_id_sub+'">';

                            str = str+'<label class="custom-control-label" for="show_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'">แสดง</label>';
                        str = str+'</div>';
                      str = str+'</div>';
                      str = str+'<div class="col-sm-2">';
                        str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                          str = str+'<input type="checkbox" class="row_per'+response_nemu_sub[i].app_id_sub+' systemcheck'+response_nemu_sub[i].description_id+' custom-control-input" value = "'+response_nemu_sub[i].app_id_sub+'" id="add_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'" name="add_'+response_nemu_sub[i].app_id_sub+'">';

                            str = str+'<label class="custom-control-label" for="add_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'">เพิ่ม</label>';
                        str = str+'</div>';
                      str = str+'</div>';
                      str = str+'<div class="col-sm-2">';
                        str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                          str = str+'<input type="checkbox" class="row_per'+response_nemu_sub[i].app_id_sub+' systemcheck'+response_nemu_sub[i].description_id+' custom-control-input" value = "'+response_nemu_sub[i].app_id_sub+'" id="edit_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'" name="edit_'+response_nemu_sub[i].app_id_sub+'">';

                            str = str+'<label class="custom-control-label" for="edit_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'">แก้ไข</label>';
                        str = str+'</div>';
                      str = str+'</div>';
                      str = str+'<div class="col-sm-2">';
                        str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                          str = str+'<input type="checkbox" class="row_per'+response_nemu_sub[i].app_id_sub+' systemcheck'+response_nemu_sub[i].description_id+' custom-control-input" value = "'+response_nemu_sub[i].app_id_sub+'" id="del_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'" name="del_'+response_nemu_sub[i].app_id_sub+'">';

                            str = str+'<label class="custom-control-label" for="del_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'">ลบ</label>';
                        str = str+'</div>';
                      str = str+'</div>';
                    str = str+'</div>';


                  });
                  
                  
    
                },
                error: function(response) {
                    
                }
              });
              //------------close app  child---------------
            //  }
              }






            });
            
            $("#div_create_menu").html(str);
          },
          error: function(response) {
              
          }
        });
        

			});
      
    
      $("#div_create_permission").html(str);
		},
		error: function(response) {
				
		}
	});
  
}
function fn_systemcheck(dis_id){
  if( $('#systemmenu'+dis_id).is(':checked') ){
    $('.systemcheck'+dis_id).prop('checked', true);
  }else{
    $('.systemcheck'+dis_id).prop('checked', false);
  }
}

function fn_rowcheck(dis_id){

  if( $('#row_'+dis_id).is(':checked') ){
    $('.row_per'+dis_id).prop('checked', true);
  }else{
    $('.row_per'+dis_id).prop('checked', false);
  }
}
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