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
                    <div class="col-sm-6">
                      <label class="form-label" for="unit_name_search">
                        ส่วนงาน
                      </label>
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="ส่วนงาน">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          กลุ่มพัฒนาระบบงาน
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
                    
                    <div class="col-sm-2">
                      <label class="form-label" for="group_name_search">
                        ประเภท
                      </label>
                      <select id="asset_type_search" name="group_name_search" class="select2"
                      placeholder="ประเภท">
                      <option value="">
                          ทั้งหมด
                        </option>
                        <option value="">
                          ครุภัณฑ์สำนักงาน (12230-00)	
                        </option>
                        <option value="17">
                          ครุภัณฑ์ยานพาหนะและขนส่ง (12250-00)		
                        </option>
                        <option value="18">
                          ครุภัณฑ์ไฟฟ้าและวิทยุ (12233-00)	
                        </option>
                        <option value="11">
                          ครุภัณฑ์โฆษณาและเผยแพร่	
                        </option>
                        <option value="11">
                          ครุภัณฑ์งานบ้านงานครัว		
                        </option>
                        <option value="11">
                          ครุภัณฑ์คอมพิวเตอร์		
                        </option>
                        
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                        รายการ
                      </label>
                      <select id="asset_item_search" name="asset_item_search" class="select2"
                      placeholder="รายการ">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          ชั้นวางของ		
                        </option>
                        <option value="18">
                          โต๊ะทำงานพร้อมเก้าอี้นวม 8 ห้อง	
                        </option>
                        <option value="11">
                          ตู้ครัว	
                        </option>
                        
                      </select>
                    </div>
                    
                    <div class="col-sm-2">
                      <label class="form-label" for="group_name_search">
                        รหัสครุภัณฑ์
                      </label>
                      <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="รหัสครุภัณฑ์" value="" >
                    </div>
                    <div class="col-sm-3">
                      <label class="form-label" for="group_name_search">
                         ยี่ห้อรุ่นขนาดและลักษณะ
                      </label>
                      <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="ยี่ห้อรุ่นขนาดและลักษณะ" value="" >
                    </div>
                    <div class="col-sm-2">
                      <label class="form-label" for="group_name_search">
                        สถานะ
                      </label>
                      <select id="repair_status_search" name="repair_status_search" class="select2"
                      placeholder="รายการ">
                        <option value="">
                          ทั้งหมด
                        </option>
                        <option value="17">
                          ยังไม่ตรวจสอบ			
                        </option>
                        <option value="18">
                          ระหว่างดำเนินการ	
                        </option>
                        <option value="11">
                          เสร็จสิ้น		
                        </option>
                        <option value="11">
                          ไม่ซ่อม		
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
                <th class="text-center" width = "70px;">
                  วันที่แจ้งซ่อม
                </th>
                 <th class="text-center" width = "70px;">
                  สำนัก
                </th>
                <th class="text-center" width = "80px;">
                  กลุ่มงาน
                </th>
                <th class="text-center">
                  รายการ
                </th>
              
                <th width = "80px;"class="text-center">
                 
                </th>
                <th width="90">
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
                  06 ก.ย. 65	
                </td>
                 <td>
                  สำนักนโยบายและแผน
                </td>
                <td>
                  กลุ่มแผนและงบประมาณ
                </td>
                <td>
                  <div class = "row" style = "padding-bottom:10px;">
                    <div class = "col-sm-4">52-117-202-0001</div>
                    <div class = "col-sm-8"><strong>เครื่องโทรสาร</strong> : ยี่ห้อ SHARP รุ่น FO-3150		</div>
                    <!-- <div class = "col-sm-4">เปิดไม่ติด</div> -->
                  </div>
                  <div class = "row" style = "padding-bottom:10px;">
                    <div class = "col-sm-4">52-117-202-0002</div>
                    <div class = "col-sm-8"><strong>เครื่องโทรสาร</strong> : ยี่ห้อ SHARP รุ่น FO-3150		</div>
                    <!-- <div class = "col-sm-4">เปิดไม่ติด</div> -->
                  </div>
                  <div class = "row">
                    <div class = "col-sm-4">62-117-202-0356</div>
                    <div class = "col-sm-8"><strong>เครื่องปรับอากาศ</strong> : FOCUS AFT30S9/CSE30S9 30500 BTU			</div>
                    <!-- <div class = "col-sm-4">มีน้ำหยดและไม่เย็นมีเสียงดัง</div> -->
                  </div>
                </td>
                  
              

                <td>
                  <div class="custom-control custom-checkbox d-block bg-fusion-100" style = "padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <!-- <span class="width-1 height-1 rounded-circle d-block bg-secondary" style = "padding:0px;margin-left:20px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span> -->
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
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit' data-toggle="modal" data-target=".default-example-modal-right">
                    <i class="fa fa-gear">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="ni ni-trash">
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
              <tr>
                <td>
                  2
                </td>
                <td>
                  07 ก.ย. 65	
                </td>
                 <td>
                  สำนักจรรยาบรรณวิชาชีพและนิติการ
                </td>
                <td>
                  กลุ่มนิติการ	
                </td>
                <td>
                  <div class = "row">
                    <div class = "col-sm-4">62-117-416-0019</div>
                    <div class = "col-sm-8"><strong>เครื่องปรับอากาศ	</strong> : Tasaki 30000 BTU		</div>
                    <!-- <div class = "col-sm-4">เปิดไม่ติด</div> -->
                  </div>
                
                </td>
                  
              

                <td>
                  <div class="custom-control custom-checkbox d-block bg-info-800" style = "padding-left:0px;padding-right:0px;margin:0px;padding-bottom:0px;padding-top:4px;">
                      <!-- <span class="width-1 height-1 rounded-circle d-block bg-secondary" style = "padding:0px;margin-left:20px;margin-top:0px;margin-bottom:0px;margin-right:0px;"></span> -->
                      <label ><small class= "">ระหว่างดำเนินการ</small></label>
                  </div>
                  <label style = "margin:0px;"><small class= "">(8 ส.ค 66)</small></label>
                </td>

                <td>
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='view'>
                    <i class="ni ni-eye">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"
                  mode='edit' data-toggle="modal" data-target=".default-example-modal-right">
                    <i class="fa fa-gear">
                    </i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"
                  data-toggle="modal" data-target="#example-modal-alert">
                    <i class="ni ni-trash">
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
								<h5 class="modal-title">รายละเอียดครุภัณฑ์</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="fal fa-times"></i></span>
								</button>
						</div>
						<div class="modal-body">

			
							<div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;margin-top:8px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:0px;">
                    รหัสครุภัณฑ์
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;padding-top:0px;">
                    57-117-249-0003
                  </label>
                  
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ปีงบประมาณ
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:0px;">
                    2566
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    วัน/เดือน/ปี
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;padding-top:0px;">
                    2 ส.ค. 66
                  </label>
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เลขที่สัญญา
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                   <label class="form-label" for="" style = "margin:0;padding-top:0px;">
                    20/66
                  </label>
                </div>
                
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อผู้บริษัท
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:12px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;line-height:25px;">
                  <label class="form-label" for="" style = "margin:0;">
                    บริษัท ออนป้า จำกัด	<br> ที่อยู่<br>
                   ถ. พระรามที่ อาคารนวสร ชั้นที่ 12 111/1  3 แขวงบางคอแหลม เขตบางคอแหลม กรุงเทพมหานคร 10120<br>
                    เบอร์โทร 02-827-8298
                  </label>
                </div>
              </div>
            </div>
            

            <div class="panel-content fourd-form-row-a" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ส่วนงานเจ้าของ
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                   สำนักอำนวยการ
                  </label>  
               
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    กลุ่มงานเจ้าของ
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    กลุ่มการเงินและบัญชี
                  </label>  
               
                </div>
              </div>
            </div>


            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-top:10px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    สถานที่ตั้งครุภัณฑ์ 
                  </label>
                  <span class="text-danger stars"> </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  ห้องประชุมมาลากุล ชั้น 3 อาคาร 1 
                </div>
            
                <!-- <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ชื่อผู้บริจาค
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ชื่อผู้บริจาค" value="">
                </div> -->
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:5px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:14px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียดครุภัณฑ์	
                  </label>
                </div>
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ประเภท
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ครุภัณฑ์สำนักงาน (12230-00)	
                  </label>  
                
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายการ
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    พัดลม/พัดลมระบายอากาศ
                  </label>  
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:10px;padding-top:10px;line-height:25px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ยี่ห้อรุ่นขนาดและลักษณะ 
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-10 mb-10" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                   พัดลมระบายอากาศฝังฝ้าเพดาน MITSUBISHI รุ่น EX-20SC7T ขนาด 8 นิ้ว สีขาว
                </div>
            
               
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ราคาต่อหน่วย (บาท)
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label" for="" style = "margin:0;">
                    1,790 บาท
                  </label>
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    หมายเลขเครื่อง
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  
                   ex-1029389890
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รับประกัน (วัน)
                  </label>
                  <span class="text-danger stars"> </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  60
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    <!-- หมายเลขเครื่อง -->
                  </label>
                  <span class="text-danger stars">  </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <!-- <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="หมายเลขเครื่อง" value=""> -->
                </div>
              </div>
            </div>
						

						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-secondary" id = "btn_dialog_sub_form_close">Close</button>
								<!-- <button type="button" class="btn btn-primary">Add Item</button> -->
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

   table.myFormat tr td { font-size: 11px;padding:5px; }

  

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
      targets: [2,3,4,5,6,7],
      orderable: false,
    },
    {
     // "visible": false, "targets": 1
    },
    {
      targets: [0,3,5],
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
      targets: [0],
      className: "text-center",
    },
    {
      targets: [0],
      className: "text-right",
    },
    {
      targets: [],
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