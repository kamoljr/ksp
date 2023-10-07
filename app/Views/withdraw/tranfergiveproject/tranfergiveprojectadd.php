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
        <label  style = "padding-top:7px;"> เพิ่ม ขอโอนงาน/โครงการ</label>
      </h4>
      <div id="panel-2" class="panel">
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:15px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียดส่วนงานผู้ขอโอน
                  </label>
                </div>
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-a" style = "">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
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

            

           

            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อ(เจ้าหน้าที่ผู้ขอโอน)
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 
                  <label class="form-label" for="" style = "margin:0;">
                    ธาวัน ตั้งทิพย์
                  </label>
                </div>
            
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อ(หัวหน้าส่วนงานที่ขอโอน)
                  </label>
                </div>
                <div class="col-md-3 mb-3" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                   <label class="form-label" for="" style = "margin:0;">
                    พิชญะ ไกรภพ 
                  </label>
                  
                </div>
              </div>
            </div>

            

            <div class="panel-content fourd-form-row-b" style = "line-height:85px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:20px;padding-top:15px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:25px;">
                  <label class="form-label" for="" style = "margin:0;">
                    การโอนครั้งนี้มีสาเหตุ และความจำเป็น
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ดำเนินการของงานอาคารสถานที่
                  </label>
                  
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-a" style = "">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-top:3px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ประเภทเงิน
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เงินงบประมาณ
                  </label>
                </div>
              </div>
            </div>
            
            
            

           

            <div id = "expend_row_id0"class="panel-content fourd-form-row-b" style = "text-align:center !important;">
            
              <div class="form-row dialog-data text-center" style = "padding-bottom:5px;text-align:center !important;">
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label " style ="font-size:13px;" for="position_name">
                  
                  <span class="text-danger stars">  </span> 
                  </label>
                  <label class="form-label" for="" style = "margin:0;display:block;">
                    จำนวนเงิน (บาท)
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  งบบุคลากร
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <label class="form-label" for="" style = "margin:0;display:block;">
                    -
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  งบดำเนินงาน
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <label class="form-label" for="" style = "margin:0;display:block;">
                    50,000.00
                  </label>
                </div>
                
                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  งบลงทุน 
                  <span class="text-danger stars"> * </span>
                  </label>
                  <label class="form-label" for="" style = "margin:0;display:block;">
                    -
                  </label>
                </div>

                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  งบเงินอุดหนุน
                  <span class="text-danger stars"> * </span>
                  </label>
                  <label class="form-label" for="" style = "margin:0;display:block;">
                    -
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  งบร่ายจ่ายอื่น  (บาท)
                  <span class="text-danger stars"> * </span>
                  </label>
                  <label class="form-label" for="" style = "margin:0;display:block;">
                    -
                  </label>
                </div>
            
                
              </div>
            </div>
            <div id = "addexpend"></div >

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:15px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียดส่วนงานผู้ยินยอมให้โอน
                  </label>
                </div>
                
              </div>
            </div>

            
           

            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:25px;">
                  <label class="form-label" for="" style = "margin:0;">
                   รายการ<br>ที่ยินยอมให้โอน
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label" for="" style = "margin:0;display:block;">
                    งาน/โครงการ
                  </label>
                  
                </div>
            
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-b div_showhide_div_give" style = "" id = "div_project_give">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-top:7px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    โครงการ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 
                  <label class="form-label" for="" style = "margin:0;display:block;">
                    โครงการจัดหาครุภัณฑ์และปรับปรุงสิ่งก่อสร้าง
                  </label>
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-b div_showhide_div_give" style = "" id = "div_personel_give">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-top:5px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    งบบุลคากร
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label" for="" style = "margin:0;">
                    งบบุลคากร
                  </label>
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-b div_showhide_div_give" style = "" id = "div_budget_center_give">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-top:7px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    งบกลาง
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 <select id="budget_center_add" name="budget_center_add" class="" placeholder="งบกลาง" style = "">
                    <option value="" selected>
                      เงินสำรองจ่ายกรณีฉุกเฉินหรือจำเป็น
                    </option>
                   
                  </select>
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อ(เจ้าหน้าที่ผู้ยินยอมโอน)
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 
                  <label class="form-label" for="" style = "margin:0;">
                    นายธเนษฐ พิชิตชัย 
                  </label>
                </div>
            
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:12px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อ(หัวหน้าส่วนงานที่ยินยอมโอน)
                  </label>
                </div>
                <div class="col-md-3 mb-3" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                   <label class="form-label" for="" style = "margin:0;">
                    นางสาวธยาดา ปานประกอบ
                  </label>
                  
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" style = "line-height:85px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:20px;padding-top:15px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:25px;">
                  <label class="form-label" for="" style = "margin:0;">
                    ความเห็นส่วนงาน ผู้ยินยอมให้โอน
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <textarea class="form-control" id="example-textarea" rows="3"></textarea>
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" style = "">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-top:3px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ประเภทเงิน
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample" style = "margin-top:15px;" checked>
                        <label class="custom-control-label " for="defaultInline1Radio" >เงินงบประมาณ</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline2Radio">เงินนอกงบประมาณ</label>
                    </div>
                   
                  
                  </div>
                </div>
              </div>
            </div>
            
            
            

           

            <div id = "expend_row_id0"class="panel-content fourd-form-row-b" style = "text-align:center !important;">
            
              <div class="form-row dialog-data text-center" style = "padding-bottom:5px;text-align:center !important;">
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label " style ="font-size:13px;" for="position_name">
                  
                  <span class="text-danger stars">  </span> 
                  </label>
                  <label class="form-label" for="" style = "margin:0;display:block;">
                    จำนวนเงิน (บาท)
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  งบบุคลากร
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
                </div>
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  งบดำเนินงาน
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
                </div>
                
                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  งบลงทุน 
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
                </div>

                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  งบเงินอุดหนุน
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
                </div>
                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  งบร่ายจ่ายอื่น  (บาท)
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
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
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample" style = "margin-top:15px;" checked>
                        <label class="custom-control-label " for="defaultInline1Radio" >ยังไม่ตรวจสอบ</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline2Radio">ไม่ยินยอม</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline4Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline4Radio">ยินยอม</label>
                    </div>
                  
                  </div>
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

