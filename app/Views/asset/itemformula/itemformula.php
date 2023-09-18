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
                    <div class="col-sm-6">
                      <label class="form-label" for="unit_name_search">
                        ประเภท
                      </label>
                       <select id="asset_type_search" name="group_name_search" class="select2"
                      placeholder="ประเภท">
                     
                        <option value="">
                          ครุภัณฑ์สำนักงาน (12230-00)	
                        </option>
                        <option value="17">
                          ครุภัณฑ์ยานพาหนะและขนส่ง (12250-00)		
                        </option>
                        <option value="18">
                          ครุภัณฑ์ไฟฟ้าและวิทยุ (12233-00)	
                        </option>
                        <option value="11">
                          ครุภัณฑ์โฆษณาและเผยแพร่	
                        </option>
                        <option value="11">
                          ครุภัณฑ์งานบ้านงานครัว		
                        </option>
                        <option value="11">
                          ครุภัณฑ์คอมพิวเตอร์		
                        </option>
                        
                      </select>
                    </div>
                   
                    <div class="col-sm-6">
                      <label class="form-label" for="group_name_search">
                        ชื่อรายการครุภัณฑ์
                      </label>
                      <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ชื่อรายการครุภัณฑ์" value="" >
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
      ค้นหาโดย : ประเภท ครุภัณฑ์สำนักงาน (12230-00)	
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 0px;">
          <!-- <div class="frame-wrap mt-3 mb-0 w-100">
            <button id="btnadd" type="button" class="btn btn-primary btn_add" data-toggle="modal"
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
                <th width = "20px;">
                </th>
                <th class="text-center">
                  รายการครุภัณฑ์
                </th>
                <th class="text-center" width = "80px;">
                  หน่วยนับ
                </th>
               
                <th class="text-center" width = "120px;">
                 สูตรคิดค่าเสื่อม 5%
                </th>
                <th class="text-center" width = "120px;">
                 สูตรคิดค่าเสื่อม 20%
                </th>
              
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  1
                </td>
                <td>
                  ชุดรับแขก	
                </td>
                <td>
                  ชุด
                </td>
              
                <td>
                  <div class="custom-control custom-switch">
                      <input type="radio" class="custom-control-input" id="fm1_1" checked="" name="fm1">
                      <label class="custom-control-label" for="fm1_1"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="radio" class="custom-control-input" id="fm1_2"  name="fm1">
                      <label class="custom-control-label" for="fm1_2"></label>
                  </div>
                </td>
               
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                  เครื่องฟอกอากาศ			
                </td>
                <td>
                  เครื่อง
                </td>
              
                <td>
                  <div class="custom-control custom-switch">
                      <input type="radio" class="custom-control-input" id="fm2_1" checked="" name="fm2">
                      <label class="custom-control-label" for="fm2_1"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="radio" class="custom-control-input" id="fm2_2"  name="fm2">
                      <label class="custom-control-label" for="fm2_2"></label>
                  </div>
                </td>
               
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td>
                  ตู้นิรภัย		
                </td>
                <td>
                  ตู้
                </td>
              
                <td>
                  <div class="custom-control custom-switch">
                      <input type="radio" class="custom-control-input" id="fm3_1" checked="" name="fm3">
                      <label class="custom-control-label" for="fm3_1"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="radio" class="custom-control-input" id="fm3_2"  name="fm3">
                      <label class="custom-control-label" for="fm3_2"></label>
                  </div>
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
      targets: [2,3,4],
      orderable: false,
    },
    {
      targets: [0,2,3,4],
      className: "text-center",
    },
    {
      targets: [],
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
  $(document).on('click', '.des_user', function() {
    // console.log('unit');
    $(".div_des").show();
    $(".div_add").hide();
    $("#menu_name").text("จำหน่าย")
    $(".lblmode").text("")
    $('.default-example-modal-right').modal('toggle');
   
  });
  $(document).on('click', '.btn_add', function() {
    // console.log('unit');
    $(".div_des").hide();
    $(".div_add").show();
    $("#menu_name").text("ผู้ใช้งาน")
    $('.default-example-modal-right').modal('toggle');
  });

</script>