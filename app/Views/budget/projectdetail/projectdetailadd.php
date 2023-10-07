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
        <label  class ="project_step_name" style = "padding-top:7px;">ตัวชี้วัด</label>
      </h5>
      <div id="panel-2" class="panel">
        <div class="panel-container show">
          <div class="panel-content">



            <!--เปิด ตัวชี้วัด -->
            <div class="form-row dialog-data dialog-data-ind dialog_hide_all">
              <div class="alert alert-primary col-md-12 mb-12 div_show_rowid text-white " style = "padding:10px;margin-bottom:10px;background-color:rgb(223 180 90)">
                <i class="ni ni-key"></i>
                <span><label id = "lbl_rowid"></label></span> 
              </div>
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;padding-left:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="unit_name_add">
                  เชื่อมตัวชี้วัดแผนงาน
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="unit_name_add" name="unit_name_add" class="select2" placeholder="เชื่อมตัวชี้วัดแผนยุทธศาสตร์ชาติ">
                  
                    <option value="17">
                          		จํานวนหลักสูตรปริญญาและประกาศนียบัตรทางการศึกษาภายในประเทศได้รับการประเมินมาตรฐานหลักสูตรและมาตรฐานการผลิตจากคุรุสภา	
                        </option>
                    <option value="17">
                          		จํานวนผู้รับบริการด้านงานทะเบียนและใบอนุญาตประกอบวิชาชีพทางการศึกษา	
                        </option>
                       
                </select>
              </div>
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;padding-bottom:5px;" for="group_name_add">
                  ประเภทตัวชี้วัด ผลผลิต/ผลลัพธ์
                  <span class="text-danger stars"> * </span>
                </label>
                <div class="frame-wrap">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radioa" name="inlineDefaultRadiosExamplea">
                        <label class="custom-control-label color-fusion-300" for="defaultInline1Radioa" >ผลผลิต</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radioa" name="inlineDefaultRadiosExamplea" checked="">
                        <label class="custom-control-label color-fusion-300" for="defaultInline2Radioa">ผลลัพธ์</label>
                    </div>
                   
                </div>
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;padding-bottom:5px;" for="group_name_add">
                  ประเภทตัวชี้วัด
                  <span class="text-danger stars"> * </span>
                </label>
                <div class="frame-wrap">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample" checked=""  onclick = "changindoffice(1);">
                        <label class="custom-control-label color-fusion-300" for="defaultInline1Radio" >ตัวชี้วัดแผนปฎิบัติ</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample" onclick = "changindoffice(2);">
                        <label class="custom-control-label color-fusion-300" for="defaultInline2Radio">ตัวชี้วัดสำนักงบ</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline3Radio" name="inlineDefaultRadiosExample" onclick = "changindoffice(3);">
                        <label class="custom-control-label color-fusion-300" for="defaultInline3Radio">ตัวชี้วัดสำนักงาน</label>
                    </div>
                   
                </div>
              </div> 
              


              <div class="col-md-12 mb-12 showhideindoffice1" style = "padding-bottom:25px;" >
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ตัวชี้วัด
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ตัวชี้วัด" value="" >
              </div> 

              <div class="col-md-12 mb-12 showhideindoffice2" style = "padding-bottom:25px;" >
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ตัวชี้วัดสำนักงาน
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="indoffice" name="indoffice" class="" placeholder="เชื่อมตัวชี้วัดแผนยุทธศาสตร์ชาติ">
                  <option value="17">
                  ข้อมูลตัวชี้วัดสำนักงาน รายการที่ 1
                  </option>
                  <option value="17">
                  ข้อมูลตัวชี้วัดสำนักงาน รายการที่ 2
                  </option>
                  <option value="17">
                  ข้อมูลตัวชี้วัดสำนักงาน รายการที่ 3
                  </option>
                </select>
              </div> 


              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  คำอธิบายตัวชี้วัด
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="คำอธิบายตัวชี้วัด" value="" >
              </div> 
              <div class="col-md-12 mb-12 text-center" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  จำนวน
                  <span class="text-danger stars">  </span>
                </label>
                <!-- <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="จำนวน" value="" > -->
              </div> 
              <div class="col-md-3 mb-3" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ไตรมาส1
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="หน่วย" value="" >
              </div> 
              <div class="col-md-3 mb-3" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ไตรมาส2
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="หน่วย" value="" >
              </div> 
              <div class="col-md-3 mb-3" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ไตรมาส3
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="หน่วย" value="" >
              </div> 
              <div class="col-md-3 mb-3" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ไตรมาส4
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="หน่วย" value="" >
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  หน่วยนับ
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="หน่วย" value="" >
              </div> 
             
              <!-- <div class="col-md-9 mb-9" style = "padding-bottom:25px;">
                
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="defaultInline1">
                    <label class="custom-control-label" for="defaultInline1">
                      <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                         ตัวชี้วัดของสำนักงาน
                      <span class="text-danger stars">  </span>
                    </label>
                    </label>
                </div>
              </div>  -->


              
            </div>
            <!--ปิด ตัวชี้วัด -->



            <!--เปิด เป้าหมายเชิงปริมาณ -->
            <div class="form-row dialog-data dialog-data-target1 dialog_hide_all">
              <div class="alert alert-primary col-md-12 mb-12 div_show_rowid text-white " style = "padding:10px;margin-bottom:10px;background-color:rgb(223 180 90)">
                <i class="ni ni-key"></i>
                <span><label id = "lbl_rowid"></label></span> 
              </div>

              
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  เป้าหมายเชิงปริมาณ
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="เป้าหมายเชิงปริมาณ" value="" >
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;padding-left:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="unit_name_add">
                  เชื่อมตัวชี้วัดพันธกิจ
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="unit_name2_add" name="unit_name2_add" class="" placeholder="ส่วนงาน">
                  
                    <option value="17">
                          	จํานวนหลักสูตรปริญญาและประกาศนียบัตรทางการศึกษาภายในประเทศได้รับการประเมินมาตรฐานหลักสูตรและมาตรฐานการผลิตจากคุรุสภา
                    </option>
                    <option value="17">
                          	จํานวนผู้รับบริการด้านงานทะเบียนและใบอนุญาตประกอบวิชาชีพทางการศึกษา
                    </option>
                    <option value="17">
                          	จํานวนคดีการประพฤติผิดจรรยาบรรณของวิชาชีพที่ได้รับการสืบสวน/สอบสวนข้อเท็จจริงการประพฤติผิดจรรยาบรรณของวิชาชีพ
                    </option>
                       
                </select>
              </div>
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  หน่วยนับ
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="หน่วยนับ" value="" >
              </div> 
              <div class="col-md-6 mb-6" style = "padding-bottom:0px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  แผน ปีที่ล่วงมา (2565)
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder=" แผน ปีที่ล่วงมา (2565)" value="" >
              </div> 
              <div class="col-md-6 mb-6" style = "padding-bottom:0px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ผล ปีที่ล่วงมา (2565)
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ผล ปีที่ล่วงมา (2565)" value="" >
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  แผน ปีปัจจุบัน (2566)
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="แผน ปีปัจจุบัน (2566)" value="" >
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  แผน ปีที่ขอตั้ง (2567)
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="แผน ปีที่ขอตั้ง (2567)" value="" >
              </div> 
              <div class="col-md-4 mb-4" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ประมาณการแผนปี 2568
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ประมาณการแผนปี 2568" value="" >
              </div> 
              <div class="col-md-4 mb-4" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ประมาณการแผนปี 2569
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ประมาณการแผนปี 2569" value="" >
              </div> 
              <div class="col-md-4 mb-4" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ประมาณการแผนปี 2570
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ประมาณการแผนปี 2570" value="" >
              </div> 

            
              
            </div>
            <!--ปิด เป้าหมายเชิงปริมาณ -->




            <!--เปิด เป้าหมายเชิงคุณภาพ -->
            <div class="form-row dialog-data dialog-data-target2 dialog_hide_all">
              <div class="alert alert-primary col-md-12 mb-12 div_show_rowid text-white " style = "padding:10px;margin-bottom:10px;background-color:rgb(223 180 90)">
                <i class="ni ni-key"></i>
                <!-- <span><label id = "lbl_rowid"></label></span>  -->
              </div>

              
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  เป้าหมายเชิงคุณภาพ
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="เป้าหมายเชิงคุณภาพ" value="" >
              </div> 
              
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  หน่วยนับ
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="หน่วยนับ" value="" >
              </div> 
              <div class="col-md-6 mb-6" style = "padding-bottom:0px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ค่าเป้าหมาย
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder=" ค่าเป้าหมาย" value="" >
              </div> 
              
            </div>
            <!--ปิด เป้าหมายเชิงปริมาณ -->













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

