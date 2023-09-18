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
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                        ใบสั่งซื้อสั่งจ้างหรือเลขสัญญา 
 
                      </label>
                      <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ใบสั่งซื้อสั่งจ้างหรือเลขสัญญา" value="" >
                    </div>

                    <div class="col-sm-3">
                      <label class="form-label" for="unit_name_search">
                        ชนิดวัสดุ
                      </label>
                       <select id="asset_type_search" name="group_name_search" class="select2"
                      placeholder="ประเภท">
                     
                        <option value="">
                          ทั้งหมด
                        </option>
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
                    <div class="col-sm-4">
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
             
                <th class="text-center" width = "20px;">
                  
                </th>
                <th class="text-center" width = "100px;">
                  ใบสั่งซื้อสั่งจ้าง/<br>เลขสัญญา 
                </th>
                <th class="text-center" width = "100px;">
                  วิธีการได้มาปีงบประมาณ
                </th>
                <th class="text-center">
                  รายการวัสดุ
                </th>
                
                <th class="text-center">
                  รับจาก
                </th>
                <th width = "60px;"class="text-center">
                  จำนวน
                </th>
                <th class="text-center" width = "60px;">
                  วันที่ซื้อ
                </th>
              </tr>
            </thead>
            <tbody>
             
              <tr>
                <td>
                  1
                </td>
                <td>
                  97/66
                </td>
                <td>
                  2566
                </td>
                <td>
                  ตลับหมึกเลเซอร์ โทนเนอร์ HP No.78A (CE278 A)	
                </td>
                <td>
                  บริษัท เมโทรซิสเต็มส์คอร์ปอเรชั่น จำกัด (มหาชน)		
                </td>
                <td>
                5 กล่อง
                </td>
                <td>
                 02 ส.ต. 66
                </td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                  98/66
                </td>
                <td>
                  2566
                </td>
                <td>
                  หมึก Printer HP Laser Jet 85A (CE285A)	
                </td>
                <td>
                  บริษัท คอนทินิวอัสฟอร์ม แอนด์ คอมพิวเตอร์ จำกัด	
                </td>
                <td>
                30 กล่อง
                </td>
                <td>
                 26 ส.ต. 66
                </td>
              </tr>
              <tr>
                <td>
                  1
                </td>
                <td>
                  97/66
                </td>
                <td>
                  2566
                </td>
                <td>
                  หมึก Printer HP Laser Jet 12A (Q26-12A)	
                </td>
                <td>
                  บริษัท เมโทรซิสเต็มส์คอร์ปอเรชั่น จำกัด (มหาชน)		
                </td>
                <td>
                  15 กล่อง
                </td>
                <td>
                  27 ส.ต. 66
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
      targets: [2,3,4,5],
      orderable: false,
    },
    {
      targets: [0,1,2,5,6],
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