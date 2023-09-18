<?
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get full url
?>
<script>

</script>

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
                        <option value="17">
                          2564
                        </option>
                        <option value="17">
                          2563
                        </option>
                        
                        
                      </select>
                    </div>

                    <div class="col-sm-3">
                      <label class="form-label" for="year_search">
                        ประเภท
                      </label>
                      <select id="item_type_search" name="item_type_search" class="select2"  placeholder="ประเภท" >
                        <option value="2" selected>
                            ทั้งหมด
                        </option>
                        <option value="2">
                            งาน/โครงการ
                        </option>
                        <option value="3">
                            กิจการลูก
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
                        <option value="4">
                            ขอคืนเงินรายได้
                        </option>
                        <option value="4">
                            เงินให้กู้ยืม
                        </option>
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label" for="year_search">
                        โครงการ
                      </label>
                      <select id="year_search" name="year_search" class="select2"
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
                    
                  </div>


                  <div class="row" style = "padding-top:15px;">
                    <div class="col-sm-2">
                      <label class="form-label" for="type_search" style = "display:block;">
                        ประเภท
                      </label>
                      <select id="type_search" name="type_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="" selected>
                          ทั้งหมด
                        </option>
                        <option value="">
                          เบิกจ่าย
                        </option>
                        <option value="17">
                          กันวงเงิน
                        </option>
                        <option value="17">
                          เบิกกันวงเงิน
                        </option>
                       
                        
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label class="form-label" for="status_search" style = "display:block;">
                        สถานะ
                      </label>
                      <select id="status_search" name="status_search" class="select2"
                      placeholder="สถานะ">
                        <option value="" selected>
                          ทั้งหมด
                        </option>
                        <option value="" >
                          ยังไม่ตรวจสอบ
                        </option>
                        <option value="">
                          ไม่ยืนยัน
                        </option>
                        <option value="17">
                          รออนุมัติ
                        </option>
                        <option value="17">
                          อนุมัติ
                        </option>
                        <option value="17">
                          รับเงินแล้ว
                        </option>
                       
                        
                      </select>
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label" for="text_search">
                         รหัสรายการ/เรื่อง
                      </label>
                      <input id="text_search" name="text_search" class="form-control searchdata"
                      type="text" placeholder="รหัสรายการ/เรื่อง" />
                    </div>
                    <div class="col-sm-4">
                      <label class="form-label" for="unit_name_search">
                        กลุ่มโอนเงิน
                      </label>
                      <select id="tranfer_group_search" name="tranfer_group_search" class="select2"
                      placeholder="กลุ่มโอนเงิน">
                      <option value="">
                          เลือกรายการ
                        </option>
                        <option value="" selected>
                          3 
                        </option>
                        <option value="17">
                          2
                        </option>
                        <option value="17">
                          1
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
      ค้นหาโดย : <u>ปีงบประมาณ</u> 2566
    </div>
    <div class="panel-tag" style = "margin-bottom:15px;padding-top:5px;padding-bottom:5px;">
       <label style = "padding-right:5px;">กลุ่มโอนเงิน <u>รหัส</u> : 3 <u>วันที่</u> : 12 ส.ค. 66 <u>จำนวน</u> : 10 รายการ </label>
        <button type="button" class="btn btn-sm btn-outline-primary">
            <span class="fal fa-print mr-1"></span>
            ทะเบียนเงินโอน
        </button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-sm btn-outline-danger">
            
            <i class="fa-solid fa-floppy-disk"></i>
            อนุมัติทั้งหมด
        </button>
    </div>
    
  </div>
</div>






<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 15px;">
       

           

          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width = "30px;">
                  <a href="javascript:void(0);" class="btn btn-secondary btn-sm btn-icon" onclick="alert('บันทึกกลุ่มเงินโอน รหัส 3 เรียบร้อยแล้ว')">
                      <i class="fa-regular fa-floppy-disk"></i>
                  </a>
                </th>
                <th width = "20px;">
                </th>
                <th class="text-center" width = "80px;">
                  ประเภท
                </th>
                <th class="text-center" >
                  ชื่อโครงการ/รายการ
                </th>
               
                <th class="text-center">
                  เรื่อง
                </th>
                 <th class="text-center" width = "70px;">
                  ประเภทเบิก
                </th>
                <th class="text-center" width = "70px;">
                  จำนวนเงิน
                </th>
              
                <th class="text-center" style = "vertical-align:middle;" width="70">
                  แก้ไขล่าสุด
                </th>
                <th class="text-center" width = "65px;">
                  สถานะ
                </th>
                <th width="15">
                </th>
                <th width="15">
                </th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1"></label>
                  </div>
                </td>
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
                  ขออนุมัติเบิกจ่ายค่าใช้จ่ายในการประชุมคณะกรรมการ
                </td>
                <td>
                  เบิกจ่าย
                </td>
                <td>
                  12,000.00
                </td>
                <td>
                  7 ส.ค. 66
                </td>
               
                
                <td>
                  <div class="custom-control custom-checkbox d-block bg-info-600" style = "padding-left:2px;padding-right:2px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      
                      <label ><small class= "">รับเงินแล้ว</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(9 ส.ค 66)</small></label>
                </td>
               
                 
                <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit'data-toggle="modal" data-target=".default-example-modal-right">
                     <i class="fa-solid fa-gear"></i>
                  </a>
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert" style = "">
                    <i class="fa-solid fa-print">
                    </i>
                  </a>
                </td>
                
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch8">
                      <label class="custom-control-label" for="customSwitch8"></label>
                  </div>
                </td>
                <td>
                  2
                </td>
                <td>
                  งาน/โครงการ
                </td>
                <td>
                  งานอาคารสถานที่
                </td>
                
                <td>
                  รายกรทดสอบ เงินยืม
                  <br>&nbsp;&nbsp;&nbsp;&nbsp;(กิจกรรม : การให้บริการด้านอาคารสถานที่)<br> &nbsp;&nbsp;&nbsp;&nbsp;<label class = "text-danger">[มีเงินยืมค้าง <a href="#">รหัส 12</a>]</label>
                </td>
                <td>
                  เงินยืม
                </td>
                <td>
                  12,000.00
                </td>
                <td>
                  7 ส.ค. 66
                </td>
               
                
                <td>
                  <div class="custom-control custom-checkbox d-block bg-info-600" style = "padding-left:2px;padding-right:2px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      
                      <label ><small class= "">รับเงินแล้ว</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(9 ส.ค 66)</small></label>
                </td>
               
                 
                <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-secondary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"  style = "disable" mode='edit'>
                     <i class="fa-solid fa-gear" style = "disable"></i>
                  </a>
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert" style = "">
                    <i class="fa-solid fa-print">
                    </i>
                  </a>
                </td>
                
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                      <label class="custom-control-label" for="customSwitch2"></label>
                  </div>
                </td>
                <td>
                  3
                </td>
                <td>
                  กิจการลูก
                </td>
                <td>
                  กองทุนสวัสดิการมและกองทุนบำเน็จ	
                </td>
                
                <td>
                  ขออนุมัติเบิกจ่ายค่าใช้จ่ายกองทุนสวัสดิการมและกองทุนบำเน็จ
                </td>
                <td>
                  เบิกกันวงเงิน<br>(ผ่านพัสดุ)
                </td>
                <td>
                  8,000.00
                </td>
                <td>
                  7 ส.ค. 66
                </td>
               
                
                <td>
                  <div class="custom-control custom-checkbox d-block bg-success-600" style = "padding-left:2px;padding-right:2px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      
                      <label ><small class= "">รออนุมัติ</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(9 ส.ค 66)</small></label>
                </td>
               
                 
                <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit'data-toggle="modal" data-target=".default-example-modal-right">
                     <i class="fa-solid fa-gear"></i>
                  </a>
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert" style = "">
                    <i class="fa-solid fa-print">
                    </i>
                  </a>
                </td>
                
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3">
                      <label class="custom-control-label" for="customSwitch3"></label>
                  </div>
                </td>
                <td>
                  4
                </td>
                <td>
                  เงินรับฝาก
                </td>
                <td>
                  ประกันสัญญา (2406)
                </td>
                
                <td>
                  ขออนุมัติเบิกจ่ายเงินประกันสัญญา
                </td>
                <td>
                  เบิกจ่าย
                </td>
                <td>
                  9,200.00
                </td>
                <td>
                  19 ส.ค. 66
                </td>
               
                
                <td>
                  <div class="custom-control custom-checkbox d-block bg-success-600" style = "padding-left:2px;padding-right:2px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      
                      <label ><small class= "">รออนุมัติ</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(11 ส.ค 66)</small></label>
                </td>
               
                 
                <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit'data-toggle="modal" data-target=".default-example-modal-right">
                     <i class="fa-solid fa-gear"></i>
                  </a>
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert" style = "">
                    <i class="fa-solid fa-print">
                    </i>
                  </a>
                </td>
                
              </tr>
              
              <tr>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch4">
                      <label class="custom-control-label" for="customSwitch4"></label>
                  </div>
                </td>
                <td>
                  5
                </td>
                <td>
                  งบกลาง
                </td>
                <td>
                  เงินสำรองจ่ายกรณีฉุกเฉินหรือจำเป็น	
                </td>
                
                <td>
                  ขออนุมัติเบิกจ่ายค่าใช้จ่ายเงินสำรองจ่ายกรณีฉุกเฉินหรือจำเป็น	
                </td>
                <td>
                  เบิกจ่าย
                </td>
                <td>
                  16,000.00
                </td>
                <td>
                  7 ส.ค. 66
                </td>
               
                
                <td>
                  <div class="custom-control custom-checkbox d-block bg-success-600" style = "padding-left:2px;padding-right:2px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      
                      <label ><small class= "">รออนุมัติ</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(9 ส.ค 66)</small></label>
                </td>
               
                 
                <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit'data-toggle="modal" data-target=".default-example-modal-right">
                     <i class="fa-solid fa-gear"></i>
                  </a>
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert" style = "">
                    <i class="fa-solid fa-print">
                    </i>
                  </a>
                </td>
                
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch5">
                      <label class="custom-control-label" for="customSwitch5"></label>
                  </div>
                </td>
                <td>
                  6
                </td>
                <td>
                  งบบุคลากร
                </td>
                <td>
                  งบบุคลากร
                </td>
                
                <td>
                  ขออนุมัติเบิกจ่ายค่าใช้จ่ายงบบุคลากร
                </td>
                <td>
                  เบิกจ่าย
                </td>
                <td>
                  9,000.00
                </td>
                <td>
                  7 ส.ค. 66
                </td>
               
                
                <td>
                  <div class="custom-control custom-checkbox d-block bg-success-600" style = "padding-left:2px;padding-right:2px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      
                      <label ><small class= "">รออนุมัติ</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(9 ส.ค 66)</small></label>
                </td>
               
                 
                <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit'data-toggle="modal" data-target=".default-example-modal-right">
                     <i class="fa-solid fa-gear"></i>
                  </a>
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert" style = "">
                    <i class="fa-solid fa-print">
                    </i>
                  </a>
                </td>
                
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch6">
                      <label class="custom-control-label" for="customSwitch6"></label>
                  </div>
                </td>
                <td>
                  8
                </td>
                <td>
                  ขอคืนเงินรายได้
                </td>
                <td>
                  ค่าธรรมเนียมต่อใบอนุญาตประกอบวิชาชีพ(42102)
                </td>
                
                <td>
                  ขออนุมัติเบิกจ่ายค่าใช้จ่ายค่าธรรมเนียมต่อใบอนุญาตประกอบวิชาชีพ
                </td>
                <td>
                  เบิกจ่าย
                </td>
                <td>
                  8,000.00
                </td>
                <td>
                  7 ส.ค. 66
                </td>
               
                
                <td>
                  <div class="custom-control custom-checkbox d-block bg-danger-600" style = "padding-left:2px;padding-right:2px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      
                      <label ><small class= "">อนุมัติ</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(9 ส.ค 66)</small></label>
                </td>
               
                 
                <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit'data-toggle="modal" data-target=".default-example-modal-right">
                     <i class="fa-solid fa-gear"></i>
                  </a>
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert" style = "">
                    <i class="fa-solid fa-print">
                    </i>
                  </a>
                </td>
                
              </tr>
              <tr>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch7">
                      <label class="custom-control-label" for="customSwitch7"></label>
                  </div>
                </td>
                <td>
                  8
                </td>
                <td>
                  เงินให้กู้ยืม
                </td>
                <td>
                  ข้อมูลเงินให้กู้ยืมรายการที่ 1
                </td>
                
                <td>
                  ขออนุมัติเบิกจ่ายค่าใช้จ่ายค่าข้อมูลเงินให้กู้ยืมรายการที่ 1
                </td>
                <td>
                  เบิกจ่าย
                </td>
                <td>
                  1,000.00
                </td>
                <td>
                  7 ส.ค. 66
                </td>
               
                
                <td>
                  <div class="custom-control custom-checkbox d-block bg-info-600" style = "padding-left:2px;padding-right:2px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      
                      <label ><small class= "">รับเงินแล้ว</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(9 ส.ค 66)</small></label>
                </td>
               
                 
                <td>
                 
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit'data-toggle="modal" data-target=".default-example-modal-right">
                     <i class="fa-solid fa-gear"></i>
                  </a>
                  
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert" style = "">
                    <i class="fa-solid fa-print">
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

<div class="modal fade default-example-modal-left-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-left modal-sm">
        <div class="modal-content">
            <div class="modal-content">
              
              <div class="modal-body">
                 
                  <div class="card mb-g">
                      <div class="card-body p-3">
                          <h5 class="text-primary text-center" style = "margin-bottom:0px;">
                              เงินในงบประมาณ
                             
                          </h5>
                            <div class="row" style = "padding-top:10px;padding-left:0px;padding-right:0px;padding-bottom:5px;">
                                <!-- <span class="width-1 height-1 rounded-circle d-block" style = "padding:0px;margin-left:0px;margin-top:0px;margin-bottom:0px;margin-right:0px; background-color:#ffffff;"></span> -->
                                <div class="col" style = "padding-top:0px;">
                                
                                    อนุมัติ (บาท)
                                </div>
                                
                                <div class="col text-right" style = "padding-top:0px;">
                                
                                    1,000,000.00
                                </div>
                            </div>
                            <div class="row" style = "padding:5px;">
                                <div class="col text-primary text-center" style = "font-size:15px;">
                                    เงินงบประมาณคงเหลือ
                                </div>
                                
                            </div>
                          <div class="row fs-b fw-300" style = "padding-top:0px;">
                                <canvas id="mychart" height="100px"></canvas>

                          </div>
                          <div class="fw-300 mb-3">
                            
                              
                              <div class="row" style = "padding:5px;">
                                  <span class="width-1 height-1 rounded-circle d-block" style = "padding:0px;margin-left:0px;margin-top:0px;margin-bottom:0px;margin-right:0px; background-color:#2196f3;"></span>
                                  <div class="col" style = "padding-top:5px;">
                                  
                                      ใช้ไป (บาท)
                                  </div>
                                 
                                  <div class="col text-right" style = "padding-top:5px;">
                                  
                                      200,000.00
                                  </div>
                              </div>
                              
                              <div class="row" style = "padding:5px;">
                               <span class="width-1 height-1 rounded-circle d-block" style = "padding:0px;margin-left:0px;margin-top:0px;margin-bottom:0px;margin-right:0px; background-color:#1ec9b7;"></span>
                                  <div class="col" style = "padding-top:5px;">
                                      คงเหลือ (บาท)
                                  </div>
                                  <div class="col text-right  " style = "padding-top:5px;">
                                      800,000.00
                                  </div>
                              </div>
                          </div>
                          <div class="fw-300 mb-3" style = "">
                            <div class="row" style = "padding-top:5px;padding-left:5px;padding-right:5px;padding-bottom:0px;">
                                <div class="col text-primary text-center" style = "font-size:15px;">
                                    เงินงบประมาณใช้ไป (บาท)
                                </div>
                                
                            </div>
                              <div class="row" style = "padding:5px;">
                                  <div class="col color-warning-800" style = "">
                                      เบิกจ่าย 
                                  </div>
                                  <div class="col text-right color-warning-800">
                                      50,000.00
                                  </div>
                              </div>
                              <div class="row" style = "padding:5px;">
                                  <div class="col color-success-600">
                                      กันวงเงินคงเหลือ
                                  </div>
                                  <div class="col text-right color-success-600"> 
                                      100,000.00
                                  </div>
                              </div>
                              <div class="row " style = "padding:5px; ">
                                  <div class="col color-danger-400">
                                      เงินยืมคงเหลือ
                                  </div>
                                  <div class="col text-right color-danger-400">
                                      50,000.00
                                  </div>
                              </div>
                          </div>
                          <div class="fw-300 mb-3">
                            <div class="row" style = "padding:5px;">
                                <div class="col text-primary text-center" style = "font-size:15px;">
                                    คงเหลือตามประเภทงบ
                                </div>
                                
                            </div>
                            <div class="row">
                              <div class = "col-sm-4" style = "padding:5px; ">
                                
                              </div>
                              <div class = "col-sm-4 text-center" style = "padding:5px; font-size:12px;">
                                ทั้งสิ้น (บาท)
                              </div>
                              <div class = "col-sm-4 text-right" style = "padding:5px; font-size:12px;">
                                คงเหลือ (บาท)
                              </div>
                            </div>
                            <div class="row">
                              <div class = "col-sm-4" style = "padding:5px;font-size:12px; ">
                                งบดำเนินงาน
                              </div>
                              <div class = "col-sm-4 text-center" style = "padding:5px;font-size:12px; ">
                                500,000
                              </div>
                              <div class = "col-sm-4 text-right" style = "padding:5px;font-size:12px; ">
                                450,000
                              </div>
                            </div>
                            <div class="row">
                              <div class = "col-sm-4" style = "padding:5px;font-size:12px; ">
                                งบลงทุน
                              </div>
                              <div class = "col-sm-4 text-center" style = "padding:5px;font-size:12px; ">
                                200,000
                              </div>
                              <div class = "col-sm-4 text-right" style = "padding:5px;font-size:12px; ">
                                150,000
                              </div>
                            </div>
                            <div class="row">
                              <div class = "col-sm-4" style = "padding:5px;font-size:12px; ">
                                งบอุดหนุน
                              </div>
                              <div class = "col-sm-4 text-center" style = "padding:5px;font-size:12px; ">
                                100,000
                              </div>
                              <div class = "col-sm-4 text-right" style = "padding:5px;font-size:12px; ">
                                50,000
                              </div>
                            </div>
                            <div class="row">
                              <div class = "col-sm-4" style = "padding:5px;font-size:12px; ">
                                งบรายจ่ายอื่น
                              </div>
                              <div class = "col-sm-4 text-center" style = "padding:5px;font-size:12px; ">
                                200,000
                              </div>
                              <div class = "col-sm-4 text-right" style = "padding:5px;font-size:12px; ">
                                150,000
                              </div>
                            </div>


                          </div>
                          

                          <div class="fw-300 mb-3" style = "">
                            <div class="row" style = "padding-top:5px;padding-left:5px;padding-right:5px;padding-bottom:0px;">
                                <div class="col text-primary text-center" style = "font-size:15px;">
                                    โอนเงิน (บาท)
                                </div>
                                
                            </div>
                            <div class="row" style = "padding:5px;">
                                <div class="col" style = "">
                                    ขอโอน 
                                </div>
                                <div class="col text-right">
                                    0.00
                                </div>
                            </div>
                            <div class="row" style = "padding:5px;">
                                <div class="col">
                                    ให้โอน
                                </div>
                                <div class="col text-right"> 
                                    0.00
                                </div>
                            </div>
                          </div>
                          
                      </div>
                  </div>







                  <div class="card mb-g">
                      <div class="card-body p-3">
                          <h5 class=" text-center" style = "margin-bottom:0px;color:#f37db4;">
                              เงินนอกงบประมาณ
                             
                          </h5>
                            <div class="row" style = "padding-top:10px;padding-left:0px;padding-right:0px;padding-bottom:5px;">
                                <!-- <span class="width-1 height-1 rounded-circle d-block" style = "padding:0px;margin-left:0px;margin-top:0px;margin-bottom:0px;margin-right:0px; background-color:#ffffff;"></span> -->
                                <div class="col" style = "padding-top:0px;">
                                
                                    อนุมัติ (บาท)
                                </div>
                                
                                <div class="col text-right" style = "padding-top:0px;">
                                
                                    1,000,000.00
                                </div>
                            </div>

                           <div class="row" style = "padding:5px;">
                                <div class="col text-center" style = "font-size:15px;color:#f37db4;">
                                    เงินนอกงบประมาณคงเหลือ
                                </div>
                                
                            </div>
                          <div class="row fs-b fw-300" style = "padding-top:0px;">
                                <canvas id="mychartout" height="100px"></canvas>

                          </div>
                          <div class="fw-300 mb-3">
                            
                              <div class="row" style = "padding:5px;">
                                  <span class="width-1 height-1 rounded-circle d-block" style = "padding:0px;margin-left:0px;margin-top:0px;margin-bottom:0px;margin-right:0px; background-color:#cc66d9;"></span>
                                  <div class="col" style = "padding-top:5px;">
                                  
                                      ใช้ไป (บาท)
                                  </div>
                                 
                                  <div class="col text-right" style = "padding-top:5px;">
                                  
                                      200,000.00
                                  </div>
                              </div>
                              
                              <div class="row" style = "padding:5px;">
                               <span class="width-1 height-1 rounded-circle d-block" style = "padding:0px;margin-left:0px;margin-top:0px;margin-bottom:0px;margin-right:0px; background-color:#ea7b33;"></span>
                                  <div class="col" style = "padding-top:5px;">
                                      คงเหลือ (บาท)
                                  </div>
                                  <div class="col text-right  " style = "padding-top:5px;">
                                      800,000.00
                                  </div>
                              </div>
                          </div>
                          <div class="fw-300 mb-3" style = "">
                            <div class="row" style = "padding-top:5px;padding-left:5px;padding-right:5px;padding-bottom:0px;">
                                <div class="col text-center" style = "font-size:15px;color:#f37db4;">
                                    เงินงบประมาณใช้ไป (บาท)
                                </div>
                                
                            </div>
                              <div class="row" style = "padding:5px;">
                                  <div class="col color-warning-800" style = "">
                                      เบิกจ่าย 
                                  </div>
                                  <div class="col text-right color-warning-800">
                                      50,000.00
                                  </div>
                              </div>
                              <div class="row" style = "padding:5px;">
                                  <div class="col color-success-600">
                                      กันวงเงินคงเหลือ
                                  </div>
                                  <div class="col text-right color-success-600"> 
                                      100,000.00
                                  </div>
                              </div>
                              <div class="row " style = "padding:5px; ">
                                  <div class="col color-danger-400">
                                      เงินยืมคงเหลือ
                                  </div>
                                  <div class="col text-right color-danger-400">
                                      50,000.00
                                  </div>
                              </div>
                          </div>
                          <div class="fw-300 mb-3">
                            <div class="row" style = "padding:5px;">
                                <div class="col text-center" style = "font-size:15px;color:#f37db4;">
                                    คงเหลือตามประเภทงบ
                                </div>
                                
                            </div>
                            <div class="row" style = "border:1px;">
                              <div class = "col-sm-4" style = "padding:5px; ">
                                
                              </div>
                              <div class = "col-sm-4 text-center" style = "padding:5px; font-size:12px;">
                                ทั้งสิ้น (บาท)
                              </div>
                              <div class = "col-sm-4 text-right" style = "padding:5px; font-size:12px;">
                                คงเหลือ (บาท)
                              </div>
                            </div>
                            <div class="row">
                              <div class = "col-sm-4" style = "padding:5px;font-size:12px; ">
                                งบดำเนินงาน
                              </div>
                              <div class = "col-sm-4 text-center" style = "padding:5px;font-size:12px; ">
                                500,000
                              </div>
                              <div class = "col-sm-4 text-right" style = "padding:5px;font-size:12px; ">
                                450,000
                              </div>
                            </div>
                            <div class="row">
                              <div class = "col-sm-4" style = "padding:5px;font-size:12px; ">
                                งบลงทุน
                              </div>
                              <div class = "col-sm-4 text-center" style = "padding:
                              5px;font-size:12px; ">
                                200,000
                              </div>
                                <div class = "col-sm-4 text-right" style = "padding:5px;font-size:12px; ">
                                100,000
                              </div>
                            </div>
                            <div class="row">
                              <div class = "col-sm-4" style = "padding:5px;font-size:12px; ">
                                งบอุดหนุน
                              </div>
                              <div class = "col-sm-4 text-center" style = "padding:5px;font-size:12px; ">
                                100,000
                              </div>
                              <div class = "col-sm-4 text-right" style = "padding:5px;font-size:12px; ">
                                75,000
                              </div>
                            </div>
                            <div class="row">
                              <div class = "col-sm-4" style = "padding:5px;font-size:12px; ">
                                งบรายจ่ายอื่น
                              </div>
                              <div class = "col-sm-4 text-center" style = "padding:5px;font-size:12px; ">
                                200,000
                              </div>
                              <div class = "col-sm-4 text-right" style = "padding:5px;font-size:12px; ">
                                175,000
                              </div>
                            </div>


                          </div>
                           <div class="fw-300 mb-3" style = "">
                            <div class="row" style = "padding-top:5px;padding-left:5px;padding-right:5px;padding-bottom:0px;">
                                <div class="col text-center" style = "font-size:15px;color:#f37db4;">
                                    โอนเงิน (บาท)
                                </div>
                                
                            </div>
                            <div class="row" style = "padding:5px;">
                                <div class="col" style = "">
                                    ขอโอน 
                                </div>
                                <div class="col text-right">
                                    0.00
                                </div>
                            </div>
                            <div class="row" style = "padding:5px;">
                                <div class="col">
                                    ให้โอน
                                </div>
                                <div class="col text-right"> 
                                    0.00
                                </div>
                            </div>
                          </div>
                          
                      </div>
                  </div>
                  
              </div>
              
          </div>
        </div>
    </div>
</div>
<!-- ----------------- -->
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
<script src="<?= base_url().'/';?>js/Chart.bundle.js"></script>

<script>
function renderChart() {

  Chart.pluginService.register({
      beforeDraw: function (chart) {
          var width = chart.chart.width,
              height = chart.chart.height,
              ctx = chart.chart.ctx;
          ctx.restore();
          var fontSize = (height / 114).toFixed(2);
          ctx.font = fontSize + "em sans-serif";
          ctx.textBaseline = "middle";
          var text = chart.config.options.elements.center.text,
              textX = Math.round((width - ctx.measureText(text).width) / 2),
              textY = height / 2;
          ctx.fillText(text, textX, textY);
          ctx.save();
      }
  });

  var chartData = [ {"visitor": 800000, "visit": "คงเหลือ"},{"visitor": 200000, "visit": "ใช้ไป"}]

  var visitorData = [],
      sum = 0,
      visitData = [];

  for (var i = 0; i < chartData.length; i++) {
      visitorData.push(chartData[i]['visitor'])
      visitData.push(chartData[i]['visit'])
    
      //sum += chartData[i]['visitor'];
  }

  var textInside = sum.toString();

  var myChart = new Chart(document.getElementById('mychart'), {
      type: 'doughnut',
      animation:{
          animateScale:true
      },
      data: {
          labels: visitData,
          datasets: [{
              label: 'Visitor',
              data: visitorData,
              backgroundColor: [
                  "#1dc9b7",
                  "#2196f3"
                  
              ]
          }]
      },
      options: {
          elements: {
            center: {
              text: ""
            }
          },
          responsive: true,
          legend: false,
          legendCallback: function(chart) {
              var legendHtml = [];
              legendHtml.push('<ul>');
              var item = chart.data.datasets[0];
              // for (var i=0; i < item.data.length; i++) {
              //     legendHtml.push('<li>');
              //     legendHtml.push('<span class="chart-legend" style="background-color:' + item.backgroundColor[i] +'"></span>');
              //     legendHtml.push('<span class="chart-legend-label-text">' + chart.data.labels[i] + ' person - '+item.data[i]+' times</span>');
              //     legendHtml.push('</li>');
              // }

              legendHtml.push('</ul>');
              return legendHtml.join("");
          },
          tooltips: {
              enabled: true,
              mode: 'label',
              callbacks: {
                  label: function(tooltipItem, data) {
                      var indice = tooltipItem.index;
                      return data.labels[indice] + " " + data.datasets[0].data[indice] + ' บาท';
                  }
              }
          },
      }
  });
}


function renderChartout() {
  console.log('xxxx');
  Chart.pluginService.register({
      beforeDraw: function (chart) {
          var width = chart.chart.width,
              height = chart.chart.height,
              ctx = chart.chart.ctx;
          ctx.restore();
          var fontSize = (height / 114).toFixed(2);
          ctx.font = fontSize + "em sans-serif";
          ctx.textBaseline = "middle";
          var text = chart.config.options.elements.center.text,
              textX = Math.round((width - ctx.measureText(text).width) / 2),
              textY = height / 2;
          ctx.fillText(text, textX, textY);
          ctx.save();
      }
  });

  var chartData = [ {"visitor": 800000, "visit": "คงเหลือ"},{"visitor": 200000, "visit": "ใช้ไป"}]

  var visitorData = [],
      sum = 0,
      visitData = [];

  for (var i = 0; i < chartData.length; i++) {
      visitorData.push(chartData[i]['visitor'])
      visitData.push(chartData[i]['visit'])
    
      //sum += chartData[i]['visitor'];
  }

  var textInside = sum.toString();

  var myChartout = new Chart(document.getElementById('mychartout'), {
      type: 'doughnut',
      animation:{
          animateScale:true
      },
      data: {
          labels: visitData,
          datasets: [{
              label: 'Visitor',
              data: visitorData,
              backgroundColor: [
                  "#ea7b33",
                  "#cc66d9"
                  
              ]
          }]
      },
      options: {
          elements: {
            center: {
              text: ""
            }
          },
          responsive: true,
          legend: false,
          legendCallback: function(chart) {
              var legendHtml = [];
              legendHtml.push('<ul>');
              var item = chart.data.datasets[0];
              // for (var i=0; i < item.data.length; i++) {
              //     legendHtml.push('<li>');
              //     legendHtml.push('<span class="chart-legend" style="background-color:' + item.backgroundColor[i] +'"></span>');
              //     legendHtml.push('<span class="chart-legend-label-text">' + chart.data.labels[i] + ' person - '+item.data[i]+' times</span>');
              //     legendHtml.push('</li>');
              // }

              legendHtml.push('</ul>');
              return legendHtml.join("");
          },
          tooltips: {
              enabled: true,
              mode: 'label',
              callbacks: {
                  label: function(tooltipItem, data) {
                      var indice = tooltipItem.index;
                      return data.labels[indice] + " " + data.datasets[0].data[indice] + ' บาท';
                  }
              }
          },
      }
  });
}

$(document).ready(function() {

  $(".div_status_pay").hide();

  $('input[type=radio][name=inlineDefaultRadiosExample]').change(function() {
    if (this.value == '3') {
      $(".div_status_pay").show();
     
    }else{
      $(".div_status_pay").hide();
    }
  });


  $(".select2").select2();
  handleChange(2);
 

  $(document).ready(function() {
    $('#acc_add').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
     
        
    });
   
  });
  
  $(document).ready(function() {
    $('#exp_add').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });

  $(document).ready(function() {
    $('#exp_type_add0').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  
  $(document).ready(function() {
    $('#receive_name1').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  
  

  // var table = $("#dynamic-table").DataTable({
  //   orderCellsTop: true,
  //   fixedHeader: true,
  //   bLengthChange: false,
  //   searching: false,
  //   bAutoWidth: false,
  //   bStateSave: true,
  //   processing: true,
  //   bPaginate: true,

  //   "ordering": false,
   
  //   columnDefs: [{
  //     targets: [1,2,3,4,5,6,7,8,9,10,11,12,13],
  //     orderable: false,
  //   },
  //   {
  //     targets: [0,10,11,13],
  //     className: "text-center",
  //   },
  //   {
  //     targets: [1],
  //     className: "text-left",
  //   },
  //   {
  //     targets: [2,3,4,5,6,7,8,9],
  //     className: "text-right",
  //   }]

  // });
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
      targets: [0,2,8,9,10],
      orderable: false,
    },
    {
      targets: [0,1,5,7,8,9,10],
      className: "text-center",
    },
    {
      targets: [3,4],
      className: "text-left",
    }
    ,
    {
      targets: [6],
      className: "text-right",
    }]

  });
  var table = $("#dynamic-table1").DataTable({
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
      targets: [0,1],
      className: "text-center",
    },
    {
      targets: [0,4],
      className: "text-right",
    },
    {
      targets: [2,3],
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

  $(document).on('click', '#btn_quit_show_budget',

  function() {
    $('.default-example-modal-left-sm').modal('toggle');
    setTimeout(() => {
        renderChart();
        renderChartout();
      }, 1000);
   });

});

maxii = 0;
function getval(sel,ii){

  
  console.log('ii='+ii);
  //console.log('sel='+sel.value);
  console.log('maxii='+maxii);
  if (sel.value != ""){
    if (ii==maxii){
      getval1(sel);
      maxii++;
    }
   
  }else{
   // if (ii>0){
      $("#expend_row_id"+ii).hide();

      // $('.default-example-modal-right').focus();
   // }
  }
  

}

function getval1(sel)
{
  ii++
    
  strtxt = `<div id = "expend_row_id${ii}" class="form-row dialog-data " style = "padding-bottom:0px;">
            <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
              
              <select id="exp_type_add${ii}" name="exp_type_add${ii}" class="selectdialog addexpend" style = "100%" placeholder="ธนาคาร" onchange="getval(this,${ii});">
                <option value="" selected>
                  -
                </option>
                <option value="2">
                  กรุงไทย
                </option>
                <option value="3">
                  กรุงเทพ
                </option>
                <option value="4">
                  กสิกรไทย
                </option>
                <option value="5">
                  ออมสิน
                </option>
                
              </select>
            </div>
            <div class="col-sm-4 sm-4" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
              
              <select id="exp_add${ii}" name="exp_add${ii}" class="selectdialog" placeholder="เลขบัญชี">
                <option value="" selected>
                  -
                </option>
                <option value="">
                  059-6-01199-8 (ค่าธรรมเนียมสอบแข่งขันของ สนง.)
                </option>
                <option value="17">
                  059-6-01199-7 (ค่าธรรมเนียมสอบแข่งขันของ สนง.)
                </option>
                <option value="17">
                  059-0-01184-7 (เงินค่าธรรมเนียมของคุรุสภา)
                </option>
              </select>
            </div>
            
            <div class="col-sm-3 sm-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
              
              
              <div class="custom-control  custom-control-inline" style ="line-height:30px;vertical-align: middle;padding-left:0px !important;padding-top:0px !important;margin-right:0px !important;">
              
                <input type="text" class="form-control form-ele clear-element" id="paymentnumber" name="paymentnumber" placeholder="Payment Number" value="">
            
              </div>
            </div>

            <div class="col-sm-3 sm-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
             
              <div class="custom-control  custom-control-inline" style ="line-height:30px;vertical-align: middle;padding-left:0px !important;padding-top:0px !important;padding-left:0px !important;">
                <input type="text" class="form-control form-ele clear-element custom-control-inline" id="txtvats" name="txtvats" placeholder="เงินสด" value="" style = "display:inline !important;" >
                
                <button type="button" class="btn btn-sm btn-primary"><i class="fa-solid fa-calculator"></i></button>
              </div>

            </div>
          </div>`;
  strtxt_ = `<div id = "expend_row_id${ii}" class="panel-content fourd-form-row-c" style = "background-color:#ecf2e0b0;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                
                  <select id="exp_type_add${ii}" name="exp_type_add${ii}" class="selectdialog addexpend" placeholder="ประเภทงบ" onchange="getval(this,${ii});">
                    <option value="" selected>
                      -
                    </option>
                    <option value="2">
                      งบดำเนินงาน
                    </option>
                    <option value="3">
                      งบลงทุน
                    </option>
                    <option value="4">
                      งบเงินอุดหนุน
                    </option>
                    <option value="5">
                      งบรายจ่ายอื่น
                    </option>
                    
                  </select>
                </div>
                <div class="col-sm-3 sm-3" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                 
                  <select id="exp_add${ii}" name="exp_add${ii}" class="selectdialog" placeholder="ค่าใช่้จ่าย">
                    <option value="" selected>
                      -
                    </option>
                    <option value="">
                      เงินสมนาคุณที่ปรึกษา
                    </option>
                    <option value="17">
                      ค่าเบี้ยประชุม
                    </option>
                    <option value="17">
                      ค่าเบี้ยประชุมคณะกรรมการ
                    </option>
                  </select>
                </div>
                
                <div class="col-sm-5 sm-5" style="padding-top:5px;padding-bottom:0px;font-size:14px;margin-bottom:0px !important;">
                 
                  <textarea class="form-control" id="example-textarea" rows="1"></textarea>
                </div>

                <div class="col-sm-2 sm-2" style="padding-top:5px;padding-bottom:0px;font-size:14px;margin-bottom:0px !important;">
                 
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
                </div>
            
                
              </div>
            </div>`
      $("#addexpend").append(strtxt);
     
      $(document).ready(function() {
        $('.selectdialog').select2({
          dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
        });
      });
    
      // console.log('ii='+ii);
      bb=ii-1;
      // console.log($("#exp_type_add"+bb).val()+'xx');
      console.log('sss'+sel.value);
}


function changelblvats(){
 $("#lblvats").text('(130.84 บาท)');
}
function calcash(){
  console.log('sss');
  ans = 1981.31 - $("#txtvats").val();
  $("#txtvats").val(ans);
}
function calcash2(){
 $("#lblvats").text('(130.84 บาท)');
}

function handleChangecalvat(src) {
  val1 = src.value; // 2 บริษัื
  if (val1 == 1){
    $("#lblcalvat").text('(0.00 บาท)');
    // $("#txtvats").val('2000.00');
  }
  if (val1 == 2){
    $("#lblcalvat").text('(20.00 บาท)');
    // $("#txtvats").val('1980.00');
  }
  if (val1 == 3){
    $("#lblcalvat").text('(18.69.00 บาท)');
    // $("#txtvats").val('1981.31');
  }
}
function receive_namechange(src) {
  val1 = src.value; // 2 บริษัื
  if (val1 == 1){
    $("#taxnumber").val('0-1055-58171-75-7');
    $("#receiveaddress").val('4 - แขวง บางบำหรุ เขต บางพลัด  กรุงเทพมหานคร 10700');
    $("#vats").val('7');
    $("#lblvats").text('(130.84 บาท)');
  }
  if (val1 == 2){
    $("#taxnumber").val('0105521005519');
    $("#receiveaddress").val('109 อาคาร ซี.ซี.ที.(ชั้น12) สุรวงศ์ แขวง สุริยวงศ์ เขต บางรัก  กรุงเทพมหานคร 10500');
    $("#vats").val('7');
    $("#lblvats").text('(130.84 บาท)');
  }
  if (val1 == 3){
    $("#taxnumber").val('0105549012889');
    $("#receiveaddress").val('329/32 เจริญกรุง แขวง บางคอแหลม เขต บางคอแหลม  กรุงเทพมหานคร 10120');
    $("#vats").val('7');
   $("#lblvats").text('(130.84 บาท)');
  }
  
}

function handleChange(src) {
  val1 = src.value; // 2 บริษัื
  astr = "";
  if (val1 == 1){
    astr = '<input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ชื่อผู้รับเงิน" value="">';
    $("#taxnumber").val('');
    $("#receiveaddress").val('');
    $("#vats").val('');
    $("#lblvats").text('');
  }else{
    astr = '<select id="receive_name1" name="receive_name1" class="" placeholder="ชื่อผู้รับเงิน" onchange="receive_namechange(this);"><option value=""></option><option value="1">บริษัท พี.เอส.เจนเนอเรชั่น จำกัด</option><option value="2">บริษัท ซัมมิท คอมพิวเตอร์ จำกัด </option><option value="3">บริษัท โฟร์ดี สตูดิโอ จำกัด</option></select>';
    
  }
  $("#divchangeinput").html(astr);

  $(document).ready(function() {
    $('#receive_name1').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
}
</script>
