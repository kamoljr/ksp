<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='1000'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h5 class="color-primary-500" style = "font-weight:600;display: flex;">
        <!-- <i class="ni ni-big-plus fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i> -->
        <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <!-- <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i> -->
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;"><?= $app_name; ?></label>
      </h5>
      <div id="panel-2" class="panel">
        <div class="panel-container show">
          <div class="panel-content">

            



           
            <div class = "show_div_project">
            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อหัวหน้าสำนัก
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ฉันท์สินี ชัยภูมิ
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อหัวหน้ากลุ่ม	
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                   พีรดา แสงตะวัน
                  </label>
                </div>
               
            
               
              </div>
            </div>

						<div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-top:15px;padding-bottom:0px;line-height:25px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    ผลการดำเนินงานตามเป้าหมายทั้งสิ้น
                  </label>
                </div>
              </div>
            </div>

						
						<!-- datatable start -->
						<table id="dynamic-table3" class="myFormat table table-md table-bordered table-hover table-striped w-100" style = "padding-top:0px !important;margin-top:0px !important;line-height:10px;">

            <!-- Button trigger modal -->
            
							<thead class="bg-info-50">
								<tr>
									
									
									<th class="text-center" width="15px;"></th>
									<th class="text-center" >เป้าหมายเชิงปริมาณ</th>
									<th class="text-center" width="60px;">
										แผน
									</th>
									<th class="text-center" width="60px;" >
										ผลสะสม
									</th>
									<th class="text-center" width="60px;">
										ผล (*)	
									</th>
									<th class="text-center" width="60px;">
										คิดเป็น %
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										3261
									</td>
									<td>
										รายงานการวิจัยเพื่อ การพัฒนาวิชาชีพและ ผู้ประกอบวิชาชีพทาง การศึกษา 2 เรื่อง	
									</td>
									<td>
										2
									</td>
									<td>
										0
									</td>
									<td>
										<input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ผล" value="" style = "width:40%;display:inline"> ครั้ง
									</td>
									<td>
										0
									</td>
								</tr>
								<tr>
									<td>
										3262
									</td>
									<td>
										แผนปฏิบัติการด้านการวิจัย ประจำปี พ.ศ. 2566 - 2570 จำนวน 1 ฉบับ	
									</td>
									<td>
										1
									</td>
									<td>
										0
									</td>
									<td>
										<input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ผล" value="" style = "width:40%;display:inline"> ครั้ง
									</td>
									<td>
										0
									</td>
								</tr>
							</tbody>
							<tfoot>
									<tr>
											<th colspan="5" style="text-align:right !important;">เป้าหมายเชิงปริมาณรวมคิดเป็น	:</th>
											<th>0</th>
									</tr>
							</tfoot>
						</table>
						<!-- datatable end -->
						<!-- datatable start -->
						<table id="dynamic-table4" class="myFormat table table-md table-bordered table-hover table-striped w-100" style = "padding-top:0px !important;margin-top:0px !important;line-height:10px;">

            <!-- Button trigger modal -->
            
							<thead class="bg-info-50">
								<tr>
									
									
									<th class="text-center" width="15px;"></th>
									<th class="text-center" >เป้าหมายเชิงคุณภาพ	</th>
									<th class="text-center" width="60px;">
										แผน
									</th>
									<th class="text-center" width="60px;" >
										ผลสะสม
									</th>
									<th class="text-center" width="60px;">
										ผล (*)	
									</th>
									<th class="text-center" width="60px;">
										คิดเป็น %
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										1379
									</td>
									<td>
										รายงานการวิจัยเพื่อการพัฒนาวิชาชีพและผู้ประกอบวิชาชีพทางการศึกษาที่มีคุณภาพ	
									</td>
									<td>
										2
									</td>
									<td>
										0
									</td>
									<td>
										<input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ผล" value="" style = "width:40%;display:inline"> ครั้ง
									</td>
									<td>
										0
									</td>
								</tr>
							
							</tbody>
							<tfoot>
									<tr>
											<th colspan="5" style="text-align:right !important;">เป้าหมายเชิงคุณภาพรวมคิดเป็น		:</th>
											<th>0</th>
									</tr>
							</tfoot>
						</table>
						<!-- datatable end -->



						<div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-top:5px;padding-bottom:0px;line-height:25px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    ปัญหา/อุปสรรค
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
									
									
									<th class="text-center" width="120px;">
										ประเภทปัญหา	
									</th>
									<th class="text-center" width="120px;">
										ด้าน
									</th>
									<th class="text-center" >
										ปัญหา/อุปสรรค	
									</th>
									<th class="text-center" width="60px;">
										
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>

									<td>
										ปัญหาภายในสำนักงานฯ	
									</td>
									<td>
										ด้านวัสดุอุปกรณ์
									</td>
									<td>
										อุปกรณ์เสีย
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


						<div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-top:5px;padding-bottom:0px;line-height:25px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    ผลที่ได้รับจากการดำเนินงาน 
										<span class="text-danger stars">  </span> 
                  </label>
                </div>
              </div>
            </div>

						<div class="panel-content fourd-form-row-a " style = "">
              
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
               
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline1Radio" name="inlineDefaultRadiosExample" style = "margin-top:15px;" checked>
                        <label class="custom-control-label " for="defaultInline1Radio" >เป็นไปตามแผน</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline" style ="line-height:25px;vertical-align: middle;">
                        <input type="radio" class="custom-control-input" id="defaultInline2Radio" name="inlineDefaultRadiosExample">
                        <label class="custom-control-label " for="defaultInline2Radio">ไม่เป็นไปตามแผน</label>
                    </div>
                   
                  
                  </div>
                </div>
            
               
              </div>
            

            </div>

						<div class="panel-content fourd-form-row-b " style = "">
           
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

						<div class="panel-content fourd-form-row-a " style = "">
           
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:25px;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    ความเห็นของกลุ่มติดตาม
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:0px;padding-bottom:15px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    -
                  </label>
                </div>
            
               
              </div>

            </div>

						<div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-top:5px;padding-bottom:0px;line-height:25px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    ผลการประเมินความก้าวหน้า/ผลสำเร็จในการดำเนินงาน/โครงการ ไตรมาส 1 (เบื้องต้น) 
										<span class="text-danger stars">  </span> 
                  </label>
                </div>
              </div>
            </div>

						<div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-6 mb-6" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ความก้าวหน้า/ผลการดำเนินงานไตรมาส 1 คิดเป็นร้อยละ	
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-6 mb-6" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    (33.33*0.6)+(0.00*0.4)+(0.00*0) = 20.00
                  </label>
                </div>
              
              </div>
            </div>
						<div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-6 mb-6" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เกณฑ์ระดับความก้าวหน้า/ผลการดำเนินงาน อยู่ในระดับ	
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-6 mb-6" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ร้อยละ 0-49 อยู่ในระดับ น้อย
                  </label>
                </div>
              
              </div>
            </div>

						<div class="panel-content fourd-form-row-a " style = "">
           
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:25px;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    แนวทางแก้ไข หรือข้อเสนอแนะ
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:15px;font-size:13px;margin-bottom:0px !important;line-height:25px;">
                  <div class="">
                     <textarea class="form-control" id="example-textarea" rows="2"></textarea>
                  
                  </div>
                </div>
            
               
              </div>

            </div>

						<div class="panel-content fourd-form-row-b " style = "">
           
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:25px;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    ผลกระทบที่เกิดขึ้น ต่อครู,สังคม
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:15px;font-size:13px;margin-bottom:0px !important;">
                  <div class="">
                     <textarea class="form-control" id="example-textarea" rows="2"></textarea>
                  
                  </div>
                </div>
            
               
              </div>

            </div>



            </div><!-- close div show_div_project -->














            <div class="panel-content fourd-form-row-b div_attact" style = "margin-top:15px !important;background-color:#c4ecd0de !important;" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    แนบไฟล์
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:15px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">เลือกไฟล์</label>
                  </div>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                 
                </div>
            
               
              </div>
            </div>
            <div class="panel-content fourd-form-row-b div_attact" style = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                  ชื่อไฟล์แนบ รายการที่ 1
                </div>
                
            
               
              </div>
            </div>
            <div class="panel-content fourd-form-row-b div_attact" style = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                  ชื่อไฟล์แนบ รายการที่ 2
                </div>
                
            
               
              </div>
            </div>




            <div class="panel-content fourd-form-row-a show_div_edit" style = "">
           
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;line-height:25px;">
                  <label class="form-label" for="" style = "margin:0;padding-top:5px;">
                    เหตุผลขอแก้ไข
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:15px;padding-bottom:15px;font-size:13px;margin-bottom:0px !important;line-height:25px;">
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





