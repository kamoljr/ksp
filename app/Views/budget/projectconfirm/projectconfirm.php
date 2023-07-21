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
                      <select id="year_search" name="year_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="">
                          2566
                        </option>
                        <option value="17">
                          2565
                        </option>
                        
                      </select>
                    </div>

                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
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
                    <div class="col-sm-5">
                      <label class="form-label" for="group_name_search">
                         โครงการ
                      </label>
                      <select id="project_search" name="project_search" class="select2"
                      placeholder="โครงการ">
                        <option value="">
                          งานรับรองความรู้รับรองคุณวุฒิและรับรองประสบการณ์เพื่อการประกอบวิชาชีพทางการศึกษา
                        </option>
                        <option value="17">
                          งานรับรองปริญญาและประกาศนียบัตรตามมาตรฐานวิชาชีพ     
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
       
            <button id="btnadd" type="button" class="btn btn-primary" style="display: flex;" onclick="window.location='projectdetail';">
              <span class="ni ni-big-plus fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                เพิ่ม
              </span>
            </button>
          </div> -->
          <!-- <div class = "row">
            <div class = "col-xl-6" style = "margin-left:260px;">
              <div class="row">
                <div class="col-xl-2 custom-control-inline text-center" style = "padding:0px;margin:0px;">
                  <div class="custom-control custom-checkbox d-block" style = "padding:0px;margin:0px;">
                      <span class="width-1 height-1 rounded-circle d-block bg-secondary" style = "padding:0px;margin-left:30px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span>
                      <small>ระหว่างดำเนินการ</small>
                  </div>
                </div>
                <div class="col-sm-2 custom-control-inline text-center" style = "padding:0px;margin:0px;">
                  <div class="custom-control custom-checkbox d-block" style = "padding:0px;margin:0px;">
                      <span class="width-1 height-1 rounded-circle d-block bg-warning" style = "padding:0px;margin-left:24px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span>
                      <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ส่งกลับ</small>
                  </div>
                </div>
                <div class="col-sm-2 custom-control-inline text-center" style = "padding:0px;margin:0px;">
                  <div class="custom-control custom-checkbox d-block" style = "padding:0px;margin:0px;">
                      <span class="width-1 height-1 rounded-circle d-block bg-primary" style = "padding:0px;margin-left:15px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span>
                      <small>ส่งโครงการ</small>
                  </div>
                </div>
                <div class="col-sm-2 custom-control-inline text-center" style = "padding:0px;margin:0px;">
                  <div class="custom-control custom-checkbox d-block" style = "padding:0px;margin:0px;">
                      <span class="width-1 height-1 rounded-circle d-block bg-info" style = "padding:0px;margin-left:23px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span>
                      <small>ล๊อค ตรวจสอบ</small>
                  </div>
                </div>
                <div class="col-sm-2 custom-control-inline text-center" style = "padding:0px;margin:0px;">
                  <div class="custom-control custom-checkbox d-block" style = "padding:0px;margin:0px;">
                      <span class="width-1 height-1 rounded-circle d-block bg-success" style = "padding:0px;margin-left:20px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span>
                      <small>ล๊อค เบิกจ่าย</small>
                  </div>
                </div>
                <div class="col-sm-2 custom-control-inline text-center" style = "padding:0px;margin:0px;">
                  <div class="custom-control custom-checkbox d-block" style = "padding:0px;margin:0px;">
                      <span class="width-1 height-1 rounded-circle d-block bg-danger" style = "padding:0px;margin-left:15px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span>
                      <small>ปิดโครงการ</small>
                  </div>
                </div>
                

              </div>

            </div>
          </div> -->

          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width = "20px;">
                </th>
                <th class="text-center">
                  งาน/โครงการ
                </th>
                <th class="text-center">
                  จำนวนเงิน
                </th>
                <th width = "100px;"class="text-center">
                  สถานะ
                </th>
                <th width = "60px;"class="text-center">
                  ไปยัง
                </th>
                <th width="15">
                </th>
                <th width="15">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  งานรับรองความรู้รับรองคุณวุฒิและรับรองประสบการณ์เพื่อการประกอบวิชาชีพทางการศึกษา
                </td>
                <td>
                  200,000
                </td>
                <td>
                 <div class="custom-control custom-checkbox d-block bg-warning-500" style = "padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <!-- <span class="width-1 height-1 rounded-circle d-block bg-secondary" style = "padding:0px;margin-left:20px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span> -->
                      <label ><small class= "">ส่งโครงการ</small></label>
                  </div>
                </td>
                <td>
                  <button type="button" class="btn btn-xs btn-primary" onclick="window.location='projectactconfirm';">กิจกรรม</button>
                </td>
               
                <td>
                  <!-- <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a> -->
                  
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  mode='edit' onclick="window.location='projectdetailconfirm';" style = "padding-top:0px;">
                  
                      <i class="fa-solid fa-gear"></i>
                    
                  </a>
                  &nbsp;&nbsp;
                  <!-- <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="ni ni-trash">
                    </i>
                  </a> -->
                  
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="fal fa-print">
                    </i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                  งานรับรองปริญญาและประกาศนียบัตรตามมาตรฐานวิชาชีพ   
                </td>
                <td>
                  300,000
                </td>
                <td>
                 <div class="custom-control custom-checkbox d-block bg-success-800" style = "padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <!-- <span class="width-1 height-1 rounded-circle d-block bg-secondary" style = "padding:0px;margin-left:20px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span> -->
                      <label ><small class= "">ล๊อคเบิกจ่าย</small></label>
                  </div>
                </td>
                <td>
                  <button type="button" class="btn btn-xs btn-primary" onclick="window.location='projectactconfirmconfirm';">กิจกรรม</button>
                </td>
               
                <td>
                  <!-- <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a> -->
                  
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' onclick="window.location='projectdetailconfirm';">
                    <i class="ni ni-gear">
                      <i class="fa-solid fa-gear"></i>
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <!-- <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="ni ni-trash">
                    </i>
                  </a> -->
                  
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="fal fa-print">
                    </i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td>
                  งานทดสอบและประเมินสมรรถนะทางวิชาชีพครู    
                </td>
                <td>
                  500,000
                </td>
                <td>
                 <div class="custom-control custom-checkbox d-block bg-info-800" style = "padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <!-- <span class="width-1 height-1 rounded-circle d-block bg-secondary" style = "padding:0px;margin-left:20px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span> -->
                      <label ><small class= "">ล๊อคเพื่อตรวจสอบ</small></label>
                  </div>
                </td>
                <td>
                  <button type="button" class="btn btn-xs btn-primary" onclick="window.location='projectactconfirm';">กิจกรรม</button>
                </td>
               
                <td>
                  <!-- <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a> -->
                  
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' onclick="window.location='projectdetailconfirm';">
                    <i class="ni ni-gear">
                      <i class="fa-solid fa-gear"></i>
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <!-- <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="ni ni-trash">
                    </i>
                  </a> -->
                  
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="fal fa-print">
                    </i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  4
                </td>
                <td>
                  โครงการทดสอบ1    
                </td>
                <td>
                  520,000
                </td>
                <td>
                 <div class="custom-control custom-checkbox d-block bg-fusion-100" style = "padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <!-- <span class="width-1 height-1 rounded-circle d-block bg-secondary" style = "padding:0px;margin-left:20px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span> -->
                      <label ><small class= "">ระหว่างดำเนินการ</small></label>
                  </div>
                </td>
                <td>
                  <button type="button" class="btn btn-xs btn-primary" onclick="window.location='projectactconfirm';">กิจกรรม</button>
                </td>
               
                <td>
                  <!-- <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a> -->
                  
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' onclick="window.location='projectdetailconfirm';">
                    <i class="ni ni-gear">
                      <i class="fa-solid fa-gear"></i>
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <!-- <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="ni ni-trash">
                    </i>
                  </a> -->
                  
                  
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
      targets: [3,4,5,6],
      orderable: false,
    },
    {
      targets: [0,3],
      className: "text-center",
    },
    {
      targets: [1],
      className: "text-left",
    },
    {
      targets: [2],
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