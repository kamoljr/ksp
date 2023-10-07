<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='1000'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <input id="for_log_app_id" name="for_log_app_id" type="hidden" value="<?=$app_id?>"/>
  <input id="for_log_app_name" name="for_log_app_name" type="hidden" value="<?=$app_name?>"/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h5 class="color-primary-500" style = "font-weight:600;display: flex;">
        <i class="fa fa-gear fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i>
        <!-- <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i> -->
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;"><?= $app_name; ?></label>
      </h5>
      <div id="panel-2" class="panel">
        <div class="panel-container show">
          <div class="panel-content">

            



           

            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    สำนัก
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <select id="unit_name_add" name="unit_name_add" class="ele_select_add"
                      placeholder="ส่วนงานเจ้าของ">
                        <option value="">
                          -
                        </option>
                       
                        <option value="18">
                          สถาบันคุรุพัฒนา
                        </option>
                        <option value="11">
                          สำนักจรรยาบรรณวิชาชีพและนิติการ
                        </option>
                        <option value="3">
                          สำนักทะเบียนและใบอนุญาตประกอบวิชาชีพ
                        </option>
                        <option value="9">
                          สำนักเทคโนโลยีสารสนเทศ
                        </option>
                        <option value="16">
                          สำนักเทคโนโลยีสารสนเทศและการสื่อสาร
                        </option>
                        <option value="5">
                          สำนักนโยบายและแผน
                        </option>
                        <option value="4">
                          สำนักพัฒนาและส่งเสริมวิชาชีพ
                        </option>
                        <option value="2">
                          สำนักมาตรฐานวิชาชีพ
                        </option>
                        <option value="14">
                          สำนักยกย่องเชิดชูเกียรติวิชาชีพ
                        </option>
                        <option value="12">
                          สำนักส่งเสริมและพัฒนาคุรุสภาจังหวัด
                        </option>
                        <option value="7">
                          สำนักอำนวยการ
                        </option>
                        <option value="8">
                          หน่วยตรวจสอบภายใน
                        </option>
                      </select>
                </div>
                
               
            
               
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    กลุ่ม
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <select id="group_name_add" name="group_name_add" class="ele_select_add"
                      placeholder="กลุ่มงานเจ้าของ">
                        <option value="">
                          -
                        </option>
                        <option value="17">
                          กลุ่มการประชุมและประสานงาน	
                        </option>
                        <option value="18">
                          กลุ่มการเงินและบัญชี
                        </option>
                        <option value="11">
                          กลุ่มสวัสดิการ
                        </option>
                        
                      </select>
                </div>
               
            
               
              </div>
            </div>
            
            <div class="panel-content fourd-form-row-b" style = "padding-bottom:0px;margin-bottom:0px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายการครุภัณฑ์
                  </label>
                </div>
                
              </div>
            </div>

            <button type="button" class="btn btn-sm btn-default" id = "btn_open_dialog_sub_form" data-toggle="modal" data-target="#dialog_sub_form"><i class="fa-solid fa-plus"></i></button>


           
            <!-- datatable start -->
						<table id="dynamic-table2" class="myFormat table table-md table-bordered table-hover table-striped w-100" style = "padding-top:0px !important;margin-top:0px !important;line-height:10px;">

            <!-- Button trigger modal -->
            
							<thead class="bg-info-50">
								<tr>
									
									
									<th class="text-center" width="110px;">
										รหัสครุภัณฑ์
									</th>
									<th class="text-center" >
										รายละเอียด
									</th>
								
								
								</tr>
							</thead>
							<tbody>
								<tr>

									<td>
										52-117-202-0001
									</td>
									<td>
										เครื่องโทรสาร : ยี่ห้อ SHARP รุ่น FO-3150
									</td>
							
									
									
								</tr>
								<tr>

									<td>
										52-117-202-0002
									</td>
									<td>
										เครื่องโทรสาร : ยี่ห้อ SHARP รุ่น FO-3150
									</td>
								
									
								
								</tr>
							
								
								
							</tbody>
						</table>
						<!-- datatable end -->

            <div class="panel-content fourd-form-row-c" style = "background-color:#c4ecd0de !important;">
              
             
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    หมายเหตุ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:15px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                     <textarea class="form-control" id="example-textarea" rows="2"></textarea>
                  
                  </div>
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





