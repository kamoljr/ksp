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
        <label  style = "padding-top:7px;"><?= $app_name; ?></label>
      </h5>
      

         
              
      <div id="panel-2" class="panel div_edit" ><!-- div edit -->
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">






              <div class="panel-content fourd-form-row-a" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                       ประเภท 
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-9 mb-9" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <select id="organizationtype" name="organizationtype" class=""  placeholder="ประเภท" >
                      <option value="" selected>
                        -
                      </option>
                      <option value="2">
                          รายงานความก้าวหน้า
                      </option>
                      <option value="3">
                          การประเมินความเสี่ยง 
                      </option>
                      <option value="4">
                          รายงานเหตุฉุกเฉิน  
                      </option>
                     
                    </select>
                  </div>
              
                  <!-- <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                      วันที่ขอขยายเวลา
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-3 mb-3" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <input type="text" class="form-control form-ele clear-element datepk" id="position_name" name="position_name" placeholder="วันที่ขอขยายเวลา" value="">
                  </div> -->
                </div>
              </div> 
              <div class="panel-content fourd-form-row-b" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                       เหตุผล 
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-9 mb-9" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                  </div>
              
                 
                </div>
              </div> 
              
              <div class="panel-content fourd-form-row-a div_status_pay" style = "margin-top:15px !important;" >
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

