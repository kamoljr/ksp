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
        <div class="panel-content" style="padding-top: 15px;">
          
          

          <div class="panel-content fourd-form-row-a" style = "">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายงาน แผนปฏิบัติการและแผนการใช้จ่ายงบประมาณ
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                  <label class="form-label" for="">
                    <!-- <button type="button" class="btn btn-sm btn-primary">
                        <span class="fal fa-print mr-1"></span>
                        
                    </button> -->
                  </label>
                </div>
              </div>
            </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  1. คำสั่งคุรุสภา (p1)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  2. นโยบายการบริหารงานคณะกรรมการคุรุสภา (p4)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  3. สาระสําคัญแผนปฏิบัติการรายปีพ.ศ. ๒๕๖6 ของคุรุสภา (p14-p18)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  4. ประมาณการวงเงินงบประมาณทั้งหมด (p20)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  5. คําชี้แจงประมาณการรายรับประจําปีงบประมาณ (p22-p27)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  6. ประมาณการรายรับ(p28)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  7. งบประมาณรายจ่ายประจําปีงบประมาณ (p30-p33)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  8. งบประมาณรายจ่ายประจําปีงบประมาณ ของสํานักงานเลขาธิการคุรุสภาจําแนกตามส่วนงาน/งบรายจ่าย(p35)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  9. ตารางเปรียบเทียบงบประมาณรายจ่ายประจําปีงบประมาณ ของสํานักงานเลขาธิการคุรุสภาจําแนกตามส่วนงาน(p36)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 10. งบประมาณรายจ่ายประจําปีงบประมาณ ของสํานักงานเลขาธิการคุรุสภาจําแนกตามแผนงาน/งบรายจ่าย(p38)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 11. ตารางเปรียบเทียบงบประมาณรายจ่ายประจําปีงบประมาณ ของสํานักงานเลขาธิการคุรุสภาจําแนกตามแผนงาน(p39)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 12. งบประมาณรายจ่ายประจําปีงบประมาณพ.ศ. ๒๕๖๖ของสํานักงานเลขาธิการคุรุสภาจําแนกตามแผนงาน/งาน/โครงการ/รายการ/งบรายจ่าย (p40-43)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 13. ตารางสรุปงาน/โครงการและงบประมาณรายจ่ายจําแนกตามไตรมาสภายใต้ :แผนงานยุทธศาสตร (p47)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 14. คำขอโครงการ (p48-211)
                </label>
              </div>
              <div class="col-md-8 mb-8" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 <select id="project_search" name="project_search" class="select2"
                      placeholder="โครงการ">
                        <option value="">
                          งานรับรองความรู้รับรองคุณวุฒิและรับรองประสบการณ์เพื่อการประกอบวิชาชีพทางการศึกษา
                        </option>
                        <option value="17">
                          งานรับรองปริญญาและประกาศนียบัตรตามมาตรฐานวิชาชีพ     
                        </option>
                        
                      </select> 
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 15. รายละเอียดงบประมาณ “แผนงานบุคลากรภาครัฐ” ประจําปีงบประมาณ (p213)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 16. งบประมาณรายจ่ายประจําปีงบประมาณพ.ศ. ๒๕๖๖ของสํานักงานเลขาธิการคุรุสภา (งบกลาง) (p215)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 17. สรุปรายการครุภัณฑ์ที่ดินและสิ่งปลูกสร้า (p217)
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 18. รายงานแผนยุทธศาสตร์คุรุสภา *
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 19.	รายงานการเบิกจ่ายเงินงบประมาณรายจ่าย จำแนกตามงบรายจ่าย *
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 20. รายงานการเบิกจ่ายเงินงบประมาณรายจ่าย งบบุคลากร *
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 21.รายงานการเบิกจ่ายเงินงบประมาณรายจ่าย งบกลาง *
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 22. รายงานผลการดำเนินงานตัวชี้วัดของแต่ละงาน/โครงการทั้งหมด และภาพรวม *
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 23. รายงานการเบิกจ่ายเงินงบประมาณรายจ่าย จำแนกตามส่วนงาน/งาน/โครงการ/รายการ *
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>
          <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 24.รายงานการเบิกจ่ายเงินงบประมาณรายจ่าย จำแนกตามพันธกิจ/งาน/โครงการ/รายการ *
                </label>
              </div>
              <div class="col-md-2 mb-2" style="padding-bottom:0px;font-size:13px;margin-bottom:0px;">
                <label class="form-label" for="">
                  <button type="button" class="btn btn-sm btn-primary">
                      <span class="fal fa-print mr-1"></span>
                      Print
                  </button>
                </label>
              </div>
            </div>
          </div>




          



           
            



        </div>
      </div>
    </div>
  </div>
</div>

<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->
<style>
  




  .fourd-form-row-a{
    background-color:#8f73deb0;
    padding-left:10px !important;
    padding-right:5px !important;
    padding-top:15px !important;
    padding-bottom:0px !important;
    border-radius: 5px !important;
    vertical-align: middle;
    line-height: 30px;
    color:#000;
  }
  .fourd-form-row-b{
    padding-left:10px !important;
    padding-right:5px !important;
    padding-top:10px !important;
    padding-bottom:0px !important;
    border-radius: 5px !important;
    vertical-align: middle;
    line-height: 30px;
    color:#000;
  }
  .fourd-form-row-c{
    padding-left:10px !important;
    padding-right:5px !important;
    padding-top:15px !important;
    padding-bottom:0px !important;
    border-radius: 5px !important;
    vertical-align: middle;
    line-height: 30px;
    color:#000;
  }
  

</style>
<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>
    
$(document).ready(function() {
  $(".select2").select2();
  $('#unit_name_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });

  
  
});

</script>