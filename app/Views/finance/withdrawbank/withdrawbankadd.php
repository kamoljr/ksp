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
          <div class="panel-content">

            <div class="form-row dialog-data ">
              
              <div class="alert alert-primary col-md-6 mb-6 div_show_rowid text-white " style = "padding:10px;margin-bottom:10px;background-color:rgb(223 180 90)">
                <i class="ni ni-key"></i>
                <span><label id = "lbl_rowid"></label></span> 
              </div>

              <!-- <div class="col-md-6 mb-6" style = "padding-left:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="unit_name_add">
                  ส่วนงาน
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="unit_name_add" name="unit_name_add" class="select2" placeholder="ส่วนงาน">
                    <option value="">เลือกส่วนงาน</option><option value="17">กลุ่มพัฒนาระบบงาน</option><option value="18">สถาบันคุรุพัฒนา</option><option value="11">สำนักจรรยาบรรณวิชาชีพและนิติการ</option><option value="3">สำนักทะเบียนและใบอนุญาตประกอบวิชาชีพ</option><option value="9">สำนักเทคโนโลยีสารสนเทศ</option><option value="16">สำนักเทคโนโลยีสารสนเทศและการสื่อสาร</option><option value="5">สำนักนโยบายและแผน</option><option value="4">สำนักพัฒนาและส่งเสริมวิชาชีพ</option><option value="2">สำนักมาตรฐานวิชาชีพ</option><option value="14">สำนักยกย่องเชิดชูเกียรติวิชาชีพ</option><option value="12">สำนักส่งเสริมและพัฒนาคุรุสภาจังหวัด</option><option value="7">สำนักอำนวยการ</option><option value="8">หน่วยตรวจสอบภายใน</option>
                </select>
              </div>  -->
              <!-- <div class="col-md-6 mb-6" style = "">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;padding-bottom:5px;" for="group_name_add">
                  แผนงาน
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
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="cash_type_add">
                  ประเภทถอนโอน
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="method_add" name="method_add" class="select2"
                      placeholder="ประเภท">
                        <option value="1">
                         ถอนเงิน		
                        </option>
                        <option value="2">
                          โอนเงิน	
                        </option>
                      </select>
              </div> 
              <div class="col-md-6 mb-6" style = "">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="bank_add">
                  ธนาคาร
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="bank_add" name="bank_add" class="select2" placeholder="ธนาคาร">
                    <option value="">
                      ทั้งหมด
                    </option>
                    <option value="">
                      กรุงไทย	
                    </option>
                    <option value="17">
                      กรุงเทพ
                    </option>
                    <option value="17">
                    กสิกรไทย	
                    </option>
                    <option value="17">
                    ไทยพานิชย์		
                    </option>
                    <option value="17">
                    ออมสิน		
                    </option>
                    <option value="17">
                    ธนาคารอิสลามแห่งประเทศไทย		
                    </option>
                    <option value="17">
                    ธนาคารอาคารสงเคราะห์		
                    </option>
                    <option value="17">
                    ธนาคารอาคารสงเคราะห์ สาขาสำนักพระราม 9		
                    </option>
                    
                  </select>
              </div> 
              <div class="col-md-6 mb-6" style = "">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="bookbank_add">
                  เลขที่บัญชีถอน/โอน
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="bookbank_add" name="bookbank_add" class="select2" placeholder="เลขที่บัญชี">
                  <option value="">
                    ทั้งหมด
                  </option>
                  <option value="">
                    059-6-01199-8 [ค่าธรรมเนียมสอบแข่งขันของ สนง.]
                  </option>
                  <option value="17">
                    059-6-01199-7 [059-6-01199-7]
                  </option>
                  <option value="17">
                  059-0-01184-7[เงินค่าธรรมเนียมของคุรุสภา]
                  </option>
                      </select>
              </div> 
              <div class="col-md-6 mb-6 divreceivebookbank">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="bank_1_add">
                  ธนาคาร
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="bank_1_add" name="bank_1_add" class="select2" placeholder="ธนาคาร">
                    <option value="">
                      ทั้งหมด
                    </option>
                    <option value="">
                      กรุงไทย	
                    </option>
                    <option value="17">
                      กรุงเทพ
                    </option>
                    <option value="17">
                    กสิกรไทย	
                    </option>
                    <option value="17">
                    ไทยพานิชย์		
                    </option>
                    <option value="17">
                    ออมสิน		
                    </option>
                    <option value="17">
                    ธนาคารอิสลามแห่งประเทศไทย		
                    </option>
                    <option value="17">
                    ธนาคารอาคารสงเคราะห์		
                    </option>
                    <option value="17">
                    ธนาคารอาคารสงเคราะห์ สาขาสำนักพระราม 9		
                    </option>
                    
                  </select>
              </div> 
              <div class="col-md-6 mb-6 divreceivebookbank" style = "">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="bookbank_1_add">
                  เลขที่บัญชีรับโอน
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="bookbank_1_add" name="bookbank_1_add" class="select2" placeholder="เลขที่บัญชี">
                  <option value="">
                    ทั้งหมด
                  </option>
                  <option value="">
                    059-6-01199-8 [ค่าธรรมเนียมสอบแข่งขันของ สนง.]
                  </option>
                  <option value="17">
                    059-6-01199-7 [059-6-01199-7]
                  </option>
                  <option value="17">
                  059-0-01184-7[เงินค่าธรรมเนียมของคุรุสภา]
                  </option>
                      </select>
              </div> 
              <div class="col-md-6 mb-6" style = "">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  จำนวนเงิน
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="tv_add" name="tv_add" placeholder="จำนวนเงิน" value="" >
              </div> 
              
              <div class="col-md-6 mb-6" style = "">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="cash_type_add">
                  ประเภท
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="cash_type_add" name="cash_type_add" class="select2"
                      placeholder="ประเภท">
                        <option value="1">
                         เงินสด		
                        </option>
                        <option value="2">
                          เช็ค	
                        </option>
                      </select>
              </div> 
              <div class="col-md-6 mb-6" id = "divchecknumber" style = "">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="checknumber">
                  เลขที่เช็ค
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="checknumber" name="checknumber" placeholder="เลขที่เช็ค" value="" >
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

