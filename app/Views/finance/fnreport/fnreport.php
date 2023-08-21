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
                  1. รายงานการเบิกจ่ายงบประมาณ จำแนกตามแผนงาน โครงการในแต่ละปีงบประมาณ/งบรายจ่ายตามหมวด    [4.3.6.11 ]
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
                  2. รายงานสรุปผลการเบิกจ่ายงบประมาณ จำแนกตามแหล่งของเงิน/งบรายจ่ายตามหมวด[4.3.6.11 ]
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  3. รายงานสรุปผลการเบิกจ่ายงบประมาณ จำแนกตามศูนย์ต้นทุน (ส่วนงาน/กลุ่มงาน)	[4.3.6.11 ]
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
                  4. รายงานสรุปผลการเบิกจ่ายงบประมาณในภาพรวม	  ขอตัวอย่างรายงาน[4.3.6.11 ]
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  5. รายงานทะเบียนคุมงบประมาณรายจ่าย/เงินกันไว้เบิกเหลื่อมปี   (รายงานกันเหลือมปี ?)[4.3.6.11 ]
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
                6. รายงานสรุปผลการเบิกจ่ายเงินกันไว้เบิกเหลื่อมปี  ขอตัวอย่างรายงาน[4.3.6.11 ]
                  
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  7. รายงานการเบิกค่าใช้จ่ายในการเดินทาง จำแนกตามส่วนงาน/กลุ่มงาน    ขอตัวอย่างรายงาน[4.3.6.11 ]
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
                  8.1 รายงานทะเบียนคุมรายจ่ายค้างจ่าย  	    ขอตัวอย่างรายงาน[4.3.6.11 ]
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
                  8.2  ทะเบียนคุมเจ้าหนี้ 	    ขอตัวอย่างรายงาน[4.3.6.11 ]
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
                  8.3   และทะเบียนคุมเงินประกัน	    ขอตัวอย่างรายงาน[4.3.6.11 ]
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  9. ทะเบียนคุมสัญญาเงินยืมทดรองจ่าย และทะเบียนลูกหนี้เงินยืมทดรองจ่ายรายตัว	ขอตัวอย่างรายงาน[4.3.6.11 ]
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
                  10. รายงานสรุปการรับ-จ่ายเงินประจำวัน/เดือน/ไตรมาส/ปี	[4.3.6.11 ]
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  11. รายงานสรุปการรับเงินประจำวัน/เดือน/ไตรมาส/ปี โดยสามารถแยกประเภทการรับเงิน	    ขอตัวอย่างรายงาน[4.3.6.11 ]
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
                  12. รายงานสรุปการจ่ายเงินประจำวัน/เดือน/ไตรมาส/ปี โดยสามารถแยกประเภทรายจ่าย เงินยืมทดรองจ่าย และค้างส่งใช้คืนเงินยืม     ขอตัวอย่างรายงาน[4.3.6.11 ]
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  13. หนังสือรับรองการหักภาษี ณ ที่จ่าย     [4.3.6.11 ]
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
                  14. รายงานทะเบียนคุมภาษีหัก ณ ที่จ่าย	     ขอตัวอย่างรายงาน  [4.3.6.11 ]
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
          <!-- <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 
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
          </div> -->
          <!-- <div class="panel-content fourd-form-row-b" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  ทะเบียนนำฝากเงินธนาคาร	
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  ทะเบียนยกเลิกใบเสร็จรับเงิน	
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
                  รายงานสรุปงบรายจ่ายงาน/โครงการ	
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
          </div> -->
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  15. ภ.ง.ด.1 และใบแนบ ภ.ง.ด.1 [4.3.6.8]    ขอตัวอย่างรายงาน
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
                  16. ภ.ง.ด.3 และใบแนบ ภ.ง.ด.3	 [4.3.6.8 ]   ขอตัวอย่างรายงาน
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  17. ภ.ง.ด.53 และใบแนบ ภ.ง.ด.53	[4.3.6.8 ]   ขอตัวอย่างรายงาน
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
                  18. รายงานการรับเงิน	ขอตัวอย่างรายงาน [4.3.5.1  ]   
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  19. รายงานผลการปฏิบัติงานเป็นรายคน ขอตัวอย่างรายงาน 4.3.4.5       4.3.7.10 
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
                  20. รายงานการรับเงินและนำส่งเงินตามประเภทรายรับและรายการรายรับ  ขอตัวอย่างรายงาน 4.3.5.5 
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                 21. รายการ สรุป ออก ภ.ง.ด.1 ภ.ง.ด.3 หรือ ภ.ง.ด.53   [รายการ สรุป ออก ภ.ง.ด.1 ภ.ง.ด.3 หรือ ภ.ง.ด.53 ] ขอตัวอย่างรายงาน   [4.3.6.8 ]
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
                  22. รายงานสรุปรายการโอนเงิน   [4.3.7.7 ]
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  23. สัญญาเงินกู้สามัญ/เงินกู้ฉุกเฉิน/เงินกู้     ขอตัวอย่างรายงาน   [4.3.7.9 ]
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
                  24. รายงานสรุปการเบิกจ่ายเงินค่าตอบแทนการปฏิบัติงานนอกเวลา  ขอตัวอย่างรายงาน   [4.3.7.9 ]
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                  25.รายงานการเดินทางของพนักงานเจ้าหน้าที่หรือบุคคลที่ได้รับอนุญาตจากผู้มีอำนาจให้เดินทางไปปฏิบัติงาน  ขอตัวอย่างรายงาน   [4.3.7.9 ]
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
                 26. รายงานสรุปการเบิกจ่ายเงินค่าใช้จ่ายในการเดินทาง  ขอตัวอย่างรายงาน   [4.3.7.9 ]


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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
                27.  รายงานสรุปรายการโอนเงินค่าใช้จ่ายในการประชุม   ขอตัวอย่างรายงาน   [4.3.7.9 ]


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
               28.   ทะเบียนคุมแบบแจ้งข้อมูลการรับเงินโอนผ่านระบบ KTB Corporate Online ขอตัวอย่างรายงาน   [4.3.7.9 ]
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
          <div class="panel-content fourd-form-row-a" style = "">
            <div class="form-row dialog-data " style = "padding-bottom:0px;">
              <div class="col-md-10 mb-10" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                <label class="form-label" for="" style = "margin:0;">
               29.   text File เพื่อใช้ยื่นภาษีผ่านทางเว็บไซต์ของกรมสรรพากร  [4.3.6.8 ]   ขอตัวอย่าง
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