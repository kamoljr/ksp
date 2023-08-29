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
                    <div class="col-sm-2">
                      <label class="form-label" for="budget_year_search">
                        ปีงบประมาณ
                      </label>
                      <select id="budget_year_search" name="budget_year_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="">
                          2566
                        </option>
                        <option value="17">
                          2565
                        </option>
                        
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label class="form-label" for="unit_name_search">
                        ไตรมาส
                      </label>
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="">
                          1
                        </option>
                        <option value="17">
                          2
                        </option>
                        <option value="17">
                          3
                        </option>
                        <option value="17">
                          4
                        </option>
                        
                      </select>
                    </div>
                    <div class="col-sm-8">
                      <label class="form-label" for="year_search">
                        โครงการ
                      </label>
                      <select id="project_search" name="project_search" class="select2"
                      placeholder="โครงการ">
                        <option value="" selected>
                          ทั้งหมด
                        </option>
                        <option value="">
                          งานพัฒนาองค์ความรู้เพื่อการพัฒนาวิชาชีพทางการศึกษา
                        </option>
                        <option value="">
                          งานอาคารสถานที่
                        </option>
                        <option value="17">
                          โครงการจัดหาครุภัณฑ์และปรับปรุงสิ่งก่อสร้าง
                        </option>
                        <option value="17">
                          งานบริหารการพัสดุ
                        </option>
                        
                      </select>
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
     ค้นหาโดย : <u>ปีงบประมาณ</u> &nbsp;2566&nbsp;&nbsp; <u>ไตรมาส</u>&nbsp; 1
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
             
                <th class="text-center" width = "20px;">
                </th>
                <th class="text-center">
                  โครงการ
                </th>
                <th class="text-center" width = "130px;">
                  ชื่อผู้รายงาน
                </th>
                <th width = "30px;"class="text-center">
                 คะแนน
                </th>
                <th width = "130px;"class="text-center">
                 ชื่อผู้ประเมิน
                </th>
                <th width = "80px;"class="text-center">
                 
                </th>
                <th width = "80px;"class="text-center">
                ขอแก้ไข
                </th>
                <th width = "80px;"class="text-center">
                สถานะ
                </th>
                <th width="13"></th>
              </tr>
            </thead>
            <tbody>
             
              <tr>
                <td>
                  1
                </td>
                <td>
                  งานพัฒนาองค์ความรู้เพื่อการพัฒนาวิชาชีพทางการศึกษา	
                </td>
                <td>
                  กานต์ มงคลจิต	
                </td>
                <td>
                  20	
                </td>
                <td>
                  นิษฐา สุวรรณวงศ์	
                </td>
                <td>
                  <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          ไปยัง
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                            <a class="dropdown-item" href="plantargetlvone" data-toggle="modal" data-target=".default-example-modal-right" onclick="opendialog(1)">ประเมินผลโครงกร</a>
                            <a class="dropdown-item" href="followupact">ประเมินผลกิจกรรม</a>
                            <a class="dropdown-item" href="pointlvone" data-toggle="modal" data-target=".default-example-modal-right" onclick="opendialog(2)">ข้อมูลไฟล์เอกสาร</a>
                            <a class="dropdown-item" href="pointlvone" data-toggle="modal" data-target=".default-example-modal-right" onclick="opendialog(4)">เปลี่ยนสถานะ</a>
                            <a class="dropdown-item" href="pointlvone" data-toggle="modal" data-target=".default-example-modal-right" onclick="opendialog(3)">ข้อมูลขอแก้ไข</a>
                        </div>
                    </div>
                  </div>


                </td>
                <td>
                  <i class="fa-solid fa-check"></i>
                </td>
              
                <td>
                  <div class="custom-control custom-checkbox d-block bg-fusion-100" style = "padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                    <label ><small class= "">ระหว่างดำเนินการ</small></label>
                  </div>
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="fal fa-print">
                    </i>
                  </a>
                </td>
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





<!-- modal subform -->
<div class="modal fade" id="dialog_sub_form"  tabindex="-1" aria-hidden="true" data-backdrop="static" style = "z-index:9000 !important;" >

		<div class="modal-dialog modal-lg modal-dialog-centered" role="document" style = "overflow: auto !important;">
				<div class="modal-content">
						<div class="modal-header bg-fusion-50 text-white" style = "padding-top:15px;padding-bottom:15px;">
								<h5 class="modal-title">เลือกครุภัณฑ์</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="fal fa-times"></i></span>
								</button>
						</div>
						<div class="modal-body">

			
							<div class="panel-content fourd-form-row-c " >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                       ประเภทปัญหา 
                    </label>
                    <span class="text-danger stars">  </span> 
                  </div>
                  <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                   <select id="asset_type_sub_add" name="asset_type_sub_add" class="ele_select_sub_add" placeholder="ประเภท"  >
                      <option value="">
                          -
                        </option>
                        <option value="">
                          ปัญหาภายในสำนักงานฯ  
                        </option>
                        <option value="17">
                          ปัญหาภายนอกสำนักงานฯ
                        </option>
                        <option value="18">
                          ครุภัณฑ์ไฟฟ้าและวิทยุ (12233-00)	
                        </option>
                        <option value="11">
                          ครุภัณฑ์โฆษณาและเผยแพร่	
                        </option>
                        <option value="11">
                          ครุภัณฑ์งานบ้านงานครัว		
                        </option>
                        <option value="11">
                          ครุภัณฑ์คอมพิวเตอร์		
                        </option>
                      </select>
                    
                  </div>    
                </div>
              </div> 
							<div class="panel-content fourd-form-row-b" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                        ด้าน
                         
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
									<select id="asset_item_sub_add" name="asset_item_sub_add" class="ele_select_sub_add"
                      placeholder="รายการ">
                        <option value="">
                          -
                        </option>
                        <option value="17">
                          ด้านบุคลากร		
                        </option>
                        <option value="18">
                          ด้านงบประมาณ
                        </option>
                        <option value="11">
                          ด้านวัสดุอุปกรณ์	
                        </option>
                        <option value="11">
                          ด้านการบริหารจัดการโครงการ	
                        </option>
                        
                      </select>
                    
                  </div>    
                </div>
              </div> 
							
							
							<div class="panel-content fourd-form-row-c" >
                <div class="form-row dialog-data " style = "padding-bottom:5px;padding-top:5px;">
                  <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                             ปัญหา/อุปสรรค	
                         
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
									<textarea class="form-control" id="example-textarea" rows="2"></textarea>
                  </div>    
                </div>
              </div> 

              <div class="panel-content fourd-form-row-b" >
                <div class="form-row dialog-data " style = "padding-top:5px;">
                  <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                             ความเห็นของกลุ่มติดตาม		
                         
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
									    <label class="form-label" for="" style = "margin:0;line-height:20px;">
                      -
                    </label>
                  </div>    
                </div>
              </div> 
						

						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-secondary" id = "btn_dialog_sub_form_close">Close</button>
								<button type="button" class="btn btn-primary">Add Item</button>
						</div>
				</div>
		</div>
</div>
<!-- close modal subform -->

<!-- END Page Content -->
<style>
.fourd-form-row-a{
    background-color:#8f73deb0;
    padding-left:10px !important;
    padding-right:5px !important;
    padding-top:0px !important;
    padding-bottom:0px !important;
    border-radius: 5px !important;
    vertical-align: middle;
    line-height: 48px;
    color:#000;
  }
  .fourd-form-row-b{
    background-color:#fff;
    padding-left:10px !important;
    padding-right:5px !important;
    padding-top:0px !important;
    padding-bottom:0px !important;
    border-radius: 5px !important;
    vertical-align: middle;
    line-height: 48px;
    color:#000;
  }
  .fourd-form-row-c{
    background-color:#ffedc1;
    padding-left:10px !important;
    padding-right:5px !important;
    padding-top:0px !important;
    padding-bottom:0px !important;
    border-radius: 5px !important;
    vertical-align: middle;
    line-height: 48px;
    color:#000;
  }

   table.myFormat tr td { font-size: 12px;padding:5px; }

  

</style>
<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>
    
$(document).ready(function() {
  // -----dialog_sub_form-------
  let $modal = $("#dialog_sub_form");
  $modal.draggable({
    handle: ".modal-header",
  });

  $(document).on('click', '#btn_dialog_sub_form_close',
  function() {
    $('#dialog_sub_form').modal('toggle');
  });

  $(document).ready(function() {
    $('.ele_select_sub_add').select2({
      dropdownParent: $('#dialog_sub_form')
    });
  });

  // -----close dialog_sub_form-------
  
  $(".select2").select2();
  $('#unit_name_add').select2({
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
   
    columnDefs: [{
      targets: [1,2,3,4,5,6,7,8],
      orderable: false,
    },
    {
     // "visible": false, "targets": 1
    },
    {
      targets: [0,3,5,6],
      className: "text-center",
    },
    {
      targets: [],
      className: "text-right",
    }]

  });

  var table = $("#dynamic-table2").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    orderable:false,
    "ordering": false,
    "paging": false,
    "info":     false,
    columnDefs: [{
     
    },
    {
      targets: [0],
      className: "text-center",
    },
    {
      targets: [0],
      className: "text-right",
    },
    {
      targets: [2],
      className: "text-left",
    }]

  });
  var table = $("#dynamic-table3").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    orderable:false,
    "ordering": false,
    "paging": false,
    "info":     false,
    columnDefs: [{
     
    },
    {
      targets: [0,2,3,4,5],
      className: "text-center",
    },
    {
      targets: [0],
      className: "text-right",
    },
    {
      targets: [2,3],
      className: "text-left",
    }]

  });
  var table = $("#dynamic-table4").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    orderable:false,
    "ordering": false,
    "paging": false,
    "info":     false,
    columnDefs: [{
     
    },
    {
      targets: [0,2,3,4,5],
      className: "text-center",
    },
    {
      targets: [0],
      className: "text-right",
    },
    {
      targets: [2,3],
      className: "text-left",
    }]

  });

  
  $(document).on('click', '#btnadd',
  function() {
    $("#ids").val('');

    $(".lblmode").text("เพิ่ม");

    $("#icon_add_form").show();
    $("#icon_edit_form").hide();
    $("#icon_view_form").hide();

    $('.div_show_rowid').css('display', 'none');

    $(".clear-element").val('');

    $('.form-ele').prop('disabled', false);
    $('.stars').show(); // ซ่อนดาวแดง
    $(".dialog-data").show();
    $(".dialog-success").hide();

    $("#btn_save_change").show();
    $("#btn_dialog_close").show();

  });

  $(document).on('click', '#btn_dialog_close',
  function() {
    $('.default-example-modal-right').modal('toggle');
  });

  $(document).ready(function() {
    $('.ele_select_add').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });

  

});

function opendialog(ii){
$(".show_div_project").hide();
$(".div_attact").hide();
$(".show_div_edit").hide();
$(".show_div_status").hide();


if (ii == 1){
  $(".div_attact").hide();
  $(".show_div_project").show();
  $(".show_div_edit").hide();
  $(".show_div_status").hide();
}

if (ii == 2){
  $(".show_div_project").hide();
  $(".div_attact").show();
  $(".show_div_edit").hide();
  $(".show_div_status").hide();
} 

if (ii == 3){
  $(".show_div_project").hide();
  $(".div_attact").hide();
  $(".show_div_edit").show();
  $(".show_div_status").hide();
}

if (ii == 4){
  $(".show_div_project").hide();
  $(".div_attact").hide();
  $(".show_div_edit").hide();
  $(".show_div_status").show();
}

  
}

</script>