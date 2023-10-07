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
      <div id="panel-2" class="panel">
        <div class="panel-container show">
          <div class="panel-content" >
            <!-- <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-sm-12 mb-12 text-center" style="padding-bottom:0px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    <h5>ค้นหากรรมการ</h5>
                  </label>
                </div>
                
              </div>
            </div> -->

            <div class="panel-content fourd-form-row-a" >
              
              <!-- <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:0px;">
                <div class="col-sm-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;padding-left:5px;">
                  <label class="form-label" for="" style = "margin:0;padding-top:0px;">
                    ค้นหาจาก
                  </label>
                </div>
                <div class="col-sm-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample" style = "margin-top:15px;" checked>
                        <label class="custom-control-label " for="defaultInline1Radio" >เลขบัตรประชาชน</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline2Radio">ชื่อ-นามสกุล</label>
                    </div>
                   
                    
                  
                  </div>
                </div>
            
               
              </div>
              <div class="form-row dialog-data " style="padding-bottom:10px;line-height:25px;">
                <div class="col-sm-2 sm-2" style="font-weight:550;font-size:13px;margin-bottom:0px !important;">
                
                </div>
                <div class="col-sm-6 sm-6" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                    <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="" value="">
                </div>
                <div class="col-sm-4 sm-4" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                    <a href="javascript:void(0);" class="btn btn-primary  btn-icon">
                      <i class="fal fa-search"></i>
                    </a>
                </div>
              </div> -->


            </div>
            <div class="panel-content fourd-form-row-a" style = "padding-top:15px !important;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เลขบัตรประชาชน
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เลขบัตรประชาชน" value="">
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อ-นามสกุล
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder=" ชื่อ-นามสกุล" value="">
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" style = "padding-top:15px !important;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เบอร์โทรศัพท์
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เบอร์โทรศัพท์" value="">
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    Email
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="Email" value="">
                </div>
              </div>
            </div>
            <!-- <div class="form-row dialog-data ">
              
              <div class="alert alert-primary col-sm-12 mb-12 div_show_rowid text-white " style = "padding:10px;margin-bottom:10px;background-color:rgb(223 180 90)">
                <i class="ni ni-key"></i>
                <span><label id = "lbl_rowid"></label></span> 
              </div>
    
              
              <div class="col-sm-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ชื่อชุดคณะกรรมการ
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ชื่อชุดคณะกรรมการ" value="" >
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

