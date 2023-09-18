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
                    <div class="col-sm-2">
                      <label class="form-label" for="item_type_search">
                        ประเภท
                      </label>
                      <select id="item_type_search" name="item_type_search" class="select2"  placeholder="ประเภท" >
                        <option value="2" selected>
                            ทั้งหมด
                        </option>
                        <option value="2">
                            งาน/โครงการ
                        </option>
                        <option value="4">
                            เงินรับฝาก
                        </option>
                        <option value="4">
                            งบกลาง
                        </option>
                        <option value="4">
                            งบบุคลากร
                        </option>
                      
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label" for="project_search">
                        โครงการ
                      </label>
                      <select id="project_search" name="project_search" class="select2"
                      placeholder="โครงการ">
                      <option value="" selected>
                          ทั้งหมด
                        </option>
                        <option value="" >
                          งานอาคารสถานที่
                        </option>
                        <option value="17">
                          โครงการจัดหาครุภัณฑ์และปรับปรุงสิ่งก่อสร้าง
                        </option>
                        <option value="17">
                          งานบริหารการพัสดุ
                        </option>
                        
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="act_search" style = "display:block;">
                        กิจกรรม
                      </label>
                      <select id="act_search" name="act_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="" selected>
                          ทั้งหมด
                        </option>
                        <option value="">
                          การให้บริการห้องประชุม
                        </option>
                        <option value="17">
                          การให้บริการด้านอาคารสถานที่
                        </option>
                        <option value="17">
                          อบรมหลักสูตรการฝึกซ้อมดับเพลิง
                        </option>
                       
                        
                      </select>
                    </div>
                    
                    <div class="col-sm-3">
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
          <div class="col-sm-2" >
            <h6> ปี :</h6>
          </div>
          <div class="col-sm-3">
              2566
          </div>
          <div class="col-sm-2">
            <h6>ประเภท </h6>
          </div>
          <div class="col-sm-5">
              งาน/โครงการ
          </div>
          
      </div>

      <div class="row">
          <div class="col-sm-2">
            <h6>ส่วนงาน :</h6>
          </div>
          <div class="col-sm-3">
              สำนักอำนวยการ
          </div>
          <div class="col-sm-2">
            <h6>กลุ่มงาน :</h6>
          </div>
          <div class="col-sm-5">
              กลุ่มการพัสดุและอาคารสถานที่	
          </div>
          
      </div>
      <div class="row">
          <div class="col-sm-2">
            <h6>โครงการ :</h6>
          </div>
          <div class="col-sm-3">
              งานอาคารสถานที่
          </div>
          <div class="col-sm-2">
            <h6>กิจกรรม :</h6>
          </div>
          <div class="col-sm-5">
              เครื่องปรับอากาศชนิดตั้งพื้นหรือชนิดแขวน
          </div>
          
      </div>
      <div class="row">
          <div class="col-sm-2">
            <h6>รหัสรายการ/เรื่อง  :</h6>
          </div>
          <div class="col-sm-10">
              [12001] ขอความอนุเคราะห์ดำเนินการจ้างเหมาบริการ
          </div>
          
      </div>
      <div class="row">
          <div class="col-sm-2">
            <h6>วงเงินที่ใช้  :</h6>
          </div>
          <div class="col-sm-10">
              200,000.00 บาท
          </div>
          
      </div>
    </div>

    <!-- <div class="panel-tag" style = "margin-bottom:5px;padding-top:5px;padding-bottom:5px;">
      วงเงินที่ใช้ 200,000.00 บาท
    </div> -->

  </div>


</div>

<div class="row">
  <div class="col-xl-12">

    <div id="panel-1" class="panel">
      <div class="panel-container">





      <div class="alert alert-primary alert-dismissible">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                  <i class="fal fa-times"></i>
              </span>
          </button> -->
          <div class="d-flex flex-start w-100">
              <div class="mr-2 d-sm-none d-md-block">
                  <span class="icon-stack icon-stack-lg">
                      <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                      <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                      <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
                  </span>
              </div>
              <div class="d-flex flex-fill">
                  <div class="flex-fill">
                      <span class="h5">กระบวนการจัดซื้อจัดจ้าง</span>
                      <br>
                      <code>ทำรายการกล่องที่เปิด</code>
                  </div>
              </div>
          </div>
        </div>



      <div class="panel-content" style="padding-top: 0px;padding-left:50px;padding-right:50px;" >
        
        <!-- content start -->
        <div class="row" style = "margin-top:50px !important;">
          <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(1)">
            <img src="<?= base_url().'/';?>img/boxopen.png" width = "100px;">
            <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                <h6>กำหนดวิธีการ</h6>	
            </label>
          </div>
          <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(11)">
            <img src="<?= base_url().'/';?>img/boxopen.png" width = "100px;">
            <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                <h6>ราคากลาง</h6>	
            </label>
          </div>
          <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(2)">
            <img src="<?= base_url().'/';?>img/boxopen.png" width = "100px;">
            <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                <h6>ตั้งคณะกรรมการ</h6>	
            </label>
          </div>
          <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(3)">
            <img src="<?= base_url().'/';?>img/boxopen.png" width = "100px;">
            
            <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                <h6>ปรับปรุงใบเสนอราคา</h6>	
            </label>
          </div>
          <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(4)">
            <img src="<?= base_url().'/';?>img/boxopennottrue.png" width = "100px;">
            
            <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                <h6>ต่อรองราคา</h6>	
            </label>
          </div>
          <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(5)">
            <img src="<?= base_url().'/';?>img/boxopennottrue.png" width = "100px;">
            
            <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                <h6>กำหนดผู้ที่ได้รับเลือก</h6>	
            </label>
          </div>
          
        </div>


        <div class="row" style = "margin-top:50px !important;">
          <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(6)">
            <img src="<?= base_url().'/';?>img/boxopennottrue.png" width = "100px;">
          
            
            <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                <h6>ทำรายการกันวงเงิน</h6>	
            </label>
          </div>
          <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(7)">
            <img src="<?= base_url().'/';?>img/boxclose.png" width = "100px;">
              
              <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                  <h6>กำหนดส่งมอบ</h6>	
              </label>
            </div>
            <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(8)">
              <img src="<?= base_url().'/';?>img/boxclose.png" width = "100px;">
            
              <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                  <h6>เอกสารคู่สัญญา</h6>	
              </label>
            </div>
            <!-- <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(9)">
              <img src="<?// = base_url().'/';?>img/boxclose.png" width = "100px;">
             
              <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                  <h6>ร่างสัญญา<br>ใบสั่งซื้อ/สั่งจ้าง</h6>	
              </label>
            </div> -->
           
            <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(10)">
              <img src="<?= base_url().'/';?>img/boxclose.png" width = "100px;">
            
              <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                  <h6>ออกเลขที่สัญญา<br>และวันที่สัญญา</h6>	
              </label>
            </div>
             <div class = "col-sm-2 text-center" style = "cursor:pointer;" onclick="openformadd(9)">
              <img src="<?= base_url().'/';?>img/boxclose.png" width = "100px;">
             
              <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                  <h6>หลักประกันสัญญา</h6>	
              </label>
            </div>
            <!-- <div class = "col-sm-2 text-center">
              <img src="<?//= base_url().'/';?>img/boxopen.png" width = "100px;">
              <label class="form-label" for="" style = "margin:0;">
                  	
              </label>
            </div> -->
          </div>
          <!-- content end -->
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
      targets: [1,2,3,4,5,6,7,8,9,10,11,12,13,14],
      orderable: false,
    },
    {
      targets: [0,2,3,4,5,6,7,8,9,10,11,12,13,14],
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
function openformadd(pp){
  $(".hidedivpurchase").hide();
  $('.default-example-modal-right').modal('toggle');
  $("#purchase"+pp).show();


  txt1 = '';
  if (pp==1){txt1 = "กำหนดวิธีการ";}
  if (pp==2){txt1 = "ตั้งคณะกรรมการ";}
  if (pp==3){txt1 = "ปรับปรุงใบเสนอราคา";}
  if (pp==4){txt1 = "ต่อรองราคา";}
  if (pp==5){txt1 = "กำหนดผู้ที่ได้รับเลือก";}
  if (pp==6){txt1 = "ทำรายการกันวงเงิน";}
  if (pp==7){txt1 = "กำหนดส่งมอบ";}
  if (pp==8){txt1 = "เอกสารคู่สัญญา";}
  //if (pp==9){txt1 = "ร่างสัญญาใบสั่งซื้อ/สั่งจ้าง";}
  if (pp==9){txt1 = "หลักประกันสัญญา";}
  if (pp==10){txt1 = "ออกเลขที่สัญญาและวันที่สัญญา";}
  if (pp==11){txt1 = "ราคากลาง";}
  $("#lblchangepurchase").text(txt1);

  
}

$(document).ready(function() {
  $('.ele_select_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
});
</script>
