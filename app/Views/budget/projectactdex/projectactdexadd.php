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
        <label  class ="project_step_name" style = "padding-top:7px;">งบรายจ่าย</label>
      </h5>
      <div id="panel-2" class="panel">
        <div class="panel-container show">
          <div class="panel-content">



            <!--เปิด ค่าใช้จ่าย -->
            <div class="form-row dialog-data dialog-data-expend dialog_hide_all">
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;padding-left:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="unit_name_add">
                  งบ
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="unit_name_add" name="unit_name_add" class="select2" placeholder="งบ">
                  
                    <option value="17">
                      งบดำเนินงาน
                    </option>
                    <option value="17">
                      งบลงทุน
                    </option>
                    <option value="17">
                      งบอุดหนุน
                    </option>
                    <option value="17">
                      งบรายจ่ายอื่น
                    </option>
                    
                       
                </select>
              </div>
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;padding-left:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="unit_name_add">
                  รายการค่าใช้จ่าย
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="expend_add" name="expend_add" class="select2" placeholder="งบ">
                  
                    <option value="17">
                      ค่าอาหารเครื่องดื่มเลี้ยงรับรอง
                    </option>
                    <option value="17">
                      ค่าเบี้ยประชุม
                    </option>
                    <option value="17">
                      ค่าเบี้ยเลี้ยงค่าเช่าที่พักและค่าพาหนะ
                    </option>
                    <option value="17">
                      ค่าอาหารเครื่องดื่มเลี้ยงรับรอง   
                    </option>
                    
                       
                </select>
              </div>
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  คำอธิบาย
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="คำอธิบาย" value="" >
              </div> 
              <div class="col-md-4 mb-4" style = "padding-bottom:0px;margin-bottom:0px !important;">
                
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  สูตรคำนวณ
                  <span class="text-danger stars"> * </span>
                </label>



                <div class="card mb-g border shadow-0 col-sm-12" style = "padding-right:0px;padding-left:0px;">
                  
                  <div class="card-header bg-white p-0 col-sm-12">
                      <div class="row no-gutters row-grid align-items-stretch bg-primary-400">
                          <div class="col-sm-4">
                              <div class="text-muted py-2 px-3 text-center td-col-h" style = ""><small>คน</small></div>
                          </div>
                          <div class="col-sm-4">
                            <div class="text-muted py-2 px-3 text-center td-col-h" style = ""><small>บาท</small></div>
                          </div>
                          <div class="col-sm-4 hidden-md-down">
                            <div class="text-muted py-2 px-3 text-center td-col-h" style = ""><small>ครั้ง</small></div>
                          </div>
                          
                      </div>

                      <div class="card-body p-0">
                      <div class="row no-gutters row-grid align-items-stretch">
                          <div class="col-sm-4">
                              <div class="text-muted py-2 px-3 td-col" style = "">
                              <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="คน" value="10" >
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="text-muted py-2 px-3 text-center td-col" style = "">
                            <select id="baths" name="baths" class="form-control" placeholder="บาท">
                              <!-- <select class="form-control" id="example-select"> -->
                                                        
                  
                              <option value="17">
                                100
                              </option>
                              <option value="17" selected>
                                200
                              </option>
                              <option value="17">
                                300
                              </option>
                             
                              
                                  
                          </select>
                            <!-- <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="" value="" > -->
                            </div>
                          </div>
                          <div class="col-sm-4 hidden-md-down">
                            <div class="text-muted py-2 px-3 text-center td-col" style = ""><input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ครั้ง" value="2" ></div>
                          </div>
                          
                      </div>
                      </div>
                    
                  </div>
                </div>

              </div>





              <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  จำนวนเงิน  : 3,000 บาท
                  <span class="text-danger stars"> </span>
                </label>
                
              </div> 
              



            </div>
            <!--ปิด ค่าใช้จ่าย -->



            
            <!--เปิด แผนปฏิบัติ -->
            <div class="form-row dialog-data dialog-data-actplan dialog_hide_all">
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;padding-bottom:5px;" for="group_name_add">
                  ไตรมาส
                  <span class="text-danger stars"> * </span>
                </label>
                <div class="frame-wrap">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample" checked="">
                        <label class="custom-control-label color-fusion-300" for="defaultInline1Radio" >ไตรมาส1</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample" >
                        <label class="custom-control-label color-fusion-300" for="defaultInline2Radio">ไตรมาส2</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline3Radio" name="inlineDefaultRadiosExample" >
                        <label class="custom-control-label color-fusion-300" for="defaultInline2Radio">ไตรมาส3</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="defaultInline4Radio" name="inlineDefaultRadiosExample" >
                        <label class="custom-control-label color-fusion-300" for="defaultInline2Radio">ไตรมาส4</label>
                    </div>
                   
                </div>
              </div> 
              <div class="col-md-6 mb-6" style = "padding-bottom:0px;padding-left:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="unit_name_add">
                  เดือนเริ่มต้น
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="month_start" name="month_start" class="" placeholder="เดือนเริ่มต้น">
                  
                    <option value="17">
                      ตุลาคม
                    </option>
                    <option value="17">
                      พฤศจิกายน
                    </option>
                    <option value="17">
                      ธันวาคม
                    </option>
                </select>
              </div>
              <div class="col-md-6 mb-6" style = "padding-bottom:0px;padding-left:10px;padding-right:10px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="unit_name_add">
                  เดือนสิ้นสุด
                  <span class="text-danger stars"> * </span>
                </label>
                <select id="month_end" name="month_end" class="" placeholder="เดือนสิ้นสุด">
                  
                    <option value="17">
                      ตุลาคม
                    </option>
                    <option value="17">
                      พฤศจิกายน
                    </option>
                    <option value="17">
                      ธันวาคม
                    </option>
                </select>
              </div>
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  ปริมาณงาน (ไม่เกิน 4 ครั้ง)
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ปริมาณงาน" value="" >
              </div> 
              <div class="col-md-12 mb-12" style = "padding-bottom:25px;">
                <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="group_name_add">
                  งบประมาณ (บาท) (ไม่เกิน 5,000  บาท)
                  <span class="text-danger stars"> * </span>
                </label>
                <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="งบประมาณ" value="" >
              </div> 
              



            </div>
            <!--ปิด แผนปฏิบัติ -->












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

