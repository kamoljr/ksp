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
                    <div class="col-sm-2">
                      <label class="form-label" for="year_search">
                        ปีงบประมาณ
                      </label>
                      <select id="year_search" name="year_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="">
                          2566
                        </option>
                        <option value="17">
                          2565
                        </option>
                        <option value="17">
                          2564
                        </option>
                        <option value="17">
                          2563
                        </option>
                        
                        
                      </select>
                    </div>

                    
                    <div class="col-sm-5">
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
                    <div class="col-sm-5">
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
                    
                    
                  </div>


                  <div class="row" style = "padding-top:15px;">
                    <div class="col-sm-5">
                      <label class="form-label" for="item_type_search">
                        บริษัท
                      </label>
                      <select id="item_type_search" name="item_type_search" class="select2"  placeholder="ประเภท" >
                        <option value="2" selected>
                            ทั้งหมด
                        </option>
                        <option value="2">
                            บริษัท ซีโอแอล จำกัด (มหาชน)
                        </option>
                        <option value="4">
                            บริษัท ปตท. จำกัด (มหาชน)
                        </option>
                        <option value="4">
                            บริษัท โมบายลิงค์ (ประเทศไทย) จำกัด
                        </option>
                       
                      
                      </select>
                    </div>
                    
                    
                    <div class="col-sm-2">
                      <label class="form-label" for="text_search">
                         เลขที่สัญญา
                      </label>
                      <select id="agg_code_search" name="agg_code_search" class="select2"
                      placeholder="รหัสรายการ/เรื่อง">
                        <option value="" selected>
                          -
                        </option>
                        <option value="">
                          	1/66
                        </option>
                        <option value="">
                          	2/66
                        </option>
                        <option value="">
                          	3/66
                        </option>
                       
                        
                       
                        
                      </select>
                    </div>
                    <div class="col-sm-5">
                      <label class="form-label" for="text_search">
                         ชื่อสัญญา
                      </label>
                      <select id="namecode_search" name="namecode_search" class="select2"
                      placeholder="รหัสรายการ/เรื่อง">
                        <option value="" selected>
                          -
                        </option>
                        <option value="">
                          	รายงานจัดจ้างและขออนุมัติการจัดจ้างซ่อมแซมผนังบ่อลิฟต์ 
                        </option>
                        <option value="">
                          	ใบสั่งจ้างจัดทำโล่รางวัล
                        </option>
                        <option value="">
                          	จ้างที่ปรึกษางานวิจัย เรื่อง แนวทางการยกระดับคุณภาพในการประกอบวิชาชีพของผู้ประกอบวิชาชีพทางการศึกษาในอนาคต	
                        </option>
                       
                        
                       
                        
                      </select>
                    </div>
                   
                   

                    
                  </div>
                  <!-- <div class="row" style = "padding-top:15px;">
                    
                    
                    <div class="col-sm-12">
                      <label class="form-label" for="text_search">
                         รหัสรายการ/เรื่อง
                      </label>
                      <select id="namecode_search" name="namecode_search" class="select2"
                      placeholder="รหัสรายการ/เรื่อง">
                        <option value="" selected>
                          -
                        </option>
                        <option value="">
                          	[12001] ขอความอนุเคราะห์ดำเนินการจ้างเหมาบริการ
                        </option>
                        <option value="">
                          	[12302] ขอความอนุเคราะห์ดำเนินการจัดจ้างออกแบบอาร์ตเวิร์ค
                        </option>
                        <option value="">
                          	[12402] ขอความอนุเคราะห์จัดจ้างพิมพ์หนังสือ
                        </option>
                        
                       
                        
                      </select>
                    </div>
                   

                    
                  </div> -->


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
     
      <h5>ค้นหาโดย</h5> 
      <div class="row" style = "margin-top:15px;">
          <div class="col-sm-1" >
            <h6> ปี :</h6>
          </div>
          <div class="col-sm-1">
              2566
          </div>
          <div class="col-sm-2">
            <h6>เลขที่สัญญา </h6>
          </div>
          <div class="col-sm-1">
              1/66
          </div>
          
      </div>
      <div class="row">
          <div class="col-sm-1">
            <h6>ชื่อสัญญา :</h6>
          </div>
          <div class="col-sm-11">
              ออกแบบอาร์ตเวิร์คหนังสือที่ระลึกงานวันคล้ายวันสถาปนาสำนักงานเลขาธิการคุรุสภา	
          </div>
          
          
      </div>
    </div>

    <div class="alert alert-primary alert-dismissible">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                  <i class="fal fa-times"></i>
              </span>
          </button> -->
          <div class="d-flex flex-start w-100">
              <!-- <div class="mr-2 d-sm-none d-md-block">
                  <span class="icon-stack icon-stack-lg">
                      <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                      <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                      <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
                  </span>
              </div> -->
              <div class="d-flex flex-fill">
                  <div class="flex-fill">
                      <span class="h5">รายละเอียดสัญญา</span>
                      <br>
                      
                        <div class="row" style = "margin-top:15px;">
                          <div class="col-sm-2" >
                            <h6>เลขที่สัญญา	 </h6>
                          </div>
                          <div class="col-sm-1">
                              1/66
                          </div>
                          <div class="col-sm-3">
                            <h6>ชื่อสัญญา	 </h6>
                          </div>
                          <div class="col-sm-6">
                              ออกแบบอาร์ตเวิร์คหนังสือที่ระลึกงานวันคล้ายวันสถาปนาสำนักงานเลขาธิการคุรุสภา
                          </div>
                        </div>
                        <div class="row" style = "margin-top:15px;">
                          <div class="col-sm-2" >
                            <h6>วันที่ทำสัญญา 	 </h6>
                          </div>
                          <div class="col-sm-1">
                              28 ต.ค. 65
                          </div>
                          <div class="col-sm-3">
                            <h6>จำนวนวันในสัญญาทั้งหมด	 </h6>
                          </div>
                          <div class="col-sm-6">
                              120 วัน
                          </div>
                        </div>
                        <div class="row" style = "margin-top:15px;">
                          <div class="col-sm-2" >
                            <h6>จำนวนเงินทั้งสิ้น 	 </h6>
                          </div>
                          <div class="col-sm-10">
                              230,000 บาท
                          </div>
                         
                        </div>

                  </div>
              </div>
          </div>
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
            </button><br>
          </div> -->
          
          <!-- datatable start -->
          <div class="panel-content fourd-form-row-b" style = "">
              
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    สถานะ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample" style = "margin-top:15px;" checked>
                        <label class="custom-control-label " for="defaultInline1Radio" >ปกติ</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline2Radio">ทิ้งงาน</label>
                    </div>
                    <!-- <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline4Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline4Radio">รออนุมัติ</label>
                    </div> -->
                  
                  </div>
                </div>
            
               
              </div>
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    หมายเหตุ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:15px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                     <textarea class="form-control" id="example-textarea" rows="2"></textarea>
                  
                  </div>
                </div>
            
               
              </div>
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    วันที่ทิ้งงาน
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:15px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                      <input type="text" class="form-control form-ele clear-element datepk" id="position_name" name="position_name" placeholder="วันที่ทิ้งงาน" value="">
                  
                  </div>
                </div>
            
               
              </div>

            </div>



            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary" id = "btn_dialog_close">Close</button> -->
              <button type="submit" class="btn btn-primary" id ="btn_save_change">Save changes</button>
            </div>
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
  .fourd-form-row-c{
    background-color:#ffedc1;
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
<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>

$(document).ready(function() {
  $(".select2").select2();
  $('#organizationtype').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#vattype').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#province').select2({
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
      targets: [1,2,3,4],
      orderable: false,
    },
    {
      targets: [3],
      className: "text-center",
    },
    {
      targets: [],
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