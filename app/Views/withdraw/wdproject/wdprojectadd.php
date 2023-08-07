<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h5 class="color-primary-500" style = "font-weight:600;display: flex;">
        <i class="ni ni-big-plus fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i>
        <!-- <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i> -->
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;">เพิ่มโครงสร้างค่าใช้จ่าย</label>
      </h5>
      <div id="panel-2" class="panel">
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">

            <div class="panel-content fourd-form-row-a" style = "">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    โครงการ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-size:14px;margin-bottom:0px;">
                  <label class="form-label" for="">
                    งานอาคารสถานที่
                  </label>
                </div>
              </div>
            </div>
           
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data ">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label" for="">
                    เงินคงเหลือ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-size:14px;margin-bottom:0px;">
                  <label class="form-label" for="">
                    เงินงบประมาณ : 800,000.00 บาท : เงินนอกงบประมาณ : 500,000.00 บาท
                  </label>
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    กิจกรรม
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-size:14px;margin-bottom:0px;">
                  <select id="acc_add" name="acc_add" class="" placeholder="กิจกรรม" style = "">
                    <option value="" selected>
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
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียด ใบบันทึกการอนุมัติเบิกจ่ายเงิน
                  </label>
                </div>
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อผู้รับเงิน
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:14px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ชื่อผู้รับเงิน" value="">
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ตำแหน่งชื่อผู้รับเงิน
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:14px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ตำแหน่งชื่อผู้รับเงิน" value="">
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เรื่อง
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:14px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เรื่อง" value="">
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เรียน
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:14px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เรียน" value="">
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" style = "line-height:85px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียด
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:14px;margin-bottom:0px !important;">
                  <textarea class="form-control" id="example-textarea" rows="3"></textarea>
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายการค่าใช้จ่าย
                  </label>
                </div>
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" style = "background-color:#ecf2e0b0;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:14px;" for="position_name">
                  ประเภทงบ
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <select id="exp_type_add" name="exp_type_add" class="js-example-responsive" style = "100%" placeholder="ประเภทงบ">
                    <option value="" selected>
                      -
                    </option>
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
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:14px;" for="position_name">
                  ค่าใช้จ่าย
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <select id="exp_add" name="exp_add" class="" placeholder="ค่าใช่้จ่าย">
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
                
                <div class="col-md-3 mb-3" style="padding-top:5px;padding-bottom:0px;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:14px;" for="position_name">
                  รายละเอียด
                  <span class="text-danger stars"> * </span>
                  </label>
                  <textarea class="form-control" id="example-textarea" rows="1"></textarea>
                </div>

                <div class="col-md-3 mb-3" style="padding-top:5px;padding-bottom:0px;font-size:14px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:14px;" for="position_name">
                  จำนวนเงิน(บาท)
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
                </div>
            
                
              </div>
            </div>
            <div id = "addexpend"></div >




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

