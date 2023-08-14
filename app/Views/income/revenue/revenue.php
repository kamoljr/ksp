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
                    <div class="col-sm-3">
                      <label class="form-label" for="text_search">
                        วันที่
                      </label>
                      <input id="date_search" name="date_search" class="form-control searchdata datepk"
                      type="text" placeholder="วันที่" value = "01-08-2566"/>
                    </div>
                    <div class="col-sm-3">
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
                      <label class="form-label" for="sendmonyno_search">
                        เลขที่ใบนำส่ง
                      </label>
                      <select id="sendmonyno_search" name="sendmonyno_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="" selected>
                          รายการยังไม่นำส่ง
                        </option>
                        <option value="">
                          2/66
                        </option>
                        <option value="17">
                          1/66
                        </option>
                      
                        
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="act_search" style = "display:block;">
                        ยกเลิกใบเสร็จ
                      </label>
                      <select id="act_search" name="act_search" class="select2"
                      placeholder="ยกเลิกใบเสร็จ">
                        
                        <option value="" selected>
                          แสดง
                        </option>
                        <option value="">
                          ไม่แสดง
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
      ค้นหาโดย : วันที่ 1 สิงหาคม 2566
    </div>
  </div>
</div>






<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 15px;">
       

           
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
                  ได้รับเงินจาก
                </th>
                <th  width = "90px;" class="text-center">
                  ประเภท
                </th>
                <th width = "90px;"class="text-center">
                  ประเภทการรับเงิน
                </th>
                
                <th width = "90px;"class="text-center">
                  จำนวนเงิน (บาท)
                </th>
                <th width = "80px;"class="text-center">
                  ยกเลิกใบเสร็จ 
                </th>
                <th width = "100px;"class="text-center">
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
                  นายชยภูมิ ไชยสงคราม
                </td>
                <td>
                  รายรับ
                </td>
                <td>
                  ธนาคาร
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
                  <div class="custom-control custom-checkbox d-block bg-fusion-100" style="padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <label><small class="">ยังไม่นำส่ง</small></label>
                  </div>
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
                  นางสาวฐิตาภา ปานประกอบ
                </td>
                <td>
                  เงินรับฝาก	
                </td>
                <td>
                  เงินสด
                </td>
              
                <td>
                  2,000.00
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                      <label class="custom-control-label" for="customSwitch2"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox d-block bg-fusion-100" style="padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <label><small class="">ยังไม่นำส่ง</small></label>
                  </div>
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
                  นางสาวฐิตาภา ปานประกอบ
                </td>
                <td>
                  เงินให้กู้ยืม	
                </td>
                <td>
                  เงินสด
                </td>
              
                <td>
                  2,000.00
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                      <label class="custom-control-label" for="customSwitch2"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox d-block bg-fusion-100" style="padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <label><small class="">ยังไม่นำส่ง</small></label>
                  </div>
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
                  นางสาวศศิมา จันทรพร
                </td>
                <td>
                  เงินยืม	
                </td>
                <td>
                  ธนาคาร
                </td>
              
                <td>
                  600.00
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3">
                      <label class="custom-control-label" for="customSwitch3"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox d-block bg-fusion-100" style="padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <label><small class="">ยังไม่นำส่ง</small></label>
                  </div>
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
                  นายณัฐกิตติ์ จิรวราพงศ์
                </td>
                <td>
                  กิจกรรมลูก	
                </td>
                <td>
                  ธนาคาร
                </td>
              
                <td>
                  600.00
                </td>
                <td>
                  <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3">
                      <label class="custom-control-label" for="customSwitch3"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox d-block bg-fusion-100" style="padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <label><small class="">ยังไม่นำส่ง</small></label>
                  </div>
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
    font-size:13px;
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
  table.myFormat tr td { font-size: 8px;padding:5px; }

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
  $(".div_income").show();
  $(".div_desposit").hide();
  $(".div_businesssub").hide();
  $(".div_borrow").hide();
  $(".div_loan").hide();

  $("#divcheck").hide();

  $('input[type=radio][name=inlineDefaultRadiosExample]').change(function() {
    if (this.value == '1') {
      $(".div_income").show();
      $(".div_desposit").hide();
      $(".div_borrow").hide();
      $(".div_businesssub").hide();
      $(".div_loan").hide();
    }
    else if (this.value == '2') {
      $(".div_income").hide();
      $(".div_desposit").show();
      $(".div_borrow").hide();
      $("#addexpend").html("");
      $(".div_businesssub").hide();
      $(".div_loan").hide();
    }else if (this.value == '3') {
      $(".div_income").hide();
      $(".div_desposit").hide();
      $(".div_borrow").show();
      $("#addexpend").html("");
      $(".div_businesssub").hide();
      $(".div_loan").hide();
    }else if (this.value == '4') {
      $(".div_income").hide();
      $(".div_desposit").hide();
      $(".div_borrow").hide();
      $("#addexpend").html("");
      $(".div_businesssub").show();
      $(".div_loan").hide();
    }else if (this.value == '5') {
      $(".div_income").hide();
      $(".div_desposit").hide();
      $(".div_borrow").hide();
      $("#addexpend").html("");
      $(".div_businesssub").hide();
      $(".div_loan").show();
    }
  });

  $('input[type=radio][name=receive_type_add]').change(function() {
    if (this.value == '1') {
      $("#divcheck").hide();
      // console.log('ss');
    }
    else{
      $("#divcheck").show();
    }
  });
  $(".select2").select2();
 

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
    $('#businesssub_type_add0').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });

  $(document).ready(function() {
    $('#exp_type_add0').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  $(document).ready(function() {
    $('#listboard').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  $(document).ready(function() {
    $('#desposit_type_add0').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  $(document).ready(function() {
    $('#borrow_add0').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  $(document).ready(function() {
    $('#oldrecrive').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  $(document).ready(function() {
    $('#bill').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  $(document).ready(function() {
    $('#lang').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  $(document).ready(function() {
    $('#bank_item_add').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  $(document).ready(function() {
    $('#bookbank_add').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  $(document).ready(function() {
    $('#loan_type_add0').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
  
  

  var table = $("#dynamic-table-ex").DataTable({
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
      targets: [],
      className: "text-center",
    },
    {
      targets: [0],
      className: "text-left",
    }]

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
      targets: [6,7],
      orderable: false,
    },
    {
      targets: [0,2,3,5,6],
      className: "text-center",
    },
    {
      targets: [1, 2],
      className: "text-left",
    },
    {
      targets: [4],
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
ii = 0;
function getval1(sel)
{
  ii++
    
  strtxt = `<div id = "expend_row_id${ii}" class="panel-content fourd-form-row-c" style = "background-color:#ecf2e0b0;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-sm-4 sm-4" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                
                  <select id="exp_type_add${ii}" name="exp_type_add${ii}" class="selectdialog addexpend" placeholder="ประเภทเงิน" onchange="getval(this,${ii});">
                    <option value="" selected>
                      -
                    </option>
                    <option value="2">
                      ค่าธรรมเนียมตามพระราชบัญญัตินี้
                    </option>
                    <option value="3">
                      เงินอุดหนุนจากงบประมาณแผ่นดิน
                    </option>
                    <option value="4">
                      ผลประโยชน์จากการจัดการทรัพย์สินและการดำเนินกิจการของคุรุสภา
                    </option>
                    <option value="5">
                      เงินและทรัพย์สินซึ่งมีผู้อุทิศให้แก่คุรุสภา
                    </option>
                    <option value="5">
                      ดอกผลของเงินและทรัพย์สินตาม (๑)(๒)(๓)และ(๔)
                    </option>
                    <option value="5">
                      รายได้อื่นๆ
                    </option>
                    
                  </select>
                </div>
                <div class="col-sm-3 sm-3" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                 
                  <select id="exp_add${ii}" name="exp_add${ii}" class="selectdialog" placeholder="รายการ">
                    <option value="" selected>
                      -
                    </option>
                    <option value="">
                      เงินอุดหนุนโครงการภายใต้แผนปฏิบัติการไทยเข้มแข็ง
                    </option>
                    <option value="17">
                      เงินอุดหนุนจากงบประมาณแผ่นดิน(41000)
                    </option>
                    <option value="17">
                      เงินอุดหนุนเพื่อการวิจัย Fundamental Fund FFB640069 (41000-02)
                    </option>
                  </select>
                </div>
                
                <div class="col-sm-3 sm-3" style="padding-top:5px;padding-bottom:0px;font-size:14px;margin-bottom:0px !important;">
                 
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

$(document).on('change', '.addexpend',
  function() {
   

   

});

</script>
