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
      <div id="panel-2" class="panel">
        <div class="panel-container show">
          <div class="panel-content">

            <div class="form-row dialog-data ">
              
              <!-- <div class="alert alert-primary col-md-12 mb-12 div_show_rowid text-white " style = "padding:10px;margin-bottom:10px;background-color:rgb(223 180 90)">
                <i class="ni ni-key"></i>
                <span><label id = "lbl_rowid"></label></span> 
              </div> -->

              <div class="col-md-12 mb-12" style = "padding-bottom:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="" for="unit_name_add">
                  <h4>แผนยุทธศาสตร์คุรุสภา 5 ปี : 2566-2570</h4>
                  
                </label>
                <!-- <select id="unit_name_add" name="unit_name_add" class="select2" placeholder="ส่วนงาน">
                   <option>ด้านการพัฒนาและเสริมสร้างศักยภาพทรัพยากรมนุยษ์</option>
                </select> -->
              </div> 
              <!-- <div class="col-md-12 mb-12" style = "padding-bottom:25px;padding-left:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="unit_name_add">
                  เชื่อมเป้าหมายแผนระดับ 3
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="unit_name_add" name="unit_name_add" class="select2" placeholder="ส่วนงาน">
                  
                    <option value="17">
                          	
                        </option>
                    <option value="17">
                          	ข้อมูลเป้าหมายแผนระดับ 3
                        </option>
                       
                </select>
              </div> -->
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;padding-left:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="unit_name_add">
                  เชื่อมเป้าหมายแผนระดับ3
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="unit_name_add" name="unit_name_add" class="select2" placeholder="ส่วนงาน">
                  
                    <option value="17">
                          	คนไทยมีการศึกษาที่มีคุณภาพตามมาตรฐานสากลเพิ่ม มีทักษะท่ี จำเป็นของโลกศตวรรษที่ ๒๑ สามารถแก้ปัญหา ปรับตัว สื่อสาร และทำงานร่วมกับผู้อื่นได้อย่างมีประสิทธิผล เพิ่มขึ้น มีนิสัยใฝ่เรียนรู้อย่างต่อเนื่องตลอดชีวิต
                        </option>
                       
                </select>
              </div>
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  เป้าหมาย
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="เป้าหมาย" value="" >
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;padding-left:10px;" for="group_name_add">
                  คำอธิบาย
                  <span class="text-danger stars">  </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="target_add" name="target_add" placeholder="คำอธิบาย" value="" >
              </div> 
              <!-- <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="tel_add">
                  เบอร์โทร
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="tel_add" name="tel_add" placeholder="เบอร์โทร" value="">
              </div>  -->


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

