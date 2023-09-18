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
                        ชื่อผู้สร้างชุดคณะกรรมการ
                      </label>
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="ชื่อผู้ทำรายการ">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="">
                          นางสาวดวงแก้ว อดิศวร
                        </option>
                        <option value="17">
                          นายวีระ เทพทัต
                        </option>
                        <option value="17">
                        นายสมคิด วงศ์เศวต
                        </option>
                        
                      </select>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="list_search">
                        ชื่อชุดคณะกรรมการ
                      </label>
                     <select id="list_search" name="list_search" class="select2"
                      placeholder="ชื่อชุดคณะกรรมการ">
                        <!-- <option value="">
                          ทั้งหมด
                        </option> -->
                        <option value="">
                          ข้อมูลชื่อชุดคณะกรรมการ ชุดที่ 1
                        </option>
                        <option value="17">
                          ข้อมูลชื่อชุดคณะกรรมการ ชุดที่ 2
                        </option>
                        <option value="17">
                        ข้อมูลชื่อชุดคณะกรรมการ ชุดที่ 3
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
      ค้นหาโดย : ข้อมูลชื่อชุดคณะกรรมการ ชุดที่ 1
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
                <th class="text-center" width = "100px;">
                  เลขบัตรประชาชน
                </th>
                <th class="text-center">
                  ชื่อ-นามสกุล
                </th>
                <th class="text-center" width="100">
                  เบอร์โทร
                </th>
                <th width = "30px;"class="text-center">
                  
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
                  8-7925-06788-08-4
                </td>
                <td>
                  นางสาวชุติมณฑน์ แสงสุวรรณ
                </td>
                <td>
                  083-543-4152
                </td>
                <td>
                  <i class="fa-solid fa-check"></i>
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
                  
                  7-6895-40528-89-7
                </td>
                <td>
                  นางนัทนิธิ แสงดารา
                </td>
                <td>
                  083-523-2276
                </td>
                <td>
                  <i class="fa-solid fa-check"></i>
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
                  3
                </td>
                <td>
                 
                  0-8352-23100-01-1
                </td>
                <td>
                  นายป้องเกียรติ โชตวาณิช
                </td>
                <td>
                  089-987-5275
                </td>
                <td>
                  <i class="fa-solid fa-xmark" style = "color: #f25353;"></i>
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
      targets: [3,4,5],
      orderable: false,
    },
    {
      targets: [0,1,3,4,5],
      className: "text-center",
    },
    {
      targets: [ 2],
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


function copyurl(){
    // str = "http://localhost/public/index.php/pages/view/board/";
    // console.time('time1');
    // var temp = str;
    // $("body").append(temp);
    //  temp.val(str).select();
    // document.execCommand("copy");
    // temp.remove();
    // console.timeEnd('time1');
}

</script>
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
</style>