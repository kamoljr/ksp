<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <input id="for_log_app_id" name="for_log_app_id" type="hidden" value="<?=$app_id?>"/>
  <input id="for_log_app_name" name="for_log_app_name" type="hidden" value="<?=$app_name?>"/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h4 class="color-primary-500" style = "font-weight:600;display: flex;">
        <i class="ni ni-big-plus fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i>
        <!-- <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i> -->
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;"> รายการเบิกจ่าย</label>
      </h4>









      <div id="panel-2" class="panel div_edit" ><!-- div edit -->
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">

            <div class="panel-content fourd-form-row-b" style = "">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    งบกลาง
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                  <label class="form-label" for="">
                    เงินสำรองจ่ายกรณีฉุกเฉินหรือจำเป็น	
                  </label>
                </div>
              </div>
            </div>
           
            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data ">
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

          

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียด ใบบันทึกการอนุมัติเบิกจ่ายเงิน
                  </label>
                </div>
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อผู้รับเงิน
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ชื่อผู้รับเงิน" value="">
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ตำแหน่งชื่อผู้รับเงิน
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ตำแหน่งชื่อผู้รับเงิน" value="">
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เรื่อง
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เรื่อง" value="">
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เรียน
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เรียน" value="">
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" style = "line-height:85px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียด
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <textarea class="form-control" id="example-textarea" rows="3"></textarea>
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" style = "line-height:85px;background-color:#d5f0ca;margin-top:15px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชุดคณะกรรมการ
                  </label>
                </div>
                <div class="col-md-7 mb-7" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <select id="listboard" name="listboard" class=""  placeholder="ชุดคณะกรรมการ" >
                    <option value="" selected>
                      -
                    </option>
                    <option value="2">
                      	[1] ข้อมูลชื่อชุดคณะกรรมการ ชุดที่ 1
                    </option>
                    <option value="3">
                      	[2] ข้อมูลชื่อชุดคณะกรรมการ ชุดที่ 2
                    </option>
                    <option value="4">
                      	[3] ข้อมูลชื่อชุดคณะกรรมการ ชุดที่ 3
                    </option>
                  </select>
                </div>
                <div class="col-md-3 mb-3" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <!-- <label class="form-label" for="" style = "margin:0;" data-toggle="modal" data-target=".default-example-modal-left-sm-ex">
                    แสดงรายชื่อกรรมการ
                  </label> -->
                 <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target=".default-example-modal-left-sm-ex">แสดงรายชื่อกรรมการ</button>
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายการค่าใช้จ่าย
                  </label>
                </div>
                
              </div>
            </div>

            <div id = "expend_row_id0"class="panel-content fourd-form-row-c" style = "background-color:#9acffa;">
            
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-sm-5 sm-5" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  รายการ
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <select id="exp_type_add0" name="exp_type_add0" class="selectdialog addexpend" style = "100%" placeholder="เงินสำรองจ่ายกรณีฉุกเฉินหรือจำเป็น" onchange="getval(this,0);">
                    
                    <option value="2">
                      เงินสำรองจ่ายกรณีฉุกเฉินหรือจำเป็น
                    </option>
                  
                    
                  </select>
                </div>
                
                
                <div class="col-sm-5 sm-5" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  รายละเอียด
                  <span class="text-danger stars"> * </span>
                  </label>
                  <textarea class="form-control" id="example-textarea" rows="1"></textarea>
                </div>

                <div class="col-sm-2 sm-2" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  จำนวนเงิน(บาท)
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
                </div>
            
                
              </div>
            </div>
            <div id = "addexpend"></div >

            <div id = "" class="panel-content fourd-form-row-c" style = "background-color:#9acffa;padding-bottom:0px;padding-top:0px;margin-bottom:0px;margin-top:10px;line-height:30px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;padding-top:0px;margin-bottom:0px;margin-top:0px;line-height:30px;">
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:30px;">
                
                 
                </div>
                <div class="col-sm-3 sm-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                 
               
                </div>
                
                <div class="col-sm-5 sm-5 text-right" style="padding-top:0px;padding-bottom:0px;font-size:12px;margin-bottom:0px !important;line-height:30px;">
                 
                รวมทั้งสิ้น
                </div>

                <div class="col-sm-2 sm-2 text-right" style="padding-top:0px;padding-bottom:0px;font-size:12px;margin-bottom:0px !important;line-height:30px;">
                 
                 0.00
                </div>
            
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" style = "background-color:#dbe5ff !important;margin-top:8px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เงินงบประมาณ(บาท)
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เงินงบประมาณ" value="">
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เงินนอกงบประมาณ(บาท)
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เงินนอกงบประมาณ" value="">
                </div>
              </div>
            </div>
            <div id = "" class="panel-content fourd-form-row-c" style = "background-color:#e6f8c1b0;padding-bottom:0px;padding-top:0px;margin-bottom:0px;margin-top:0px;line-height:30px;">
              <div class="form-row dialog-data " style = "padding-bottom:15px;padding-top:0px;margin-bottom:0px;margin-top:0px;">
                <div class="col-sm-6 sm-6" style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                
                 
                </div>
              
                
                
            
                
              </div>
            </div>
            <div class="panel-content fourd-form-row-b div_status_pay" style = "margin-top:15px !important;background-color:#c4ecd0de !important;" >
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












      <div id="panel-2" class="panel div_view">
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">

            <div class="panel-content fourd-form-row-a" style = "">
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
            <div class="panel-content fourd-form-row-b" style = "">
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    งบกลาง
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                  <label class="form-label" for="">
                    เงินสำรองจ่ายกรณีฉุกเฉินหรือจำเป็น	
                  </label>
                </div>
              </div>
            </div>
           
            <div class="panel-content fourd-form-row-a" >
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

            <!-- <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    กิจกรรม
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                 
                   <label class="form-label" for="">
                    เงินสำรองจ่ายกรณีฉุกเฉินหรือจำเป็น	
                  </label>
                </div>
              </div>
            </div> -->

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียด ใบบันทึกการอนุมัติเบิกจ่ายเงิน
                  </label>
                </div>
                
              </div>
            </div>

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
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:5px;font-size:13px;margin-bottom:0px !important;line-height:25px;">
                  <!-- <textarea class="form-control" id="example-textarea" rows="3"></textarea> -->
                  
                             ตามที่เลขาธิการคุรุสภาได้โปรดอนุมัติให้จัดประชุมผู้บริหารสำนักงานเลขาธิการคุรุสภา พร้อมทั้งอนุมัติให้จัดอาหารเครื่องดื่มเลี้ยงรับรองในการประชุมดังกล่าว นั้น ในการนี้ สำนักอำนวยการ ได้ดำเนินการจัดประชุมเรียบร้อยแล้ว ซึ่งมีรายละเอียดค่าอาหารเครื่องดื่มเลี้ยงรับรอง รวมเป็นเงินทั้งสิ้น 350.00 บาท (สามร้อยห้าสิบบาทถ้วน) รายละเอียดดังนี้ 

          1.ประชุมวันพฤหัสบดีที่ 9 มิถุนายน 2565 จำนวนเงิน 150.00 บาท (หนึ่งร้อยห้าสิบบาทถ้วน) 
          2.ประชุมวันพุธที่ 22 มิถุนายน 2565 จำนวนเงิน 50.00 บาท (ห้าสิบบาทถ้วน) 
          3.ประชุมวันพุธที่ 20 กรกฎาคม 2565 จำนวนเงิน 150.00 บาท (หนึ่งร้อยห้าสิบบาทถ้วน)

          จึงเรียนมาเพื่อโปรดอนุมัติเบิกเงินค่าอาหารเครื่องดื่มเลี้ยงรับรอง จำนวนเงิน 350.00 บาท (สามร้อยห้าสิบบาทถ้วน) โดยเบิกจากเงินนอกงบประมาณ ประจำปี 2565 งานบริหารทั่วไป กิจกรรมประชุมผู้บริหารของหน่วยงาน โดยประสงค์ขอให้โอนเงินเข้าบัญชี นางสาวนราทิพย์ บุญแสน ธนาคารกรุงไทย สาขากระทรวงศึกษาธิการ เลขที่บัญชี 059-0-32383-0 เบอร์โทรศัพท์ 06-2249-5928 ซึ่งได้สำรองจ่ายเงินไปก่อน
                
                </div>
              </div>
            </div>

            <!-- <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0 !important;padding:0 !important;">
                    รายการค่าใช้จ่าย
                  </label>
                </div>
                
              </div>
            </div> -->

            
            
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:0px !important;">
                <div class="col-sm-12 sm-12" style="padding-top:0px !important;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <!-- datatable start -->
                      <table id="dynamic-table1" class="myFormat table table-md table-bordered table-hover table-striped w-100" style = "padding-top:0px !important;margin-top:0px !important;line-height:10px;">
                        <thead class="bg-info-50">
                          <tr>
                            
                            <th class="text-center">
                              
                            </th>
                          
                            <th class="text-center">
                              รายการ
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

                            <td style = "font-size:13px;">
                             1
                            </td>
                            <td style = "font-size:13px;">
                             เงินสำรองจ่ายกรณีฉุกเฉินหรือจำเป็น
                            </td>
                            <td style = "font-size:13px;">
                             -
                            </td>
                            <td style = "font-size:13px;">
                             350.00
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
                
                <div class="col-sm-5 sm-5 text-right" style="padding-top:0px;padding-bottom:0px;font-size:12px;margin-bottom:0px !important;line-height:30px;">
                 
                รวมทั้งสิ้น
                </div>

                <div class="col-sm-2 sm-2 text-right" style="padding-top:0px;padding-bottom:0px;font-size:12px;margin-bottom:0px !important;line-height:30px;">
                 
                 350.00 บาท
                </div>
            
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" style = "background-color:#dbe5ff !important;margin-top:8px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เงินงบประมาณ(บาท)
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                   350.00 
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
            <div class="panel-content fourd-form-row-c" style = "background-color:#c4ecd0de !important;">
              
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    สถานะ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  รับเงินแล้ว
                </div>
            
               
              </div>
              



            </div>
            
            <div class="panel-content fourd-form-row-b div_status_pay" style = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    แนบไฟล์
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
            <!-- <div id = "" class="panel-content fourd-form-row-c" style = "background-color:#e6f8c1b0;padding-bottom:0px;padding-top:0px;margin-bottom:0px;margin-top:0px;line-height:30px;">
              <div class="form-row dialog-data " style = "padding-bottom:15px;padding-top:0px;margin-bottom:0px;margin-top:0px;">
                <div class="col-sm-6 sm-6" style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                
                 
                </div>
              
                
                <div class="col-sm-3 sm-3 text-right" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;line-height:30px;">
                  <label class="form-label " style ="font-size:13px;margin-bottom:0px !important;" for="position_name">
                  เงินงบประมาณ(บาท)
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
                
                </div>

                <div class="col-sm-3 sm-3 text-right" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;line-height:30px;">
                  <label class="form-label " style ="font-size:13px;margin-bottom:0px !important;" for="position_name">
                  เงินนอกงบประมาณ (บาท)
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
                 
                </div>
            
                
              </div>
            </div> -->



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

