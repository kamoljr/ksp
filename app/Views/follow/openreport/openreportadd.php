<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h5 class="color-primary-500" style = "font-weight:600;display: flex;">
        <!-- <i class="ni ni-big-plus fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i> -->
        <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <!-- <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i> -->
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;"><?= $app_name; ?></label>
      </h5>
      <div id="panel-2" class="panel">
        <div class="panel-container show">
          <div class="panel-content">

            
         
          
            
          

           


            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-top:5px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                  สำนัก
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <select id="unit_name_add" name="unit_name_add" class="ele_select_add" placeholder="ส่วนงาน">
                    <option value="">เลือกส่วนงาน</option><option value="17">กลุ่มพัฒนาระบบงาน</option><option value="18">สถาบันคุรุพัฒนา</option><option value="11">สำนักจรรยาบรรณวิชาชีพและนิติการ</option><option value="3">สำนักทะเบียนและใบอนุญาตประกอบวิชาชีพ</option><option value="9">สำนักเทคโนโลยีสารสนเทศ</option><option value="16">สำนักเทคโนโลยีสารสนเทศและการสื่อสาร</option><option value="5">สำนักนโยบายและแผน</option><option value="4">สำนักพัฒนาและส่งเสริมวิชาชีพ</option><option value="2">สำนักมาตรฐานวิชาชีพ</option><option value="14">สำนักยกย่องเชิดชูเกียรติวิชาชีพ</option><option value="12">สำนักส่งเสริมและพัฒนาคุรุสภาจังหวัด</option><option value="7">สำนักอำนวยการ</option><option value="8">หน่วยตรวจสอบภายใน</option>
                </select>
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-top:5px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                  กลุ่มงาน
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <select id="group_name_add" name="group_name_add" class="ele_select_add" placeholder="กลุ่มงาน">
                  <option value="">
                    เลือกกลุ่มงาน
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
            </div>
            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-top:5px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                  โครงการ 
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <select id="project_search" name="project_search" class="ele_select_add"
                      placeholder="โครงการ">
                       <option value="">
                    เลือกโครงการ
                  </option>
                        <option value="">
                          งานรับรองความรู้รับรองคุณวุฒิและรับรองประสบการณ์เพื่อการประกอบวิชาชีพทางการศึกษา
                        </option>
                        <option value="17">
                          งานรับรองปริญญาและประกาศนียบัตรตามมาตรฐานวิชาชีพ     
                        </option>
                        
                      </select>
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

