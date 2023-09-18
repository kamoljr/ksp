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
                      <label class="form-label" for="year_search">
                        ปีงบประมาณ
                      </label>
                      <select id="year_search" name="year_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="">
                          2566
                        </option>
                        <option value="17">
                          2565
                        </option>
                        <option value="17">
                          2564
                        </option>
                        <option value="17">
                          2563
                        </option>
                        
                        
                      </select>
                    </div>

                    
                    <div class="col-sm-5">
                      <label class="form-label" for="unit_name_search">
                        ส่วนงาน
                      </label>
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="ส่วนงาน">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          กลุ่มพัฒนาระบบงาน
                        </option>
                        <option value="18">
                          สถาบันคุรุพัฒนา
                        </option>
                        <option value="11">
                          สำนักจรรยาบรรณวิชาชีพและนิติการ
                        </option>
                        <option value="3">
                          สำนักทะเบียนและใบอนุญาตประกอบวิชาชีพ
                        </option>
                        <option value="9">
                          สำนักเทคโนโลยีสารสนเทศ
                        </option>
                        <option value="16">
                          สำนักเทคโนโลยีสารสนเทศและการสื่อสาร
                        </option>
                        <option value="5">
                          สำนักนโยบายและแผน
                        </option>
                        <option value="4">
                          สำนักพัฒนาและส่งเสริมวิชาชีพ
                        </option>
                        <option value="2">
                          สำนักมาตรฐานวิชาชีพ
                        </option>
                        <option value="14">
                          สำนักยกย่องเชิดชูเกียรติวิชาชีพ
                        </option>
                        <option value="12">
                          สำนักส่งเสริมและพัฒนาคุรุสภาจังหวัด
                        </option>
                        <option value="7">
                          สำนักอำนวยการ
                        </option>
                        <option value="8">
                          หน่วยตรวจสอบภายใน
                        </option>
                      </select>
                    </div>
                    <div class="col-sm-5">
                      <label class="form-label" for="group_name_search">
                        กลุ่มงาน
                      </label>
                      <select id="group_name_search" name="group_name_search" class="select2"
                      placeholder="กลุ่มงาน">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          กลุ่มการประชุมและประสานงาน	
                        </option>
                        <option value="18">
                          กลุ่มการเงินและบัญชี
                        </option>
                        <option value="11">
                          กลุ่มสวัสดิการ
                        </option>
                        
                      </select>
                    </div>
                    
                    
                  </div>


                  <div class="row" style = "padding-top:15px;">
                    <div class="col-sm-4">
                      <label class="form-label" for="item_type_search">
                        บริษัท
                      </label>
                      <select id="item_type_search" name="item_type_search" class="select2"  placeholder="ประเภท" >
                        <option value="2" selected>
                            ทั้งหมด
                        </option>
                        <option value="2">
                            บริษัท ซีโอแอล จำกัด (มหาชน)
                        </option>
                        <option value="4">
                            บริษัท ปตท. จำกัด (มหาชน)
                        </option>
                        <option value="4">
                            บริษัท โมบายลิงค์ (ประเทศไทย) จำกัด
                        </option>
                       
                      
                      </select>
                    </div>
                    
                    
                    <div class="col-sm-2">
                      <label class="form-label" for="text_search">
                         เลขที่สัญญา
                      </label>
                      <select id="agg_code_search" name="agg_code_search" class="select2"
                      placeholder="รหัสรายการ/เรื่อง">
                        <option value="" selected>
                          -
                        </option>
                        <option value="">
                          	1/66
                        </option>
                        <option value="">
                          	2/66
                        </option>
                        <option value="">
                          	3/66
                        </option>
                       
                        
                       
                        
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label" for="text_search">
                         ชื่อสัญญา
                      </label>
                      <select id="namecode_search" name="namecode_search" class="select2"
                      placeholder="รหัสรายการ/เรื่อง">
                        <option value="" selected>
                          -
                        </option>
                        <option value="">
                          	รายงานจัดจ้างและขออนุมัติการจัดจ้างซ่อมแซมผนังบ่อลิฟต์ 
                        </option>
                        <option value="">
                          	ใบสั่งจ้างจัดทำโล่รางวัล
                        </option>
                        <option value="">
                          	จ้างที่ปรึกษางานวิจัย เรื่อง แนวทางการยกระดับคุณภาพในการประกอบวิชาชีพของผู้ประกอบวิชาชีพทางการศึกษาในอนาคต	
                        </option>
                       
                        
                       
                        
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label class="form-label" for="text_search">
                         สถานะ
                      </label>
                      <select id="status_search" name="status_search" class="select2"
                      placeholder="รหัสรายการ/เรื่อง">
                        <option value="" selected>
                          -
                        </option>
                        <option value="">
                          	คืนแล้ว 
                        </option>
                        <option value="">
                          	ยังไม่คืน
                        </option>
                      
                       
                        
                       
                        
                      </select>
                    </div>
                   

                    
                  </div>
                  <!-- <div class="row" style = "padding-top:15px;">
                    
                    
                    <div class="col-sm-12">
                      <label class="form-label" for="text_search">
                         รหัสรายการ/เรื่อง
                      </label>
                      <select id="namecode_search" name="namecode_search" class="select2"
                      placeholder="รหัสรายการ/เรื่อง">
                        <option value="" selected>
                          -
                        </option>
                        <option value="">
                          	[12001] ขอความอนุเคราะห์ดำเนินการจ้างเหมาบริการ
                        </option>
                        <option value="">
                          	[12302] ขอความอนุเคราะห์ดำเนินการจัดจ้างออกแบบอาร์ตเวิร์ค
                        </option>
                        <option value="">
                          	[12402] ขอความอนุเคราะห์จัดจ้างพิมพ์หนังสือ
                        </option>
                        
                       
                        
                      </select>
                    </div>
                   

                    
                  </div> -->


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
            </button><br>
          </div> -->
          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width = "20px;">
                </th>
                <th class="text-center" width = "80px;" style = "vertical-align: middle;"> 
                  เลขที่สัญญา
                </th>
                <th class="text-center" style = "vertical-align: middle;">
                  บริษัท 	
                </th>
                <th class="text-center" width = "80px;" style = "vertical-align: middle;">
                  วันที่ตรวจรับงวดสุดท้าย	
                </th>
                <th class="text-center" width = "80px;" style = "vertical-align: middle;">
                  วันที่ตรวจรับงวดสุดท้าย
                </th>
                <th class="text-center" width = "80px;" style = "vertical-align: middle;">
                  จำนวนเงิน (บาท) 
                </th>
                <th width = "60px;"class="text-center" style = "vertical-align: middle;">
                  
                </th>
                <th width = "60px;"class="text-center" style = "vertical-align: middle;">
                  
                </th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  1/66
                </td>
                <td>
                   บริษัท ออนป้า จำกัด
                </td>
                <td>
                  22 ก.ค. 2562	
                </td>
                <td>
                  21 ก.ค. 2563	
                </td>
                <td>
                  10,000
                </td>
                <td>
                  <div class="custom-control custom-checkbox d-block bg-warning-500" style="padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <!-- <span class="width-1 height-1 rounded-circle d-block bg-secondary" style = "padding:0px;margin-left:20px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span> -->
                      <label><small class="">ยังไม่คืน</small></label>
                  </div>
                </td>
               
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  &nbsp;&nbsp;
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
                  2/66
                </td>
                <td>
                   อารี เทรดดิ้ง ๑๙๕๐	
                </td>
                <td>
                 27 ม.ค. 2559	
                </td>
                <td>
                 26 ม.ค. 2560	
                </td>
                <td>
                  2,023.00
                </td>
                <td>
                  <div class="custom-control custom-checkbox d-block bg-info-800" style="padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <!-- <span class="width-1 height-1 rounded-circle d-block bg-secondary" style = "padding:0px;margin-left:20px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span> -->
                      <label><small class="">คืนแล้ว</small></label>
                  </div>
                </td>
               
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' mode='edit' data-toggle="modal" data-target=".default-example-modal-right">
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
  $('#organizationtype').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#vattype').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#province').select2({
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
      targets: [3,4,6,7],
      orderable: false,
    },
    {
      targets: [0,1,3,4,6,7],
      className: "text-center",
    },
    {
      targets: [5],
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
});

</script>