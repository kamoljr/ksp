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






              <div class="panel-content fourd-form-row-b" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                       ชื่อ/นามสกุล 
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <select id="organizationtype" name="organizationtype" class=""  placeholder="ประเภทองค์กร" >
                      <option value="" selected>
                        -
                      </option>
                      <option value="2">
                          แก้วขวัญ สันติสุข
                      </option>
                      <option value="3">
                          พสธร ธรรมวงศ์ 
                      </option>
                      <option value="4">
                          ปรียาดา แก้วมาลา  
                      </option>
                      <option value="4">
                          ศศิธร พงศ์พินิจ   
                      </option>
                    </select>
                  </div>
              
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                      
                    </label>
                   
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    
                  </div>
                </div>
              </div> 
              <div class="panel-content fourd-form-row-a" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  
              
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                      วันที่มอบ
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <input type="text" class="form-control form-ele clear-element datepk" id="position_name" name="position_name" placeholder="วันที่มอบ" value="">
                  </div>
                </div>
              </div> 
            

              <div class="panel-content fourd-form-row-b" style = "margin-top:5px;margin-bottom:5px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:25px;vertical-align: middle;">
                <div class="col-md-12 mb-12 text-center" style="padding-top:5px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;display:inline;">
                    <h5 style = "margin:0;display:inline;">กำหนดงาน</h5>
                    
                  </label>
                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:0px;display:inline;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline1" checked="" style = "display:inline;">
                      <label class="custom-control-label" for="defaultInline1"> (ทั้งหมด)	</label>
                    </div>
                </div>
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:3px;line-height:25px;vertical-align: middle;">

                <div class="col-md-4 mb-4 " style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline2" checked="">
                      <label class="custom-control-label" for="defaultInline2"> 1.กำหนดวิธีการ	</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline3" checked="">
                      <label class="custom-control-label" for="defaultInline3">  2.ตั้งคณะกรรมการ</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4 " style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline4" checked="">
                      <label class="custom-control-label" for="defaultInline4">  3.ปรับปรุงใบเสนอราคา		</label>
                  </div>

                </div>
                
                
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:3px;line-height:25px;vertical-align: middle;">

                <div class="col-md-4 mb-4 " style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline5" checked="">
                      <label class="custom-control-label" for="defaultInline5">  4.ต่อรองราคา	</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline6" checked="">
                      <label class="custom-control-label" for="defaultInline6">  5.กำหนดผู้ที่ได้รับเลือก		</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline7" checked="">
                      <label class="custom-control-label" for="defaultInline7">  6.ทำรายการกันวงเงิน	</label>
                  </div>

                </div>
                
                
              </div>
            </div>
            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:3px;line-height:25px;vertical-align: middle;">

                <div class="col-md-4 mb-4 " style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline8" checked="">
                      <label class="custom-control-label" for="defaultInline8">  7.กำหนดส่งมอบ		</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4 " style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline9" checked="">
                      <label class="custom-control-label" for="defaultInline9">  8.เอกสารคู่สัญญา</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline10" checked="">
                      <label class="custom-control-label" for="defaultInline10">  9.ร่างสัญญา ใบสั่งซื้อ/สั่งจ้าง		</label>
                  </div>

                </div>
                
                
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:3px;line-height:25px;vertical-align: middle;">

                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline11" checked="">
                      <label class="custom-control-label" for="defaultInline11">  10.หลักประกันสัญญา</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">

                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline12" checked="">
                      <label class="custom-control-label" for="defaultInline12">  11.กำหนด เลขที่และวันที่สัญญา		</label>
                  </div>

                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
<!-- 
                  <div class="custom-control custom-checkbox custom-control-inline" style = "padding-top:10px;">
                      <input type="checkbox" class="custom-control-input" id="defaultInline2" checked="">
                      <label class="custom-control-label" for="defaultInline2"> 1.กำหนดวิธีการ	</label>
                  </div> -->

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

