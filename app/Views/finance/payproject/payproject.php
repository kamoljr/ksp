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
                        ประเภทงบ
                      </label>
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="">
                          งบดำเนินงาน
                        </option>
                        <option value="17">
                          งบลงทุน
                        </option>
                        <option value="17">
                          งบเงินอุดหนุน
                        </option>
                        <option value="17">
                          งบรายจ่ายอื่น
                        </option>
                        
                        
                      </select>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="group_name_search">
                         รายการค่าใช้จ่าย
                      </label>
                      <input id="group_name_search" name="group_name_search" class="form-control searchdata"
                      type="text" placeholder="รายการค่าใช้จ่าย" />
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
      ค้นหาโดย : งบดำเนินงาน
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 0px;">
          <div class="frame-wrap mt-3 mb-0 w-100">
          
            <div class="frame-wrap mt-3 mb-0 w-100">
            <!-- <button id="btnadd" type="button" class="btn btn-primary" data-toggle="modal"
            data-target=".default-example-modal-right" style="display: flex;">
              <span class="ni ni-big-plus fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                เพิ่ม
              </span>
            </button> -->
          </div>
          </div>
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
                  รายการค่าใช้จ่าย
                </th>
                <th width="90">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  ค่าใช้สอย
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" data-toggle="modal"
            data-target=".default-example-modal-right" mode='view' style='padding-top:2px !important;'>
                    <i class="ni ni-plus">
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
              <tr>
                <td>
                  2
                </td>
                <td>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-l" style = "margin-bottom:3px;"></i>&nbsp;ค่าเบี้ยเลี้ยง ค่าเช่าที่พัก และค่าพาหนะ
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='view' style='padding-top:2px !important;'>
                    <i class="ni ni-plus">
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
              <tr>
                <td>
                  3
                </td>
                <td>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-l" style = "margin-bottom:3px;"></i>&nbsp;ค่าเบี้ยเลี้ยง
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='view' style='padding-top:2px !important;'>
                    <i class="ni ni-plus">
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
              <tr>
                <td>
                  4
                </td>
                <td>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-l" style = "margin-bottom:3px;"></i>&nbsp;ค่าเบี้ยเลี้ยง (54026-01)
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='view' style='padding-top:2px !important;'>
                    <i class="ni ni-plus">
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
              
              <tr>
                <td>
                  5
                </td>
                <td>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-l" style = "margin-bottom:3px;"></i>&nbsp;ค่าที่พัก
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='view' style='padding-top:2px !important;'>
                    <i class="ni ni-plus">
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
      targets: [0,1,2],
      orderable: false,
    },
    {
      targets: [0],
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