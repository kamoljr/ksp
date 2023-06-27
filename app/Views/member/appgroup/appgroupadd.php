<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h5 class="color-primary-500" style = "font-weight:600;display: flex;">
        <i class="ni ni-big-plus fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i>
        <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i>
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;"><?= $app_name; ?></label>
      </h5>




      <div id="panel-1" class="panel show" style = "padding:15px;">
        





      <!-- content start -->
        
        <div class="form-row dialog-data">

          <div class="col-sm-12 " style = "padding-top:20px;margin: auto;" >
              <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="user_name_add">
                กลุ่มผู้ใช้งาน
                <span class="text-danger stars"> * </span>
              </label>
              <input type="text" class="form-control form-ele clear-element" id="user_name_add" name="user_name_add" placeholder="กลุ่มผู้ใช้งาน" value="">
          </div>
          <div class="col-sm-12 " style = "padding-bottom:30px;margin: auto;" >
            
        
              <label class="form-label color-fusion-500" style ="font-weight:550;font-size:14px;" for="user_name_add">
                คำอธิบาย
                <span class="text-danger stars">  </span>
              </label>
              <input type="text" class="form-control form-ele clear-element" id="user_name_add" name="user_name_add" placeholder="คำอธิบาย" value="">
          

          </div>
        </div>
        <div class="row card-header bg-primary-700 " style = "padding-top:10px;padding-bottom:0px;margin:0px;">


        
            <div class="col text-center" style = "">
                <h6 class="color-white" style = "font-weight:100;">สิทธิ์การใช้งาน</h6>
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
              


                                            



            <!-- <div class="row bg-primary-200 text-white rounded" style = "padding-top:20px;margin-bottom:10px;" id="spyscroll-2-a">
              <div class="col" >
                <h6 >ข้อมูลผู้ใช้งาน</h6>
              </div>
              <div class="col text-right" style = "padding-bottom:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a1">
                  <label class="custom-control-label color-fusion-600" for="a1">ทั้งหมด</label>
                </div>
              </div>
            </div> -->


            <div class="row card-header bg-primary-500 " style = "padding-top:10px;padding-bottom:0px;padding-left:0px;margin:0px;" id="spyscroll-2-a">


        
              <div class="col" >
                <h6 >ข้อมูลผู้ใช้งาน</h6>
              </div>
              <div class="col text-right" style = "padding-bottom:0px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a1">
                  <label class="custom-control-label" for="a1">ทั้งหมด</label>
                </div>
              </div>
            
          
            </div>


            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;padding-top:20px;" >
                <h6>ส่วนงาน</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a1_1">
                    <label class="custom-control-label color-fusion-600" for="a1_1">ส่วนงานทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a1_2">
                    <label class="custom-control-label color-fusion-600 " for="a1_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a1_3">
                    <label class="custom-control-label color-fusion-600 " for="a1_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a1_4">
                    <label class="custom-control-label color-fusion-600 " for="a1_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a1_5">
                    <label class="custom-control-label color-fusion-600 " for="a1_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>กลุ่มงาน</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a2_1">
                    <label class="custom-control-label color-fusion-600 " for="a2_1">กลุ่มงานทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a2_2">
                    <label class="custom-control-label color-fusion-600" for="a2_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a2_3">
                    <label class="custom-control-label color-fusion-600" for="a2_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a2_4">
                    <label class="custom-control-label color-fusion-600" for="a2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a2_5">
                    <label class="custom-control-label color-fusion-600" for="a2_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>ผู้ใช้งานระบบ</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a3_1">
                    <label class="custom-control-label color-fusion-600" for="a3_1">ผู้ใช้งานระบบทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a3_2">
                    <label class="custom-control-label color-fusion-600" for="a3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a3_3">
                    <label class="custom-control-label color-fusion-600" for="a3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a3_4">
                    <label class="custom-control-label color-fusion-600" for="a2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a3_5">
                    <label class="custom-control-label color-fusion-600" for="a3_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>โครงสร้างสำนักงาน</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a4_1">
                    <label class="custom-control-label color-fusion-600" for="a4_1">รวมกลุ่มงงานทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a4_2">
                    <label class="custom-control-label color-fusion-600" for="a4_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a4_3">
                    <label class="custom-control-label color-fusion-600" for="a4_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a4_4">
                    <label class="custom-control-label color-fusion-600" for="a4_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="a4_5">
                    <label class="custom-control-label color-fusion-600" for="a4_5">ลบ</label>
                </div>
              </div>
            </div>









            <!-- <div class="row bg-primary-200 text-white rounded" style = "padding-top:20px;margin-bottom:20px;"  id="spyscroll-2-b">
              <div class="col ">
                <h4>แผนยุทธศาสตร์และแผนงาน</h4>
              </div>
              <div class="col text-right" style = "padding-bottom:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b1">
                  <label class="custom-control-label color-fusion-600" for="b1">ทั้งหมด</label>
                </div>
              </div>
            </div> -->
            <div class="row card-header bg-primary-500 " style = "padding-top:10px;padding-bottom:0px;padding-left:0px;margin:0px;margin-bottom:20px;" id="spyscroll-2-b">


        
              <div class="col" >
                <h6 >แผนยุทธศาสตร์และแผนงาน</h6>
              </div>
              <div class="col text-right" style = "padding-bottom:0px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a1">
                  <label class="custom-control-label" for="a1">ทั้งหมด</label>
                </div>
              </div>
            
          
            </div>



            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>แผนยุทธศาสตร์ชาติ ระดับ 1</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b1_1">
                    <label class="custom-control-label color-fusion-600" for="b1_1">แผนยุทธศาสตร์ชาติ ระดับ 1ทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_2">
                    <label class="custom-control-label color-fusion-600" for="b1_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_3">
                    <label class="custom-control-label color-fusion-600" for="b1_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_4">
                    <label class="custom-control-label color-fusion-600" for="b1_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_5">
                    <label class="custom-control-label color-fusion-600" for="b1_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>แผนยุทธศาสตร์ชาติ ระดับ 2</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b2_1">
                    <label class="custom-control-label color-fusion-600" for="b2_1">แผนยุทธศาสตร์ชาติ ระดับ 2ทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_2">
                    <label class="custom-control-label color-fusion-600" for="b2_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_3">
                    <label class="custom-control-label color-fusion-600" for="b2_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_4">
                    <label class="custom-control-label color-fusion-600" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_5">
                    <label class="custom-control-label color-fusion-600" for="b2_5">ลบ</label>
                </div>
              </div>
            </div>



            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>แผนยุทธศาสตร์ชาติ ระดับ 3</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b3_1">
                    <label class="custom-control-label color-fusion-600" for="b3_1">แผนยุทธศาสตร์ชาติ ระดับ 3ทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_2">
                    <label class="custom-control-label color-fusion-600" for="b3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_3">
                    <label class="custom-control-label color-fusion-600" for="b3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_4">
                    <label class="custom-control-label color-fusion-600" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_5">
                    <label class="custom-control-label color-fusion-600" for="b3_5">ลบ</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>แผนยุทธศาสตร์คุรุสภา</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b3_1">
                    <label class="custom-control-label color-fusion-600" for="b3_1">แผนยุทธศาสตร์คุรุสภาทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_2">
                    <label class="custom-control-label color-fusion-600" for="b3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_3">
                    <label class="custom-control-label color-fusion-600" for="b3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_4">
                    <label class="custom-control-label color-fusion-600" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_5">
                    <label class="custom-control-label color-fusion-600" for="b3_5">ลบ</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>ตัวชี้วัด</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b3_1">
                    <label class="custom-control-label color-fusion-600" for="b3_1">ตัวชี้วัดทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_2">
                    <label class="custom-control-label color-fusion-600" for="b3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_3">
                    <label class="custom-control-label color-fusion-600" for="b3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_4">
                    <label class="custom-control-label color-fusion-600" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_5">
                    <label class="custom-control-label color-fusion-600" for="b3_5">ลบ</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>เป้าประสงค์</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b3_1">
                    <label class="custom-control-label color-fusion-600" for="b3_1">เป้าประสงค์ทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_2">
                    <label class="custom-control-label color-fusion-600" for="b3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_3">
                    <label class="custom-control-label color-fusion-600" for="b3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_4">
                    <label class="custom-control-label color-fusion-600" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_5">
                    <label class="custom-control-label color-fusion-600" for="b3_5">ลบ</label>
                </div>
              </div>
            </div>

            


            <!-- <div class="row bg-primary-200 text-white rounded" style = "padding-top:20px;margin-bottom:20px;"  id="spyscroll-2-c">
              <div class="col ">
                <h4>งบประมาณ</h4>
              </div>
              <div class="col text-right" style = "padding-bottom:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b1">
                  <label class="custom-control-label color-fusion-600" for="b1">ทั้งหมด</label>
                </div>
              </div>
            </div> -->
            <div class="row card-header bg-primary-500 " style = "padding-top:10px;padding-bottom:0px;padding-left:0px;margin:0px;margin-bottom:20px;" id="spyscroll-2-c">


        
              <div class="col" >
                <h6 >งบประมาณ</h6>
              </div>
              <div class="col text-right" style = "padding-bottom:0px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="a1">
                  <label class="custom-control-label" for="a1">ทั้งหมด</label>
                </div>
              </div>
            
          
            </div>





            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>งาน/โครงการ</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b1_1">
                    <label class="custom-control-label color-fusion-600" for="b1_1">งาน/โครงการ ทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_2">
                    <label class="custom-control-label color-fusion-600" for="b1_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_3">
                    <label class="custom-control-label color-fusion-600" for="b1_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_4">
                    <label class="custom-control-label color-fusion-600" for="b1_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b1_5">
                    <label class="custom-control-label color-fusion-600" for="b1_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>กิจกรรม</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b2_1">
                    <label class="custom-control-label color-fusion-600" for="b2_1">กิจกรรมทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_2">
                    <label class="custom-control-label color-fusion-600" for="b2_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_3">
                    <label class="custom-control-label color-fusion-600" for="b2_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_4">
                    <label class="custom-control-label color-fusion-600" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b2_5">
                    <label class="custom-control-label color-fusion-600" for="b2_5">ลบ</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 color-fusion-600" style = "padding-left:20px;" >
                <h6>ตรวจสอบงาน/โครงการ</h6>
              </div>
            </div>
            <div class="row frame-wrap" style = "margin-bottom:20px;">
              <div class="col-sm-4" style = "padding-left:20px;">
                <div class="custom-control custom-checkbox custom-control-inline" >
                  <input type="checkbox" class="custom-control-input" id="b3_1">
                    <label class="custom-control-label color-fusion-600" for="b3_1">ตรวจสอบงาน/โครงการทั้งหมด</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_2">
                    <label class="custom-control-label color-fusion-600" for="b3_2">แสดง</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_3">
                    <label class="custom-control-label color-fusion-600" for="b3_3">เพิ่ม</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_4">
                    <label class="custom-control-label color-fusion-600" for="b2_4">แก้ไข</label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">
                  <input type="checkbox" class="custom-control-input" id="b3_5">
                    <label class="custom-control-label color-fusion-600" for="b3_5">ลบ</label>
                </div>
              </div>
            </div>



            </div>
          </div>
        </div>
        
        <!-- content end -->





      </div>
    
      <?=view("templates/modalclose.php")?>
    </div>
  </div>

</div>  
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" id = "btn_dialog_close">Close</button>
  <button type="submit" class="btn btn-primary" id ="btn_save_change">Save changes</button>
</div>
</form>

