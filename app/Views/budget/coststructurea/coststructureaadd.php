<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <input id="for_log_app_id" name="for_log_app_id" type="hidden" value="<?=$app_id?>"/>
  <input id="for_log_app_name" name="for_log_app_name" type="hidden" value="<?=$app_name?>"/>
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
        <div class="panel-container show">
          <div class="panel-content">

            <div class="form-row dialog-data dialog-add-ind">
              
              <!-- <div class="alert alert-primary col-md-12 mb-12 div_show_rowid text-white " style = "padding:10px;margin-bottom:10px;background-color:rgb(223 180 90)">
                <i class="ni ni-key"></i>
                <span><label id = "lbl_rowid"></label></span> 
              </div> -->
              <div class="col-md-12 mb-12" style = "padding-bottom:15px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;" for="group_name_add">
                    <h4>ประเภทงบ : งบดำเนินงาน<h4>
                  <span class="text-danger stars">  </span>
                </label>
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:15px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;" for="group_name_add">
                    <h4>รายการขั้นก่อนหน้า : ค่าใช้สอย<h4>
                  <span class="text-danger stars">  </span>
                </label>
              </div> 

              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;padding-bottom:5px;" for="group_name_add">
                  รายการค่าใช้จ่าย
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ตัวชี้วัด" value="" >
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  หน่วยนับ
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="แผนงาน" value="" >
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  สูตรคำนวณ
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="แผนงาน" value="" >
                
                
              </div> 

              <div class="col-md-12 mb-12" style = "padding-bottom:0px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;" for="group_name_add">
                    <h6><pre>สูตรคำนวณให้ใส่หน่วยของตัวคูณ โดยใช้เครื่องหมาย (,) คั่นแต่ละตัวคูณ เช่น คน,ช.ม.,วัน,บาท,ครั้ง
- ถ้าต้องการสร้างตัวเลือกในสูตรให้ใส่เครื่องหมาย [] ครอบตัวเลข เช่น คน,ช.ม.,วัน,[100][120][150]บาท,ครั้ง</pre><h6>
                 
                </label>
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

