<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h5 class="color-primary-500" style = "font-weight:600;display: flex;">
        <i class="fa-solid fa-pencil fa-lg" id = "icon_add_form" style = "padding-right:10px;"></i>
        <!-- <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i> -->
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;">รายงานผลการดำเนินงานตามกิจกรรม</label>
      </h5>
      <div id="panel-2" class="panel div_edit" ><!-- div edit -->
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">

            





            <div class="panel-content fourd-form-row-a" id = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">

                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    งาน
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    แผน 2 ครั้ง
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ผล 
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ครั้ง" value="" style = "width:40%;display:inline"> ครั้ง
                </div>
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    คิดเป็น 
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    0%
                  </label>
                </div>

              </div>
            </div>
            <div class="panel-content fourd-form-row-b" id = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">

                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    งบประมาณ
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    แผน 32,000 บาท
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ผล 
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    20,000 บาท
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    คิดเป็น 
                  </label>
                </div>
                <div class="col-sm-2 sm-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    62.5%
                  </label>
                </div>

              </div>
            </div>

            <div class="panel-content fourd-form-row-c" id = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">

                <div class="col-sm-4 sm-4" style="padding-top:5px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:22px;">
                  <label class="form-label" for="" style = "margin:0;">
                    ผลการดำเนินงานตามกิจกรรม (แสดงให้ทราบว่า ทำอะไร ที่ไหน เมื่อใด และได้รับอะไรจากการดำเนินงานนั้น)
                    <span class="text-danger stars"> * </span> 
                  </label>
                  
                </div>
                <div class="col-sm-8 sm-8" style="padding-top:10px;padding-bottom:5px;font-size:13px;margin-bottom:0px !important;">
                  <textarea class="form-control" id="example-textarea" rows="4"></textarea>
                </div>
                

              </div>
            </div>
            <div class="panel-content fourd-form-row-c" id = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">

                <div class="col-sm-4 sm-4" style="padding-top:5px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:22px;">
                  <label class="form-label" for="" style = "margin:0;">
                    ผลที่ได้รับจาก การดำเนินงาน ตามกิจกรรม
                    <span class="text-danger stars"> * </span> 
                  </label>
                  
                </div>
                <div class="col-sm-8 sm-8" style="padding-top:5px;padding-bottom:5px;font-size:13px;margin-bottom:0px !important;">
                  <textarea class="form-control" id="example-textarea" rows="4"></textarea>
                </div>
                

              </div>
            </div>
            <div class="panel-content fourd-form-row-c" id = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">

                <div class="col-sm-4 sm-4" style="padding-top:5px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:22px;">
                  <label class="form-label" for="" style = "margin:0;">
                    สาเหตุที่ดำเนินการ ไม่เป็นไปตามแผน 
                    <span class="text-danger stars"> * </span> 
                  </label>
                  
                </div>
                <div class="col-sm-8 sm-8" style="padding-top:5px;padding-bottom:10px;font-size:13px;margin-bottom:0px !important;">
                  <textarea class="form-control" id="example-textarea" rows="4"></textarea>
                </div>
                

              </div>
            </div>
            <div class="panel-content fourd-form-row-c" id = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">

                <div class="col-sm-4 sm-4" style="padding-top:5px;padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:22px;">
                  <label class="form-label" for="" style = "margin:0;">
                   ชื่อเจ้าของกิจกรรม
                    <span class="text-danger stars"> * </span> 
                  </label>
                  
                </div>
                <div class="col-sm-8 sm-8" style="padding-top:5px;padding-bottom:10px;font-size:13px;margin-bottom:0px !important;">
                  <select id="resname" name="resname" class="" style = "100%" placeholder="ประเภทงบ" onchange="getval(this,0);">
                    <option value="" selected>
                      -
                    </option>
                    <option value="2">
                      สุนิศา พัฒนปรีชา 
                    </option>
                    <option value="3">
                      ธนา นันทภักดิ์
                    </option>
                    <option value="4">
                      บุลากร วีระกิตธนา 
                    </option>
                    
                    
                  </select>
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

