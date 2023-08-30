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
      ค้นหาโดย : <u>ปีงบประมาณ</u> 2566 <u>ไตรมาส</u> 1 <u>โครงการ </u> งานพัฒนาองค์ความรู้เพื่อการพัฒนาวิชาชีพทางการศึกษา
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 0px;">
          
         
          <div class="">
                                           
                                            <div class="d-flex justify-content-between  mb-3" style = "margin-bottom:0px !important;">
                                                <div class="p-2">
                                                  <div class="frame-wrap mt-3 mb-0 w-100">
                                                 
                                                  <!-- <button id="btnadd" type="button" class="btn btn-primary" style="display: flex;" onclick="window.location='projectdetail';">
                                                      <span class="ni ni-big-plus fa-2x" style="padding-right:10px;">
                                                      </span>
                                                      <span style="padding-top:5px;">
                                                        เพิ่ม
                                                      </span>
                                                    </button> -->
                                                  </div>
                                                </div>
                                                <div class="p-2 "></div>
                                                <div class="p-2 "> <div class="frame-wrap mt-3 mb-0 w-100" >
                                                    <!-- <button id="btnadd" type="button" class="btn btn-primary" data-toggle="modal" data-target=".default-example-modal-right" style="display: flex;"> 
                                                    <i class="fa-solid fa-circle-left"></i>    
                                                  -->
                                                 <button id="btnadd" type="button" class="btn btn-primary btn_add"  style="display: flex;" onclick="window.location='projectoverview';">
                                                      <span class="fa-solid fa-circle-left fa-lg" style="padding-right:10px;">
                                                      </span>
                                                      <span style="padding-top:0px;">
                                                        กลับหน้าโครงการ
                                                      </span>
                                                    </button>
                                                  </div></div>
                                            </div>
                                          
                                        </div>
         

          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width = "20px;">
                </th>
                <th class="text-center">
                  ชื่อกิจกรรม
                </th>
                <th class="text-center" width = "70px;">
                  งาน(แผน)
                </th>
                <th width = "70px;"class="text-center">
                  งาน(ผล)
                </th>
                <th width = "70px;"class="text-center">
                  หน่วยนับ
                </th>
                <th width = "100px;"class="text-center">
                  งปม.(แผน)(บาท)
                </th>
                <th width = "100px;"class="text-center">
                  งปม.(ผล)(บาท)
                </th>
            
                <th width="20">
                </th>
           
              </tr>
            
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  ประชุมคณะกรรมการจัดทำข้อกำหนดลักษณะและเงื่อนไขการวิจัย (Term of Reference : TOR)<br>
                  <small>(ชื่อเจ้าของกิจกรรม นายจิรพัฒน์ พงศ์พิไล || ชื่อผู้ทำรายการ นายธาวัน ตั้งทิพย์) </small>
                </td>
                <td>
                  2
                </td>
                <td>
                  1
                </td>
                <td>
                  ครั้ง
                </td>
                <td>
                  32,100	
                </td>
                <td>
                  20,000
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit' data-toggle="modal" data-target=".default-example-modal-right">
                    <i class="ni ni-pencil">
                    </i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                  ประสาน กำกับ ติดตามและเข้าร่วมประชุมจัดจ้างและตรวจรับงานวิจัย	<br>
                  <small>(ชื่อเจ้าของกิจกรรม นายสิระ อุดมเสก  || ชื่อผู้ทำรายการ นายธาวัน ตั้งทิพย์) </small>
                </td>
                <td>
                  4
                </td>
                <td>
                  10
                </td>
                <td>
                  ครั้ง
                </td>
                <td>
                 0
                </td>
                <td>
                 0
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit'>
                    <i class="ni ni-pencil">
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
</style>
<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>
    
$(document).ready(function() {
  $(".select2").select2();
  $('#unit_name_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#project_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#year_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#resname').select2({
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
      targets: [2,3,4,5,6,7],
      orderable: false,
    },
    {
      targets: [0,2,3,4],
      className: "text-center",
    },
    {
      targets: [1],
      className: "text-left",
    },
    {
      targets: [5,6],
      className: "text-right",
    }]

  });

  $(document).on('click', '#btnadd',
  function() {
    $("#ids").val('');

    $(".lblmode").text("");

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
});

</script>