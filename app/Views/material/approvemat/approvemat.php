<?
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get full url
?>

<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel" style="margin-bottom: 15px;">
      <div class="panel-container">
        <div id="js_list_accordion" class="accordion accordion-hover accordion-clean">
          <div class="card border-top-left-radius-0 border-top-right-radius-0">
            <div class="card-header">
              <a href="javascript:void(0);" class="card-title" data-toggle="collapse"
              data-target="#js_list_accordion-a" aria-expanded="true" data-filter-tags="settings">
                <i class="fal fa-search width-2 fs-xl">
                </i>
                ค้นหาโดย
                <span class="ml-auto">
                  <span class="collapsed-reveal">
                    <i class="fal fa-chevron-up fs-xl">
                    </i>
                  </span>
                  <span class="collapsed-hidden">
                    <i class="fal fa-chevron-down fs-xl">
                    </i>
                  </span>
                </span>
              </a>
            </div>
            <!-- จุดที่ 1 เปิด แก้ส่วนค้นหาโดย -->
            <div id="js_list_accordion-a" class="collapse show" data-parent="#js_list_accordion">
              <div class="card-body">
                <form action="<?=$actual_link?>" method="post" accept-charset="utf-8"
                id="form-search" name="form-search">
                  <div class="row">
                    <div class="col-sm-2">
                      <label class="form-label" for="budget_year_search">
                        ปีงบประมาณ
                      </label>
                      <select id="budget_year_search" name="budget_year_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          2566
                        </option>
                        <option value="18">
                          2565
                        </option>
                        <option value="11">
                          2564
                        </option>
                       
                      </select>
                    </div>
                    <div class="col-sm-5">
                      <label class="form-label" for="unit_name_search">
                        ชนิดวัสดุ
                      </label>
                       <select id="asset_type_search" name="group_name_search" class="select2"
                      placeholder="ประเภท">
                     
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="">
                          วัสดุสำนักงาน
                        </option>
                        <option value="17">
                          วัสดุไฟฟ้าและวิทยุ	
                        </option>
                        <option value="18">
                          วัสดุเชื้อเพลิงและหล่อลื่น
                        </option>
                        <option value="11">
                          วัสดุงานบ้านงานครัว
                        </option>
                        <option value="11">
                          วัสดุคอมพิวเตอร์		
                        </option>
                        <option value="11">
                          วัสดุก่อสร้าง		
                        </option>
                        <option value="11">
                          ค่าวัสดุอื่น (54053-00)		
                        </option>
                        
                      </select>
                    </div>
                    <div class="col-sm-5">
                      <label class="form-label" for="group_name_search">
                        รายการ
                      </label>
                      <select id="asset_item_search" name="asset_item_search" class="select2"
                      placeholder="รายการ">
                        <option value="">
                          ทั้งหมด	
                        </option>
                        <option value="">
                          กาวแท่ง	
                        </option>
                        <option value="17">
                          ถ้วยน้ำดื่ม			
                        </option>
                        <option value="18">
                          ลูกแม็ก ยี่ห้อ Rspid ขนาด 9/12 (5000 เข็ม)	
                        </option>
                        <option value="11">
                          กระดาษ Sticker ขนาด A4	  	
                        </option>
                        
                      </select>
                    </div>
                    
                    
                  </div>

                  <div class="row" style = "padding-top:15px;">
                    <div class="col-sm-6">
                      <label class="form-label" for="unit_name_search">
                        ส่วนงาน
                      </label>
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="ส่วนงาน">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <!-- <option value="17">
                          กลุ่มพัฒนาระบบงาน
                        </option> -->
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
                    <div class="col-sm-6">
                      <label class="form-label" for="group_name_search">
                        กลุ่มงาน
                      </label>
                      <select id="group_name_search" name="group_name_search" class="select2"
                      placeholder="กลุ่มงาน">
                        <option value="">
                          ทั้งหมด
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

                  <div class="row" style = "padding-top:15px;">
                  
                    
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                        รหัสขอเบิกวัสดุ
                      </label>
                      <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="รหัสขอเบิกวัสดุ" value="" >
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                        วันที่เบิก
                      </label>
                      <input type="text" class="form-control form-ele clear-element datepk" id="group_name_add" name="group_name_add" placeholder="วันที่เบิก" value="" >
                    </div>
                    
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                        สถานะ
                      </label>
                      <select id="repair_status_search" name="repair_status_search" class="select2"
                      placeholder="รายการ">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                        ระหว่างพิจารณา			
                        </option>
                        <option value="18">
                          ยินยอม	
                        </option>
                        <option value="11">
                          จัดสรรแล้ว		
                        </option>
                        <option value="11">
                          ไม่อนุมัติ		
                        </option>
                        <option value="11">
                          อนุมัติ		
                        </option>
                        
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                        สถานะการจอง
                      </label>
                      <select id="reserve_status_search" name="reserve_status_search" class="select2"
                      placeholder="สถานะการจอง">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          จอง			
                        </option>
                       
                        
                      </select>
                    </div>
                  </div>

                </form>
              </div>
            </div>
            <!-- ปิด แก้ส่วนค้นหาโดย -->
          </div>
        </div>
      </div>
    </div>
    <div class="alert alert-warning" id='searchresults' name='searchresults'
    style="margin-bottom: 15px;">
      ค้นหาโดย : ทั้งหมด
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 0px;">
          <!-- <div class="frame-wrap mt-3 mb-0 w-100">
            <button id="btnadd" type="button" class="btn btn-primary" data-toggle="modal"
            data-target=".default-example-modal-right" style="display: flex;">
              <span class="ni ni-big-plus fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                เพิ่ม
              </span>
            </button>
          </div> -->
          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
             
                <th class="text-center" width = "20px;">
                  
                </th>
                <th class="text-center" width = "110px;">
                  ชื่อผู้ขอเบิก
                </th>
                <th class="text-center" width = "70px;">
                  สำนัก
                </th>
                <th class="text-center" width = "80px;">
                  กลุ่มงาน
                </th>
                <th class="text-center">
                  รายการ || จำนวนที่ขอ || จัดสรร
                </th>
              
                <th width = "70px;"class="text-center">
                 วันที่ขอเบิก
                </th>
                <th width="60" class="text-center">
                  จอง<BR>(วันที่ใช้)
                </th>
                <th width="80" class="text-center">
                  สถานะ
                </th>
                <th width="60">
                </th>
                <th width="13">
                </th>
              </tr>
            </thead>
            <tbody>
             
              <tr>
                <td>
                  1
                </td>
                <td>
                 ปองภพ สำราญทรัพย์ 
                </td>
                 <td>
                  สำนักนโยบายและแผน
                </td>
                <td>
                  กลุ่มแผนและงบประมาณ
                </td>
                 <td>
                  <div class = "row" style = "padding-bottom:10px;">
                    <div class = "col-sm-6">ลวดเย็บกระดาษMAX เบอร์ 10	</div>
                    <div class = "col-sm-3">1 กล่อง</div>
                    <div class = "col-sm-3">- กล่อง</div>
                    
                  </div>
                  <div class = "row" style = "padding-bottom:10px;">
                    <div class = "col-sm-6">แฟรชไดส์	</div>
                    <div class = "col-sm-3"> 1 อัน</div>
                    <div class = "col-sm-3"> - อัน</div>
                   
                  </div>
                </td>
                <td>
                  06 ก.ย. 65	
                </td>
                <td>
                 <!-- <i class="fa-regular fa-hand"></i> -->
                </td>
                <td>
                  <div class="custom-control custom-checkbox d-block bg-fusion-100" style = "padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <label ><small class= "">ยังไม่ตรวจสอบ</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(9 ส.ค 66)</small></label>
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit' data-toggle="modal" data-target=".default-example-modal-right" >
                    <i class="fa fa-gear"></i>
                  </a>
                 
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="fal fa-print">
                    </i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                พัฒนพงษ์ ปัทมเดชา 
                </td>
                 <td>
                  สำนักจรรยาบรรณวิชาชีพและนิติการ
                </td>
                <td>
                  กลุ่มนิติการ	
                </td>
                 <td>
                  <div class = "row" style = "padding-bottom:10px;">
                    <div class = "col-sm-6">เชือกฟาง		</div>
                    
                    <div class = "col-sm-3">1 ม้วน</div>
                    <div class = "col-sm-3">- ม้วน</div>
                  </div>
                  <div class = "row" style = "padding-bottom:10px;">
                    <div class = "col-sm-6">ตรายางวันที่หมึกในตัว เลขไทย 	</div>
                    <div class = "col-sm-3"> 1 อัน</div>
                    <div class = "col-sm-3"> - อัน</div>
                   
                  </div>
                </td>
                <td>
                  12 ก.ย. 65	
                </td>
                <td>
                 <i class="fa-regular fa-hand"></i>
                  <label style = "margin:0px;"><small class= "">(13 ก.ย. 65)</small></label>
                </td>
                <td>
                  <div class="custom-control custom-checkbox d-block bg-warning-200" style = "padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <label ><small class= "">ยินยอม</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(13 ก.ย. 65)</small></label>
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit' data-toggle="modal" data-target=".default-example-modal-right" >
                    <i class="fa fa-gear"></i>
                  </a>
                
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="fal fa-print">
                    </i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  3
                </td>

             
                <td>
                   พัทธมน โอภาสเจริญ
                </td>
                 <td>
                  สำนักจรรยาบรรณวิชาชีพและนิติการ
                </td>
                <td>
                  กลุ่มนิติการ	
                </td>
                 <td>
                  <div class = "row" style = "padding-bottom:10px;">
                    <div class = "col-sm-6">กระดาษปกสี 120 แกรม		</div>
                    <div class = "col-sm-3">2 ห่อ</div>
                    <div class = "col-sm-3">2 ห่อ</div>
                    
                  </div>
                  
                </td>
                <td>
                  06 ก.ย. 65	
                </td>
                <td>
                 <!-- <i class="fa-regular fa-hand"></i> -->
                </td>
                <td>
                  <div class="custom-control custom-checkbox d-block bg-info-600" style = "padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <label ><small class= "">อนุมัติ</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(9 ส.ค 66)</small></label>
                </td>
                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                 <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit' data-toggle="modal" data-target=".default-example-modal-right" >
                  <i class="fa fa-gear"></i>
                    </i>
                  </a>
                
                </td>
                <td>
                  <a href="javascript:void(0);" class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="fal fa-print">
                    </i>
                  </a>
                </td>
              </tr>
            
              
             
              
              
              
              
            </tbody>
          </table>
          <!-- datatable end -->
        </div>
      </div>
    </div>
  </div>
</div>



<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>





<!-- modal subform -->
<div class="modal fade" id="dialog_sub_form"  tabindex="-1" aria-hidden="true" data-backdrop="static" style = "z-index:9000 !important;" >

		<div class="modal-dialog modal-lg modal-dialog-centered" role="document" style = "overflow: auto !important;">
				<div class="modal-content">
						<div class="modal-header bg-fusion-50 text-white" style = "padding-top:15px;padding-bottom:15px;">
								<h5 class="modal-title">เลือกวัสดุ</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="fal fa-times"></i></span>
								</button>
						</div>
						<div class="modal-body">

			
							<div class="panel-content fourd-form-row-c " >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                       ขนิด 
                    </label>
                    <span class="text-danger stars">  </span> 
                  </div>
                  <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                   <select id="asset_type_sub_add" name="asset_type_sub_add" class="ele_select_sub_add" placeholder="ขนิด"  >
                        <option value="">
                          -
                        </option>
                        <option value="">
                          วัสดุสำนักงาน
                        </option>
                        <option value="17">
                          วัสดุไฟฟ้าและวิทยุ	
                        </option>
                        <option value="18">
                          วัสดุเชื้อเพลิงและหล่อลื่น
                        </option>
                        <option value="11">
                          วัสดุงานบ้านงานครัว
                        </option>
                        <option value="11">
                          วัสดุคอมพิวเตอร์		
                        </option>
                        <option value="11">
                          วัสดุก่อสร้าง		
                        </option>
                        <option value="11">
                          ค่าวัสดุอื่น (54053-00)		
                        </option>
                      </select>
                    
                  </div>    
                </div>
              </div> 
							<div class="panel-content fourd-form-row-b" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                        รายการ
                         
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
									<select id="asset_item_sub_add" name="asset_item_sub_add" class="ele_select_sub_add"
                      placeholder="รายการ">
                        <option value="">
                          -
                        </option>
                     
                        <option value="">
                          กาวแท่ง	
                        </option>
                        <option value="17">
                          ถ้วยน้ำดื่ม			
                        </option>
                        <option value="18">
                          ลูกแม็ก ยี่ห้อ Rspid ขนาด 9/12 (5000 เข็ม)	
                        </option>
                        <option value="11">
                          กระดาษ Sticker ขนาด A4	  	
                        </option>
                        
                      </select>
                    
                  </div>    
                </div>
              </div> 
							<div class="panel-content fourd-form-row-c" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                             คงเหลือ (อัน)	
                         
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-9 mb-9" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                              10 อัน	
                    </label>
                  </div>    
                </div>
              </div> 


              <div class="panel-content fourd-form-row-b" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                             จำนวนที่ขอ (อัน)	
                         
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-9 mb-9" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
									  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนที่ขอ" value="">
                    
                  </div>    
                </div>
              </div> 
              





              </div> 
							
              
						
						

						
						<div class="modal-footer">
								<button type="button" class="btn btn-secondary" id = "btn_dialog_sub_form_close">Close</button>
								<button type="button" class="btn btn-primary">Add Item</button>
						</div>
				</div>
		</div>
</div>
<!-- close modal subform -->

<!-- END Page Content -->
<style>
.fourd-form-row-a{
    background-color:#8f73deb0;
    padding-left:10px !important;
    padding-right:5px !important;
    padding-top:0px !important;
    padding-bottom:0px !important;
    border-radius: 5px !important;
    vertical-align: middle;
    line-height: 48px;
    color:#000;
  }
  .fourd-form-row-b{
    background-color:#fff;
    padding-left:10px !important;
    padding-right:5px !important;
    padding-top:0px !important;
    padding-bottom:0px !important;
    border-radius: 5px !important;
    vertical-align: middle;
    line-height: 48px;
    color:#000;
  }
  .fourd-form-row-c{
    background-color:#ffedc1;
    padding-left:10px !important;
    padding-right:5px !important;
    padding-top:0px !important;
    padding-bottom:0px !important;
    border-radius: 5px !important;
    vertical-align: middle;
    line-height: 48px;
    color:#000;
  }

   table.myFormat tr td { font-size: 12px;padding:5px; }

  

</style>
<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>
    
$(document).ready(function() {
  // -----dialog_sub_form-------
  let $modal = $("#dialog_sub_form");
  $modal.draggable({
    handle: ".modal-header",
  });

  $(document).on('click', '#btn_dialog_sub_form_close',
  function() {
    $('#dialog_sub_form').modal('toggle');
  });

  $(document).ready(function() {
    $('.ele_select_sub_add').select2({
      dropdownParent: $('#dialog_sub_form')
    });
  });

  // -----close dialog_sub_form-------
  
  $(".select2").select2();
  $('#unit_name_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });

  var table = $("#dynamic-table").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
   
    columnDefs: [{
      targets: [1,2,,3,4,5,6,7,8,9],
      orderable: false,
    },
    {
     // "visible": false, "targets": 1
    },
    {
      targets: [0,3,4,5,7],
      className: "text-center",
    },
    {
      targets: [],
      className: "text-right",
    }]

  });
  var table = $("#dynamic-table2").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    orderable:false,
    "ordering": false,
    "paging": false,
    "info":     false,
    columnDefs: [{
     
    },
    {
      targets: [1,2,3],
      className: "text-center",
    },
    {
      targets: [0],
      className: "text-left",
    }]

  });

  
  $(document).on('click', '#btnadd',
  function() {
    $("#ids").val('');

    $(".lblmode").text("เพิ่ม");

    $("#icon_add_form").show();
    $("#icon_edit_form").hide();
    $("#icon_view_form").hide();

    $('.div_show_rowid').css('display', 'none');

    $(".clear-element").val('');

    $('.form-ele').prop('disabled', false);
    $('.stars').show(); // ซ่อนดาวแดง
    $(".dialog-data").show();
    $(".dialog-success").hide();

    $("#btn_save_change").show();
    $("#btn_dialog_close").show();

  });

  $(document).on('click', '#btn_dialog_close',
  function() {
    $('.default-example-modal-right').modal('toggle');
  });

  $(document).ready(function() {
    $('.ele_select_add').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });

  

});



</script>