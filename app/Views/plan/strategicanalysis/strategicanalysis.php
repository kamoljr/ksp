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
      ค้นหาโดย : ปีงบประมาณ 2566
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container" >
        <div class="panel-content" style="padding-top: 0px;">
          <div class="frame-wrap mt-3 mb-0 w-100" style="padding-bottom: 15px; text-align:right;">
            <!-- <button id="btnadd" type="button" class="btn btn-info" onclick="window.location.href = 'http://<?=$ip_apps;?>/report/budget/strategicanalysis.htm','_blank'"> -->
            <button id="btnadd" type="button" class="btn btn-info" onclick="window.open('http://<?=$ip_apps;?>/report/budget/strategicanalysis.htm', '_blank', 'noopener, noreferrer');">
              <span class="fal fa-print fa-2x" style="padding-right:10px;">
              </span>
              <span style="padding-top:5px;">
                ตำแหน่งเชิงยุทธศาสตร์
              </span>
            </button>
          </div>
          <!-- content-->
          <div class="row">
						<div class="col-lg-12 col-xl-6">
							<!--Heading Formats-->
							<div id="panel-1" class="panel">
								<div class="panel-hdr">
									<h2>
										จุดแข็ง - STRENGTHS <span class="fw-300"><i></i></span>
                    <!-- point1 -->
									</h2>
									
								</div>
								<div class="panel-container show">
									<div class="panel-content" style="padding-top: 0px;">
                    <!-- datatable start -->
                    <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
                      <thead class="bg-primary-600">
                        <tr>
                          
                          <th class="text-center" width = "20px;">
                            เปอร์เซ็นต์
                          </th>
                          <th class="text-center">
                            ประเด็น
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr>
                          <td>
                            1
                          </td>
                          <td>
                            7.47
                          </td>
                          <td>
                            09คณะกรรมการคุรุสภามีการกำหนดระเบียบปฏิบัติเกี่ยวกับการจัดตั้งหน่วยงานคุรุสภาในระดับจังหวัดเพื่อเปิดโอกาสให้เกิดการกระจายงานตามภารกิจของคุรุสภาลงสู่ระดับพื้นที่ในการให้บริการทางวิชาชีพแก่ผู้ประกอบวิชาชีพ และประชาชน ณ สำนักงานศึกษาธิการจังหวัด
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            6.67%
                          </td>
                          <td>
                            08คุรุสภาเป็นองค์การมหาชน สามารถออกระเบียบ กฎ ประกาศ คำสั่ง หลักเกณฑ์ เพื่อการบริหารงานอย่างคล่องตัวและมีประสิทธิภาพ
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            4.63%
                          </td>
                          <td>
                            10คณะกรรมการคุรุสภามีอำนาจในการจัดสวัสดิการให้แก่พนักงานเจ้าหน้าที่อย่างทั่วถึง และทัดเทียมส่วนราชการ
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            4.40%
                          </td>
                          <td>
                            13พนักงานเจ้าหน้าที่ มีความทุ่มเทและรับผิดชอบต่อภาระหน้าที่ที่ได้รับมอบหมาย
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            3.76%
                          </td>
                          <td>
                            15พนักงานเจ้าหน้าที่มีความอดทนสูงต่อความสภาพความกดดันในระหว่างการปฏิบัติงาน
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            3.74%
                          </td>
                          <td>
                            11คณะกรรมการคุรุสภามีการกำหนดระเบียบการจ่ายค่าตอบแทนพิเศษประจำปีให้แก่พนักงานเจ้าหน้าที่
                          </td>
                        </tr>
                        <tr>
                          <td>
                            7
                          </td>
                          <td>
                            2.83%
                          </td>
                          <td>
                            04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม
                          </td>
                        </tr>
                        <tr>
                          <td>
                            8
                          </td>
                          <td>
                            2.48%
                          </td>
                          <td>
                            07สำนักงานเลขาธิการคุรุสภามีระบบเทคโนโลยีดิจิทัลในการให้บริการแก่ผู้ประกอบวิชาชีพทางการศึกษาและประชาชน
                          </td>
                        </tr>
                        <tr>
                          <td>
                            9
                          </td>
                          <td>
                            2.25%
                          </td>
                          <td>
                            03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน
                          </td>
                        </tr>
                        <tr>
                          <td>
                            10
                          </td>
                          <td>
                            2.12%
                          </td>
                          <td>
                            20สำนักงานเลขาธิการคุรุสภามีระบบการสนับสนุนให้พนักงานเจ้าหน้าที่มีความก้าวหน้าในสายงาน
                          </td>
                        </tr> -->
                      </tbody>
                    </table>
                    <!-- datatable end -->
										
									</div>
								</div>
							</div>
              <div id="panel-2" class="panel">
								<div class="panel-hdr">
									<h2>
										จุดอ่อน - WEAKNESSES		 <span class="fw-300"><i></i></span>
                    <!-- point2 -->
									</h2>
									
								</div>
								<div class="panel-container show">
									<div class="panel-content" style="padding-top: 0px;">
                    <!-- datatable start -->
                    <table id="dynamic-table1" class="table table-md table-bordered table-hover table-striped w-100">
                      <thead class="bg-fusion-50">
                        <tr>
                          <th class="text-center" width = "20px;">
                            เปอร์เซ็นต์
                          </th>
                          <th class="text-center">
                            ประเด็น
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr>
                          <td>
                            1
                          </td>
                          <td>
                            3.16%
                          </td>
                          <td>
                            35การประสานงานระหว่างพนักงานเจ้าหน้าที่คุรุสภาในสำนักงานศึกษาธิการจังหวัดกับพนักงานเจ้าหน้าที่คุรุสภาขาดความชัดเจน และเป็นไปอย่างล่าช้า
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            2.34%
                          </td>
                          <td>
                            33ระบบสวัสดิการด้านการรักษาพยาบาลยังไม่หลากหลาย และตอบสนองต่อความต้องการของพนักงานเจ้าหน้าที่
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            2.23%
                          </td>
                          <td>
                            30สำนักงานเลขาธิการคุรุสภา ยังไม่มีส่วนงานที่มีหน้าที่เฉพาะในการจัดหารายได้ และการจัดหาสิทธิประโยชน์ให้แก่สมาชิกคุรุสภา รวมทั้งการพัฒนาระบบสวัสดิการ
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            1.85%
                          </td>
                          <td>
                            29พนักงานเจ้าหน้าที่คุรุสภาในศึกษาธิการจังหวัดไม่มีสายงานการบังคับบัญชาระหว่างพนักงานเจ้าหน้าที่ด้วยกันภายในจังหวัด ในการกำกับ ดูแลการปฏิบัติงานให้เกิดประสิทธิภาพสูงสุด
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            1.66%
                          </td>
                          <td>
                            39พระราชบัญญัติสภาครูและบุคลากรทางการศึกษา พ.ศ. ๒๕๔๖ ยังไม่เอื้อต่อการกระจายอำนาจสู่ระดับพื้นที่ และการตั้งหน่วยงานในกำกับของคุรุสภา
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            1.62%
                          </td>
                          <td>
                            37คุรุสภาใช้กฎ ระเบียบ ข้อบังคับ ที่อ้างอิงจากส่วนราชการ ทำให้การดำเนินงานไม่คล่องตัวตามเจตนาของการเป็นองค์การมหาชน
                          </td>
                        </tr>
                        <tr>
                          <td>
                            7
                          </td>
                          <td>
                            1.62%
                          </td>
                          <td>
                            32คุรุสภายังไม่มีวัฒนธรรมองค์กรที่เอื้อให้เกิดการเปลี่ยนแปลง และการพัฒนา
                          </td>
                        </tr>
                        <tr>
                          <td>
                            8
                          </td>
                          <td>
                            1.41%
                          </td>
                          <td>
                            38คุรุสภายังไม่มีการกำหนดระเบียบหรือหลักเกณฑ์เกี่ยวกับเงินเดือนข้ามขั้นของพนักงานเจ้าหน้าที่ผู้ที่เงินเดือนเต็มขั้น
                          </td>
                        </tr>
                        <tr>
                          <td>
                            9
                          </td>
                          <td>
                            1.37%
                          </td>
                          <td>
                            26สำนักงานเลขาธิการคุรุสภาขาดการติดตาม และวิเคราะห์ผลกระทบของการปรับเปลี่ยนโครงสร้างองค์กร ในแต่ละครั้ง
                          </td>
                        </tr>
                        <tr>
                          <td>
                            10
                          </td>
                          <td>
                            1.27%
                          </td>
                          <td>
                            31สำนักงานเลขาธิการคุรุสภาไม่มีการวิเคราะห์กระบวนงานในภาพรวมขององค์การ และการกำหนดงานหน้าที่งาน (Job Description) ของแต่ละตำแหน่งที่ละเอียด ชัดเจน เป็นธรรม ครบถ้วนทุกตำแหน่งงานในแต่ละระดับ
                          </td>
                        </tr> -->
                      </tbody>
                    </table>
                    <!-- datatable end -->
										
									</div>
								</div>
							</div>
            </div>


            <div class="col-lg-12 col-xl-6">
							<!--Heading Formats-->
							<div id="panel-1" class="panel">
								<div class="panel-hdr">
									<h2>
										โอกาส - OPPORTUNITIES		<span class="fw-300"><i></i></span>
                    <!-- point3 -->
									</h2>
									
								</div>
								<div class="panel-container show">
									<div class="panel-content" style="padding-top: 0px;">
                    <!-- datatable start -->
                    <table id="dynamic-table2" class="table table-md table-bordered table-hover table-striped w-100">
                      <thead class="bg-info-600">
                        <tr>
                          <th class="text-center" width = "20px;">
                            เปอร์เซ็นต์
                          </th>
                          <th class="text-center">
                            ประเด็น
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr>
                          <td>
                            1
                          </td>
                          <td>
                            0.93%
                          </td>
                          <td>
                            65ประกาศสำนักงานปลัดกระทรวงศึกษาธิการ เรื่อง การแบ่งหน่วยงานภายในสำนักงานศึกษาธิการภาคและสำนักงานศึกษาธิการจังหวัดฯ การกำหนดอำนาจหน้าที่ให้กลุ่มบริหารงานบุคคลในศึกษาธิการจังหวัดสนับสนุนภารกิจของคุรุสภา
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            0.89%
                          </td>
                          <td>
                            58เทคโนโลยีดิจิทัล และเทคโนโลยีปัญญาประดิษฐ์ มีความก้าวหน้ามากขึ้น ช่วยเพิ่มประสิทธิภาพในการบริหารจัดการ และการให้บริการได้อย่างสะดวก รวดเร็ว
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            0.64%
                          </td>
                          <td>
                            67รัฐธรรมนูญแห่งราชอาณาจักรไทย กำหนดให้มีกลไก และระบบการผลิต คัดกรอง และพัฒนาผู้ประกอบวิชาชีพครูและอาจารย์ ให้ได้ผู้มีจิตวิญญาณของความเป็นครู มีความรู้ความสามารถอย่างแท้จริง
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            0.59%
                          </td>
                          <td>
                            61ยุทธศาสตร์ชาติ 20 ปี ด้านการปรับสมดุลและพัฒนาระบบบริหารจัดการภาครัฐ กำหนดเป้าหมายให้หน่วยงานภาครัฐมีขนาดเล็กลง มีความยืดหยุ่นไม่ยึดติดโครงสร้างแบบราชการ
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            0.32%
                          </td>
                          <td>
                            64คำสั่งหัวหน้าคณะรักษาความสงบแห่งชาติที่ 19/60 กำหนดให้ศึกษาธิการจังหวัดมีอำนาจหน้าที่และความรับผิดชอบเกี่ยวกับการดำเนินงานตามภารกิจของคุรุสภา
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            0.21%
                          </td>
                          <td>
                            56ภาครัฐมีแนวทางการขยายระยะเวลาการเกษียณอายุราชการให้สอดคล้องกับลักษณะงานและศักยภาพของผู้ปฏิบัติงาน รวมทั้งการเปลี่ยนแปลงโครงสร้างประชากรของสังคมไทย
                          </td>
                        </tr>
                        <tr>
                          <td>
                            7
                          </td>
                          <td>
                            0.12% 
                          </td>
                          <td>
                            57องค์การมหาชนตามพระราชบัญญัติเฉพาะมีการริเริ่มความร่วมมือระหว่างหน่วยงาน
                          </td>
                        </tr>
                        <tr>
                          <td>
                            8
                          </td>
                          <td>
                            0.11%
                          </td>
                          <td>
                           60รัฐธรรมนูญแห่งราชอาณาจักรไทย กำหนดให้จัดตั้งกองทุนเพื่อใช้ในการช่วยเหลือผู้ขาดแคลนทุนทรัพย์ เพื่อลดความเหลื่อมล้ำในการศึกษา และเพื่อเสริมสร้างและพัฒนาคุณภาพและประสิทธิภาพครู โดยให้รัฐจัดสรรงบประมาณให้แก่กองทุน หรือใช้มาตรการหรือกลไกทางภาษีรวมทั้งการให้ผู้บริจาคทรัพย์สินเข้ากองทุนได้รับประโยชน์ในการลดหย่อนภาษีด้วย
                          </td>
                        </tr>
                        <tr>
                          <td>
                            9
                          </td>
                          <td>
                            0.09%
                          </td>
                          <td>
                            66รัฐธรรมนูญแห่งราชอาณาจักรไทย กำหนดให้มีการปรับปรุงและพัฒนาการบริหารงานบุคคลภาครัฐเพื่อจูงใจให้ผู้มีความรู้ ความสามารถเข้ามาทํางานในหน่วยงานของรัฐ และสามารถเจริญก้าวหน้าได้ตามความสามารถ และผลสัมฤทธิ์ของงานของแต่ละบุคคล
                          </td>
                        </tr>
                        <tr>
                          <td>
                            10
                          </td>
                          <td>
                            0.09%
                          </td>
                          <td>
                            62ยุทธศาสตร์ชาติ 20 ปี ด้านการปรับสมดุลและพัฒนาระบบบริหารจัดการภาครัฐ กำหนดยุทธศาสตร์ภาครัฐมีความทันสมัย มีอัตรากำลังที่เหมาะสม มีระบบบริหารจัดการและพัฒนาบุคลากรให้สามารถสนองความต้องการในการปฏิบัติงาน มีความก้าวหน้าในอาชีพ 
                          </td>
                        </tr> -->
                      </tbody>
                    </table>
                    <!-- datatable end -->
										
									</div>
								</div>
							</div>
              <div id="panel-2" class="panel">
								<div class="panel-hdr">
									<h2>
										ภัยคุกคาม - THREATS				 <span class="fw-300"><i></i></span>
                    <!-- point4 -->
									</h2>
									
								</div>
								<div class="panel-container show">
									<div class="panel-content" style="padding-top: 0px;">
                    <!-- datatable start -->
                    <table id="dynamic-table3" class="table table-md table-bordered table-hover table-striped w-100">
                      <thead class="bg-warning-600">
                        <tr>
                          <th class="text-center" width = "20px;">
                            เปอร์เซ็นต์
                          </th>
                          <th class="text-center">
                            ประเด็น
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr>
                          <td>
                            1
                          </td>
                          <td>
                            3.40%
                          </td>
                          <td>
                            78นโยบายของกระทรวงศึกษาธิการ ไม่ชัดเจน  เปลี่ยนแปลงบ่อยทำให้ขาดความต่อเนื่องในการดำเนินงานของสำนักงาน
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            1.35%
                          </td>
                          <td>
                           71ผู้ประกอบวิชาชีพมีจำนวนมากและบางส่วนยังไม่เข้าใจ หรือมีความเข้าใจผิดในบทบาทของคุรุสภา และไม่เห็นความแตกต่างระหว่างผู้รับ/ไม่รับใบอนุญาตประกอบวิชาชีพ
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            1.19%
                          </td>
                          <td>
                            75แนวโน้มงบประมาณด้านบุคลากรที่ได้รับจัดสรรจากสำนักงบประมาณล
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            0.50%
                          </td>
                          <td>
                            77นโยบายของภาครัฐในการไม่ขยายกรอบอัตรากำลังและควบคุมค่าใช้จ่ายด้านบุคลากร
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            0.32%
                          </td>
                          <td>
                            76การแข่งขันของตลาดแรงงานในเรื่องค่าตอบแทน สวัสดิการ ส่งผลให้เกิดการลาออกของบุคลากร
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            0.27%
                          </td>
                          <td>
                            0.27%
                          </td>
                        </tr>
                        <tr>
                          <td>
                            7
                          </td>
                          <td>
                            0.25%
                          </td>
                          <td>
                            73. การเข้าสู่สังคมผู้สูงอายุ ทำให้เกิดต้นทุนในการดำรงชีพภายหลักเกษียณอายุสูงขึ้น
                          </td>
                        </tr>
                        <tr>
                          <td>
                            8
                          </td>
                          <td>
                            0.02%
                          </td>
                          <td>
                            0.02%
                          </td>
                        </tr>
                        <tr>
                          <td>
                            9
                          </td>
                          <td>
                            0.00
                          </td>
                          <td>
                            -
                          </td>
                        </tr>
                        <tr>
                          <td>
                            10
                          </td>
                          <td>
                            0.00%
                          </td>
                          <td>
                            -
                          </td>
                        </tr> -->
                      </tbody>
                    </table>
                    <!-- datatable end -->
										
									</div>
								</div>
							</div>
            </div>
          </div>
          <!-- cclose ontent -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->


<script>

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

	// ------------------open datatable------------------------
  // var table = $("#dynamic-table").DataTable({
  //     orderCellsTop: true,
  //     fixedHeader: true,
  //     bLengthChange: false,
  //     searching: false,
  //     bAutoWidth: false,
  //     bStateSave: true,
  //     processing: true,
  //     bPaginate: true,
  //     columnDefs: [{
  //       targets: [4,5,6,7,8,9,10,11,12,13],
  //       orderable: false,
  //     },
  //     {
  //       targets: [0],
  //       className: "text-center",
  //     },
  //     {
  //       targets: [1, 2],
  //       className: "text-left",
  //     }]

  //   });

  // });
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
						data: "score_percent",
					},
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
							targets: [0],
							className: "text-center",
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
						data: "score_percent",
					},
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
							targets: [0],
							className: "text-center",
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
						data: "score_percent",
					},
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
							targets: [0],
							className: "text-center",
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
						data: "score_percent",
					},
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
							targets: [0],
							className: "text-center",
					},
			],
			// ปิด แก้ไข การเรียง
	});
// ------------------close datatable------------------------
// ------------------open ค้าหา จุดที่ 1/2-----------------------
	$(document).on('change', '.searchdata', function() {
			searchdata();
	});
// ------------------close ค้าหา จุดที่ 1/2-----------------------



	// ------------------open แกไข จุดที่ 1/2-----------------------
	$('#dynamic-table tbody').on('click', 'td .edit-data', function() {
			let mode = $(this).attr("mode");
			var tr = $(this).closest('tr');
			var row = table.row(tr);
			var d = row.data();
			editdata(d, mode);   
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
			table = $('#dynamic-table').DataTable();
			table.draw();
			table1 = $('#dynamic-table1').DataTable();
			table1.draw();
			table2 = $('#dynamic-table2').DataTable();
			table2.draw();
			table3 = $('#dynamic-table3').DataTable();
			table3.draw();
		});
	}
	// ------------------close ค้าหา จุดที่ 1/2-----------------------
// ------------------open แกไข จุดที่ 2/2-----------------------
	function editdata(d, mode) {
    $("#form_add_lbl_strategyyear").text($("#search_strategyyear_id option:selected" ).text());
		// $("#form_add_lbl_strategylvone").text($("#search_strategylvone_id option:selected" ).text());
		// $("#form_add_lbl_strategylvtwo").text($("#search_strategylvtwo_id option:selected" ).text());
		// $("#form_add_lbl_strategylvthree").text($("#search_strategylvthree_id option:selected" ).text());
		// --------open-----
    let aoData1 = "ids=" + $("#search_strategyyear_id").val();
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/get_checkbox",
			dataType: "json",
			beforeSend: function () {
				
			},
			data: aoData1,
			success: function (response) {
        str_select = '';
        str_select = str_select+'<div class="frame-wrap" >';
        str_select = str_select+'<div class="demo color-fusion-500">';
				$.each(response,function(i){
          selected = '';
         
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

    // $('#plantargetlvfour_id_multi_3').is(':checked') ;
    // $( "#plantargetlvfour_id_multi_3" ).prop( "checked", true );
   

    

		$('.default-example-modal-right').modal('toggle');
		$(".dialog-data").show();
		$(".dialog-success").hide();
		$("#icon_add_form").hide();
		$("#rowid").show();

		// เปิด แก้ไข ใส่ค่า 
		
		$("#ids").val(d.policyksp_id);
		
		// ปิด แก้ไข ใส่ค่า
		
		let aoData = "ids=" + d.policyksp_id;
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/edit_data",
			dataType: "json",
			beforeSend: function () {
				$("#overlay").fadeIn(200);
			},
			data: aoData,
			success: function (response) {

				$("#policyksp_add").val(response[0].policyksp);
				
        //--- ติ๊ก checkbox----
        if (response[0].plantargetlvfour_id_multi != null){
          let text = response[0].plantargetlvfour_id_multi;
          const array1 = text.split(",");
          ii = 0;
          setTimeout(function () {
            while (ii < array1.length) {
              console.log(array1[ii]);
              $('#plantargetlvfour_id_multi_'+array1[ii]).prop('checked', true);
              ii++;
          }
          }, 100);
        }
				//------ ปิด------ 
			},
			complete: function () {
				setTimeout(function () {
					$("#overlay").fadeOut(200);
				}, 100);
			},
			error: function (response) {
				//console.log(response);
			}
		});
		let txt = '';

		$("#btn_dialog_close").show();

		if (mode == 'edit') {
		
			txt = 'แก้ไข';
			$('.form-ele').prop('disabled', false);
			$('.stars').show(); // ซ่อนดาวแดง
			$("#btn_save_change").show();

			$("#icon_edit_form").show();
			$("#icon_view_form").hide();

		} else {
			txt = 'แสดง';
			setTimeout(function () {
				$('.form-ele').prop('disabled', true);
			}, 1000);
				
			

			$('.stars').hide(); // ซ่อนดาวแดง
			$("#btn_save_change").hide();

			$("#icon_view_form").show();
			$("#icon_edit_form").hide();
			
			
		}

		$('#lbl_rowid').text("รหัส " + d.policyksp_id);

		$('.div_show_rowid').show();
		
		$(".lblmode").text(txt);

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

<script>
    
// $(document).ready(function() {
//   $(".select2").select2();
//   $('#unit_name_add').select2({
//     dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
//   });

//   var table = $("#dynamic-table").DataTable({
//     orderCellsTop: true,
//     fixedHeader: true,
//     bLengthChange: false,
//     searching: false,
//     bAutoWidth: false,
//     bStateSave: true,
//     processing: true,
//     bPaginate: true,
//     columnDefs: [{
//       targets: [0,2],
//       orderable: false,
//     },
//     {
//       targets: [0,1],
//       className: "text-center",
//     },
//     {
//       targets: [2],
//       className: "text-left",
//     }]

//   });
//   var table = $("#dynamic-table1").DataTable({
//     orderCellsTop: true,
//     fixedHeader: true,
//     bLengthChange: false,
//     searching: false,
//     bAutoWidth: false,
//     bStateSave: true,
//     processing: true,
//     bPaginate: true,
//     columnDefs: [{
//       targets: [0,2],
//       orderable: false,
//     },
//     {
//       targets: [0,1],
//       className: "text-center",
//     },
//     {
//       targets: [2],
//       className: "text-left",
//     }]

//   });
//   var table = $("#dynamic-table2").DataTable({
//     orderCellsTop: true,
//     fixedHeader: true,
//     bLengthChange: false,
//     searching: false,
//     bAutoWidth: false,
//     bStateSave: true,
//     processing: true,
//     bPaginate: true,
//     columnDefs: [{
//       targets: [0,2],
//       orderable: false,
//     },
//     {
//       targets: [0,1],
//       className: "text-center",
//     },
//     {
//       targets: [2],
//       className: "text-left",
//     }]

//   });
//   var table = $("#dynamic-table3").DataTable({
//     orderCellsTop: true,
//     fixedHeader: true,
//     bLengthChange: false,
//     searching: false,
//     bAutoWidth: false,
//     bStateSave: true,
//     processing: true,
//     bPaginate: true,
//     columnDefs: [{
//       targets: [0,2],
//       orderable: false,
//     },
//     {
//       targets: [0,1],
//       className: "text-center",
//     },
//     {
//       targets: [2],
//       className: "text-left",
//     }]

//   });

//   $(document).on('click', '#btnadd',
//   function() {
//     $("#ids").val('');

//     $(".lblmode").text("เพิ่ม");

//     $("#icon_add_form").show();
//     $("#icon_edit_form").hide();
//     $("#icon_view_form").hide();

//     $('.div_show_rowid').css('display', 'none');

//     $(".clear-element").val('');

//     $('.form-ele').prop('disabled', false);
//     $('.stars').show(); // ซ่อนดาวแดง
//     $(".dialog-data").show();
//     $(".dialog-success").hide();

//     $("#btn_save_change").show();
//     $("#btn_dialog_close").show();

//   });

//   $(document).on('click', '#btn_dialog_close',
//   function() {
//     $('.default-example-modal-right').modal('toggle');
//   });
// });

</script>