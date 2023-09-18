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
                      <label class="form-label" for="unit_name_search">
                        ชนิดวัสดุ
                      </label>
                       <select id="asset_type_search" name="group_name_search" class="select2"
                      placeholder="ประเภท">
                     
                        <option value="">
                          วัสดุสำนักงาน
                        </option>
                        <option value="17">
                          วัสดุไฟฟ้าและวิทยุ	
                        </option>
                        <option value="18">
                          วัสดุเชื้อเพลิงและหล่อลื่น
                        </option>
                        <option value="11">
                          วัสดุงานบ้านงานครัว
                        </option>
                        <option value="11">
                          วัสดุคอมพิวเตอร์		
                        </option>
                        <option value="11">
                          วัสดุก่อสร้าง		
                        </option>
                        <option value="11">
                          ค่าวัสดุอื่น (54053-00)		
                        </option>
                        
                      </select>
                    </div>
                   
                    <div class="col-sm-6">
                      <label class="form-label" for="group_name_search">
                        ชื่อรายการวัสดุ 
                      </label>
                      <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ชื่อรายการวัสดุ" value="" >
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
      ค้นหาโดย : ชนิดวัสดุ วัสดุสำนักงาน
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
                <th class="text-center" >
                  รายการวัสดุ 
                </th>
                <th class="text-center" width = "120px;">
                  หน่วยนับ 
                </th>
                <th class="text-center" width = "150px;">
                  ระดับวัสดุที่ต้องทำการสั่งซื้อ
                </th>
               
                <th width=30">
                </th>
              </tr>
            </thead>
            <tbody>
             
              <tr>
                <td>
                  1
                </td>
                <td>
                  น้ำยาลบคำผิด	
                </td>
                <td>
                  อัน
                </td>
                <td>
                  20 อัน	
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' data-toggle="modal" data-target=".default-example-modal-right">
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
                  ผงหมึก Sharp ถ่ายเอกสาร # SF-116	
                </td>
                <td>
                  ขวด
                </td>
                <td>
                  7 ขวด
	
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' data-toggle="modal" data-target=".default-example-modal-right">
                    <i class="ni ni-pencil">
                    </i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td>
                  ถ่านพานาโซนิค 3A	
                </td>
                <td>
                  ก้อน
                </td>
                <td>
                  10 ก้อน
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' data-toggle="modal" data-target=".default-example-modal-right">
                    <i class="ni ni-pencil">
                    </i>
                  </a>
                </td>
              </tr>
            
              <tr>
                <td>
                  4
                </td>
                <td>
                  เครื่องเจาะกระดาษ Open 85		
                </td>
                <td>
                  อัน
                </td>
                <td>
                  5 อัน	
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' data-toggle="modal" data-target=".default-example-modal-right">
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
      targets: [2,3,4],
      orderable: false,
    },
    {
      targets: [0,2,3],
      className: "text-center",
    },
    {
      targets: [],
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