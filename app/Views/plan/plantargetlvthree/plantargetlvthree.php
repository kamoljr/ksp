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
                        แผนยุทธศาสตร์ชาติ
                      </label>
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="แผนแม่บท">
                        
                        <option value="17">
                          ด้านการพัฒนาและเสริมสร้างศักยภาพทรัพยากรมนุยษ์
                        </option>
                      
                        
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label" for="unit_name_search">
                        แผนระดับ 2
                      </label>
                      <select id="group_name_search" name="group_name_search" class="select2"
                      placeholder="แผนแม่บท">
                        
                        <option value="17">
                          ประเด็น 12 การพัฒนาการเรียนรู้ (พ.ศ. 2561-2580)
                        </option>
                        <option value="17">
                         ประเด็น 20 การบริการประชาชน และประสิทธิภาพภาครัฐ (พ.ศ. 2561-2580)
                        </option>
                        <option value="17">
                         ประเด็น 23 การวิจัยและการพัฒนานวัตกรรม (พ.ศ. 2561-2580)
                        </option>
                        
                        
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label" for="unit_name_search">
                        แผนระดับ 3
                      </label>
                      <select id="group_names_search" name="group_names_search" class="select2"
                      placeholder="แผนแม่บท">
                        
                        <option value="17">
                          แผนระดับ 3 รายการ1
                        </option>
                        <option value="17">
                         แผนระดับ 3 รายการ2
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
    <div class="alert alert-warning" id='searchresults' name='searchresults' style="margin-bottom: 15px;">
      ค้นหาโดย : <u>แผนยุทธศาสตร์ชาติ </u>ด้านการพัฒนาและเสริมสร้างศักยภาพทรัพยากรมนุยษ์ <u>แผนระดับ 2</u> ประเด็น 12 การพัฒนาการเรียนรู้ (พ.ศ. 2561-2580) <u>แผนระดับ 3</u> แผนระดับ 3 รายการ1
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
                <th width = "20px">
                </th>
                <th width = "30%" class="text-center">
                  เป้าหมายแผนระดับ 3
                </th>
                <th class="text-center">
                  เชื่อมเป้าหมายแผนระดับ 2
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
                  ข้อมูลเป้าหมายแผนระดับ 3
                </td>
                <td>
                  คนไทยมีการศึกษาที่มีคุณภาพตามมาตรฐานสากลเพิ่ม มีทักษะท่ี จำเป็นของโลกศตวรรษที่ ๒๑ สามารถแก้ปัญหา ปรับตัว สื่อสาร และทำงานร่วมกับผู้อื่นได้อย่างมีประสิทธิผล เพิ่มขึ้น มีนิสัยใฝ่เรียนรู้อย่างต่อเนื่องตลอดชีวิต
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
  $('#group_name_add').select2({
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
      targets: [2],
      orderable: false,
    },
    {
      targets: [0],
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