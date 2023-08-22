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
                    <div class="col-sm-2">
                      <label class="form-label" for="item_type_search">
                        ประเภท
                      </label>
                      <select id="item_type_search" name="item_type_search" class="select2"  placeholder="ประเภท" >
                        <option value="2" selected>
                            ทั้งหมด
                        </option>
                        <option value="2">
                            งาน/โครงการ
                        </option>
                        <option value="4">
                            เงินรับฝาก
                        </option>
                        <option value="4">
                            งบกลาง
                        </option>
                        <option value="4">
                            งบบุคลากร
                        </option>
                      
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label" for="project_search">
                        โครงการ
                      </label>
                      <select id="project_search" name="project_search" class="select2"
                      placeholder="โครงการ">
                      <option value="" selected>
                          ทั้งหมด
                        </option>
                        <option value="" >
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
                    <div class="col-sm-3">
                      <label class="form-label" for="act_search" style = "display:block;">
                        กิจกรรม
                      </label>
                      <select id="act_search" name="act_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="" selected>
                          ทั้งหมด
                        </option>
                        <option value="">
                          การให้บริการห้องประชุม
                        </option>
                        <option value="17">
                          การให้บริการด้านอาคารสถานที่
                        </option>
                        <option value="17">
                          อบรมหลักสูตรการฝึกซ้อมดับเพลิง
                        </option>
                       
                        
                      </select>
                    </div>
                    
                    <div class="col-sm-3">
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
     
      <h5>ค้นหาโดย</h5> 
      <div class="row" style = "margin-top:15px;">
          <div class="col-sm-2" >
            <h6> ปี :</h6>
          </div>
          <div class="col-sm-3">
              2566
          </div>
          <div class="col-sm-2">
            <h6>ประเภท </h6>
          </div>
          <div class="col-sm-5">
              งาน/โครงการ
          </div>
          
      </div>

      <div class="row">
          <div class="col-sm-2">
            <h6>ส่วนงาน :</h6>
          </div>
          <div class="col-sm-3">
              สำนักอำนวยการ
          </div>
          <div class="col-sm-2">
            <h6>กลุ่มงาน :</h6>
          </div>
          <div class="col-sm-5">
              กลุ่มการพัสดุและอาคารสถานที่	
          </div>
          
      </div>
      <div class="row">
          <div class="col-sm-2">
            <h6>โครงการ :</h6>
          </div>
          <div class="col-sm-3">
              งานอาคารสถานที่
          </div>
          <div class="col-sm-2">
            <h6>กิจกรรม :</h6>
          </div>
          <div class="col-sm-5">
              เครื่องปรับอากาศชนิดตั้งพื้นหรือชนิดแขวน
          </div>
          
      </div>
      <div class="row">
          <div class="col-sm-2">
            <h6>รหัสรายการ/เรื่อง  :</h6>
          </div>
          <div class="col-sm-10">
              [12001] ขอความอนุเคราะห์ดำเนินการจ้างเหมาบริการ
          </div>
          
      </div>
      <div class="row">
          <div class="col-sm-2">
            <h6>วงเงินที่ใช้  :</h6>
          </div>
          <div class="col-sm-10">
              200,000.00 บาท
          </div>
          
      </div>

      






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
            </button><br>
          </div>
          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width = "10px;">
                </th>
                <th class="text-center">
                  ชื่อ/นามสกุล
                </th>
                <th class="text-center">
                  วันที่มอบ
                </th>
                <th width = "20px;"class="text-center">
                  ขั้น1
                </th>
                <th width = "20px;"class="text-center">
                  ขั้น2
                </th>
                <th width = "20px;"class="text-center">
                  ขั้น3
                </th>
                <th width = "20px;"class="text-center">
                  ขั้น4
                </th>
                <th width = "20px;"class="text-center">
                  ขั้น5
                </th>
                <th width = "20px;"class="text-center">
                  ขั้น6
                </th>
                <th width = "20px;"class="text-center">
                  ขั้น7
                </th>
                <th width = "20px;"class="text-center">
                  ขั้น8
                </th>
                <th width = "20px;"class="text-center">
                  ขั้น9
                </th>
                <th width = "20px;"class="text-center">
                  ขั้น10
                </th>
                <!-- <th width = "20px;"class="text-center">
                  ขั้น11
                </th> -->
                <th width="30">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                 ญาดา สิริวาณิชย์
                </td>
                <td>
                  1 ส.ค. 66
                </td>
                <td>
                 <i class="fa-solid fa-check" style = "color: #7a59ad; "></i>
                </td>
                <td>
                 <i class="fa-solid fa-check" style = "color: #7a59ad; "></i>
                </td>
                <td>
                 <i class="fa-solid fa-check" style = "color: #7a59ad; "></i>
                </td>
                <td>
                 <i class="fa-solid fa-check" style = "color: #7a59ad; "></i>
                </td>
                <td>
                 <i class="fa-solid fa-check" style = "color: #7a59ad; "></i>
                </td>
                <td>
                 <i class="fa-solid fa-check" style = "color: #7a59ad; "></i>
                </td>
                <td>
                 <i class="fa-solid fa-check" style = "color: #7a59ad; "></i>
                </td>
                <td>
                 <i class="fa-solid fa-check" style = "color: #7a59ad; "></i>
                </td>
                <td>
                 <i class="fa-solid fa-xmark" style = "color: #f25353; "></i>
                </td>
                <td>
                 <i class="fa-solid fa-check" style = "color: #7a59ad; "></i>
                </td>
                <!-- <td>
                 <i class="fa-solid fa-check" style = "color: #7a59ad; "></i>
                </td> -->
               
                
                
               
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit'>
                    <i class="ni ni-pencil">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="ni ni-trash">
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
      targets: [1,2,3,4,5,6,7,8,9,10,11,12,13],
      orderable: false,
    },
    {
      targets: [0,2,3,4,5,6,7,8,9,10,11,12,13],
      className: "text-center",
    },
    {
      targets: [1, 2],
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
});

</script>