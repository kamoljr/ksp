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
                      <select id="unit_name_search" name="unit_name_search" class="select2"
                      placeholder="ปีงบประมาณ">
                        <option value="">
                          2566
                        </option>
                        <option value="17">
                          2565
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
      ค้นหาโดย : ปีงบประมาณ 2566
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
          
            <button id="btnadd" type="button" class="btn btn-info" onclick="window.open('http://localhost/report/budget/yearstrategy.html', '_blank', 'noopener, noreferrer');
">
              <span class="fal fa-print fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                แสดงยุทธศาสตร์ปี แผนงานและพันธกิจ
              </span>
            </button>
          </div>
          <div class="frame-wrap mt-3 mb-0 w-100" style="padding-right: 15px;padding-left: 15px; text-align:center;display:inline;">
          
            <button id="btnadd" type="button" class="btn btn-info" onclick="window.open('http://localhost/report/budget/mission.html', '_blank', 'noopener, noreferrer');
">
              <span class="fal fa-print fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                ข้อเสนอทางยุทธศาสตร์ 
              </span>
            </button>
          </div>
          <div class="frame-wrap mt-3 mb-0 w-100" style="padding-bottom: 15px; text-align:right;display:inline;">
          
            <button id="btnadd" type="button" class="btn btn-info" onclick="window.open('http://localhost/report/budget/comparemission.html', '_blank', 'noopener, noreferrer');
">
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
                <img src="http://localhost/public//img/bgplanreport.png" alt="KSP WebApp" aria-roledescription="logo" style="width:100%;height:100%;">
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
                          <tr>
                           
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
                          </tr>
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
                          <tr>
                           
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
                          </tr>
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
                        <tr>
                          
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
                        </tr>
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
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                     
                     
                    </div>
                  </div>
              </td>
              <td style = "padding:0px;vertical-align: top;">
                <div class="">
                 
                  <h3 style = "padding-top:15px;text-align:center !important;align-items;font-weight:600;font-size:0.875rem;color:#333">
                      WO Strategies <span class="fw-300"><i></i></span>
                    </h3>
                    <div class="frame-wrap">
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                     
                     
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
                        <tr>
                         
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
                        </tr>
                       
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
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                     
                     
                    </div>
                </div>
              </td>
              <td style = "padding:0px;vertical-align: top;">
                <div class="">
                 
                  <h3 style = "padding-top:15px;text-align:center !important;align-items;font-weight:600;font-size:0.875rem;color:#333">
                      WT Strategies <span class="fw-300"><i></i></span>
                    </h3>
                    <div class="frame-wrap">
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                      <div class="col-md-12 mb-12" style = "padding-bottom:10px;">
                        <textarea class="form-control ist" id="example-textarea" rows="1"></textarea>
                      </div> 
                     
                     
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
 table.myFormat tr td { font-size: 8px;padding:5px; }

</style>

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>
    
$(document).ready(function() {
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
    orderable:false,
    "ordering": false,
    "paging": false,
    "info":     false,
    columnDefs: [{
     
    },
    {
      targets: [],
      className: "text-center",
    },
    {
      targets: [0],
      className: "text-left",
    }]

  });
  var table = $("#dynamic-table1").DataTable({
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
      targets: [],
      className: "text-center",
    },
    {
      targets: [0],
      className: "text-left",
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
      targets: [],
      className: "text-center",
    },
    {
      targets: [0],
      className: "text-left",
    }]

  });
  var table = $("#dynamic-table3").DataTable({
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
      targets: [],
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
  $(document).on('change', '.ist',
  function() {
    alert("บันทึกข้อมูลแล้ว");
  });
});

</script>