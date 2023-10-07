<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
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

      <div id="panel-1" class="panel show dialog-data" style = "padding:15px;">
        

      <!-- content start -->
        
        <div class="form-row dialog-data">

          <div class="col-sm-12 " style = "padding-top:20px;margin: auto;" >
              <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="user_name_add">
                ระดับผู้ใช้งาน
                <span class="text-danger stars"> * </span>
              </label>
              <input type="text" class="form-control form-ele clear-element" id="group_permission" name="group_permission" placeholder="ระดับผู้ใช้งาน" value="">
          </div>
          <div class="col-sm-12 " style = "padding-bottom:30px;margin: auto;" >
            
        
              <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="user_name_add">
                คำอธิบาย
                <span class="text-danger stars">  </span>
              </label>
              <input type="text" class="form-control form-ele clear-element" id="group_permission_comment" name="group_permission_comment" placeholder="คำอธิบาย" value="">
          

          </div>
        </div>
        <div class="row card-header bg-primary-700 dialog-data" style = "padding-top:10px;padding-bottom:0px;margin:0px;">


        
            <div class="col text-center" style = "">
                <h6 class="color-white" style = "font-weight:100;">สิทธิ์การใช้งาน</h6>
            </div>
            
          
        </div>
        <div class="row no-gutters dialog-data">
          
          <div class="col-3">
            <div id="spyscroll-2" class="list-group p-3" style = "padding-left:0 !important;">
              <div id = "div_create_tab"></div>
            </div>
          </div>
          <div class="col-9">
            <div data-spy="scroll" data-target="#spyscroll-2" data-offset="0" class="position-relative overflow-auto px-2 py-3 color-fusion-400" style="height:580px">
              

              <div id = "div_create_permission"></div>
                                            
          
            </div>
          </div>
        </div>
        <!-- content end -->





      </div>
    
      <?=view("templates/modalclose.php")?>
    </div>
  </div>

</div>  
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" id = "btn_dialog_close">Close</button>
  <button type="submit" class="btn btn-primary" id ="btn_save_change">Save changes</button>
</div>
</form>

