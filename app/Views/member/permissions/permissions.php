<?
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get full url
?>

<!-- <div class="row">
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
            
            <div id="js_list_accordion-a" class="collapse show" data-parent="#js_list_accordion">
              <div class="card-body">
                <form action="<?=$actual_link?>" method="post" accept-charset="utf-8"
                id="form-search" name="form-search">
                  <div class="row">
                    
                    
                    <div class="col-sm-12">
                      <label class="form-label" for="user_name_search">
                        ชื่อผู้ใช้งาน
                      </label>
                      <input id="user_name_search" name="user_name_search" class="form-control searchdata"
                      type="text" placeholder="ชื่อผู้ใช้งาน" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="alert alert-warning" id='searchresults' name='searchresults'
    style="margin-bottom: 15px;">
      ค้นหาโดย : ชื่อผู้ใช้งาน
    </div>
  </div>
</div> -->
<div class="row">
  <div class="col-xl-12">
    <div class="input-group input-group-lg mb-g ">
      <input type="text" class="form-control shadow-inset-2" placeholder="เลือกชื่อผู้ใช้งาน">
      <div class="input-group-append">
        <span class="input-group-text"><i class="fal fa-search"></i></span>
      </div>
    </div>
  </div>
  <div class="card mb-g border shadow-0">
    <div class="card-header bg-primary-700 " style = "padding-top:0px;padding-bottom:0px;margin:0px;">


      <div class="row no-gutters align-items-center " >
        <div class="col" style = "padding-top:10px;">
        

            <h6 class="color-white" style = "font-weight:100;display: flex;">กำหนดสิทธิ์การใช้งาน : นายสมคิด วงศ์เศวต</h6>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id ="btn_save_change">บันทึก</button>
          <button type="button" class="btn btn-light" id = "btn_dialog_close">รีเซต</button>
        </div>
      </div>
    </div>
    

    <div class="panel-container">
      <div class="panel-content" style="padding-top: 0px;">
        
        <!-- content start -->
        
        <div class="row">

          <div class="col-sm-11" style = "padding-top:20px;padding-bottom:10px;;margin: auto;" >
            
            <select id="group_permissions" name="group_permissions" class="select2"
            placeholder="กลุ่มงาน">
              <option value="">
                เลือกกลุ่มผู้ใช้งาน
              </option>
              <option value="17">
                เจ้าหน้าที่ทั่วไป	
              </option>
              <option value="18">
                กลุ่มการเงินและบัญชี
              </option>
              <option value="11">
                กลุ่มแผนและงบประมาณ
              </option>
              
            </select>
          </div>
        </div>
        
        <div class="row no-gutters">
          
          <div class="col-3">
            <div id="spyscroll-2" class="list-group p-3">
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-a" style="padding:10px;">
                <i class="fa-solid fa-user-gear"></i>
                <label class="mobileHide">&nbsp; ข้อมูลผู้ใช้งาน</label>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-b"style="padding:10px;">
                <i class="fa-solid fa-chess"></i>
                <label class="mobileHide">&nbsp; แผนยุทธศาสตร์และแผนงาน</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-c" style="padding:10px;">
                <i class="fa-solid fa-coins"></i> 
                <label class="mobileHide">&nbsp; งบประมาณ</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-d" style="padding:10px;">
                <i class="fa-solid fa-money-bill-transfer"></i>  
                <label class="mobileHide">&nbsp; เบิกจ่าย</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-e" style="padding:10px;">
                <i class="fa-solid fa-receipt"></i> 
                <label class="mobileHide">&nbsp; การเงิน</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-f" style="padding:10px;">
                <i class="fa-solid fa-hand-holding-dollar"></i> 
                <label class="mobileHide">&nbsp;รายรับและนำส่งเงิน</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-g" style="padding:10px;">
                <i class="fa-solid fa-file-invoice"></i> 
                <label class="mobileHide">&nbsp; จัดซื้อ/จัดจ้าง</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-h" style="padding:10px;">
                <i class="fa-solid fa-people-carry-box"></i> 
                <label class="mobileHide">&nbsp; ครุภัณฑ์</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-i" style="padding:10px;">
                <i class="fa-solid fa-boxes-packing"></i> 
                <label class="mobileHide">&nbsp; วัสดุ</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-j" style="padding:10px;">
                <i class="fa-solid fa-van-shuttle"></i> 
                <label class="mobileHide">&nbsp; จองรถ</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-k" style="padding:10px;">
                <i class="fa-solid fa-calendar-days"></i> 
                <label class="mobileHide">&nbsp; จองห้องประชุม</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-l" style="padding:10px;">
                <i class="fa-solid fa-square-poll-vertical"></i> 
                <label class="mobileHide">&nbsp; ติดตามผล</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-m" style="padding:10px;">
                <i class="fa-solid fa-screwdriver-wrench"></i> 
                <label class="mobileHide">&nbsp; แจ้งงานบริการ</laabel>
              </a>

            </div>
          </div>
          <div class="col-9">
            <div data-spy="scroll" data-target="#spyscroll-2" data-offset="0" class="position-relative overflow-auto px-2 py-3" style="height:800px">
              


                                            



            <div class="row bg-primary-200 text-white rounded" style = "padding-top:20px;margin-bottom:20px;" id="spyscroll-2-a">
              <div class="col" >
                <h4 >ข้อมูลผู้ใช้งาน</h4>
              </div>
              <div class="col text-right" style = "padding-bottom:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a1">
                  <label class="custom-control-label" for="a1">ทั้งหมด</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>ส่วนงาน</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a1_1">
                    <label class="custom-control-label" for="a1_1">ส่วนงานทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a1_2">
                    <label class="custom-control-label" for="a1_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a1_3">
                    <label class="custom-control-label" for="a1_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a1_4">
                    <label class="custom-control-label" for="a1_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a1_5">
                    <label class="custom-control-label" for="a1_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>กลุ่มงาน</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a2_1">
                    <label class="custom-control-label" for="a2_1">กลุ่มงานทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a2_2">
                    <label class="custom-control-label" for="a2_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a2_3">
                    <label class="custom-control-label" for="a2_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a2_4">
                    <label class="custom-control-label" for="a2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a2_5">
                    <label class="custom-control-label" for="a2_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>ผู้ใช้งานระบบ</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a3_1">
                    <label class="custom-control-label" for="a3_1">ผู้ใช้งานระบบทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a3_2">
                    <label class="custom-control-label" for="a3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a3_3">
                    <label class="custom-control-label" for="a3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a3_4">
                    <label class="custom-control-label" for="a2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a3_5">
                    <label class="custom-control-label" for="a3_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>โครงสร้างสำนักงาน</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a4_1">
                    <label class="custom-control-label" for="a4_1">รวมกลุ่มงงานทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a4_2">
                    <label class="custom-control-label" for="a4_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a4_3">
                    <label class="custom-control-label" for="a4_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a4_4">
                    <label class="custom-control-label" for="a4_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a4_5">
                    <label class="custom-control-label" for="a4_5">ลบ</label>
                </div>
              </div>
            </div>









            <div class="row bg-primary-200 text-white rounded" style = "padding-top:20px;margin-bottom:20px;"  id="spyscroll-2-b">
              <div class="col">
                <h4>แผนยุทธศาสตร์และแผนงาน</h4>
              </div>
              <div class="col text-right" style = "padding-bottom:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b1">
                  <label class="custom-control-label" for="b1">ทั้งหมด</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>แผนยุทธศาสตร์ชาติ ระดับ 1</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b1_1">
                    <label class="custom-control-label" for="b1_1">แผนยุทธศาสตร์ชาติ ระดับ 1ทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_2">
                    <label class="custom-control-label" for="b1_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_3">
                    <label class="custom-control-label" for="b1_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_4">
                    <label class="custom-control-label" for="b1_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_5">
                    <label class="custom-control-label" for="b1_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>แผนยุทธศาสตร์ชาติ ระดับ 2</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b2_1">
                    <label class="custom-control-label" for="b2_1">แผนยุทธศาสตร์ชาติ ระดับ 2ทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_2">
                    <label class="custom-control-label" for="b2_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_3">
                    <label class="custom-control-label" for="b2_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_4">
                    <label class="custom-control-label" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_5">
                    <label class="custom-control-label" for="b2_5">ลบ</label>
                </div>
              </div>
            </div>



            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>แผนยุทธศาสตร์ชาติ ระดับ 3</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b3_1">
                    <label class="custom-control-label" for="b3_1">แผนยุทธศาสตร์ชาติ ระดับ 3ทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_2">
                    <label class="custom-control-label" for="b3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_3">
                    <label class="custom-control-label" for="b3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_4">
                    <label class="custom-control-label" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_5">
                    <label class="custom-control-label" for="b3_5">ลบ</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>แผนยุทธศาสตร์คุรุสภา</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b3_1">
                    <label class="custom-control-label" for="b3_1">แผนยุทธศาสตร์คุรุสภาทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_2">
                    <label class="custom-control-label" for="b3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_3">
                    <label class="custom-control-label" for="b3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_4">
                    <label class="custom-control-label" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_5">
                    <label class="custom-control-label" for="b3_5">ลบ</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>ตัวชี้วัด</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b3_1">
                    <label class="custom-control-label" for="b3_1">ตััวชี้วัดทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_2">
                    <label class="custom-control-label" for="b3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_3">
                    <label class="custom-control-label" for="b3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_4">
                    <label class="custom-control-label" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_5">
                    <label class="custom-control-label" for="b3_5">ลบ</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>เป้าประสงค์</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b3_1">
                    <label class="custom-control-label" for="b3_1">เป้าประสงค์ทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_2">
                    <label class="custom-control-label" for="b3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_3">
                    <label class="custom-control-label" for="b3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_4">
                    <label class="custom-control-label" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_5">
                    <label class="custom-control-label" for="b3_5">ลบ</label>
                </div>
              </div>
            </div>

            


            <div class="row bg-primary-200 text-white rounded" style = "padding-top:20px;margin-bottom:20px;"  id="spyscroll-2-c">
              <div class="col">
                <h4>งบประมาณ</h4>
              </div>
              <div class="col text-right" style = "padding-bottom:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b1">
                  <label class="custom-control-label" for="b1">ทั้งหมด</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>งาน/โครงการ</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b1_1">
                    <label class="custom-control-label" for="b1_1">งาน/โครงการ ทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_2">
                    <label class="custom-control-label" for="b1_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_3">
                    <label class="custom-control-label" for="b1_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_4">
                    <label class="custom-control-label" for="b1_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_5">
                    <label class="custom-control-label" for="b1_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>กิจกรรม</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b2_1">
                    <label class="custom-control-label" for="b2_1">กิจกรรมทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_2">
                    <label class="custom-control-label" for="b2_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_3">
                    <label class="custom-control-label" for="b2_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_4">
                    <label class="custom-control-label" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_5">
                    <label class="custom-control-label" for="b2_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12" style = "padding-left:20px;" >
                <h5>ตรวจสอบงาน/โครงการ</h5>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b3_1">
                    <label class="custom-control-label" for="b3_1">ตรวจสอบงาน/โครงการทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_2">
                    <label class="custom-control-label" for="b3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_3">
                    <label class="custom-control-label" for="b3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_4">
                    <label class="custom-control-label" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_5">
                    <label class="custom-control-label" for="b3_5">ลบ</label>
                </div>
              </div>
            </div>



            </div>
          </div>
        </div>
        
        <!-- content end -->
      </div>
    </div>
    







       
  </div>
</div> 


<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>


<script>
    
$(document).ready(function() {
  $(".select2").select2();
  $('#unit_name_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#group_name_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#chief_add').select2({
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
      targets: [3],
      orderable: false,
    },
    {
      targets: [0],
      className: "text-center",
    },
    {
      targets: [1, 2],
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
  });

</script>
<style type="text/css">
   .mobileHide { display: inline;}
   /* Smartphone Portrait and Landscape */
   @media only screen
   and (min-device-width : 320px)
   and (max-device-width : 480px){  .mobileHide { display: none;}}
</style>