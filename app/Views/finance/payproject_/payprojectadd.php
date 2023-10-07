<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <input id="for_log_app_id" name="for_log_app_id" type="hidden" value="<?=$app_id?>"/>
  <input id="for_log_app_name" name="for_log_app_name" type="hidden" value="<?=$app_name?>"/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h4 class="color-primary-500" style = "font-weight:600;display: flex;">
        <i class="fa-solid fa-gear fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i>
        <!-- <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i> -->
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;"> จ่ายเงินโครงการ</label>
      </h4>
      <div id="panel-2" class="panel">
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">

            <div class="panel-content fourd-form-row-b" style = "">
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รหัสรายการ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                  <label class="form-label" for="">
                    9
                  </label>
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-a" style = "">
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    โครงการ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                  <label class="form-label" for="">
                    งานอาคารสถานที่
                  </label>
                </div>
              </div>
            </div>
           
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="">
                    เงินคงเหลือ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                  <label class="form-label" for="">
                    เงินงบประมาณ : 800,000.00 บาท : เงินนอกงบประมาณ : 500,000.00 บาท
                  </label>
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    กิจกรรม
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                 
                   <label class="form-label" for="">
                    งานอาคารสถานที่
                  </label>
                </div>
              </div>
            </div>

            



            <div id="panel-2" class="panel">
              <div class="panel-hdr">
                
                  <div class="panel-content fourd-form-row-b" >
                    <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                      <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;font-weight:550;">
                        <label class="form-label" for="" style = "margin:0;">
                          รายละเอียดใบบันทึกการอนุมัติเบิกจ่ายเงิน
                        </label>
                      </div>
                      
                    </div>
                  </div>
                  
                  <div class="panel-toolbar">
                      <!-- <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="แสดง" style = "width:100px;"><i class="fal fa-download"></i>แสดง</button> -->
                      <a href="javascript:void(0);" class="btn btn-success btn-sm btn-icon" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="แสดง">
                        
                          <i class="fa-solid fa-magnifying-glass-plus fa-1x"></i>
                      </a>
                  </div>
              </div>
              <div class="panel-container collapse">
                  <div class="panel-content">
                      

                  



                    <div class="panel-content fourd-form-row-c" >
                      <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                        <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                          <label class="form-label" for="" style = "margin:0;">
                            ชื่อผู้รับเงิน
                          </label>
                        </div>
                        <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                          <!-- <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ชื่อผู้รับเงิน" value=""> -->
                          <label class="form-label" for="">
                            นายวีระ เทพทัต
                          </label>
                        </div>
                    
                        <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                          <label class="form-label" for="" style = "margin:0;">
                            ตำแหน่งชื่อผู้รับเงิน
                          </label>
                        </div>
                        <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                          <!-- <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ตำแหน่งชื่อผู้รับเงิน" value=""> -->
                          <label class="form-label" for="" style = "margin:0;">
                            เจ้าหน้าที่บริหารทั่วไปปฏิบัติการ 
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="panel-content fourd-form-row-b" >
                      <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                        <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                          <label class="form-label" for="" style = "margin:0;">
                            เรื่อง
                          </label>
                        </div>
                        <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                          <!-- <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เรื่อง" value=""> -->
                          <label class="form-label" for="" style = "margin:0;">
                            ขออนุมัติเบิกเงินค่าอาหารเครื่องดื่ม ในการจัดประชุม 
                          </label>
                        </div>
                    
                        <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                          <label class="form-label" for="" style = "margin:0;">
                            เรียน
                          </label>
                        </div>
                        <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                          <!-- <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เรียน" value=""> -->
                          <label class="form-label" for="" style = "margin:0;">
                            เลขาธิการคุรุสภา
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="panel-content fourd-form-row-c" style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                      <div class="form-row dialog-data " style = "padding-bottom:0px;">
                        <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                          <label class="form-label" for="" style = "margin:0;">
                            รายละเอียด
                          </label>
                        </div>
                        <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:5px;font-size:13px;margin-bottom:0px !important;line-height:25px;">ตามที่เลขาธิการคุรุสภาได้โปรดอนุมัติให้จัดประชุมผู้บริหารสำนักงานเลขาธิการคุรุสภา พร้อมทั้งอนุมัติให้จัดอาหารเครื่องดื่มเลี้ยงรับรองในการประชุมดังกล่าว นั้น ในการนี้ สำนักอำนวยการ ได้ดำเนินการจัดประชุมเรียบร้อยแล้ว ซึ่งมีรายละเอียดค่าอาหารเครื่องดื่มเลี้ยงรับรอง รวมเป็นเงินทั้งสิ้น 2000.00 บาท (สามร้อยห้าสิบบาทถ้วน) รายละเอียดดังนี้ 1.ประชุมวันพฤหัสบดีที่ 9 มิถุนายน 2565 จำนวนเงิน 150.00 บาท (หนึ่งร้อยห้าสิบบาทถ้วน) 2.ประชุมวันพุธที่ 22 มิถุนายน 2565 จำนวนเงิน 50.00 บาท (ห้าสิบบาทถ้วน) 3.ประชุมวันพุธที่ 20 กรกฎาคม 2565 จำนวนเงิน 150.00 บาท (หนึ่งร้อยห้าสิบบาทถ้วน)จึงเรียนมาเพื่อโปรดอนุมัติเบิกเงินค่าอาหารเครื่องดื่มเลี้ยงรับรอง จำนวนเงิน 2000.00 บาท (สามร้อยห้าสิบบาทถ้วน) โดยเบิกจากเงินนอกงบประมาณ ประจำปี 2565 งานบริหารทั่วไป กิจกรรมประชุมผู้บริหารของหน่วยงาน โดยประสงค์ขอให้โอนเงินเข้าบัญชี นางสาวนราทิพย์ บุญแสน ธนาคารกรุงไทย สาขากระทรวงศึกษาธิการ เลขที่บัญชี 059-0-32383-0 เบอร์โทรศัพท์ 06-2249-5928 ซึ่งได้สำรองจ่ายเงินไปก่อน</div>
                      </div>
                    </div>







                  </div>
              </div>
            </div>
            
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:0px !important;">
                <div class="col-sm-12 sm-12" style="padding-top:0px !important;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <!-- datatable start -->
                      <table id="dynamic-table1" class="myFormat table table-md table-bordered table-hover table-striped w-100" style = "padding-top:0px !important;margin-top:0px !important;line-height:10px;">
                        <thead class="bg-info-50">
                          <tr>
                            
                            <th class="text-center">
                              
                            </th>
                            <th class="text-center" width="100px;">
                              งบ
                            </th>
                            <th class="text-center">
                              ค่าใช้จ่าย
                            </th>
                            <th class="text-center">
                              รายละเอียด
                            </th>
                            <th class="text-center" width="100px;">
                              จำนวนเงิน(บาท)
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>

                            <td>
                             1
                            </td>
                            <td>
                             ดำเนินงาน
                            </td>
                            <td>
                             ค่าอาหารเครื่องดื่มเลี้ยงรับรอง
                            </td>
                            <td>
                             -
                            </td>
                            <td>
                             2000.00
                            </td>
                          </tr>
                         
                         
                        </tbody>
                      </table>
                      <!-- datatable end -->
                </div>
              
                
              </div>
            
            

            <div id = "" class="panel-content bg-info-50" style = "padding-bottom:0px;padding-top:0px;margin-bottom:0px;margin-top:0px;line-height:30px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;padding-top:0px;margin-bottom:0px;margin-top:0px;line-height:30px;">
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;line-height:30px;">
                
                 
                </div>
                <div class="col-sm-3 sm-3" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;">
                 
               
                </div>
                
                <div class="col-sm-5 sm-5 text-right" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;line-height:30px;font-weight:550;">
                 
                รวมทั้งสิ้น
                </div>

                <div class="col-sm-2 sm-2 text-right" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;line-height:30px;font-weight:550;">
                 
                 2000.00 บาท
                </div>
            
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" style = "background-color:#9ad0fa !important;margin-top:8px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เงินงบประมาณ(บาท)
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                   2000.00 
                  </label>
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เงินนอกงบประมาณ(บาท)
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    0.00
                  </label>
                </div>
              </div>
            </div>
            <!-- <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    ตรวจสอบรายการ
                  </label>
                </div>
                
              </div>
            </div> -->
            

            <div class="panel-content fourd-form-row-b" style = "line-height:30px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;font-weight:550;">
                    <label class="form-label" for="" style = "margin:0;">
                      รายละเอียดการจ่าย
                    </label>
                  </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เลือกประเภทผู้รับเงิน
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input " id="receive_type1" name="receive_type" style = "margin-top:15px;" onchange="handleChange(this);" value = 1>
                        <label class="custom-control-label " for="receive_type1" >บุคคลทั่วไป</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="receive_type2" name="receive_type" onchange="handleChange(this);" value = 2 checked>
                        <label class="custom-control-label " for="receive_type2">บริษัท</label>
                    </div>
                   
                  
                  </div>
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อผู้รับเงิน
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div id = "divchangeinput"></div>
                  
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เลขประจำตัวผู้เสียภาษี
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="taxnumber" name="taxnumber" placeholder="เลขประจำตัวผู้เสียภาษี" value="">
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" style = "line-height:75px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ที่อยู่	
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <textarea class="form-control" id="receiveaddress" rows="2"></textarea>
                </div>
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ภาษีมูลค่าเพิ่ม	
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <div class="custom-control  custom-control-inline" style ="line-height:30px;vertical-align: middle;padding-left:0px !important;">
                        <input type="text" class="form-control form-ele clear-element custom-control-inline" id="vats" name="vats" placeholder="ภาษีมูลค่าเพิ่ม" value="" style = "display:inline !important;width:60% !important;" onchange="changelblvats();"><label class="custom-control-inline" for="" id  = "lblvats" style = "margin:0;font-size:12px;">
                          
                        </label>
                    </div>
                   
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" style = "line-height:30px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;font-weight:550;">
                    <label class="form-label" for="" style = "margin:0;">
                      วิธีการจ่ายชำระเงิน
                    </label>
                  </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ภาษีหัก ณ ที่จ่าย
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input " id="calvat1" name="calvat" style = "margin-top:15px;" onchange="handleChangecalvat(this);" value = 1>
                        <label class="custom-control-label " for="calvat1" >ไม่หักภาษี</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="calvat2" name="calvat" onchange="handleChangecalvat(this);" value = 2 >
                        <label class="custom-control-label " for="calvat2">1% จากใบฎีกา</label>
                    </div>

                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="calvat3" name="calvat" onchange="handleChangecalvat(this);" value = 3 >
                        <label class="custom-control-label " for="calvat3">1% ก่อนvat</label>
                    </div>

                    <div class="custom-control custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        
                        <label id = "lblcalvat"></label>
                    </div>
                   
                  
                  </div>
                </div>
            
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เงินสด
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div class="custom-control  custom-control-inline" style ="line-height:30px;vertical-align: middle;padding-left:0px !important;">
                        <input type="text" class="form-control form-ele clear-element custom-control-inline" id="txtvats" name="txtvats" placeholder="เงินสด" value="" style = "display:inline !important;" >
                        
                        <button type="button" class="btn btn-sm btn-primary onClick="calcash()"><i class="fa-solid fa-calculator"></i></button>
                  </div>
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    <!-- เลขประจำตัวผู้เสียภาษี -->
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <!-- <input type="text" class="form-control form-ele clear-element" id="taxnumber" name="taxnumber" placeholder="เลขประจำตัวผู้เสียภาษี" value=""> -->
                </div>
              </div>
            </div>


            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ธนาคาร/เงินโอน/ดร๊าฟ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  


                  <div class="form-row dialog-data " style = "padding-bottom:0px;">
                    <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                      <label class="form-label " style ="font-size:13px;" for="position_name">
                      ธนาคาร
                      <span class="text-danger stars"> * </span> 
                      </label>
                      <select id="exp_type_add0" name="exp_type_add0" class="selectdialog addexpend" style = "100%" placeholder="ธนาคาร" onchange="getval(this,0);">
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
                      <label class="form-label " style ="font-size:13px;" for="position_name">
                      เลขบัญชี
                      <span class="text-danger stars"> * </span> 
                      </label>
                      <select id="exp_add" name="exp_add" class="" placeholder="เลขบัญชี">
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
                      <label class="form-label " style ="font-size:13px;" for="position_name">
                      Payment Number
                      <span class="text-danger stars"> * </span>
                      </label>
                     
                      <div class="custom-control  custom-control-inline" style ="line-height:30px;vertical-align: middle;padding-left:0px !important;padding-top:0px !important;margin-right:0px !important;">
                      
                        <input type="text" class="form-control form-ele clear-element" id="paymentnumber" name="paymentnumber" placeholder="Payment Number" value="">
                    
                      </div>
                    </div>

                    <div class="col-sm-3 sm-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                      <label class="form-label " style ="font-size:13px;" for="position_name">
                      จำนวนเงิน(บาท)
                      <span class="text-danger stars"> * </span>
                      </label>
                      <div class="custom-control  custom-control-inline" style ="line-height:30px;vertical-align: middle;padding-left:0px !important;padding-top:0px !important;padding-left:0px !important;">
                        <input type="text" class="form-control form-ele clear-element custom-control-inline" id="paybank" name="paybank" placeholder="" value="" style = "display:inline !important;" >
                        
                        <button type="button" class="btn btn-sm btn-primary" onclick="calcash2()"><i class="fa-solid fa-calculator"></i></button>
                      </div>

                    </div>
                  </div>
                  <div id = "addexpend"></div >



                </div>
            
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" style = "background-color:#c4ecd0de !important;">
              
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    สถานะ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample" style = "margin-top:15px;" checked value = "1">
                        <label class="custom-control-label " for="defaultInline1Radio" >รอการอนุมัติ</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample"  value = "2">
                        <label class="custom-control-label " for="defaultInline2Radio">อนุมัติ</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline4Radio" name="inlineDefaultRadiosExample" value = "3">
                        <label class="custom-control-label " for="defaultInline4Radio">รับเงินแล้ว</label>
                    </div>
                  
                  </div>
                </div>
            
               
              </div>
              

            </div>
            <div class="panel-content fourd-form-row-b div_status_pay" style = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    วันที่จ่าย
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                  <input type="text" class="form-control form-ele clear-element datepk" id="paydate" name="paydate" placeholder="วันที่จ่าย" value="">
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                 
                </div>
            
               
              </div>
            </div>
            <div class="panel-content fourd-form-row-b div_status_pay" style = "background-color:#c4ecd0de !important;" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    แนบไฟล์
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">เลือกไฟล์</label>
                  </div>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                 
                </div>
            
               
              </div>
            </div>
            <div class="panel-content fourd-form-row-b div_status_pay" style = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                  ชื่อไฟล์แนบ รายการที่ 1
                </div>
                
            
               
              </div>
            </div>
            <div class="panel-content fourd-form-row-b div_status_pay" style = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                  ชื่อไฟล์แนบ รายการที่ 2
                </div>
                
            
               
              </div>
            </div>


            <?=view("templates/modalclose.php")?>

          </div>
        </div>
      </div>

    </div>
  </div>

</div>  
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" id = "btn_dialog_close">Close</button>
  <button type="submit" class="btn btn-primary" id ="btn_save_change">Save changes</button>
</div>
</form>

