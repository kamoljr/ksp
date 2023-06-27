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
                <!-- xx<i class="fa-light fa-money-bill-transfer"></i>aa
    aaaaa  
    <i class="fa-solid fa-money-bill-transfer"></i>
    <i class="fa-thin fa-money-bill-transfer"></i>
    <i class="fa-light fa-money-bill-transfer"></i>
    <i class="fal fa-chess"></i>

    bbbb -->
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
                    <div class="col-sm-4">
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
                    <div class="col-sm-4">
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
                    <div class="col-sm-4">
                      <label class="form-label" for="group_name_search">
                        ชื่อผู้ใช้งาน
                      </label>
                      <input id="group_name_search" name="group_name_search" class="form-control searchdata"
                      type="text" placeholder="ชื่อกลุ่มงาน" />
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
      ค้นหาโดย : สำนักอำนวยการ
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
            </button>
          </div>
          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width = "20px;">
                </th>
                <th class="text-center">
                  ชื่อ-สกุล
                </th>
                <th class="text-center">
                  กลุ่มงาน/ส่วนงาน
                </th>
                <th class="text-center">
                  ปลดล๊อค
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
                  นางสาวดวงแก้ว อดิศวร 
                </td>
                <td>
                  สำนักอำนวยการ/</br>กลุ่มการประชุมและประสานงาน
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1"></label>
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
                  นายวีระ เทพทัต
                </td>
                <td>
                  สำนักอำนวยการ/</br>กลุ่มการเงินและบัญชี
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                      <label class="custom-control-label" for="customSwitch2"></label>
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
                <td>3</td>
                <td>นายสมคิด วงศ์เศวต</td>
                <td>
                  สำนักอำนวยการ/</br>กลุ่มสวัสดิการ
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="">
                      <label class="custom-control-label" for="customSwitch3"></label>
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
  $('#unit_name_add1').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#group_name_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#chief_add').select2({
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
      targets: [3,4],
      orderable: false,
    },
    {
      targets: [0,3],
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