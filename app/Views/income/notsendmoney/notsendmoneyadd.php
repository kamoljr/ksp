<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h4 class="color-primary-500" style = "font-weight:600;display: flex;">
        <!-- <i class="ni ni-big-plus fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i> -->
        <!-- <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>-->
        <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i> 
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;"> แสดงรายการรับเงิน</label>
      </h4>
      <div id="panel-2" class="panel">
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">

           

           

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ได้รับเงินจาก
                  </label>
                </div>
                <div class="col-md-10 mb-10" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 
                  <label class="form-label" for="" style = "margin:0;">
                    	นายชยภูมิ ไชยสงคราม
                  </label>
                </div>
            
                
              </div>
            </div>
            <div class="panel-content fourd-form-row-c" style = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;vertical-align: middle;line-height: 35px !">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ประเภท
                  </label>
                </div>
                <div class="col-md-10 mb-10 " style="padding-bottom:0px;font-size:13px;margin-bottom:0px;margin-top:7px;line-height: 35px !important;vertical-align: middle;" >
                 <label class="form-label" for="" style = "margin:0;">
                    รายรับ
                  </label>
                  
                </div>
              </div>
            </div>

            
          
            

           
           

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:15px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;padding:0;">
                    รายการรับเงิน
                  </label>
                </div>
                
              </div>
            </div>
            <!-- datatable start -->
            <table id="dynamic-table1" class="table table-md table-bordered table-hover table-striped w-100">
              <thead class="bg-fusion-50">
                <tr>
                  
                  <th class="text-center" width = "">
                    ประเภทเงิน
                  </th>
                  <th class="text-center">
                    รายการ
                  </th>
                  <th class="text-center">
                    รายละเอียดรายการ
                  </th>
                  <th class="text-center" width = "90px;">
                    จำนวนเงิน(บาท)
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                  <td>
                   ค่าธรรมเนียมตามพระราชบัญญัตินี้
                  </td>
                  <td>
                   เงินอุดหนุนโครงการภายใต้แผนปฏิบัติการไทยเข้มแข็ง
                  </td>
                  <td>
                   ข้อมูลรายละเอียดรายการ
                  </td>
                  <td>
                   12,000.00
                  </td>
                </tr>
                
              </tbody>
            </table>
            <!-- datatable end -->
            
            <div id = "addexpend"></div >


            <div id = ""class="panel-content fourd-form-row-b div_desposit" style = "background-color:#9acffa;" >
            
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-sm-5 sm-5" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  รายการ
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <select id="desposit_type_add0" name="desposit_type_add0" class="selectdialog adddesposit" style = "100%" placeholder="รายการ" onchange="">
                    <option value="" selected>
                      -
                    </option>
                    <option value="2">
                      เงินรับฝาก-เงินบริจาคกฐินพระราชทาน(2412)
                    </option>
                    <option value="3">
                      เงินรับฝาก-ค่าธรรมเนียมขึ้นทะเบียนรับใบอนุญาตฯ(2430)
                    </option>
                    <option value="4">
                      เงินรับฝาก-ค่าสมัครฝึกอบรมมาตรฐานความรู้วิชาชีพครู
                    </option>
                    <option value="5">
                      เงินรับฝาก-ประกันสัญญา (2406)
                    </option>
                    <option value="5">
                      การช่วยเหลือกรณีประสบอุทกภัยกู้ยืมเงินเพื่อบูรณะซ่อมแซ่มที่อยู่อาศัย
                    </option>
                    <option value="5">
                      เงินสะสมของคุรุสภา-วงเงินกู้ (1501)
                    </option>
                    
                  </select>
                </div>
                
                
                <div class="col-sm-5 sm-5" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:15px;" for="position_name">
                  รายละเอียดรายการ
                  <span class="text-danger stars"> * </span>
                  </label>
                  <textarea class="form-control" id="example-textarea" rows="1"></textarea>
                </div>

                <div class="col-sm-2 sm-2" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  จำนวนเงิน(บาท)
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
                </div>
            
                
              </div>
            </div>





            <div id = ""class="panel-content fourd-form-row-b div_borrow" style = "background-color:#9acffa;" >
            
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-sm-2 sm-2" style="padding-top:5px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;margin-bottom:0px !important;" for="position_name">
                  เลขที่สัญญา
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <select id="borrow_add0" name="borrow_add0" class="selectdialog adddesposit" style = "100%" placeholder="รายการ" onchange="">
                    <option value="" selected>
                      -
                    </option>
                    <option value="2">
                      1/2566
                    </option>
                    <option value="3">
                      2/2566
                    </option>
                    <option value="4">
                      3/2566
                    </option>
                    
                    
                  </select>
                </div>
                
                
                <div class="col-sm-4 sm-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  รายละเอียดรายการ
                  <span class="text-danger stars"> * </span>
                  </label>
                  <textarea class="form-control" id="example-textarea" rows="1"></textarea>
                </div>

                <div class="col-sm-3 sm-3" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;margin-bottom:0px !important;" for="position_name">
                  เงินงบประมาณ(บาท)
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="" style="display:inline !important;width:70% !important;">
                  (2,000)
                  
                </div>
                <div class="col-sm-3 sm-3" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;margin-bottom:0px !important;" for="position_name">
                  เงินนอกงบประมาณ(บาท)
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="" style="display:inline !important;width:70% !important;">
                  (1,000)
                </div>
            
                
              </div>
            </div>





             <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:15px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายละเอียดการรับเงิน
                  </label>
                </div>
                
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" style = "background-color:#c4ecd0de !important;">
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รายการค้างรับ
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label" for="" style = "margin:0;">
                    ไม่ใช่
                  </label>
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ออกใบเสร็จ	
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 <label class="form-label" for="" style = "margin:0;">
                    ไม่ใช่
                  </label>
                </div>
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ภาษา	
                  </label>
                </div>  
                <div class="col-md-2 mb-" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ไทย
                  </label>
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" style = "" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ประเภทการรับเงิน
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                   <label class="form-label" for="" style = "margin:0;">
                    เงินสด
                  </label>
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เลขที่แบบบพิมพ์
                  </label>
                </div>
                <div class="col-md-4 mb-4" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                 
                  <label class="form-label" for="" style = "margin:0;">
                    ก12/66
                  </label>
                </div>
              </div>
            </div>





            <div class="panel-content fourd-form-row-b " id = "divcheck" style = "background-color:#c4ecd0de !important;" >
            
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-sm-2 sm-2" style="padding-top:5px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;margin-bottom:0px !important;" for="position_name">
                  ธนาคาร
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <select id="bank_item_add" name="bank_item_add" class="selectdialog addexpend" style = "100%" placeholder="ประเภทงบ" onchange="">
                    <option value="" selected>
                      -
                    </option>
                    <option value="2">
                      กรุงไทย	
                    </option>
                    <option value="3">
                      กรุงเทพ
                    </option>
                    <option value="4">
                      กสิกรไทย	
                    </option>
                    <option value="5">
                      ไทยพานิชย์	
                    </option>
                    <option value="5">
                      ออมสิน
                    </option>
                    <option value="5">
                      ธนาคารอิสลามแห่งประเทศไทย	
                    </option>
                    
                  </select>
                </div>
                <div class="col-sm-4 sm-4" style="padding-top:5px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;margin-bottom:0px !important; " for="position_name">
                  เลขที่บัญชี
                  <span class="text-danger stars"> * </span> 
                  </label>
                  <select id="bookbank_add" name="exp_add" class="" placeholder="รายการ">
                    <option value="" selected>
                      -
                    </option>
                    <option value="">
                      059-6-01199-8	[ค่าธรรมเนียมสอบแข่งขันของ สนง.	]
                    </option>
                    <option value="17">
                      059-6-01199-7	[ค่าธรรมเนียมสอบแข่งขันของ สนง.	]
                    </option>
                    <option value="17">
                      059-0-01184-7	 [เงินค่าธรรมเนียมของคุรุสภา	]
                    </option>
                  </select>
                </div>
                
                <div class="col-sm-2 sm-2" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  เลขที่เช็ต
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เลขที่เช็ต" value="">
                </div>
                <div class="col-sm-2 sm-2" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  วันที่ในเช็ต
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element datepk" id="position_name" name="position_name" placeholder="วันที่ในเช็ต" value="">
                </div>

                <div class="col-sm-2 sm-2" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label " style ="font-size:13px;" for="position_name">
                  จำนวนเงิน(บาท)
                  <span class="text-danger stars"> * </span>
                  </label>
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="จำนวนเงิน(บาท)" value="">
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
  <!-- <button type="button" class="btn btn-secondary" id = "btn_dialog_close">Close</button>
  <button type="submit" class="btn btn-primary" id ="btn_save_change">Save changes</button> -->
</div>
</form>

