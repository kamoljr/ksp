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
                    <div class="col-sm-1">
                      <label class="form-label" for="unit_name_search">
                        ปีงบประมาณ
                      </label>
                      <div id = "div_search_strategyyear_id"></div>
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label" for="unit_name_search">
                        ส่วนงาน
                      </label>
                      <div id = "div_search_structure_unit_id"></div>
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label" for="group_name_search">
                        กลุ่มงาน
                      </label>
                      <div id = "div_search_structure_group_id"></div>
                    </div>
                    <div class="col-sm-3  ">
                      <label class="form-label" for="group_name_search">
                        ชื่อผู้ใช้งาน
                      </label>
                      <input id="search_user_name" name="search_user_name" class="form-control searchdata" type="text" placeholder="ชื่อผู้ใช้งาน" />
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
      ค้นหาโดย : ปีงบประมาณ 2566
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 0px;">
          <!-- <div class="frame-wrap mt-3 mb-0 w-100">
            <button id="btnadd" type="button" class="btn btn-primary" data-toggle="modal"
            data-target=".default-example-modal-right" style="display: flex;">
              <span class="ni ni-big-plus fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                เพิ่ม
              </span>
            </button>
          </div> -->
          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th></th>
                <th class  = "text-center" rowspan = "2" style = "padding-bottom:30px;">ชื่อ-สกุล</th>
                <th class  = "text-center" rowspan = "2" style = "padding-bottom:30px;">กลุ่มงาน</th>
                <th class  = "text-center" rowspan = "2" style = "padding-bottom:30px;">ส่วนงาน</th>
                <th class  = "text-center"  colspan = "10">10 คะแนน</th>
               
              </tr>
              <tr>
                <th></th>
               
                <th class="text-center" width = "10px;">10 </th>
                <th class="text-center" width = "10px;">9 </th>
                <th class="text-center" width = "10px;">8 </th>
                <th class="text-center" width = "10px;">7 </th>
                <th class="text-center" width = "10px;">6 </th>
                <th class="text-center" width = "10px;">5 </th>
                <th class="text-center" width = "10px;">4 </th>
                <th class="text-center" width = "10px;">3 </th>
                <th class="text-center" width = "10px;">2 </th>
                <th class="text-center" width = "10px;">1 </th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <td>1</td>
                <td>นางสาวดวงแก้ว อดิศวร</td>
                <td>กลุ่มการประชุมและประสานงาน	</td>
                <td>สำนักอำนวยการ</td>
                <td>21 </td>
                <td>33 </td>
                <td>12</td>
                <td>65</td>
                <td>12 </td>
                <td>23 </td>
                <td>67 </td>
                <td>13 </td>
                <td>54 </td>
                <td>47</td>
              </tr>
              <tr>
                <td>2</td>
                <td>นายวีระ เทพทัต</td>
                <td>กลุ่มการเงินและบัญชี		</td>
                <td>สำนักอำนวยการ</td>
                <td>54 </td>
                <td>3i </td>
                <td>11</td>
                <td>23</td>
                <td>57 </td>
                <td>25 </td>
                <td>39 </td>
                <td>62 </td>
                <td>12 </td>
                <td>35</td>
              </tr>
              <tr>
                <td>3</td>
                <td>นายสมคิด วงศ์เศวต</td>
                <td>กลุ่มสวัสดิการ	</td>
                <td>สำนักอำนวยการ</td>
                <td>12 </td>
                <td>23 </td>
                <td>43</td>
                <td>53</td>
                <td>25 </td>
                <td>35 </td>
                <td>6 </td>
                <td>7 </td>
                <td>26 </td>
                <td>32</td>
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
	const select_var2 = {
		ele_name:"search_strategyyear_id",
		value_edit:"<?//=$para1?>",
		option_type:"",
		placeholder:"ปีงบประมาณ",
		classselect:"select2 searchdata",
	};
	create_one_select(select_var2);
	//--------close-----
  //-------open------
	const select_var3 = {
		ele_name:"search_structure_unit_id",
		value_edit:"<?//=$para1?>",
		option_type:"all",
		placeholder:"ส่วนงาน",
		classselect:"select2 searchdata",
	};
	create_one_select(select_var3);
	//--------close-----
  //-------open------
	const select_var4 = {
		ele_name:"search_structure_group_id",
		value_edit:"<?//=$para1?>",
		option_type:"all",
		placeholder:"กลุ่มงาน",
		classselect:"select2 searchdata",
    ctr1:$("#search_structure_unit_id").val(),
	};
	create_one_select(select_var4);
	//--------close-----
  //--------open-----
	$(document).on('change', '#search_structure_unit_id', function() {
     
    const select_var5 = {
      ele_name:"search_structure_group_id", // ชื่อ element
      value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
      option_type:"all", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
      placeholder:"กลุ่มงาน",
      classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
      ctr1:this.value,
    };
    // console.log(this.value);
    create_one_select(select_var5);
    $(".select2").select2();
  
  });
	//--------close-----
  //-------open------
  // if ($("#search_strategylvone_id").val() == ""){
  //   $('#search_strategylvtwo_id').empty()
  //   $('#search_strategylvtwo_id').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
  // }else{
  //   const select_var1 = {
  //     ele_name:"search_strategylvtwo_id", 
  //     value_edit:"<?//=$para1?>",
  //     option_type:"",
  //     placeholder:"แผนระดับ 2",
  //     classselect:"select2 searchdata",
  //     ctr1:$("#search_strategylvone_id").val(),
  //   };
  //   create_one_select(select_var1);
  // }
	
	//--------close-----
  //-------open------
  // if ($("#search_strategylvtwo_id").val() == ""){
  //   $('#search_strategylvthree_id').empty()
  //   $('#search_strategylvthree_id').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
  // }else{
  //   const select_var10 = {
  //     ele_name:"search_strategylvthree_id", 
  //     value_edit:"<?//=$para1?>",
  //     option_type:"",
  //     placeholder:"แผนระดับ 3",
  //     classselect:"select2 searchdata",
  //     ctr1:$("#search_strategylvtwo_id").val(),
  //   };
  //   create_one_select(select_var10);
  // }
	
	//--------close-----
	//--------open-----
	// $(document).on('change', '#search_strategylvone_id', function() {
  //   if (this.value == ""){
  //     $('#search_strategylvtwo_id').empty()
  //     $('#search_strategylvtwo_id').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
  //   }else{
  //     const select_var2 = {
  //       ele_name:"search_strategylvtwo_id", // ชื่อ element
  //       value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
  //       option_type:"", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
  //       placeholder:"แผนระดับ2",
  //       classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
  //       ctr1:this.value,//เงื่อนไขแสดงข้อมูล
  //     };
  //     // console.log(this.value);
  //     create_one_select(select_var2);
  //     $(".select2").select2();


  //     if ($("#search_strategylvtwo_id").val() == ""){
  //       $('#search_strategylvthree_id').empty()
  //       $('#search_strategylvthree_id').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
  //     }else{
  //       const select_var11 = {
  //         ele_name:"search_strategylvthree_id", // ชื่อ element
  //         value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
  //         option_type:"", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
  //         placeholder:"แผนระดับ3",
  //         classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
  //         ctr1:$("#search_strategylvtwo_id").val(),
  //       };
  //       // console.log(this.value);
  //       create_one_select(select_var11);
  //       $(".select2").select2();
  //     }
      
  //   }
		
  // });
	//--------close-----


  //--------open-----
	// $(document).on('change', '#search_strategylvtwo_id', function() {
  //     if (this.value == ""){
  //       $('#search_strategylvthree_id').empty()
  //       $('#search_strategylvthree_id').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
  //     }else{
  //       const select_var11 = {
  //         ele_name:"search_strategylvthree_id", // ชื่อ element
  //         value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
  //         option_type:"", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
  //         placeholder:"แผนระดับ3",
  //         classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
  //         ctr1:this.value,
  //       };
  //       // console.log(this.value);
  //       create_one_select(select_var11);
  //       $(".select2").select2();
  //     }
      
    
		
  // });
	//--------close-----
  
  
	searchdata();
	// ------------------close สร้าง select ทั้งหมด------------------------

	$(".select2").select2();
  
	
  
	$(document).ready(function() {
		$('.ele_select_add').select2({
			dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
		});
	});

	// ------------------open datatable------------------------
  // var table = $("#dynamic-table").DataTable({
  //     orderCellsTop: true,
  //     fixedHeader: true,
  //     bLengthChange: false,
  //     searching: false,
  //     bAutoWidth: false,
  //     bStateSave: true,
  //     processing: true,
  //     bPaginate: true,
  //     columnDefs: [{
  //       targets: [4,5,6,7,8,9,10,11,12,13],
  //       orderable: false,
  //     },
  //     {
  //       targets: [0],
  //       className: "text-center",
  //     },
  //     {
  //       targets: [1, 2],
  //       className: "text-left",
  //     }]

  //   });

  // });
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

				//เปิด แก้ไข ใส่ค่า ตัวค้นหา
				aoData.push({
						name: 'search_strategyyear_id',
						value: $("#search_strategyyear_id").val(),
				});
				aoData.push({
						name: 'search_structure_unit_id',
						value: $("#search_structure_unit_id").val(),
				});
				aoData.push({
						name: 'search_structure_group_id',
						value: $("#search_structure_group_id").val(),
				});
				aoData.push({
						name: 'search_user_name',
						value: $("#search_user_name").val(),
				});
				// ปิด แก้ไข ใส่ค่า ตัวค้นหา

			},
			columns: [
					// เปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
					{
						data: "user_id",
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
						data: "scores10",
					},
					{
						data: "scores9",
					},
					{
						data: "scores8",
					},
					{
						data: "scores7",
					},
					{
						data: "scores6",
					},
					{
						data: "scores5",
					},
					{
						data: "scores4",
					},
					{
						data: "scores3",
					},
					{
						data: "scores2",
					},
					{
						data: "scores1",
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
							// targets: [4,5,6,7,8,9,10,11,12,13],
							orderable: false,
					},
					{
							targets: [0],
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
		$("#form_add_lbl_strategyyear").text($("#search_strategyyear_id option:selected" ).text());
		// $("#form_add_lbl_strategylvtwo").text($("#search_strategylvtwo_id option:selected" ).text());
		// $("#form_add_lbl_strategylvthree").text($("#search_strategylvthree_id option:selected" ).text());
		
		
		
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
    // --------open-----
    let aoData = "ids=" + $("#search_strategyyear_id").val();
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/get_checkbox",
			dataType: "json",
			beforeSend: function () {
				
			},
			data: aoData,
			success: function (response) {
        str_select = '';
        str_select = str_select+'<div class="frame-wrap" >';
        str_select = str_select+'<div class="demo color-fusion-500">';
				$.each(response,function(i){
          selected = '';
          //if (select_var.value_edit == response[i].field_id){selected = 'selected';}
          
          

          str_select = str_select+'<div class="custom-control custom-checkbox">';
          str_select = str_select+'<input type="checkbox" class="custom-control-input" id="plantargetlvfour_id_multi_'+response[i].field_id+'" name="plantargetlvfour_id_multi[]" value = '+response[i].field_id+'>';
          str_select = str_select+'<label class="custom-control-label" for="plantargetlvfour_id_multi_'+response[i].field_id+'">'+response[i].field_name+'</label>';
          str_select = str_select+' </div>';


          
        });
        str_select = str_select+'</div>';
        str_select = str_select+'</div>';
        $("#div_plantargetlvfour_id_add").html(str_select);
			},
			complete: function () {
				
			},
			error: function (response) {
				//console.log(response);
			}
		});
			// ------------------close ---------------------
	 });
  


	// ------------------close ---------------------


	//------------------ไม่ต้องแก้------------------
	$(document).on('click', '#btn_dialog_close', function() {//ปุ่มปิด dialog
			$('.default-example-modal-right').modal('toggle');
	});
	//------------------ปิด ไม่ต้องแก้------------------

	
	
	$("#form_save").validate({
		rules: {
			policyksp_add: "required",
			
		},
		messages: {
			policyksp_add: "กรุณาป้อน นโยบาย",
			
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
	
		text1 = "นโยบาย : ";
		sval1 = $("#search_strategyyear_id option:selected" ).text();
		if (sval1 == '') { sval1 = 'ทั้งหมด'; }
		text1 = text1+"<b>"+sval1+"</b>";

		// text2 = "แผนระดับ2 : ";
		// sval2 = $("#search_strategylvtwo_id option:selected" ).text();
		// if (sval2 == '') { sval2 = 'ทั้งหมด'; }
		// text2 = text2+"<b>"+sval2+"</b>";

		// text3 = "แผนระดับ3 : ";
		// sval3 = $("#search_strategylvthree_id option:selected" ).text();
		// if (sval3 == '') { sval3 = 'ทั้งหมด'; }
		// text3 = text3+"<b>"+sval3+"</b>";
  
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
    $("#form_add_lbl_strategyyear").text($("#search_strategyyear_id option:selected" ).text());
		// $("#form_add_lbl_strategylvone").text($("#search_strategylvone_id option:selected" ).text());
		// $("#form_add_lbl_strategylvtwo").text($("#search_strategylvtwo_id option:selected" ).text());
		// $("#form_add_lbl_strategylvthree").text($("#search_strategylvthree_id option:selected" ).text());
		// --------open-----
    let aoData1 = "ids=" + $("#search_strategyyear_id").val();
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/get_checkbox",
			dataType: "json",
			beforeSend: function () {
				
			},
			data: aoData1,
			success: function (response) {
        str_select = '';
        str_select = str_select+'<div class="frame-wrap" >';
        str_select = str_select+'<div class="demo color-fusion-500">';
				$.each(response,function(i){
          selected = '';
         
          str_select = str_select+'<div class="custom-control custom-checkbox">';
          str_select = str_select+'<input type="checkbox" class="custom-control-input" id="plantargetlvfour_id_multi_'+response[i].field_id+'" name="plantargetlvfour_id_multi[]" value = '+response[i].field_id+'>';
          str_select = str_select+'<label class="custom-control-label" for="plantargetlvfour_id_multi_'+response[i].field_id+'">'+response[i].field_name+'</label>';
          str_select = str_select+' </div>';


          
        });
        str_select = str_select+'</div>';
        str_select = str_select+'</div>';
        $("#div_plantargetlvfour_id_add").html(str_select);
			},
			complete: function () {
				
			},
			error: function (response) {
				//console.log(response);
			}
		});
			// ------------------close ---------------------

    // $('#plantargetlvfour_id_multi_3').is(':checked') ;
    // $( "#plantargetlvfour_id_multi_3" ).prop( "checked", true );
   

    

		$('.default-example-modal-right').modal('toggle');
		$(".dialog-data").show();
		$(".dialog-success").hide();
		$("#icon_add_form").hide();
		$("#rowid").show();

		// เปิด แก้ไข ใส่ค่า 
		
		$("#ids").val(d.policyksp_id);
		
		// ปิด แก้ไข ใส่ค่า
		
		let aoData = "ids=" + d.policyksp_id;
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/edit_data",
			dataType: "json",
			beforeSend: function () {
				$("#overlay").fadeIn(200);
			},
			data: aoData,
			success: function (response) {

				$("#policyksp_add").val(response[0].policyksp);
				
        //--- ติ๊ก checkbox----
        if (response[0].plantargetlvfour_id_multi != null){
          let text = response[0].plantargetlvfour_id_multi;
          const array1 = text.split(",");
          ii = 0;
          setTimeout(function () {
            while (ii < array1.length) {
              console.log(array1[ii]);
              $('#plantargetlvfour_id_multi_'+array1[ii]).prop('checked', true);
              ii++;
          }
          }, 100);
        }
				//------ ปิด------ 
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

		$('#lbl_rowid').text("รหัส " + d.policyksp_id);

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
				//console.log("ss");
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

function set_del_id(ids){
	$("#ids").val(ids);
	$("#del_detail").text('รหัส ' + ids);  
	url = "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/chk_del";
	aoData = 'ids='+ids;// เงื่อนไขการลบ
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
// function format(d) {
// 	$(".dialog-success").hide();
// 	return `<?//=view("{$description_en}/{$pages}/{$pages}add.php")?>`;
// }
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
	 var aoData = $('#form_save').serialize()+"&search_strategyyear_id="+$("#search_strategyyear_id").val();
	// var aoData = $('#form_save').serialize();
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
			//console.log("response=".response);
			
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