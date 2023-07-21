<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
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

              <!-- <div class="col-md-12 mb-12" style = "padding-bottom:25px;padding-left:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="unit_name_add">
                  ส่วนงาน
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="unit_name_add" name="unit_name_add" class="select2" placeholder="ส่วนงาน">
                    <option value="">เลือกส่วนงาน</option><option value="17">กลุ่มพัฒนาระบบงาน</option><option value="18">สถาบันคุรุพัฒนา</option><option value="11">สำนักจรรยาบรรณวิชาชีพและนิติการ</option><option value="3">สำนักทะเบียนและใบอนุญาตประกอบวิชาชีพ</option><option value="9">สำนักเทคโนโลยีสารสนเทศ</option><option value="16">สำนักเทคโนโลยีสารสนเทศและการสื่อสาร</option><option value="5">สำนักนโยบายและแผน</option><option value="4">สำนักพัฒนาและส่งเสริมวิชาชีพ</option><option value="2">สำนักมาตรฐานวิชาชีพ</option><option value="14">สำนักยกย่องเชิดชูเกียรติวิชาชีพ</option><option value="12">สำนักส่งเสริมและพัฒนาคุรุสภาจังหวัด</option><option value="7">สำนักอำนวยการ</option><option value="8">หน่วยตรวจสอบภายใน</option>
                </select>
              </div>  -->
              <!-- <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;padding-bottom:5px;" for="group_name_add">
                  ประเภทแผนงาน
                  <span class="text-danger stars"> * </span>
                </label>
                <div class="frame-wrap">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label color-fusion-300" for="defaultInline1Radio" >แผนงานบุคลากรภาครัฐ</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample" checked="">
                        <label class="custom-control-label color-fusion-300" for="defaultInline2Radio">แผนงานยุทธศาสตร์</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline4Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label color-fusion-300" for="defaultInline4Radio">แผนงานพื้นฐาน</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline3Radio" name="inlineDefaultRadiosExample" >
                        <label class="custom-control-label color-fusion-300" for="defaultInline3Radio">แผนงานบูรณาการ</label>
                    </div>
                </div>
              </div>  -->
              <div class="col-md-12 mb-12" style = "padding-bottom:15px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;" for="group_name_add">
                    <h4>พันธกิจ : พื้นฐาน พันธกิจที่ 4 พัฒนาระบบบริหารจัดการโดยใช้เทคโนโลยีที่เหมาะสม <h4>
                  <span class="text-danger stars">  </span>
                </label>
                <!-- <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="แผนงาน" value="" > -->
              </div> 
              
              <div class="col-md-3 mb-3" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  จำนวนเงินไตรมาส1
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="grfoup_name_add" name="groufp_name_add" placeholder="จำนวนเงินไตรมาส1" value="" >
              </div> 
              <div class="col-md-3 mb-3" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  จำนวนเงินไตรมาส2
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="grfoup_name_add" name="groufp_name_add" placeholder="จำนวนเงินไตรมาส2" value="" >
              </div> 
              <div class="col-md-3 mb-3" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  จำนวนเงินไตรมาส3
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="grfoup_name_add" name="groufp_name_add" placeholder="จำนวนเงินไตรมาส3" value="" >
              </div> 
              <div class="col-md-3 mb-3" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  จำนวนเงินไตรมาส4
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="grfoup_name_add" name="groufp_name_add" placeholder="จำนวนเงินไตรมาส4" value="" >
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:15px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;" for="group_name_add">
                    <h4>จำนวนเงินรวม : 500,000 บาท<h4>
                  <span class="text-danger stars">  </span>
                </label>
                <!-- <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="แผนงาน" value="" > -->
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

