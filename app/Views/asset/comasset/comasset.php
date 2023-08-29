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
                      <label class="form-label" for="budget_year_search">
                        วิธีการได้มาปีงบประมาณ
                      </label>
                      <select id="budget_year_search" name="budget_year_search" class="select2"
                      placeholder="วิธีการได้มาปีงบประมาณ">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          2566
                        </option>
                        <option value="18">
                          2565
                        </option>
                        <option value="11">
                          2564
                        </option>
                       
                      </select>
                    </div>
                    <div class="col-sm-9">
                      <label class="form-label" for="group_name_search">
                        รายการ
                      </label>
                      <select id="asset_item_search" name="asset_item_search" class="select2"
                      placeholder="รายการ">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          เครื่องคอมพิวเตอร์(CPU)			
                        </option>
                        <option value="18">
                          คอมพิวเตอร์ลูกข่าย	
                        </option>
                        <option value="11">
                          สแกนเนอร์(Scannner)		
                        </option>
                        
                      </select>
                    </div>
                    
                  </div>


                  <div class="row" style = "padding-top:15px;">
                    
                    
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                        รหัสครุภัณฑ์
                      </label>
                      <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ชื่อบริษัท" value="" >
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                         ยี่ห้อรุ่นขนาดและลักษณะ
                      </label>
                      <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ยี่ห้อรุ่นขนาดและลักษณะ" value="" >
                    </div>
                    
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                         สถานที่ตั้ง
                      </label>
                      <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="สถานที่ตั้ง" value="" >
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                        จำหน่าย
                      </label>
                      <select id="dispose_status_search" name="group_name_search" class="select2"
                      placeholder="จำหน่าย">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          ปกติ	
                        </option>
                        <option value="18">
                          จำหน่าย
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
      ค้นหาโดย : ทั้งหมด
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
             
                <th class="text-center" width = "90px;">
                  รหัสครุภัณฑ์
                </th>
                <th class="text-center" width = "70px;">
                  สำนัก
                </th>
                <th class="text-center" width = "80px;">
                  กลุ่มงาน
                </th>
                <th class="text-center" width = "200px;">
                  รายการครุภัณฑ์
                </th>
                <th class="text-center">
                  ยี่ห้อรุ่นขนาดและลักษณะ
                </th>
                <th class="text-center" width = "100px;">
                  สถานที่ตั้ง
                </th>
                <th width = "100px;"class="text-center">
                  จำนวนเงิน (บาท)
                </th>
                <th width=30">
                </th>
              </tr>
            </thead>
            <tbody>
             
              <tr>
                <td>
                  57-117-249-0003	
                </td>
                <td>
                  สำนักนโยบายและแผน
                </td>
                <td>
                  กลุ่มแผนและงบประมาณ
                </td>
                <td>
                  เครื่องคอมพิวเตอร์(CPU)		
                </td>
                <td>
                  Lenovo ThinkCenter M720e (SNI_PC1) "จัดซื้อประจำปีงบประมาณ พ.ศ.2563"	
                </td>
                <td>
                กลุ่มประสานงานฯ อาคารหอประชุม ชั้น 3	
                </td>
                <td>
                  1,790	
                </td>
              
                
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view' data-toggle="modal" data-target=".default-example-modal-right">
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  <!-- &nbsp;&nbsp;
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' data-toggle="modal" data-target=".default-example-modal-right">
                    <i class="ni ni-pencil">
                    </i>
                  </a>
                   -->
                </td>
              </tr>
              <tr>
                <td>
                  57-117-249-0002	
                </td>
                <td>
                  สำนักจรรยาบรรณวิชาชีพและนิติการ
                </td>
                <td>
                  กลุ่มนิติการ	
                </td>
                <td>
                 เครื่องคอมพิวเตอร์(CPU)	
                </td>
                <td>
                 ยี่ห้อ Dell รุ่น OptiPlex 5050 SFF	
                </td>
                <td>
                กลุ่มประสานงานฯ อาคารหอประชุม ชั้น 3	
                </td>
                <td>
                  1,790	
                </td>
              
                
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view' data-toggle="modal" data-target=".default-example-modal-right">
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  <!-- &nbsp;&nbsp;
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' data-toggle="modal" data-target=".default-example-modal-right">
                    <i class="ni ni-pencil">
                    </i>
                  </a> -->
                  
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
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>
    
$(document).ready(function() {
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
      targets: [3,4,5,6,7],
      orderable: false,
    },
    {
      targets: [0],
      className: "text-center",
    },
    {
      targets: [6],
      className: "text-right",
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

</script>