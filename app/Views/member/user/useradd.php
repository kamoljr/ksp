<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='1000'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8" enctype="multipart/form-data">
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
      <div class=" ">
        <div id="panel-1" class="panel div_add dialog-data">
          <div class="panel-container show" style = "padding:15px;">
          
            <div class="form-row dialog-data ">
              
              <div class="alert alert-primary col-md-12 mb-12 div_show_rowid text-white " style = "padding:10px;margin-bottom:10px;background-color:rgb(223 180 90)">
                <i class="ni ni-key"></i>
                <span><label id = "lbl_rowid"></label></span> 
              </div>
              <div class="col-md-6 mb-6 col_add">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="user_name_add">
                  ชื่อ-นามสกุล
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="user_name_add" name="user_name_add" placeholder="ชื่อ-นามสกุล" value="">
              </div> 
              <div class="col-md-6 mb-6 col_add">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="Password_add">
                  E-mail
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="email_add" name="email_add" placeholder="" value="">
              </div> 
              
              <div class="col-md-6 mb-6 col_add">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="Login_add">
                  Login
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="loginname_add" name="loginname_add" placeholder="Login" value="">
              </div> 
              <div class="col-md-6 mb-6 col_add">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="Password_add">
                  Password
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="password" class="form-control form-ele clear-element" id="password_add" name="password_add" placeholder="Password" value="">
              </div> 
              <div class="col-md-6 mb-6 col_add">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="Password_add">
                  จำนวนครั้งที่ป้อนผิด
                  <span class="text-danger stars">  </span>
                </label>
                <input type="text" class="form-control clear-element form-ele" id="num_of_incorrect_add" name="num_of_incorrect_add" placeholder="" value="0">
              </div> 
              <div class="col-md-6 mb-6 col_add">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="tel_add">
                  เลือกรูป
                  <span class="text-danger stars">  </span>
                </label>
                <input type="file" id="image_user_add" name="image_user_add" accept="image/*" class="form-control-file">
                

                <!-- <div id="imagePreview"></div>
                <input id="uploadFile" type="file" name="my_images" class="img" accept="image/gif, image/jpeg, image/png" /> -->
              </div> 
            </div>
          </div>
        </div>
        








        <div id="panel-2" class="panel div_add">
          <div class="panel-container show" style = "padding:15px;">
            
              <div class="form-row dialog-data "> 
                
                <div class="col-md-12 mb-12 col_add">
                  <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;">
                    โครงสร้างปี : 
                    <span class="text-danger stars">  </span>
                  </label>
                <label class="form-label color-fusion-500" style="" for="form_add_structure">
                    <label style ="font-weight:550;font-size:14px;" id = "form_add_structure" id = "form_add_structure"></label>
                  </label>
                  
                </div> 
                
                <div class="col-md-6 mb-6 col_add">
                  <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;">
                    ส่วนงาน : 
                    <span class="text-danger stars"> * </span>
                  </label>
                  
                  <div id = "div_unit_id_add"></div>
                  
                </div> 
                
                <div class="col-md-6 mb-6 col_add">
                  <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;">
                    กลุ่มงาน : 
                    <span class="text-danger stars"> * </span>
                  </label>
                  
                    <div id = "div_group_id_add"></div>
                </div>
                <div class="col-md-6 mb-6 col_add">
                  <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;">
                    ตำแหน่ง
                    <span class="text-danger stars"> * </span>
                  </label>
                  <select id="chief_add" name="chief_add" class="" placeholder="ตำแหน่ง">
                    <option value="">
                      เลือกตำแหน่ง
                    </option>
                    <option value="1">
                      เจ้าหน้าที่	
                    </option>
                    <option value="2">
                      ผู้อำนวยการกลุ่มงาน
                    </option>
                    <option value="3">
                      ผู้อำนวยการสำนัก
                    </option>
                  
                  </select>
                </div>
                <div class="col-md-6 mb-6 col_add">
                  <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="position_name">
                    คำอธิบายตำแหน่ง
                    <span class="text-danger stars">  </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name_add" name="position_name_add" placeholder="คำอธิบายตำแหน่ง" value="">
                </div> 
                <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                  <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="tel_add">
                    รักษาการ ผู้อำนวยการส่วนงาน : 
                    <!-- <label>นายทดสอบระบบ 1 </label> -->
                      <a href="javascript:void(0);" id = "btn_boss1" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                    <!-- <span class="text-danger stars"> * </span> -->
                  </label>
                  <div class = "boss1">
                  </div>
                </div>
              </div>
              <?=view("templates/modalclose.php")?>
          </div>
        </div>

      


        <div id="panel-2 " class="panel div_des">
          <div class="panel-container show" style = "padding:15px;">
            
                
                <div class="form-row dialog-data ">
                  <div class="col-sm-12 sm-12 col_add">
                    <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="position_name">
                      หมายเหตุการจำหน่าย
                      <span class="text-danger stars">  </span>
                    </label>
                    
                    <textarea class="form-control" id="example-textarea" rows="5" placeholder="หมายเหตุการยกเลิก"></textarea>
                  </div> 
                </div>
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
</div>  

</form>

