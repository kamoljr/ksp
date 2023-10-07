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

										<div class="col-sm-3">
                      <label class="form-label" for="search_structure_name">
                        โครงสร้างปี
                      </label>
											<div id = "div_search_structure_name"></div>
                      <!-- <select id="search_structure_name" name="search_structure_name" class="select2"
                      placeholder="โครงสร้างปี">
                        <option value="">
                          2566
                        </option>
                        <option value="17">
                          2565-2
                        </option>
                        <option value="18">
                          2565-1
                        </option>
											</select> -->
                    </div>
                    <div class="col-sm-9">
                      <label class="form-label" for="unit_name_search">
                        ชื่อส่วนงาน
                      </label>
                      <input id="unit_name_search" name="unit_name_search" class="form-control searchdata"
                      type="text" placeholder="ชื่อส่วนงาน" />
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
                <th width="15">
                </th>
                <th>
                  ชื่อส่วนงาน
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

<!-- END Page Content -->

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>

$(document).ready(function() {
	
	create_chift_unit_add("");

	//-------open------
	const select_var = {ele_name:"search_structure_name", value_edit:"",option_type:"",placeholder:"โครงสร้างปี",classselect:"select2 searchdata"};//option_type:all,"" select2:select2,ele_select_add ,searchdata
	create_one_select(select_var);
	//--------close-----

	$(".select2").select2();
  $(".boss1").hide();
	
  $(document).on('click', '#btn_boss1', function() {
	  $(".boss1").show();
  });
  $('#boss1').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });


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
						name: 'unit_name_search',
						value: $("#unit_name_search").val(),
				});
				aoData.push({
						name: 'search_structure_name',
						value: $("#search_structure_name").val(),
				});
				// ปิด แก้ไข ใส่ค่า ตัวค้นหา

			},
			columns: [
					// เปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
					{
						data: "structure_unit_id",
					},
					{
						data: "unit_name",
					},
					{
						data: "structure_unit_id",
						render: function(data, type, row) {
								
							txtex = 'data-toggle="modal" data-target=".default-example-modal-right-lg"';
						
							str_btn = "";
							str_btn = str_btn +
								`<a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode = 'view'><i class="ni ni-eye"></i></a>&nbsp;&nbsp;`;

							str_btn = str_btn +
								`<a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode = 'edit'><i class="ni ni-pencil"></i></a>&nbsp;&nbsp;`;

							str_btn =
								str_btn +
								`<a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"data-toggle="modal" data-target="#example-modal-alert" onclick=set_del_id('${row.structure_unit_id}','${row.unit_id}')><i class="ni ni-trash"></i></a>`;
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
							targets: [2],
							orderable: false,
					},
					{
							targets: [0, 2],
							className: "text-center",
					},
			],
			// ปิด แก้ไข การเรียง
	});

	
	$(document).on('change', '.searchdata', function() {
			searchdata();
	});

	$('#dynamic-table tbody').on('click', 'td .edit-data', function() {
			let mode = $(this).attr("mode");
			var tr = $(this).closest('tr');
			var row = table.row(tr);
			var d = row.data();
			editdata(d, mode);   
	});

	
	$(document).on('click', '#btnadd', function() {
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

	$(document).on('click', '#btn_dialog_close', function() {
			$('.default-example-modal-right').modal('toggle');
	});
	searchdata();
	

	// ------------- ปิด ไม่ต้องแก้จุดกที่ 1 -----------------
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

	function searchdata(){
  //text1 = $("#select_budget_year_search option:selected" ).text();
  //if (text1 == '') { text1 = 'ทั้งหมด'; }
  
		text2 = $("#unit_name_search" ).val();
		if (text2 == ''){
			text2='ทั้งหทด';
		}

		let txt = `
		<strong>ผลการค้นหา : </strong>
		<strong>ชื่อส่วนงาน :</strong> <u>${text2}</u>&emsp;
		
		`;

		$("#searchresults").html(txt);

		$(function(){
			table = $('#dynamic-table').DataTable();
			table.draw();
		});
	}

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
					create_chift_unit_add(response[0].unit_chief);
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
	// ------------- ไม่ต้องแก้จุดกที่ 1 -----------------

//$(document).ready(function(){
  
    
		$(document).ready(function($) {

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
//})
// ------------- เปิด ไม่ต้องแก้จุดกที่ 2 -----------------
function format(d) {
		$(".dialog-success").hide();
		return `<?=view("{$description_en}/{$pages}/{$pages}add.php")?>`;
}
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

function GoCurrentPage(){
	var table = $('#dynamic-table').DataTable();
	var info = table.page.info();
	var CurrentPage = info.page;
	table.page(CurrentPage).draw(false);
}

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
// ------------- ปิด ไม่ต้องแก้จุดกที่ 2 -----------------
$(document).ready(function() {
	$('.ele_select_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
});

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