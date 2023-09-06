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
        <label  style = "padding-top:7px;"><?= $app_name; ?></label>
      </h5>
      

         
              
      <div id="panel-2" class="panel div_edit" ><!-- div edit -->
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">






              <div class="panel-content fourd-form-row-a" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                       ชื่อ/นามสกุล 
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ชื่อ/นามสกุล" value="">
                  </div>
              
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                      ชื่อเล่น
                    </label>
                    <span class="text-danger stars"> </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ชื่อเล่น" value="">
                  </div>
                </div>
              </div> 
              
               <div class="panel-content fourd-form-row-b" >
                  <div class="form-row dialog-data " style = "padding-bottom:0px;">
                    <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                      <label class="form-label" for="" style = "margin:0;">
                        ตำแหน่ง	
                      </label>
                      <span class="text-danger stars">  </span> 
                    </div>
                    <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                      <!-- <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ตำแหน่ง	" value=""> -->
                      <select id="purchase2_position_add" name="purchase2_position_add" class="ele_select_add" placeholder="ชื่อ/นามสกุล">
                        <option value="17">
                          
                        </option>
                        <option value="17">
                          พนักงานขาย
                        </option>
                        <option value="17">
                          ผู้ประสานงาน
                        </option>
                        <option value="17">
                          คณะกรรมการ
                        </option>
                        <option value="17">
                         ผู้ถือหุ้น
                        </option>
                        <option value="17">
                         อื่นๆ
                        </option>
                        
                    
                        
                      </select>
                    </div>
              
                    <div class="col-md-2 mb2" style="padding-bottom:0px;font-weight:350;font-size:13px;margin-bottom:0px !important; line-height:25px;vertical-align: middle; padding-top:10px;">
                      <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="อื่นๆ	" value="">
                    </div> 
                    <!-- <div class="col-md-6 mb-6" style="padding-bottom:0px;font-weight:350;font-size:13px;margin-bottom:0px !important; line-height:25px;vertical-align: middle; padding-top:10px;">
                      <div class="frame-wrap">
                          <div class="custom-control custom-checkbox custom-control-inline" style = "line-height:25px;vertical-align: middle;"">
                              <input type="checkbox" class="custom-control-input" id="defaultInline1"  >
                              <label class="custom-control-label" for="defaultInline1">คณะกรรมการ</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline">
                              <input type="checkbox" class="custom-control-input" id="defaultInline2" >
                              <label class="custom-control-label" for="defaultInline2">ผู้ถือหุ้น</label>
                          </div>
                          
                      </div>
                    </div> -->





                  </div>
              </div> 
              <div class="panel-content fourd-form-row-a" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                       เบอร์โทร
                    </label>
                    <span class="text-danger stars">  </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ชื่อ/เบอร์โทร" value="">
                  </div>
              
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                      เบอร์มือถือ 
                    </label>
                    <span class="text-danger stars"> </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เบอร์มือถือ	" value="">
                  </div>
                </div>
              </div> 
              <div class="panel-content fourd-form-row-b" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                       E-mail 
                    </label>
                    <span class="text-danger stars">  </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ชื่อ/เบอร์โทร" value="">
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

