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
                    <div class="col-sm-12">
                      <label class="form-label" for="unit_name_search">
                        ปีงบประมาณ
                      </label>
                      <div id = "div_search_strategyyear_id"></div>
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
      <!-- ค้นหาโดย : ปีงบประมาณ 2566 -->
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-bottom: 15px;">
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
          <!-- content start -->
          <div class="frame-wrap mt-3 mb-0 w-100" style="padding-bottom: 15px;padding-left: 60px; text-align:left;display:inline;">
          
            <button id="btnadd" type="button" class="btn btn-info" onclick="window.open('http://<?=$ip_apps;?>/report/budget/yearstrategy.html', '_blank', 'noopener, noreferrer');">
              <span class="fal fa-print fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                แสดงยุทธศาสตร์ปี แผนงานและพันธกิจ
              </span>
            </button>
          </div>
          <div class="frame-wrap mt-3 mb-0 w-100" style="padding-right: 15px;padding-left: 15px; text-align:center;display:inline;">
          
            <button id="btnadd" type="button" class="btn btn-info" onclick="window.open('http://<?=$ip_apps;?>/report/budget/mission.html', '_blank', 'noopener, noreferrer');">
              <span class="fal fa-print fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                ข้อเสนอทางยุทธศาสตร์ 
              </span>
            </button>
          </div>
          <div class="frame-wrap mt-3 mb-0 w-100" style="padding-bottom: 15px; text-align:right;display:inline;">
          
            <button id="btnadd" type="button" class="btn btn-info" onclick="window.open('http://<?=$ip_apps;?>/report/budget/comparemission.html', '_blank', 'noopener, noreferrer');">
              <span class="fal fa-print fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                ยุทธศาสตร์เดิมและข้อเสนอยุทธศาสตร์ 
              </span>
            </button>
          </div><br>
          <table style = "width:100%;padding-top:30px !importantl;" class = "myFormat">
            <tr>
             
              <td style = "padding:0px;width:30%;vertical-align: top;"><br><br><br><br><br><br>
                <img src="http://<?=$ip_apps?>/public//img/bgplanreport.png" alt="KSP WebApp" aria-roledescription="logo" style="width:100%;height:100%;">
              </td>
              <td style = "padding:0px;vertical-align: top;">
                
                  <div class="panel-hdr">
                    <h2>
                      จุดแข็ง - STRENGTHS <span class="fw-300"><i></i></span>
                      <!-- point1 -->
                    </h2>
                    
                  </div>
                  <div class="panel-container show">
                    <div class="panel-content" style="padding: 0px;">
                      <!-- datatable start -->
                      <table id="dynamic-table" class="myFormat table table-md table-bordered table-hover table-striped w-100">
                        <thead class="bg-primary-600">
                          <tr>
                            <th class="text-center">
                              ประเด็น
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- <tr>
                           
                            <td>
                              09คณะกรรมการคุรุสภามีการกำหนดระเบียบปฏิบัติเกี่ยวกับการจัดตั้งหน่วยงานคุรุสภาในระดับจังหวัดเพื่อเปิดโอกาสให้เกิดการกระจายงานตามภารกิจของคุรุสภาลงสู่ระดับพื้นที่ในการให้บริการทางวิชาชีพแก่ผู้ประกอบวิชาชีพ และประชาชน ณ สำนักงานศึกษาธิการจังหวัด
                            </td>
                          </tr>
                          <tr>
                          
                            <td>
                              08คุรุสภาเป็นองค์การมหาชน สามารถออกระเบียบ กฎ ประกาศ คำสั่ง หลักเกณฑ์ เพื่อการบริหารงานอย่างคล่องตัวและมีประสิทธิภาพ
                            </td>
                          </tr>
                          <tr>
                           
                            <td>
                              10คณะกรรมการคุรุสภามีอำนาจในการจัดสวัสดิการให้แก่พนักงานเจ้าหน้าที่อย่างทั่วถึง และทัดเทียมส่วนราชการ
                            </td>
                          </tr>
                          <tr>
                          
                            <td>
                              13พนักงานเจ้าหน้าที่ มีความทุ่มเทและรับผิดชอบต่อภาระหน้าที่ที่ได้รับมอบหมาย
                            </td>
                          </tr>
                          <tr>
                           
                            <td>
                              15พนักงานเจ้าหน้าที่มีความอดทนสูงต่อความสภาพความกดดันในระหว่างการปฏิบัติงาน
                            </td>
                          </tr>
                          <tr>
                            
                            <td>
                              11คณะกรรมการคุรุสภามีการกำหนดระเบียบการจ่ายค่าตอบแทนพิเศษประจำปีให้แก่พนักงานเจ้าหน้าที่
                            </td>
                          </tr>
                          <tr>
                            
                            <td>
                              04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม
                            </td>
                          </tr>
                          <tr>
                           
                            <td>
                              07สำนักงานเลขาธิการคุรุสภามีระบบเทคโนโลยีดิจิทัลในการให้บริการแก่ผู้ประกอบวิชาชีพทางการศึกษาและประชาชน
                            </td>
                          </tr>
                          <tr>
                           
                            <td>
                              03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน
                            </td>
                          </tr>
                          <tr>
                            
                            <td>
                              20สำนักงานเลขาธิการคุรุสภามีระบบการสนับสนุนให้พนักงานเจ้าหน้าที่มีความก้าวหน้าในสายงาน
                            </td>
                          </tr> -->
                        </tbody>
                      </table>
                      <!-- datatable end -->
                      
                    </div>
                  </div>
                
              </td>
              <td style = "padding:0px;vertical-align: top;">
                
                  <div class="panel-hdr">
                    <h2>
                      จุดอ่อน - WEAKNESSES		 <span class="fw-300"><i></i></span>
                      <!-- point2 -->
                    </h2>
                    
                  </div>
                  <div class="panel-container show">
                    <div class="panel-content" style="padding: 0px;">
                      <!-- datatable start -->
                      <table id="dynamic-table1" class="table table-md table-bordered table-hover table-striped w-100">
                        <thead class="bg-fusion-50">
                          <tr>
                            
                            <th class="text-center">
                              ประเด็น
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- <tr>
                           
                            <td>
                              35การประสานงานระหว่างพนักงานเจ้าหน้าที่คุรุสภาในสำนักงานศึกษาธิการจังหวัดกับพนักงานเจ้าหน้าที่คุรุสภาขาดความชัดเจน และเป็นไปอย่างล่าช้า
                            </td>
                          </tr>
                          <tr>
                           
                            <td>
                              33ระบบสวัสดิการด้านการรักษาพยาบาลยังไม่หลากหลาย และตอบสนองต่อความต้องการของพนักงานเจ้าหน้าที่
                            </td>
                          </tr>
                          <tr>
                           
                            <td>
                              30สำนักงานเลขาธิการคุรุสภา ยังไม่มีส่วนงานที่มีหน้าที่เฉพาะในการจัดหารายได้ และการจัดหาสิทธิประโยชน์ให้แก่สมาชิกคุรุสภา รวมทั้งการพัฒนาระบบสวัสดิการ
                            </td>
                          </tr>
                          <tr>
                           
                            <td>
                              29พนักงานเจ้าหน้าที่คุรุสภาในศึกษาธิการจังหวัดไม่มีสายงานการบังคับบัญชาระหว่างพนักงานเจ้าหน้าที่ด้วยกันภายในจังหวัด ในการกำกับ ดูแลการปฏิบัติงานให้เกิดประสิทธิภาพสูงสุด
                            </td>
                          </tr>
                          <tr>
                            
                            <td>
                              39พระราชบัญญัติสภาครูและบุคลากรทางการศึกษา พ.ศ. ๒๕๔๖ ยังไม่เอื้อต่อการกระจายอำนาจสู่ระดับพื้นที่ และการตั้งหน่วยงานในกำกับของคุรุสภา
                            </td>
                          </tr>
                          <tr>
                           
                            <td>
                              37คุรุสภาใช้กฎ ระเบียบ ข้อบังคับ ที่อ้างอิงจากส่วนราชการ ทำให้การดำเนินงานไม่คล่องตัวตามเจตนาของการเป็นองค์การมหาชน
                            </td>
                          </tr>
                          <tr>
                            
                            <td>
                              32คุรุสภายังไม่มีวัฒนธรรมองค์กรที่เอื้อให้เกิดการเปลี่ยนแปลง และการพัฒนา
                            </td>
                          </tr>
                          <tr>
                         
                            <td>
                              38คุรุสภายังไม่มีการกำหนดระเบียบหรือหลักเกณฑ์เกี่ยวกับเงินเดือนข้ามขั้นของพนักงานเจ้าหน้าที่ผู้ที่เงินเดือนเต็มขั้น
                            </td>
                          </tr>
                          <tr>
                           
                            <td>
                              26สำนักงานเลขาธิการคุรุสภาขาดการติดตาม และวิเคราะห์ผลกระทบของการปรับเปลี่ยนโครงสร้างองค์กร ในแต่ละครั้ง
                            </td>
                          </tr>
                          <tr>
                      
                            <td>
                              31สำนักงานเลขาธิการคุรุสภาไม่มีการวิเคราะห์กระบวนงานในภาพรวมขององค์การ และการกำหนดงานหน้าที่งาน (Job Description) ของแต่ละตำแหน่งที่ละเอียด ชัดเจน เป็นธรรม ครบถ้วนทุกตำแหน่งงานในแต่ละระดับ
                            </td>
                          </tr> -->
                        </tbody>
                      </table>
                      <!-- datatable end -->
                      
                    </div>
                  </div>
                
              </td>
            </tr>
            <tr>
              <td style = "padding:0px;vertical-align: top;">
                
                <div class="panel-hdr">
									<h2>
										โอกาส - OPPORTUNITIES		<span class="fw-300"><i></i></span>
                    <!-- point3 -->
									</h2>
									
								</div>
								<div class="panel-container show">
									<div class="panel-content" style="padding: 0px;">
                    <!-- datatable start -->
                    <table id="dynamic-table2" class="table table-md table-bordered table-hover table-striped w-100">
                      <thead class="bg-info-600">
                        <tr>
                         
                          <th class="text-center">
                            ประเด็น
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr>
                          
                          <td>
                            65ประกาศสำนักงานปลัดกระทรวงศึกษาธิการ เรื่อง การแบ่งหน่วยงานภายในสำนักงานศึกษาธิการภาคและสำนักงานศึกษาธิการจังหวัดฯ การกำหนดอำนาจหน้าที่ให้กลุ่มบริหารงานบุคคลในศึกษาธิการจังหวัดสนับสนุนภารกิจของคุรุสภา
                          </td>
                        </tr>
                        <tr>
                         
                          <td>
                            58เทคโนโลยีดิจิทัล และเทคโนโลยีปัญญาประดิษฐ์ มีความก้าวหน้ามากขึ้น ช่วยเพิ่มประสิทธิภาพในการบริหารจัดการ และการให้บริการได้อย่างสะดวก รวดเร็ว
                          </td>
                        </tr>
                        <tr>
                         
                          <td>
                            67รัฐธรรมนูญแห่งราชอาณาจักรไทย กำหนดให้มีกลไก และระบบการผลิต คัดกรอง และพัฒนาผู้ประกอบวิชาชีพครูและอาจารย์ ให้ได้ผู้มีจิตวิญญาณของความเป็นครู มีความรู้ความสามารถอย่างแท้จริง
                          </td>
                        </tr>
                        <tr>
                        
                          <td>
                            61ยุทธศาสตร์ชาติ 20 ปี ด้านการปรับสมดุลและพัฒนาระบบบริหารจัดการภาครัฐ กำหนดเป้าหมายให้หน่วยงานภาครัฐมีขนาดเล็กลง มีความยืดหยุ่นไม่ยึดติดโครงสร้างแบบราชการ
                          </td>
                        </tr>
                        <tr>
                        
                          <td>
                            64คำสั่งหัวหน้าคณะรักษาความสงบแห่งชาติที่ 19/60 กำหนดให้ศึกษาธิการจังหวัดมีอำนาจหน้าที่และความรับผิดชอบเกี่ยวกับการดำเนินงานตามภารกิจของคุรุสภา
                          </td>
                        </tr>
                        <tr>
                         
                          <td>
                            56ภาครัฐมีแนวทางการขยายระยะเวลาการเกษียณอายุราชการให้สอดคล้องกับลักษณะงานและศักยภาพของผู้ปฏิบัติงาน รวมทั้งการเปลี่ยนแปลงโครงสร้างประชากรของสังคมไทย
                          </td>
                        </tr>
                        <tr>
                         
                          <td>
                            57องค์การมหาชนตามพระราชบัญญัติเฉพาะมีการริเริ่มความร่วมมือระหว่างหน่วยงาน
                          </td>
                        </tr>
                        <tr>
                         
                          <td>
                           60รัฐธรรมนูญแห่งราชอาณาจักรไทย กำหนดให้จัดตั้งกองทุนเพื่อใช้ในการช่วยเหลือผู้ขาดแคลนทุนทรัพย์ เพื่อลดความเหลื่อมล้ำในการศึกษา และเพื่อเสริมสร้างและพัฒนาคุณภาพและประสิทธิภาพครู โดยให้รัฐจัดสรรงบประมาณให้แก่กองทุน หรือใช้มาตรการหรือกลไกทางภาษีรวมทั้งการให้ผู้บริจาคทรัพย์สินเข้ากองทุนได้รับประโยชน์ในการลดหย่อนภาษีด้วย
                          </td>
                        </tr>
                        <tr>
                          
                          <td>
                            66รัฐธรรมนูญแห่งราชอาณาจักรไทย กำหนดให้มีการปรับปรุงและพัฒนาการบริหารงานบุคคลภาครัฐเพื่อจูงใจให้ผู้มีความรู้ ความสามารถเข้ามาทํางานในหน่วยงานของรัฐ และสามารถเจริญก้าวหน้าได้ตามความสามารถ และผลสัมฤทธิ์ของงานของแต่ละบุคคล
                          </td>
                        </tr>
                        <tr>
                          
                          <td>
                            62ยุทธศาสตร์ชาติ 20 ปี ด้านการปรับสมดุลและพัฒนาระบบบริหารจัดการภาครัฐ กำหนดยุทธศาสตร์ภาครัฐมีความทันสมัย มีอัตรากำลังที่เหมาะสม มีระบบบริหารจัดการและพัฒนาบุคลากรให้สามารถสนองความต้องการในการปฏิบัติงาน มีความก้าวหน้าในอาชีพ 
                          </td>
                        </tr> -->
                      </tbody>
                    </table>
                    <!-- datatable end -->
										
									</div>
								</div>

              </td>
              <td style = "padding:0px;vertical-align: top;">
                <div class="item-center" style = "text-align:center !important;">
                    <h3 style = "padding-top:15px;text-align:center !important;align-items;font-weight:600;font-size:0.875rem;color:#333">
                      SO Strategies <span class="fw-300"><i></i></span>
                    </h3>

                    <div class="frame-wrap">
                      <?
                        for ($x = 1; $x <= 10; $x++) {
                      ?>
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_<?=$x?>" name="strategy_swot_type_so_<?=$x?>" rows="1" onchange = save_strategy_swot('so',<?=$x?>)></textarea>
                      </div> 
                      <?
                        }
                      ?>
                      <!-- <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div>  -->
                     
                     
                    </div>
                  </div>
              </td>
              <td style = "padding:0px;vertical-align: top;">
                <div class="">
                 
                  <h3 style = "padding-top:15px;text-align:center !important;align-items;font-weight:600;font-size:0.875rem;color:#333">
                      WO Strategies <span class="fw-300"><i></i></span>
                    </h3>
                    <div class="frame-wrap">
                      <?
                        for ($x = 1; $x <= 10; $x++) {
                      ?>
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_wo_<?=$x?>" name="strategy_swot_type_wo_<?=$x?>" rows="1" onchange = save_strategy_swot('wo',<?=$x?>)></textarea>
                      </div> 
                      <?
                        }
                      ?>
                      <!-- <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div>  -->
                     
                     
                    </div>
                    
                </div>
              </td>
            </tr>
            <tr>
              <td style = "padding:0px;vertical-align: top;">
                <div class="panel-hdr">
									<h2>
										ภัยคุกคาม - THREATS				 <span class="fw-300"><i></i></span>
                    <!-- point4 -->
									</h2>
									
								</div>
								<div class="panel-container show">
									<div class="panel-content" style="padding: 0px;">
                    <!-- datatable start -->
                    <table id="dynamic-table3" class="table table-md table-bordered table-hover table-striped w-100">
                      <thead class="bg-warning-600">
                        <tr>
                         
                          <th class="text-center">
                            ประเด็น
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr>
                         
                          <td>
                            78นโยบายของกระทรวงศึกษาธิการ ไม่ชัดเจน  เปลี่ยนแปลงบ่อยทำให้ขาดความต่อเนื่องในการดำเนินงานของสำนักงาน
                          </td>
                        </tr>
                        <tr>
                         
                          <td>
                           71ผู้ประกอบวิชาชีพมีจำนวนมากและบางส่วนยังไม่เข้าใจ หรือมีความเข้าใจผิดในบทบาทของคุรุสภา และไม่เห็นความแตกต่างระหว่างผู้รับ/ไม่รับใบอนุญาตประกอบวิชาชีพ
                          </td>
                        </tr>
                        <tr>
                          
                          <td>
                            75แนวโน้มงบประมาณด้านบุคลากรที่ได้รับจัดสรรจากสำนักงบประมาณล
                          </td>
                        </tr>
                        <tr>
                        
                          <td>
                            77นโยบายของภาครัฐในการไม่ขยายกรอบอัตรากำลังและควบคุมค่าใช้จ่ายด้านบุคลากร
                          </td>
                        </tr>
                        <tr>
                         
                          <td>
                            76การแข่งขันของตลาดแรงงานในเรื่องค่าตอบแทน สวัสดิการ ส่งผลให้เกิดการลาออกของบุคลากร
                          </td>
                        </tr>
                       
                          
                          <td>
                            73. การเข้าสู่สังคมผู้สูงอายุ ทำให้เกิดต้นทุนในการดำรงชีพภายหลักเกษียณอายุสูงขึ้น
                          </td>
                        </tr> -->
                       
                      </tbody>
                    </table>
                    <!-- datatable end -->
										
									</div>
								</div>
              </td>
              <td style = "padding:0px;vertical-align: top;">
                <div class="">
                 
                  <h3 style = "padding-top:15px;text-align:center !important;align-items;font-weight:600;font-size:0.875rem;color:#333">
                      ST Strategies <span class="fw-300"><i></i></span>
                    </h3>
                    <div class="frame-wrap">

                      <?
                        for ($x = 1; $x <= 10; $x++) {
                      ?>
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_st_<?=$x?>" name="strategy_swot_type_st_<?=$x?>" rows="1" onchange = save_strategy_swot('st',<?=$x?>)></textarea>
                      </div> 
                      <?
                        }
                      ?>
                      <!-- <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div>  -->
                      <!-- <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div>  -->
                     
                     
                    </div>
                </div>
              </td>
              <td style = "padding:0px;vertical-align: top;">
                <div class="">
                 
                  <h3 style = "padding-top:15px;text-align:center !important;align-items;font-weight:600;font-size:0.875rem;color:#333">
                      WT Strategies <span class="fw-300"><i></i></span>
                    </h3>
                    <div class="frame-wrap">
                      <?
                        for ($x = 1; $x <= 10; $x++) {
                      ?>
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_wt_<?=$x?>" name="strategy_swot_type_wt_<?=$x?>" rows="1" onchange = save_strategy_swot('wt',<?=$x?>)></textarea>
                      </div> 
                      <?
                        }
                      ?>
                      <!-- <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist form-ele clear-element" id="strategy_swot_type_so_1" name="strategy_swot_type_so_1" rows="1"></textarea>
                      </div>  -->
                     
                     
                    </div>
                </div>
              </td>
            </tr>
          </table>
          <!-- content end -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->
<style>
 table.myFormat tr td { font-size: 12px;padding:5px; }

</style>




<script>

function save_strategy_swot(swot,runno){
  // console.log('swot'+swot);
  // console.log('runno'+runno);
  
  // console.log($("#strategy_swot_type_"+swot+"_"+runno).val());
  text_value = $("#strategy_swot_type_"+swot+"_"+runno).val();
  // -----ใส่ค่า--------
	 var aoData = "search_strategyyear_id="+$("#search_strategyyear_id").val()+"&swot="+swot+"&runno="+runno+"&text_value="+text_value;
	// var aoData = $('#form_save').serialize();
	//----------------
	//console.log(aoData);
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/save_data",
		dataType: "json",
		beforeSend: function () {
			//$("#overlay").fadeIn(200);

		},
		data: aoData,
		success: function(response) {
			//console.log("response=".response);
			
			bootbox.alert('เพิ่มกลยุทธ์เรียบร้อยแล้ว');
				
			
		},
		complete: function () {
			
		},
		error: function(response) {
				//console.log(response);
		}
	});
}

$(document).ready(function() {
	// ------------------open สร้าง select------------------------
	

	//-------open------
	const select_var2 = {
		ele_name:"search_strategyyear_id",
		value_edit:"<?//=$para1?>",
		option_type:"",
		placeholder:"ปีงบประมาณ",
		classselect:"select2 searchdata",
	};
	create_one_select(select_var2);
	//--------close-----
  //-------open------
	// const select_var3 = {
	// 	ele_name:"search_structure_unit_id",
	// 	value_edit:"<?//=$para1?>",
	// 	option_type:"all",
	// 	placeholder:"ส่วนงาน",
	// 	classselect:"select2 searchdata",
	// };
	//create_one_select(select_var3);
	//--------close-----
  //-------open------
	// const select_var4 = {
	// 	ele_name:"search_structure_group_id",
	// 	value_edit:"<?//=$para1?>",
	// 	option_type:"all",
	// 	placeholder:"กลุ่มงาน",
	// 	classselect:"select2 searchdata",
  //   ctr1:$("#search_structure_unit_id").val(),
	// };
	//create_one_select(select_var4);
	//--------close-----
  //--------open-----
	// $(document).on('change', '#search_structure_unit_id', function() {
     
  //   const select_var5 = {
  //     ele_name:"search_structure_group_id", // ชื่อ element
  //     value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
  //     option_type:"all", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
  //     placeholder:"กลุ่มงาน",
  //     classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
  //     ctr1:this.value,
  //   };
  //   // console.log(this.value);
  //   create_one_select(select_var5);
  //   $(".select2").select2();
  
  // });
	//--------close-----
  //-------open------
  // if ($("#search_strategylvone_id").val() == ""){
  //   $('#search_strategylvtwo_id').empty()
  //   $('#search_strategylvtwo_id').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
  // }else{
  //   const select_var1 = {
  //     ele_name:"search_strategylvtwo_id", 
  //     value_edit:"<?//=$para1?>",
  //     option_type:"",
  //     placeholder:"แผนระดับ 2",
  //     classselect:"select2 searchdata",
  //     ctr1:$("#search_strategylvone_id").val(),
  //   };
  //   create_one_select(select_var1);
  // }
	
	//--------close-----
  //-------open------
  // if ($("#search_strategylvtwo_id").val() == ""){
  //   $('#search_strategylvthree_id').empty()
  //   $('#search_strategylvthree_id').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
  // }else{
  //   const select_var10 = {
  //     ele_name:"search_strategylvthree_id", 
  //     value_edit:"<?//=$para1?>",
  //     option_type:"",
  //     placeholder:"แผนระดับ 3",
  //     classselect:"select2 searchdata",
  //     ctr1:$("#search_strategylvtwo_id").val(),
  //   };
  //   create_one_select(select_var10);
  // }
	
	//--------close-----
	//--------open-----
	// $(document).on('change', '#search_strategylvone_id', function() {
  //   if (this.value == ""){
  //     $('#search_strategylvtwo_id').empty()
  //     $('#search_strategylvtwo_id').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
  //   }else{
  //     const select_var2 = {
  //       ele_name:"search_strategylvtwo_id", // ชื่อ element
  //       value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
  //       option_type:"", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
  //       placeholder:"แผนระดับ2",
  //       classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
  //       ctr1:this.value,//เงื่อนไขแสดงข้อมูล
  //     };
  //     // console.log(this.value);
  //     create_one_select(select_var2);
  //     $(".select2").select2();


  //     if ($("#search_strategylvtwo_id").val() == ""){
  //       $('#search_strategylvthree_id').empty()
  //       $('#search_strategylvthree_id').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
  //     }else{
  //       const select_var11 = {
  //         ele_name:"search_strategylvthree_id", // ชื่อ element
  //         value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
  //         option_type:"", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
  //         placeholder:"แผนระดับ3",
  //         classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
  //         ctr1:$("#search_strategylvtwo_id").val(),
  //       };
  //       // console.log(this.value);
  //       create_one_select(select_var11);
  //       $(".select2").select2();
  //     }
      
  //   }
		
  // });
	//--------close-----


  //--------open-----
	// $(document).on('change', '#search_strategylvtwo_id', function() {
  //     if (this.value == ""){
  //       $('#search_strategylvthree_id').empty()
  //       $('#search_strategylvthree_id').append('<option selected="selected" value="">ไม่พบข้อมูล</option>');
  //     }else{
  //       const select_var11 = {
  //         ele_name:"search_strategylvthree_id", // ชื่อ element
  //         value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
  //         option_type:"", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
  //         placeholder:"แผนระดับ3",
  //         classselect:"select2 searchdata", //ใส่ class ที่ต้องการ 
  //         ctr1:this.value,
  //       };
  //       // console.log(this.value);
  //       create_one_select(select_var11);
  //       $(".select2").select2();
  //     }
      
    
		
  // });
	//--------close-----
  
  
	searchdata();
	// ------------------close สร้าง select ทั้งหมด------------------------

	$(".select2").select2();
  
  
	
  
	$(document).ready(function() {
		$('.ele_select_add').select2({
			dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
		});
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
			serverSide: true,
			bProcessing: true,
			iDisplayLength: 8,
			bServerSide: true,
      orderable:false,
      "ordering": false,
      "paging": false,
      "info":     false,
			sAjaxSource: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/load_data",
			async: false,
			aaSorting: [],
			fnServerParams: function(aoData) {
				var acolumns = this.fnSettings().aoColumns,
				columns = [];
				$.each(acolumns, function(i, item) {
					columns.push(item.data);
				});
				aoData.push({
					name: "columns",
					value: columns,
				});

				//เปิด แก้ไข ใส่ค่า ตัวค้นหา
				aoData.push({
						name: 'search_strategyyear_id',
						value: $("#search_strategyyear_id").val(),
				});
				aoData.push({
						name: 'swot',
						value: 's',
				});
			},
			columns: [
					// เปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
					
					{
						data: "issues",
					}
					
					//ปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
			],
			order: [
					[0, "desc"]
			],
			lengthMenu: [
					[10, 25, 50, 100],

					[10, 25, 50, 100],
			],
			oLanguage: {
					sLengthMenu: "_MENU_",
			},
			fnInitComplete: function() {
					//oTable.fnAdjustColumnSizing();
			},
			fnServerData: function(sSource, aoData, fnCallback) {
					$.ajax({
							dataType: "json",
							async: true,
							type: "POST",
							url: sSource,
							data: aoData,
							success: fnCallback,
					});
			},
			fnDrawCallback: function() {
					$("body").css("min-height", $("#table1 tr").length * 50 + 200);
					$(window).trigger("resize");
			},
			// เปิด แก้ไข การเรียง
			columnDefs: [{
							
					},
					{
							// targets: [0],
							// className: "text-center",
					},
			],
			// ปิด แก้ไข การเรียง
	});
// ------------------close datatable------------------------

var table = $("#dynamic-table1").DataTable({
			orderCellsTop: true,
			fixedHeader: true,
			bLengthChange: false,
			searching: false,
			bAutoWidth: false,
			bStateSave: true,
			processing: true,
			bPaginate: true,
			serverSide: true,
			bProcessing: true,
			iDisplayLength: 8,
			bServerSide: true,
      orderable:false,
      "ordering": false,
      "paging": false,
      "info":     false,
			sAjaxSource: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/load_data",
			async: false,
			aaSorting: [],
			fnServerParams: function(aoData) {
				var acolumns = this.fnSettings().aoColumns,
				columns = [];
				$.each(acolumns, function(i, item) {
					columns.push(item.data);
				});
				aoData.push({
					name: "columns",
					value: columns,
				});

				//เปิด แก้ไข ใส่ค่า ตัวค้นหา
				aoData.push({
						name: 'search_strategyyear_id',
						value: $("#search_strategyyear_id").val(),
				});
				aoData.push({
						name: 'swot',
						value: 'w',
				});
			},
			columns: [
					// เปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
					
					{
						data: "issues",
					}
					
					//ปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
			],
			order: [
					[0, "desc"]
			],
			lengthMenu: [
					[10, 25, 50, 100],

					[10, 25, 50, 100],
			],
			oLanguage: {
					sLengthMenu: "_MENU_",
			},
			fnInitComplete: function() {
					//oTable.fnAdjustColumnSizing();
			},
			fnServerData: function(sSource, aoData, fnCallback) {
					$.ajax({
							dataType: "json",
							async: true,
							type: "POST",
							url: sSource,
							data: aoData,
							success: fnCallback,
					});
			},
			fnDrawCallback: function() {
					$("body").css("min-height", $("#table1 tr").length * 50 + 200);
					$(window).trigger("resize");
			},
			// เปิด แก้ไข การเรียง
			columnDefs: [{
							
					},
					{
							// targets: [0],
							// className: "text-center",
					},
			],
			// ปิด แก้ไข การเรียง
	});
// ------------------close datatable------------------------
	var table = $("#dynamic-table2").DataTable({
			orderCellsTop: true,
			fixedHeader: true,
			bLengthChange: false,
			searching: false,
			bAutoWidth: false,
			bStateSave: true,
			processing: true,
			bPaginate: true,
			serverSide: true,
			bProcessing: true,
			iDisplayLength: 8,
			bServerSide: true,
      orderable:false,
      "ordering": false,
      "paging": false,
      "info":     false,
			sAjaxSource: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/load_data",
			async: false,
			aaSorting: [],
			fnServerParams: function(aoData) {
				var acolumns = this.fnSettings().aoColumns,
				columns = [];
				$.each(acolumns, function(i, item) {
					columns.push(item.data);
				});
				aoData.push({
					name: "columns",
					value: columns,
				});

				//เปิด แก้ไข ใส่ค่า ตัวค้นหา
				aoData.push({
						name: 'search_strategyyear_id',
						value: $("#search_strategyyear_id").val(),
				});
				aoData.push({
						name: 'swot',
						value: 'o',
				});
			},
			columns: [
					// เปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
				
					{
						data: "issues",
					}
					
					//ปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
			],
			order: [
					[0, "desc"]
			],
			lengthMenu: [
					[10, 25, 50, 100],

					[10, 25, 50, 100],
			],
			oLanguage: {
					sLengthMenu: "_MENU_",
			},
			fnInitComplete: function() {
					//oTable.fnAdjustColumnSizing();
			},
			fnServerData: function(sSource, aoData, fnCallback) {
					$.ajax({
							dataType: "json",
							async: true,
							type: "POST",
							url: sSource,
							data: aoData,
							success: fnCallback,
					});
			},
			fnDrawCallback: function() {
					$("body").css("min-height", $("#table1 tr").length * 50 + 200);
					$(window).trigger("resize");
			},
			// เปิด แก้ไข การเรียง
			columnDefs: [{
							
					},
					{
							// targets: [0],
							// className: "text-center",
					},
			],
			// ปิด แก้ไข การเรียง
	});
// ------------------close datatable------------------------
var table = $("#dynamic-table3").DataTable({
			orderCellsTop: true,
			fixedHeader: true,
			bLengthChange: false,
			searching: false,
			bAutoWidth: false,
			bStateSave: true,
			processing: true,
			bPaginate: true,
			serverSide: true,
			bProcessing: true,
			iDisplayLength: 8,
			bServerSide: true,
      orderable:false,
      "ordering": false,
      "paging": false,
      "info":     false,
			sAjaxSource: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/load_data",
			async: false,
			aaSorting: [],
			fnServerParams: function(aoData) {
				var acolumns = this.fnSettings().aoColumns,
				columns = [];
				$.each(acolumns, function(i, item) {
					columns.push(item.data);
				});
				aoData.push({
					name: "columns",
					value: columns,
				});

				//เปิด แก้ไข ใส่ค่า ตัวค้นหา
				aoData.push({
						name: 'search_strategyyear_id',
						value: $("#search_strategyyear_id").val(),
				});
				aoData.push({
						name: 'swot',
						value: 't',
				});
			},
			columns: [
					// เปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
				
					{
						data: "issues",
					}
					
					//ปิด แก้ไข ใส่ค่า ที่แดสง ใน คอลัมภ์
			],
			order: [
					[0, "desc"]
			],
			lengthMenu: [
					[10, 25, 50, 100],

					[10, 25, 50, 100],
			],
			oLanguage: {
					sLengthMenu: "_MENU_",
			},
			fnInitComplete: function() {
					//oTable.fnAdjustColumnSizing();
			},
			fnServerData: function(sSource, aoData, fnCallback) {
					$.ajax({
							dataType: "json",
							async: true,
							type: "POST",
							url: sSource,
							data: aoData,
							success: fnCallback,
					});
			},
			fnDrawCallback: function() {
					$("body").css("min-height", $("#table1 tr").length * 50 + 200);
					$(window).trigger("resize");
			},
			// เปิด แก้ไข การเรียง
			columnDefs: [{
							
					},
					{
							// targets: [0],
							// className: "text-center",
					},
			],
			// ปิด แก้ไข การเรียง
	});
// ------------------close datatable------------------------
// ------------------open ค้าหา จุดที่ 1/2-----------------------
	$(document).on('change', '.searchdata', function() {
      $(".clear-element").val('');
			searchdata();
	});
// ------------------close ค้าหา จุดที่ 1/2-----------------------



	// ------------------open แกไข จุดที่ 1/2-----------------------
	$('#dynamic-table tbody').on('click', 'td .edit-data', function() {
			// let mode = $(this).attr("mode");
			// var tr = $(this).closest('tr');
			// var row = table.row(tr);
			// var d = row.data();
			// editdata(d, mode);   
	});
	// ------------------close แกไข จุดที่ 1/2-----------------------


	// ------------------open เพิ่ม จุดที่ 1/1-----------------------
	$(document).on('click', '#btnadd', function() {
		$("#form_add_lbl_strategyyear").text($("#search_strategyyear_id option:selected" ).text());
		// $("#form_add_lbl_strategylvtwo").text($("#search_strategylvtwo_id option:selected" ).text());
		// $("#form_add_lbl_strategylvthree").text($("#search_strategylvthree_id option:selected" ).text());
		
		
		
		$("#ids").val('');
		$(".lblmode").text("เพิ่ม");
		$("#icon_add_form").show();
		$("#icon_edit_form").hide();
		$("#icon_view_form").hide();

		$(".div_show_rowid").hide();

		$(".clear-element").val('');
		
		
			
		$('.form-ele').prop('disabled', false);

		$('.stars').show(); // ซ่อนดาวแดง

		$(".dialog-data").show();
		$(".dialog-success").hide();

		$("#btn_save_change").show();
		$("#btn_dialog_close").show();
    // --------open-----
    let aoData = "ids=" + $("#search_strategyyear_id").val();
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/get_checkbox",
			dataType: "json",
			beforeSend: function () {
				
			},
			data: aoData,
			success: function (response) {
        str_select = '';
        str_select = str_select+'<div class="frame-wrap" >';
        str_select = str_select+'<div class="demo color-fusion-500">';
				$.each(response,function(i){
          selected = '';
          //if (select_var.value_edit == response[i].field_id){selected = 'selected';}
          
          

          str_select = str_select+'<div class="custom-control custom-checkbox">';
          str_select = str_select+'<input type="checkbox" class="custom-control-input" id="plantargetlvfour_id_multi_'+response[i].field_id+'" name="plantargetlvfour_id_multi[]" value = '+response[i].field_id+'>';
          str_select = str_select+'<label class="custom-control-label" for="plantargetlvfour_id_multi_'+response[i].field_id+'">'+response[i].field_name+'</label>';
          str_select = str_select+' </div>';


          
        });
        str_select = str_select+'</div>';
        str_select = str_select+'</div>';
        $("#div_plantargetlvfour_id_add").html(str_select);
			},
			complete: function () {
				
			},
			error: function (response) {
				//console.log(response);
			}
		});
			// ------------------close ---------------------
	 });
  


	// ------------------close ---------------------


	//------------------ไม่ต้องแก้------------------
	$(document).on('click', '#btn_dialog_close', function() {//ปุ่มปิด dialog
			$('.default-example-modal-right').modal('toggle');
	});
	//------------------ปิด ไม่ต้องแก้------------------

	
	
	$("#form_save").validate({
		rules: {
			policyksp_add: "required",
			
		},
		messages: {
			policyksp_add: "กรุณาป้อน นโยบาย",
			
		},
		errorPlacement: function(error, element) {
			if (element.is(":radio")) {
				error.appendTo(element.parents('.form-group'));
			} else { // This is the default behavior 
				error.insertAfter(element);
			}
		},
		submitHandler: function(form) {
			savedata();
		}
	});
});


	// ------------------open ค้าหา จุดที่ 2/2-----------------------
	function searchdata(){
	
		text1 = "นโยบาย : ";
		sval1 = $("#search_strategyyear_id option:selected" ).text();
		if (sval1 == '') { sval1 = 'ทั้งหมด'; }
		text1 = text1+"<b>"+sval1+"</b>";

		// text2 = "แผนระดับ2 : ";
		// sval2 = $("#search_strategylvtwo_id option:selected" ).text();
		// if (sval2 == '') { sval2 = 'ทั้งหมด'; }
		// text2 = text2+"<b>"+sval2+"</b>";

		// text3 = "แผนระดับ3 : ";
		// sval3 = $("#search_strategylvthree_id option:selected" ).text();
		// if (sval3 == '') { sval3 = 'ทั้งหมด'; }
		// text3 = text3+"<b>"+sval3+"</b>";
  
		txt_all = text1+"&ensp;&ensp;&ensp;";
		let txt = `
		<strong>ผลการค้นหา : </strong>
		${txt_all}
		`;

		$("#searchresults").html(txt);

		$(function(){
			table1 = $('#dynamic-table1').DataTable();
			table1.draw();
			table2 = $('#dynamic-table2').DataTable();
			table2.draw();
			table3 = $('#dynamic-table3').DataTable();
			table3.draw();
			table = $('#dynamic-table').DataTable();
			table.draw();
		});
    editdata();
	}
	// ------------------close ค้าหา จุดที่ 1/2-----------------------
// ------------------open แกไข จุดที่ 2/2-----------------------
	function editdata() {
    // $("#form_add_lbl_strategyyear").text($("#search_strategyyear_id option:selected" ).text());
		// $("#form_add_lbl_strategylvone").text($("#search_strategylvone_id option:selected" ).text());
		// $("#form_add_lbl_strategylvtwo").text($("#search_strategylvtwo_id option:selected" ).text());
		// $("#form_add_lbl_strategylvthree").text($("#search_strategylvthree_id option:selected" ).text());
		// --------open-----
    let aoData1 = "search_strategyyear_id=" + $("#search_strategyyear_id").val();
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/loaddata_ex",
			dataType: "json",
			beforeSend: function () {
				
			},
			data: aoData1,
			success: function (response) {
       
				$.each(response,function(i){
          //for="plantargetlvfour_id_multi_'+response[i].field_id+'">'+response[i].field_name+'</
          $("#strategy_swot_type_"+response[i].strategy_swot_type+"_"+response[i].runno).val(response[i].strategy_swot);

          
        });
      
			},
			complete: function () {
				
			},
			error: function (response) {
				//console.log(response);
			}
		});

	}
	// ------------------open แกไข จุดที่ 2/2-----------------------

// ------------------open ลบ จุดที่ 1/1-----------------------

function deldata() {
	$("#del_detail").text('');
	var aoData = 'ids='+$("#ids").val()+"&for_log_app_id=<?=$app_id?>&for_log_app_name=<?=$app_name?>";
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/del_data",
		dataType: "json",
		beforeSend: function () {
			$("#overlay").fadeIn(200);　
		},
		data: aoData,
		success: function(response) {
			if (response == "cannotdel"){
				alert("รายการถูกใช้แล้ว ไม่สามารถลบได้");
			}
			GoCurrentPage();
				
		},
		complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
			setTimeout(function(){
				
				$("#overlay").fadeOut(200);
				//console.log("ss");
			},100);
		},
		error: function(response) {
				//console.log(response);
		}
	});
}

function find_count_reccord(url,aoData) { // not found return 0
	var aoData = aoData;
	ans = "";
	$.ajax({
			type: "POST",
			url: url,
			dataType: "json",
			async:false,
			beforeSend: function () {

			},
			data: aoData,
			success: function(response) {
				ans = response[0].count_reccord;
			},
			complete: function () {
				
			},
			error: function(response) {
		
			}
	});
	return ans;
}

function set_del_id(ids){
	$("#ids").val(ids);
	$("#del_detail").text('รหัส ' + ids);  
	url = "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/chk_del";
	aoData = 'ids='+ids;// เงื่อนไขการลบ
	ans = find_count_reccord(url, aoData);
	//ans = 0;
	if (ans == 0) {
		console.log("not found");
		$("#btn_del_data").show();
		$("#div_del_detail").hide();
	} else { 
		console.log('found');
		$("#btn_del_data").hide();
		$("#div_del_detail").show();
	}
}
// ------------------close ลบ จุดที่ 1/1-----------------------

//------------------ไม่ต้องแก้------------------
// function format(d) {
// 	$(".dialog-success").hide();
// 	return `<?//=view("{$description_en}/{$pages}/{$pages}add.php")?>`;
// }
function GoCurrentPage(){
	var table = $('#dynamic-table').DataTable();
	var info = table.page.info();
	var CurrentPage = info.page;
	table.page(CurrentPage).draw(false);
}
//------------------ปิด ไม่ต้องแก้------------------


// ------------------open save จุดที่ 1/1-----------------------
function savedata() {
	
	// -----ใส่ค่า--------
	 var aoData = $('#form_save').serialize()+"&search_strategyyear_id="+$("#search_strategyyear_id").val();
	// var aoData = $('#form_save').serialize();
	//----------------
	console.log(aoData);
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/save_data",
		dataType: "json",
		beforeSend: function () {
			$("#overlay").fadeIn(200);　
		},
		data: aoData,
		success: function(response) {
			//console.log("response=".response);
			
				$(".dialog-data").hide();
				$(".dialog-success").show();


				$("#btn_save_change").hide();
				$("#btn_dialog_close").hide();
				
				setTimeout(() => {
					if ($("#ids").val() == "") {
						table = $('#dynamic-table').DataTable();
						table.draw();
					} else { 
						GoCurrentPage();
					}
					
					$('.default-example-modal-right').modal('toggle');
				}, "500");
			
		},
		complete: function () {
			$("#overlay").fadeOut(200);
		},
		error: function(response) {
				//console.log(response);
		}
	});
}
// ------------------close save จุดที่ 1/1-----------------------




</script>
<style>
.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>

