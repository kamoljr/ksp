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
            <thead class="bg-success-600">
              <tr>
               
                <th class="text-center">ขั้นที่1</th>
                <th class="text-center">ขั้นที่2</th>
                <th class="text-center">ขั้นที่3</th>
                <th class="text-center">ขั้นที่4</th>
               
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample">
                      <label class="custom-control-label color-fusion-300" for="defaultInline1Radio" >ค่าใช้สอย</label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample">
                      <label class="custom-control-label color-fusion-300" for="defaultInline2Radio" >ค่าเบี้ยเลี้ยง ค่าเช่าที่พัก และค่าพาหนะ</label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline3Radio" name="inlineDefaultRadiosExample">
                      <label class="custom-control-label color-fusion-300" for="defaultInline3Radio" >ค่าเบี้ยเลี้ยง</label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline4Radio" name="inlineDefaultRadiosExample" checked="">
                      <label class="custom-control-label color-fusion-300" for="defaultInline4Radio" >ค่าเบี้ยเลี้ยง (54026-01)</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline5Radio" name="inlineDefaultRadiosExample1">
                      <label class="custom-control-label color-fusion-300" for="defaultInline5Radio" >ค่าใช้สอย</label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline6Radio" name="inlineDefaultRadiosExample1">
                      <label class="custom-control-label color-fusion-300" for="defaultInline6Radio" >ค่าเบี้ยเลี้ยง ค่าเช่าที่พัก และค่าพาหนะ</label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline7Radio" name="inlineDefaultRadiosExample1">
                      <label class="custom-control-label color-fusion-300" for="defaultInline7Radio" >ค่าที่พัก</label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline8Radio" name="inlineDefaultRadiosExample1" checked="">
                      <label class="custom-control-label color-fusion-300" for="defaultInline8Radio" >ค่าที่พัก (54026-02)</label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline10Radio" name="inlineDefaultRadiosExample2">
                      <label class="custom-control-label color-fusion-300" for="defaultInline10Radio" >ค่าใช้สอย</label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInlin11Radio" name="inlineDefaultRadiosExample2">
                      <label class="custom-control-label color-fusion-300" for="defaultInlin11Radio" >ค่าเบี้ยเลี้ยง ค่าเช่าที่พัก และค่าพาหนะ</label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline12Radio" name="inlineDefaultRadiosExample2">
                      <label class="custom-control-label color-fusion-300" for="defaultInline12Radio" >ค่าพาหนะ</label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" id="defaultInline13Radio" name="inlineDefaultRadiosExample2" checked="">
                      <label class="custom-control-label color-fusion-300" for="defaultInline13Radio" >ค่าพาหนะ (54026-03)</label>
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
      targets: [],
      className: "text-center",
    },
    {
      targets: [0,1,2,3],
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