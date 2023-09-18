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
                    <div class="col-sm-4">
                      <label class="form-label" for="unit_name_search">
                        ธนาคาร
                      </label>
                      <select id="bank_search" name="bank_search" class="select2"
                      placeholder="ชื่อผู้ทำรายการ">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="">
                         กรุงไทย	
                        </option>
                        <option value="17">
                          กรุงเทพ
                        </option>
                        <option value="17">
                        กสิกรไทย	
                        </option>
                        <option value="17">
                        ไทยพานิชย์		
                        </option>
                        <option value="17">
                        ออมสิน		
                        </option>
                        <option value="17">
                        ธนาคารอิสลามแห่งประเทศไทย		
                        </option>
                        <option value="17">
                        ธนาคารอาคารสงเคราะห์		
                        </option>
                        <option value="17">
                        ธนาคารอาคารสงเคราะห์ สาขาสำนักพระราม 9		
                        </option>
                        
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label class="form-label" for="unit_name_search">
                        ประเภท
                      </label>
                      <select id="bank_type_search" name="bank_type_search" class="select2"
                      placeholder="ประเภท">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="">
                         ออมทรัพย์		
                        </option>
                        <option value="17">
                          กระแสรายวัน	
                        </option>
                        <option value="17">
                        ประจำ3เดือน			
                        </option>
                        <option value="17">
                        ประจำ12เดือน		
                        </option>
                        
                        <option value="17">
                        ประจำ24เดือน			
                        </option>
                        <option value="17">
                        ประจำ36เดือน			
                        </option>
                        
                        
                      </select>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="list_search">
                        เลขที่บัญชี/ชื่อบัญชี
                      </label>
                      <input id="group_name_search" name="group_name_search" class="form-control searchdata" type="text" placeholder="ชื่อชุดคณะกรรมการ">
                   
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
      ค้นหาโดย : ชื่อธนาคาร ทั้งหมด
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
                  เลขที่บัญชี
                </th>
                <th class="text-center">
                  ชื่อบัญชี
                </th>
                <th class="text-center" width = "100px;">
                  ประเภท
                </th>
                <th class="text-center" width = "100px;">
                  ธนาคาร
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
                  059-6-01199-8	
                </td>
                <td>
                  ค่าธรรมเนียมสอบแข่งขันของ สนง.		
                </td>
                <td>
                  กระแสรายวัน		
                </td>
                <td>
                  กรุงไทย		
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
                 059-6-01199-7	
                </td>
                <td>
                  ค่าธรรมเนียมสอบแข่งขันของ สนง.		
                </td>
                <td>
                  กระแสรายวัน		
                </td>
                <td>
                  กรุงไทย		
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
                  059-0-01184-7	
                </td>
                <td>
                  เงินค่าธรรมเนียมของคุรุสภา		
                </td>
                <td>
                  ออมทรัพย์			
                </td>
                <td>
                  กรุงไทย			
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
                  4
                </td>
                <td>
                  059-0-24237-7	
                </td>
                <td>
                  สำนักงานเลขาธิการคุรุสภา (เงินนอก งปม)	
                </td>
                <td>
                  ออมทรัพย์			
                </td>
                <td>
                  กรุงไทย		
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
                  5
                </td>
                <td>
                  059-0-17319-7	
                </td>
                <td>
                 สำนักงานเลขาธิการคุรุสภา (งปม.แผ่นดิน)		
                </td>
                <td>
                  ออมทรัพย์			
                </td>
                <td>
                  กรุงไทย		
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
                  6
                </td>
                <td>
                  059-1-30069-9	
                </td>
                <td>
                 สำนักงานเลขาธิการคุรุสภา	
                </td>
                <td>
                  ออมทรัพย์			
                </td>
                <td>
                  กรุงไทย		
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
  $('#bank_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#bank_type_add').select2({
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
      targets: [5],
      orderable: false,
    },
    {
      targets: [0,1,3,4],
      className: "text-center",
    },
    {
      targets: [2],
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