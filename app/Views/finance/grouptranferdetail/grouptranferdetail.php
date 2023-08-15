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
                    <div class="col-sm-12">
                      <label class="form-label" for="unit_name_search">
                        รหัสกลุ่มเงินโอน
                      </label>
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="รหัสกลุ่มเงินโอน">
                        <option value="" selected>
                          1 (1 ส.ค. 66)
                        </option>
                        <option value="17">
                          2 (2 ส.ค. 66)
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
      ค้นหาโดย : รหัสกลุ่มเงินโอน 1 (1 ส.ค. 66)
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
                <th class="text-center" width = "80px;">
                  ประเภท
                </th>
                 <th class="text-center" >
                  ชื่อโครงการ/รายการ
                </th>
                <th class="text-center" width = "25px;">
                  รหัส
                </th>
                <th class="text-center">
                  เรื่อง
                </th>
               
                
                <th class="text-center" width = "70px;">
                  จำนวนเงิน
                </th>
                <th class="text-center" width = "70px;">
                  อนุมัติ
                </th>
                <th class="text-center" width = "65px;">
                  สถานะ
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
                  งาน/โครงการ
                </td>
                <td>
                  งานอาคารสถานที่
                </td>
                <td>
                  12356
                </td>
                <td>
                  ขออนุมัติเบิกค่าใช้จ่ายในการประชุม
                </td>
                <td>
                  12,000.00
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1"></label>
                  </div>
                </td>
                
                <td>
                  <div class="custom-control custom-checkbox d-block bg-success-600" style = "padding-left:2px;padding-right:2px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      
                      <label ><small class= "">รออนุมัติ</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(9 ส.ค 66)</small></label>
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
<style>
  
  table.dataTable td {
    padding-left: 2px;
    padding-right: 2px;
    padding-top: 10px;
    padding-bottom: 10px;
    margin:0px;
    font-size:12px;
  }
  table.dataTable th {
    padding-left: 2px;
    padding-right: 2px;
    padding-top: 10px;
    padding-bottom: 10px;
    margin:0px;
    font-size:12px;
  }



  .fourd-form-row-a{
    background-color:#8f73deb0;
    padding-left:10px !important;
    padding-right:5px !important;
    padding-top:0px !important;
    padding-bottom:0px !important;
    border-radius: 5px !important;
    vertical-align: middle;
    line-height: 45px;
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
    line-height: 45px;
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
    line-height: 45px;
    color:#000;
  }


</style>
<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>
    
$(document).ready(function() {
  $(".select2").select2();
  $('#unit_name_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#budget_year_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#item_type_add').select2({
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
      targets: [1,2,4,5,6,7,8],
      orderable: false,
    },
    {
      targets: [0,3,6,7,8],
      className: "text-center",
    },
    {
      targets: [2,4],
      className: "text-left",
    }
    ,
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


function copyurl(){
    var textToCopy = $("#textToCopy").val();

                // Create a temporary textarea to hold the text
                var tempTextarea = $("<textarea>");
                tempTextarea.val(textToCopy);
                $("body").append(tempTextarea);

                // Select and copy the text
                tempTextarea.select();
                document.execCommand("copy");

                // Remove the temporary textarea
                tempTextarea.remove();

                alert("copied to clipboard: " + textToCopy);
}

</script>