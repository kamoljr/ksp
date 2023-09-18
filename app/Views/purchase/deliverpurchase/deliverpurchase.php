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
                    <div class="col-sm-3">
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
                         ประเภท
                      </label>
                      <select id="agg_type_search" name="agg_type_search" class="select2"
                      placeholder="รหัสรายการ/เรื่อง">
                        <option value="" selected>
                          -
                        </option>
                        <option value="">
                          	สัญญา
                        </option>
                        <option value="">
                            ใบสั่งซื้อ/สั่งจ้าง
                        </option>
                       
                       
                        
                       
                        
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label class="form-label" for="text_search">
                         เลขที่สัญญา/ใบสั่งซื้อ/สั่งจ้าง
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
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width = "20px;">
                </th>
                <th class="text-center" width = "100px;" style = "vertical-align: middle;"> 
                  งวด
                </th>
                <th class="text-center" style = "vertical-align: middle;">
                  จำนวน (วัน) 	
                </th>
                <th class="text-center"  width = "100px;"  style = "vertical-align: middle;">
                  วันที่ครบกำหนด
                </th>
                <th class="text-center"  width = "100px;"  style = "vertical-align: middle;">
                  วันที่ส่งมอบ
                </th>
                <th class="text-center"  width = "100px;"  style = "vertical-align: middle;">
                  จำนวนเงิน (บาท)
                </th>
              
                <th width="20">
                </th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  2765
                </td>
                <td>
                  1
                </td>
                <td>
                  30
                </td>
                <td>
                  28 ต.ค. 65
                </td>
                <td>
                  27 พ.ย. 65
                </td>
                <td>
                  100,000.00
                </td>
              
               
                 <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' data-toggle="modal" data-target=".default-example-modal-right" >
                    <i class="ni ni-pencil">
                    </i>
                  </a>
                 
                </td>
              </tr>
              <tr>
                <td>
                  2766
                </td>
                <td>
                  2
                </td>
                <td>
                  60
                </td>
                <td>
                 28 พ.ย. 65
                </td>
                <td>
                  28 ม.ค. 66
                </td>
                <td>
                  100,000.00
                </td>
              
               
                 <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' data-toggle="modal" data-target=".default-example-modal-right" >
                    <i class="ni ni-pencil">
                    </i>
                  </a>
                 
                </td>
              </tr>
              <tr>
                <td>
                  2767
                </td>
                <td>
                  3
                </td>
                <td>
                  30
                </td>
                <td>
                 28 ม.ค. 66
                </td>
                <td>
                  02 มี.ค. 66
                </td>
                <td>
                  30,000.00
                </td>
              
               
                 <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' data-toggle="modal" data-target=".default-example-modal-right" >
                    <i class="ni ni-pencil">
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
      targets: [1,2,3,4,5,6],
      orderable: false,
    },
    {
      targets: [0,1,2,3,4],
      className: "text-center",
    },
    {
      targets: [5],
      className: "text-right",
    }]

  });
  var table = $("#dynamic-table3").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    orderable:false,
    "ordering": false,
    "paging": false,
    "info":     false,
    columnDefs: [{
     
    },
    {
      targets: [0,2,3],
      className: "text-center",
    },
    {
      targets: [3],
      className: "text-right",
    },
    {
      targets: [0,1],
      className: "text-left",
    }]

  });
  var table = $("#dynamic-table4").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    orderable:false,
    "ordering": false,
    "paging": false,
    "info":     false,
    columnDefs: [{
     
    },
    {
      targets: [0,2,3],
      className: "text-center",
    },
    {
      targets: [3],
      className: "text-right",
    },
    {
      targets: [0,1],
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