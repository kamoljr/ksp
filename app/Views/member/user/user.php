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
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="search_unit_id">
                        ส่วนงาน
                      </label>
                      <div id = "div_search_unit_id"></div>
                    
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                        กลุ่มงาน
                      </label>
                      <div id = "div_search_group_id"></div>
                     
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                        ชื่อผู้ใช้งาน
                      </label>
                      <input id="user_name_search" name="user_name_search" class="form-control searchdata"
                      type="text" placeholder="ชื่อผู้ใช้งาน" />
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
      ค้นหาโดย : สำนักอำนวยการ
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 0px;">
          <div class="frame-wrap mt-3 mb-0 w-100">
            <button id="btnadd" type="button" class="btn btn-primary btn_add" data-toggle="modal"
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
                  กลุ่มงาน
                </th>
                <th class="text-center">
                  ส่วนงาน
                </th>
                <th class="text-center">
                  ระงับสิทธิ
                </th>
                <th class="text-center">
                  จำหน่าย
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



<script>
function togs(structure_user_id,cancel_user){
	//alert("sp="+cancel_user);
	if(cancel_user=='1'){
		$('#cancel_user'+structure_user_id).prop('checked', true);
	}else{
		$('#cancel_user'+structure_user_id).prop('checked', false);
	}
}
function togs1(structure_user_id,dispose_user){
	//alert("sp="+cancel_user);
	if(dispose_user=='1'){
		$('#dispose_user'+structure_user_id).prop('checked', true);
	}else{
		$('#dispose_user'+structure_user_id).prop('checked', false);
	}
}
function cancel_user(structure_user_id,cancel_user,user_id){
	txts = '';
	if (cancel_user == '0'){
		txts = 'ยืนยัน';
	}else{
		txts = 'ยกเลิก';
	}
	bootbox.dialog({
		message: "<span class='bigger-110'>"+txts+" การระงับสิทธิ</span>",
		buttons:
		{
			"danger" :
			{
				"label" : ""+txts+" การระงับสิทธิ",
				"className" : "btn-sm btn-primary",
				"callback": function() {
					var aoData = "structure_user_id="+structure_user_id+"&cancel_user="+cancel_user+"&user_id="+user_id;
					$.ajax({
						type: "POST",
						url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/cancel_user",
						dataType: "json",
						beforeSend: function () {
						
						},
						data: aoData,
						success: function(response) {
						
							
							setTimeout(() => {
							// 	if (response == "1"){
							// 	$('#cancel_user'+structure_user_id).prop('checked', true);
							// }else{
							// 	$('#cancel_user'+structure_user_id).prop('checked', false);
							// }
							 GoCurrentPage();
							
						}, "500");
						},
						complete: function () {
							
						},
						error: function(response) {
							
						}
					});
				}
			},
			"button" :
			{
				"label" : "ยกเลิก",
				"className" : "btn-sm",
				"callback": function() {
				
				}
			}
		}
	});
}
function dispose_user(structure_user_id,dispose_user,user_id){
	txts = '';
	if (dispose_user == '0'){
		txts = 'ยืนยัน';
	}else{
		txts = 'ยกเลิก';
	}
	bootbox.dialog({
		message: "<span class='bigger-110'>"+txts+" จำหน่าย</span>",
		buttons:
		{
			"danger" :
			{
				"label" : ""+txts+" จำหน่าย",
				"className" : "btn-sm btn-primary",
				"callback": function() {
					var aoData = "structure_user_id="+structure_user_id+"&dispose_user="+dispose_user+"&user_id="+user_id;
					$.ajax({
						type: "POST",
						url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/dispose_user",
						dataType: "json",
						beforeSend: function () {
						
						},
						data: aoData,
						success: function(response) {
						
							
							setTimeout(() => {
							
							 GoCurrentPage();
							
						}, "500");
						},
						complete: function () {
							
						},
						error: function(response) {
							
						}
					});
				}
			},
			"button" :
			{
				"label" : "ยกเลิก",
				"className" : "btn-sm",
				"callback": function() {
				
				}
			}
		}
	});
}
$(document).ready(function() {
	
  $(document).on('click', '.des_user', function() {
    $(".div_des").show();
    $(".div_add").hide();
    $("#menu_name").text("จำหน่าย")
    $(".lblmode").text("")
    $('.default-example-modal-right').modal('toggle');
   
  });
  $(document).on('click', '.btn_add', function() {
    $(".div_des").hide();
    $(".div_add").show();
    $("#menu_name").text("ผู้ใช้งาน")
    $('.default-example-modal-right').modal('toggle');
  });

	// ------------------open สร้าง select------------------------
	//create_chift_unit_add("");

	//-------open------
	const select_var = {
		ele_name:"search_structure_name",
		value_edit:"",
		option_type:"",
		placeholder:"โครงสร้างปี",
		classselect:"select2 searchdata",
	};
	create_one_select(select_var);
	//--------close-----

  //-------open------
	const select_var1 = {//สร้าง select
		ele_name:"search_unit_id", 
		value_edit:"",
		option_type:"",
		placeholder:"ส่วนงาน",
		classselect:"select2 searchdata",
		ctr1:$("#search_structure_name").val(),
	};
	create_one_select(select_var1);

	//--------close-----
	//--------open-----
	$(document).on('change', '#search_structure_name', function() {
		const select_var1 = {
			ele_name:"search_unit_id", // ชื่อ element
			value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
			option_type:"", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
			placeholder:"ส่วนงาน",
			classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
			ctr1:this.value,//เงื่อนไขแสดงข้อมูล
		};
		// console.log(this.value);
	  create_one_select(select_var1);
		$(".select2").select2();
  });
	//--------close-----


  const select_var2 = {//สร้าง select
		ele_name:"search_group_id", 
		value_edit:"",
		option_type:"",
		placeholder:"กลุ่มงาน",
		classselect:"select2 searchdata",
		ctr1:$("#search_structure_name").val(),
		ctr2:$("#search_unit_id").val(),
	};
	create_one_select(select_var2);
  $(document).on('change', '#search_unit_id', function() {
		const select_var1 = {
			ele_name:"search_group_id", // ชื่อ element
			value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
			option_type:"", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
			placeholder:"กลุ่มงาน",
			classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
      ctr1:$("#search_structure_name").val(),
			ctr2:this.value,//เงื่อนไขแสดงข้อมูล
		};
		// console.log(this.value);
	  create_one_select(select_var1);
		$(".select2").select2();
  });




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
	// $(document).ready(function() {
	// 	$('.ele_select_add').select2({
	// 		dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
	// 	});
	// });

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
						name: 'search_structure_name',
						value: $("#search_structure_name").val(),
				});
				aoData.push({
						name: 'search_unit_id',
						value: $("#search_unit_id").val(),
				});

				aoData.push({
						name: 'search_group_id',
						value: $("#search_group_id").val(),
				});

				aoData.push({
						name: 'user_name_search',
						value: $("#user_name_search").val(),
				});
				// ปิด แก้ไข ใส่ค่า ตัวค้นหา

			},
			columns: [
					// เปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
					{
						data: "structure_user_id",
					},
					{
						data: "user_name",
					},
					{
						data: "group_name",
					},
					{
						data: "unit_name",
					},
					{
						data: "structure_user_id",
            render: function (data, type, row) {
             
              str1 = "";
              str1 = str1+'<div class="custom-control custom-switch">';
              str1 = str1+'<input type="checkbox" class="custom-control-input" value = "1" id="cancel_user'+row.structure_user_id+'" onchange = "cancel_user('+row.structure_user_id+','+row.cancel_user+','+row.user_id+');">';
              str1 = str1+'<label class="custom-control-label" for="cancel_user'+row.structure_user_id+'"></label>';
              str1 = str1+'</div>';
              return str1;
            }
					},
					{
						data: "structure_user_id",
            render: function (data, type, row) {
             
              str1 = "";
              str1 = str1+'<div class="custom-control custom-switch">';
              str1 = str1+'<input type="checkbox" class="custom-control-input" id="dispose_user'+row.structure_user_id+'" onchange = "dispose_user('+row.structure_user_id+','+row.dispose_user+','+row.user_id+');">';
              str1 = str1+'<label class="custom-control-label" for="dispose_user'+row.structure_user_id+'"></label>';
              str1 = str1+'</div>';
              return str1;
            }
					},
					{
						data: "structure_user_id",
						render: function(data, type, row) {
								
							txtex = 'data-toggle="modal" data-target=".default-example-modal-right-lg"';
						
							str_btn = "";
							str_btn = str_btn +
								`<a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode = 'view'><i class="ni ni-eye"></i></a>&nbsp;&nbsp;`;

							str_btn = str_btn +
								`<a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode = 'edit'><i class="ni ni-pencil"></i></a>&nbsp;&nbsp;`;

							str_btn =
								str_btn +
								`<a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"data-toggle="modal" data-target="#example-modal-alert" onclick=set_del_id('${row.structure_user_id}','${row.user_id}')><i class="ni ni-trash"></i></a>`;
								setTimeout(function (){
									togs(row.structure_user_id,row.cancel_user);
									togs1(row.structure_user_id,row.dispose_user);
									
								}, 500);
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
							targets: [3,4,5,6],
							orderable: false,
					},
					{
							targets: [0,4,5,6],
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
		// console.log("xx"+$("#search_unit_id option:selected" ).text());
		$("#form_add_structure").text($("#search_structure_name option:selected" ).text());
		$("#unit_id_add").text($("#search_unit_id option:selected" ).text());
		$("#group_id_add").text($("#search_group_id option:selected" ).text());
		
		$(".boss1").hide();
		$("#btn_boss1").show();
		create_chift_unit_add("");
		$('#chift_unit_add').select2({
   	 dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  	});
		$('#chief_add').select2({
   	 dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  	});

		//----------------------select add-----------------
		const select_var3 = {
			ele_name:"unit_id_add", // ชื่อ element
			value_edit:$("#search_unit_id").val(), // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
			option_type:"-", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
			placeholder:"ส่วนงาน",
			classselect:"ele_select_add", //ใส่ class ที่ต้องการ 
			ctr1:$("#search_structure_name").val(),
		};
		create_one_select(select_var3);

		if ($("#unit_id_add").val() == ""){
			$('#group_id_add').empty()
      $('#group_id_add').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
		}else{
			const select_var4 = {
				ele_name:"group_id_add", // ชื่อ element
				value_edit:$("#search_group_id").val(), // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
				option_type:"-", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
				placeholder:"กลุ่มงาน",
				classselect:"ele_select_add", //ใส่ class ที่ต้องการ 
				ctr1:$("#unit_id_add").val(),
				ctr2:$("#search_structure_name").val(),
			};
			create_one_select(select_var4);
		}
		
		$(document).on('change', '#unit_id_add', function() {
			if (this.value == ""){
				$('#group_id_add').empty()
				$('#group_id_add').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
			}else{
				const select_var4 = {
					ele_name:"group_id_add", // ชื่อ element
					value_edit:'', // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
					option_type:"-", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
					placeholder:"กลุ่มงาน",
					classselect:"ele_select_add", //ใส่ class ที่ต้องการ 
					ctr1:this.value,
					ctr2:$("#search_structure_name").val(),
				};
				create_one_select(select_var4);
				$(document).ready(function() {
					$('.ele_select_add').select2({
						dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
					});
				});
			}
			$('#chief_add').select2({
					dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
			});
		});
		//---------------select add---------------------



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
		
		$('.ele_select_add').select2({
			dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
		});
	});
	// ------------------close เพิ่ม จุดที่ 1/1-----------------------


	//------------------ไม่ต้องแก้------------------
	$(document).on('click', '#btn_dialog_close', function() {//ปุ่มปิด dialog
			$('.default-example-modal-right').modal('toggle');
	});
	//------------------ปิด ไม่ต้องแก้------------------

	
	
	$("#form_save").validate({
		rules: {
			user_name_add: "required",
			email_add: "required",
			loginname_add: "required",
			password_add: "required",
			unit_id_add: "required",
			group_id_add: "required",
			chief_add: "required",
		},
		messages: {
			user_name_add: "กรุณาป้อนชื่อ ชื่อ-นามสกุล",
			email_add: "กรุณาป้อนชื่อ E-mail",
			loginname_add: "กรุณาป้อนชื่อ Login",
			password_add: "กรุณาป้อนชื่อ Password",
			unit_id_add: "กรุณาป้อนชื่อ ส่วนงาน",
			group_id_add: "กรุณาป้อนชื่อ กลุ่มงาน",
			chief_add: "กรุณาป้อนชื่อ ตำแหน่ง",
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
		let aoData = "structure_id=" + $("#search_structure_name").val();
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
					if (value_select == response[i].unit_id){selected = 'selected';}
					str_select = str_select+'<option value="'+response[i].unit_id+'" '+selected+' >'+response[i].unit_name+'</option>';
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
	
		text1 = "โครงสร้างปี : ";
		sval1 = $("#search_structure_name option:selected" ).text();
		if (sval1 == '') { sval1 = 'ทั้งหมด'; }
		text1 = text1+"<b>"+sval1+"</b>";

		text2 = "ส่วนงาน : ";
		sval2 = $("#search_unit_id option:selected" ).text();
		if (sval2 == '') { sval2 = 'ทั้งหมด'; }
		text2 = text2+"<b>"+sval2+"</b>";

		text3 = "กลุ่มงาน : ";
		sval3 = $("#search_group_id option:selected" ).text();
		if (sval3 == '') { sval3 = 'ทั้งหมด'; }
		text3 = text3+"<b>"+sval3+"</b>";


		text4 = "ชื่อผู้ใช้งาน : ";
		sval4 = $("#user_name_search" ).val();
		if (sval4 == '') { sval4 = 'ทั้งหมด'; }
		text4 = text4+"<b>"+sval4+"</b>";
  
		txt_all = text1+"&ensp;&ensp;&ensp;"+text2+"&ensp;&ensp;&ensp;"+text3+"&ensp;&ensp;&ensp;"+text4;
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
		$('#chief_add').select2({
				dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
		});
		$(".div_des").hide();
		$("#form_add_structure").text($("#search_structure_name option:selected" ).text());
		// $("#unit_id_add").text($("#search_unit_id option:selected" ).text());
		// $("#group_id_add").text($("#search_group_id option:selected" ).text());

		$('.default-example-modal-right').modal('toggle');
		$(".dialog-data").show();
		$(".dialog-success").hide();
		$("#icon_add_form").hide();
		$("#rowid").show();

		// เปิด แก้ไข ใส่ค่า 
		$(".boss1").hide();
		$("#ids").val(d.structure_user_id);
		
		// ปิด แก้ไข ใส่ค่า
		
		let aoData = "ids=" + d.structure_user_id;
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/edit_data",
			dataType: "json",
			beforeSend: function () {
				$("#overlay").fadeIn(200);
			},
			data: aoData,
			success: function (response) {

				if (response[0].acting_position != 0 && response[0].acting_position != null){
					$(".boss1").show();
					create_chift_unit_add(response[0].acting_position);
					$('#chift_unit_add').select2({
						dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
					});
				}
				//----------------------select add-----------------
				const select_var6 = {
					ele_name:"unit_id_add", // ชื่อ element
					value_edit:response[0].unit_id, // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
					option_type:"-", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
					placeholder:"ส่วนงาน",
					classselect:"ele_select_add", //ใส่ class ที่ต้องการ 
					ctr1:$("#search_structure_name").val(),
				};
				create_one_select(select_var6);

				if ($("#unit_id_add").val() == ""){
					$('#group_id_add').empty()
					$('#group_id_add').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
				}else{
					const select_var7 = {
						ele_name:"group_id_add", // ชื่อ element
						value_edit:response[0].group_id, // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
						option_type:"-", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
						placeholder:"กลุ่มงาน",
						classselect:"ele_select_add", //ใส่ class ที่ต้องการ 
						ctr1:$("#unit_id_add").val(),
						ctr2:$("#search_structure_name").val(),
					};
					create_one_select(select_var7);
				}
				
				$(document).on('change', '#unit_id_add', function() {
					if (this.value == ""){
						$('#group_id_add').empty()
						$('#group_id_add').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
					}else{
						const select_var8 = {
							ele_name:"group_id_add", // ชื่อ element
							value_edit:'', // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
							option_type:"-", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
							placeholder:"กลุ่มงาน",
							classselect:"ele_select_add", //ใส่ class ที่ต้องการ 
							ctr1:this.value,
							ctr2:$("#search_structure_name").val(),
						};
						create_one_select(select_var8);
						$(document).ready(function() {
							$('.ele_select_add').select2({
								dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
							});
						});
					}
				});
				//$(document).ready(function() {
					$('.ele_select_add').select2({
						dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
					});
				//});
				//---------------select add---------------------
				//alert(response[0].chief);
				$("#user_name_add").val(response[0].user_name);
				$("#chief_add").val(response[0].chief);
				$("#chief_add").trigger("change");
				// $('#chief_add option[value='+response[0].chief+']').attr('selected','selected');

				$("#position_name_add").val(response[0].position_name);
				
				$("#loginname_add").val(response[0].loginname);
				$("#password_add").val(atob(response[0].password));
				$("#email_add").val(response[0].email);
				$("#num_of_incorrect_add").val(response[0].num_of_incorrect);
				
				
				
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

		$('#lbl_rowid').text("รหัส " + d.structure_user_id);

		$('.div_show_rowid').show();
		
		$(".lblmode").text(txt);
		$('#chief_add').select2({
			dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
		});
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

function set_del_id(ids,user_id){
	$("#ids").val(ids);
	$("#del_detail").text('รหัส ' + ids);  
	url = "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/chk_del";
	aoData = 'ids='+ids+'&search_structure_name='+$("#search_structure_name").val();// เงื่อนไขการลบ
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

//function format(d) {
	//$(".dialog-success").hide();
	//return `<?//=view("{$description_en}/{$pages}/{$pages}add.php")?>`;
//}

function GoCurrentPage(){
	var table = $('#dynamic-table').DataTable();
	var info = table.page.info();
	var CurrentPage = info.page;
	table.page(CurrentPage).draw(false);
}
//------------------ปิด ไม่ต้องแก้------------------


// ------------------open save จุดที่ 1/1-----------------------
function savedata() {
	
	var aoData = $('#form_save').serialize()+"&search_structure_name="+$("#search_structure_name").val()+"&search_unit_id="+$("#search_unit_id").val()+"&search_group_id="+$("#search_group_id").val();
	//----------------
	
	
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
			if (response == "3" || response == "4"){

				if (response == "3"){alert("ชื่อรายการนี้มีอยู่แล้ว ไม่สามารถเพิ่มได้");}
				if (response == "4"){alert("loginname และ passwordนี้มีอยู่แล้ว ไม่สามารถเพิ่มได้");}
				
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


$(function() {
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 		        if (/^image/.test( files[0].type)){ // only image file
							alert(files[0].name);
		            var reader = new FileReader(); // instance of the FileReader
		            reader.readAsDataURL(files[0]); // read the local file
		 
		            reader.onloadend = function(){ // set image data as background of div
		                $("#imagePreview").css("background-image", "url("+this.result+")");
		            }
		        }
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

.thumb-image {
    float:left;
    width:100px;
    position:relative;
    padding:5px;
}
#imagePreview {
    width: 180px;
    height: 180px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>