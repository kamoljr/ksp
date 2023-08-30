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
        <label  style = "padding-top:7px;" class = "hidedialog dialog_add1">ตรวจรับ</label>
        <label  style = "padding-top:7px;" class = "hidedialog dialog_add2">ลงทะเบียน</label>
      </h5>
      

         
              
      <div id="panel-2" class="panel div_edit" ><!-- div edit -->
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">






              
            <!-- ตรวจรับ -->
            <div id = "" class = "hidedialog dialog_add1">
            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เลขที่สัญญา
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    1/66
                  </label>
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    งวดที่
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label" for="" style = "margin:0;">
                    1
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    วันครบกำหนด
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label" for="" style = "margin:0;">
                    28 ต.ค. 65
                  </label>
                </div>
              </div>
            </div>
            
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียดการส่งมอบ	

                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    งวดที่ 1 จำนวน 100,000.00 บาท ผู้รับจ้างได้ดำเนินการ ให้แล้วเสร็จภายใน 30 วัน นับถัดจากวันลงนามในสัญญา พร้อมจัดส่งเอกสาร
                  </label>
                </div>
            
               
              </div>
            </div>


            <!-- datatable start -->
						<table id="dynamic-table3" class="myFormat table table-md table-bordered table-hover table-striped w-100" style = "padding-top:0px !important;margin-top:0px !important;line-height:10px;">
							<thead class="bg-info-50">
								<tr>
									
									<th class="text-center" width="20px;">
										
									</th>
									<th class="text-center" >
										รายการ	
									</th>
									<th class="text-center" width="100px;">
										จำนวน	
									</th>
									<th class="text-center" width="100px;">
										ส่งมอบจำนวน
									</th>
									<th class="text-center" width="100px;">
										ตรวจรับจำนวน
									</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>

									<td>
										1
									</td>
									<td>
										ออกแบบอาร์ตเวิร์คหนังสือ
									</td>
									<td>
										1 เล่ม
									</td>
									<td>
										1 เล่ม
									</td>
									<td>
                    <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="" value="" style = "display:inline !important;width:70% !important;"> <label style = "display:inline !important;">เล่ม</label>
									</td>
								
								</tr>
								
								
								
							</tbody>
						</table>
						<!-- datatable end -->
              
            
            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    วันที่ตรวจรับ
                  </label>
                </div>
                <div class="col-md-9 mb-9" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element datepk" id="position_name" name="position_name" placeholder="วันที่ตรวจรับ" value="">
                </div>
            
                
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อคณะกรรมการ
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                <select id="board_name_add" name="board_name_add" class="" placeholder="ชื่อคณะกรรมการ" style = "display:inline !important;">
                        <option value="">
                          นางสาวดวงแก้ว อดิศวร
                        </option>
                        <option value="17">
                          นายวีระ เทพทัต	
                        </option>
                        <option value="17" selected>
                          นายสมคิด วงศ์เศวต
                        </option>
                      </select>
                            
                </div>
                <div class="col-md-5 mb-5" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
               
                            
                      <button type="button" class="btn btn-sm btn-primary" style = "display:inline !important;"><i class="fa-solid fa-plus"></i></button>
                </div>
            
               
               
              </div>
            </div>

            <div class="panel-content fourd-form-row-a" style = "line-height:85px;margin-bottom:15px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียดการตรวจรับ	
                  </label>
                </div>
                <div class="col-md-9 mb-9" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <textarea class="form-control" id="example-textarea" rows="2"></textarea>
                </div>
              </div>
            </div>

            <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    สถานะ
                  </label>
                </div>
                <div class="col-md-9 mb-9" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample" style = "margin-top:15px;" checked>
                        <label class="custom-control-label " for="defaultInline1Radio" >ยังไม่พิจารณา</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline2Radio">ไม่ผ่านการตรวจรับ</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline4Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline4Radio">ผ่านการตรวจรับ</label>
                    </div>
                  
                  </div>
                </div>
            
               
              </div>
            </div> <!--ปิดตรวจรับ  -->
             






              <!-- ลงทะเบียน -->
            <div id = "" class = "hidedialog dialog_add2">
            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เลขที่สัญญา
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    1/66
                  </label>
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    งวดที่
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label" for="" style = "margin:0;">
                    1
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    วันครบกำหนด
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label" for="" style = "margin:0;">
                    28 ต.ค. 65
                  </label>
                </div>
              </div>
            </div>
            
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียดการส่งมอบ	

                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    งวดที่ 1 จำนวน 100,000.00 บาท ผู้รับจ้างได้ดำเนินการ ให้แล้วเสร็จภายใน 30 วัน นับถัดจากวันลงนามในสัญญา พร้อมจัดส่งเอกสาร
                  </label>
                </div>
            
               
              </div>
            </div>


            <!-- datatable start -->
						<table id="dynamic-table4" class="myFormat table table-md table-bordered table-hover table-striped w-100" style = "padding-top:0px !important;margin-top:0px !important;line-height:10px;">
							<thead class="bg-info-50">
								<tr>
									
									<th class="text-center" width="20px;">
										
									</th>
									<th class="text-center" >
										รายการ	
									</th>
									<th class="text-center" width="100px;">
										จำนวน	
									</th>
									<th class="text-center" width="100px;">
										ส่งมอบจำนวน
									</th>
									<th class="text-center" width="100px;">
										ตรวจรับจำนวน
									</th>
									<th class="text-center" width="30px;">
										
									</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>

									<td>
										1
									</td>
									<td>
										ออกแบบอาร์ตเวิร์คหนังสือ
									</td>
									<td>
										1 เล่ม
									</td>
									<td>
										1 เล่ม
									</td>
									<td>
                     1 เล่ม
									</td>
									<td>
                     <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit'>
                    <i class="ni ni-pencil">
                    </i>
                  </a>
									</td>
								
								</tr>
								
								
								
							</tbody>
						</table>
						<!-- datatable end -->
            <!-- datatable start -->
						<table id="dynamic-table5" class="myFormat table table-md table-bordered table-hover table-striped w-100" style = "padding-top:0px !important;margin-top:0px !important;line-height:10px;">
							<thead class="bg-info-50">
								<tr>
									
									<th class="text-center" width="20px;">
										
									</th>
									<th class="text-center" >
										รายการ	
									</th>
									<th class="text-center" width="100px;">
										จำนวน	
									</th>
									<th class="text-center" width="200px;">
										หมายเลขครุภัณฑ์
									</th>
									<th class="text-center" width="200px;">
										สถานที่ตั้ง
									</th>
								
									
								</tr>
							</thead>
							<tbody>
								<tr>

									<td>
										1
									</td>
									<td>
										โต๊ะ
									</td>
									<td>
										10 ตัว
									</td>
									<td>
										<input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="" value="" style = "display:inline !important;width:90% !important;">
									</td>
									<td>
                    <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="" value="" style = "display:inline !important;width:90% !important;">
									</td>
									
								
								</tr>
								
								
								
							</tbody>
						</table>
						<!-- datatable end -->
              
            
            <!-- <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    วันที่ตรวจรับ
                  </label>
                </div>
                <div class="col-md-9 mb-9" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element datepk" id="position_name" name="position_name" placeholder="วันที่ตรวจรับ" value="">
                </div>
            
                
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อคณะกรรมการ
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                <select id="board_name_add" name="board_name_add" class="" placeholder="ชื่อคณะกรรมการ" style = "display:inline !important;">
                        <option value="">
                          นางสาวดวงแก้ว อดิศวร
                        </option>
                        <option value="17">
                          นายวีระ เทพทัต	
                        </option>
                        <option value="17" selected>
                          นายสมคิด วงศ์เศวต
                        </option>
                      </select>
                            
                </div>
                <div class="col-md-5 mb-5" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
               
                            
                      <button type="button" class="btn btn-sm btn-primary" style = "display:inline !important;"><i class="fa-solid fa-plus"></i></button>
                </div>
            
               
               
              </div>
            </div>

            <div class="panel-content fourd-form-row-a" style = "line-height:85px;margin-bottom:15px;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียดการตรวจรับ	
                  </label>
                </div>
                <div class="col-md-9 mb-9" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <textarea class="form-control" id="example-textarea" rows="2"></textarea>
                </div>
              </div>
            </div>

            <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;"> 
                <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    สถานะ
                  </label>
                </div>
                <div class="col-md-9 mb-9" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample" style = "margin-top:15px;" checked>
                        <label class="custom-control-label " for="defaultInline1Radio" >ยังไม่พิจารณา</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline2Radio">ไม่ผ่านการตรวจรับ</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline4Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline4Radio">ผ่านการตรวจรับ</label>
                    </div>
                  
                  </div>
                </div>
            -->
               
              </div>
              </div>
              <!--ปิดลงทะเบียน  -->
              

            <?=view("templates/modalclose.php")?>

          </div>
        </div>
      </div>

    </div>
  </div>


<div class="modal-footer" class = "">
  <button type="button" class="btn btn-secondary" id = "btn_dialog_close">Close</button>
  <button type="submit" class="btn btn-primary hidedialog dialog_add1" id ="btn_save_change">Save changes</button>
  <button type="submit" class="btn btn-primary hidedialog dialog_add2" id ="btn_save_change">ลงทะเบียน</button>
</div>
</form>

