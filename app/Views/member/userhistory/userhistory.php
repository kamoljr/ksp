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
                      <label class="form-label" for="year_search">
                        วันที่
                      </label>
                      <input type="text" class="form-control form-ele clear-element datepk" id="testdate" name="testdate" placeholder="วันที่" value="" >
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="unit_name_search">
                        ผู้ใช้งาน
                      </label>
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="ผู้ใช้งาน">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          นายทดสอบระบบ 1
                        </option>
                        <option value="18">
                          นายทดสอบระบบ 2
                        </option>
                        <option value="11">
                          นายทดสอบระบบ 3
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
                
                <th class="text-center" width="60px;">
                  วันที่
                </th>
                <th class="text-center" width="60px;">
                  เวลา
                </th>
                <th class="text-center">
                  ชื่อ-สกุล
                </th>
                <th class="text-center">
                  เมนู
                </th>
                <th class="text-center">
                  สิ่งที่ทำ
                </th>
                <th class="text-center" width="30px;">
                  รหัส
                </th>
                <th class="text-center">
                  รายละเอียด
                </th>
            
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  11/06/66
                </td>
                <td>
                  1:44 pm
                </td>
                <td>
                  นายวีระ เทพทัต
                </td>
                <td>
                  Login
                </td>
                <td>
                  Login เข้าระบบ
                </td>
                <td>
                  -
                </td>
                <td>
                  Login เข้าระบบ
                </td>
              </tr>
              <tr>
                <td>
                  11/06/66
                </td>
                <td>
                  2:12 pm
                </td>
                <td>
                  นายวีระ เทพทัต
                </td>
                <td>
                  ผู้ใช้งาน
                </td>
                <td>
                  เพิ่มผู้ใช้งานระบบ
                </td>
                <td>
                  37
                </td>
                <td>
                  เพิ่มผู้ใช้งาน : นายทดสอบระบบ 3</br>เพิ่มผู้ใช้งาน : กลุ่มพัฒนาระบบงาน
                </td>
              </tr>
              <tr>
                <td>
                  11/06/66
                </td>
                <td>
                  3:29 pm
                </td>
                <td>
                  นางสาวดวงแก้ว อดิศวร
                </td>
                <td>
                  เบิกจ่าย
                </td>
                <td>
                  เพิ่มรายการเบิกจ่าย
                </td>
                <td>
                  37
                </td>
                <td>
                  เรื่อง : ขออนุมัติเบิกเงินค่าโทรศัพท์ ประจำเดือน สิงหาคม ๒๕๖๕</br>รายการ : ค่าโทรศัพท์ </br>จำนวนเงิน : 3,000 บาท
                </td>
              </tr>
              <tr>
                <td>
                  11/06/66
                </td>
                <td>
                  4:12 pm
                </td>
                <td>
                  นายวีระ เทพทัต
                </td>
                <td>
                  -
                </td>
                <td>
                  Logout
                </td>
                <td>
                  -
                </td>
                <td>
                  Logout ออกจากระบบ
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
      targets: [6],
      orderable: false,
    },
    {
      targets: [0,3,5],
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