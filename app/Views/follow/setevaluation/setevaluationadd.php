<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <input id="for_log_app_id" name="for_log_app_id" type="hidden" value="<?=$app_id?>"/>
  <input id="for_log_app_name" name="for_log_app_name" type="hidden" value="<?=$app_name?>"/>
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

            
          <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    ใช้ในไตรมาส 1 - 3	
                  </label>
                </div>
                
              </div>
            </div>
          
            
          

           


            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-top:10px;">
                <div class="col-md-5 mb-5" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                  ค่าถ่วงน้ำหนัก ความก้าวหน้ากิจกรรม 
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-7 mb-7" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ค่าถ่วงน้ำหนัก ความก้าวหน้ากิจกรรม" value="">
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-top:10px;">
                <div class="col-md-5 mb-5" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                  ค่าถ่วงน้ำหนัก ความก้าวหน้าของค่าใช้จ่าย
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-7 mb-7" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ค่าถ่วงน้ำหนัก ความก้าวหน้าของค่าใช้จ่าย" value="">
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-top:10px;">
                <div class="col-md-5 mb-5" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                  ค่าถ่วงน้ำหนัก ผลรวมผลการดำเนินงาน 
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-7 mb-7" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ค่าถ่วงน้ำหนัก ผลรวมผลการดำเนินงาน " value="">
                </div>
              </div>
            </div>
            

           
           

            <div class="panel-content fourd-form-row-b" style = "margin-top:15px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    ใช้ในไตรมาส 4
                  </label>
                </div>
                
              </div>
            </div>
          
            
          

           


            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-top:10px;">
                <div class="col-md-5 mb-5" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                  ค่าถ่วงน้ำหนัก ความก้าวหน้ากิจกรรม 
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-7 mb-7" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ค่าถ่วงน้ำหนัก ความก้าวหน้ากิจกรรม" value="">
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-top:10px;">
                <div class="col-md-5 mb-5" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                  ค่าถ่วงน้ำหนัก ความก้าวหน้าของค่าใช้จ่าย
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-7 mb-7" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ค่าถ่วงน้ำหนัก ความก้าวหน้าของค่าใช้จ่าย" value="">
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-top:10px;">
                <div class="col-md-5 mb-5" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                  ค่าถ่วงน้ำหนัก ผลรวมผลการดำเนินงาน 
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-7 mb-7" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ค่าถ่วงน้ำหนัก ผลรวมผลการดำเนินงาน " value="">
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

