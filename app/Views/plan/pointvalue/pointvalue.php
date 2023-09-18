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
                        ปีงบประมาณ
                      </label>
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="">
                          2566
                        </option>
                        <option value="17">
                          2565
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
         
          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width = "30px;">
                  คะแนน
                </th>
                <th class="text-center">
                  เลือกประเด็น
                </th>
               
              
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  10
                </td>
                <td>
                  <select id="ist1" name="ist1" class="select2 ist"
                      placeholder="เลือกประเด็น">
                        <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  9
                </td>
                <td>
                  <select id="ist2" name="ist2" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  8
                </td>
                <td>
                  <select id="ist3" name="ist3" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  7
                </td>
                <td>
                  <select id="ist4" name="ist4" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  6
                </td>
                <td>
                  <select id="ist5" name="ist5" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  5
                </td>
                <td>
                  <select id="ist6" name="ist6" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  4
                </td>
                <td>
                  <select id="ist7" name="ist7" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td>
                  <select id="ist8" name="ist8" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                  <select id="ist9" name="ist9" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  1
                </td>
                <td>
                  <select id="ist10" name="ist10" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
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
      targets: [0],
      orderable: false,
    },
    {
      targets: [0],
      className: "text-center",
    },
    {
      targets: [0],
      order: "desc",
    },
    {
      targets: [1],
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
  $(document).on('change', '.ist',
  function() {
    alert("บันทึกข้อมูลแล้ว");
  });
});

</script>