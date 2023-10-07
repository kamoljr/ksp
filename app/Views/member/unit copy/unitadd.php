<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">

<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8" novalidate="novalidate">
  <input id="ids" name="ids" type="hidden" value=""/>
  <input id="for_log_app_id" name="for_log_app_id" type="hidden" value="<?=$app_id?>"/>
  <input id="for_log_app_name" name="for_log_app_name" type="hidden" value="<?=$app_name?>"/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h5 class="color-primary-500" style = "font-weight:600;display: flex;">
        <i class="ni ni-big-plus fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i>
        <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i>
        
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;"><?= $app_name; ?></label>
        

      </h5>
      <div id="panel-2" class="panel">
        <div class="panel-container show">
          <div class="panel-content">

            <div class="form-row dialog-data ">
              

              <div class="alert alert-primary col-md-12 mb-12 div_show_rowid text-white " style = "padding:10px;margin-bottom:10px;background-color:rgb(223 180 90)">
                <i class="ni ni-key"></i>
                <span><label id = "lbl_rowid"></label></span> 
              </div>

              <div class="col-md-12 mb-12" style = "padding-bottom:15px;">
                <label class="form-label color-fusion-500" for="unit_name">
                  ชื่อส่วนงาน
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="unit_name" name="unit_name" placeholder="ขื่อส่วนงาน" value="">
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="tel_add">
                  ผู้อำนวยการส่วนงาน : 
                  <!-- <label>นายทดสอบระบบ 1 </label> -->
                    <a href="javascript:void(0);" id = "btn_boss1" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                        <i class="ni ni-pencil"></i>
                    </a>
                  <!-- <span class="text-danger stars"> * </span> -->
                </label>
                <div class = "boss1">
                  <!-- <select id="boss1" name="boss1" class="" placeholder="ผู้อำนวยการส่วนงาน">
                      <option value="">นายทดสอบระบบ 2</option>
                      <option value="17">นายทดสอบระบบ 3</option>
                      <option value="18">นายทดสอบระบบ 4</option>
                  </select> -->
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

