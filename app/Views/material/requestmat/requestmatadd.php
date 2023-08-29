<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='1000'">
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

            



           

            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    สำนัก
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    สำนักนโยบายและแผน
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    กลุ่ม
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                   กลุ่มแผนและงบประมาณ
                  </label>
                </div>
               
            
               
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อผู้ขอเบิก
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-10 mb-10" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <select id="receive_name_add" name="receive_name_add" class="ele_select_add"
					placeholder="ชื่อผู้ขอเบิก">
					<option value="">
						
					</option>
					<option value="17">
						ปองภพ สำราญทรัพย์	
					</option>
					<option value="18">
						พัฒนพงษ์ ปัทมเดชา
					</option>
					<option value="11">
						พัทธมน โอภาสเจริญ
					</option>
					
					</select>
                </div>
            
               
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายการวัสดุ
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
									
									
									<th class="text-center">
										รายการวัสดุ
									</th>
									<th class="text-center" width = "80px;">
										จำนวนที่ขอ
									</th>
									<th class="text-center" width = "60px;">
										จัดสรร
									</th>
									<th class="text-center" width="60px;">
										
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>

									<td>
										ลวดเย็บกระดาษMAX เบอร์ 10
									</td>
									<td >
										1 กล่อง
									</td>
									<td >
										- กล่อง
									</td>
									
									<td>
										
										<a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
										mode='edit'>
											<i class="ni ni-pencil">
											</i>
										</a>
										&nbsp;&nbsp;
										<a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
										data-toggle="modal" data-target="#example-modal-alert">
											<i class="ni ni-trash">
											</i>
										</a>
									</td>
								</tr>
								<tr>

									<td>
										แฟรชไดส์
									</td>
									<td>
										1 อัน
									</td>
									<td>
										- อัน
									</td>
									
									<td>
									
										<a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
										mode='edit'>
											<i class="ni ni-pencil">
											</i>
										</a>
										&nbsp;&nbsp;
										<a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
										data-toggle="modal" data-target="#example-modal-alert">
											<i class="ni ni-trash">
											</i>
										</a>
									</td>
								</tr>
							
								
								
							</tbody>
						</table>
						<!-- datatable end -->
			<div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-top:10px;padding-bottom:10px;line-height:25px;">
                <div class="col-md-2 mb-2" style="padding-top:15px;padding-bottom:15px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    หมายเหตุ 
                  </label>
                  <span class="text-danger stars">  *</span> 
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                   <textarea class="form-control" id="example-textarea" rows="2"></textarea>
                </div>
            
               
              </div>
            </div>


			<div class="panel-content fourd-form-row-b" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                             จอง
                         
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-2 mb-2" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <div class="custom-control custom-switch" style ="padding-top:10px;">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2"></label>
                    </div>
                    
                  </div>  
				  
				  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                             วันที่ใช้
                         
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-3 mb-3" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <input type="text" class="form-control form-ele clear-element datepk" id="position_name" name="position_name" placeholder="วันที่ใช้" value="">
                    
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





