<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h5 class="color-primary-500" style = "font-weight:600;display: flex;">
        <i class="ni ni-big-plus fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i>
        <!-- <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i> -->
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;"><?= $app_name; ?></label>
      </h5>
      

         
              
      <div id="panel-2" class="panel div_edit" ><!-- div edit -->
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">






              <div class="panel-content fourd-form-row-a" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                       ประเภทองค์กร 
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <select id="organizationtype" name="organizationtype" class=""  placeholder="ประเภทองค์กร" >
                      <option value="" selected>
                        -
                      </option>
                      <option value="2">
                          นิติบุคคล
                      </option>
                      <option value="3">
                          บุคคลธรรมดา 
                      </option>
                      <option value="4">
                          ภาครัฐ  
                      </option>
                      <option value="4">
                          ภาครัฐวิสาหกิจ   
                      </option>
                    </select>
                  </div>
              
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                      เลขประจำตัวผู้เสียภาษี
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เลขประจำตัวผู้เสียภาษี" value="">
                  </div>
                </div>
              </div> 
              
               <div class="panel-content fourd-form-row-b" >
                  <div class="form-row dialog-data " style = "padding-bottom:0px;">
                    <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                      <label class="form-label" for="" style = "margin:0;">
                        เลขทะเบียนการค้า
                      </label>
                      <span class="text-danger stars"> * </span> 
                    </div>
                    <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                      <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เลขทะเบียนการค้า" value="">
                    </div>
              
                    <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                      <label class="form-label" for="" style = "margin:0;">
                        เลขที่อ้างอิงอื่นๆ
                      </label>
                      <span class="text-danger stars"> * </span> 
                    </div>

                    <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                      <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เลขที่อ้างอิงอื่นๆ" value="">
                    </div>




                  </div>
              </div> 

              <div class="panel-content fourd-form-row-a" >
                <div class="form-row dialog-data " style = "padding-bottom:0px;">
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                      ชื่อผู้ประกอบการ 
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ชื่อผู้ประกอบการ" value="">
                  </div>
              
                  <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                      จดทะเบียน Vat
                    </label>
                    <span class="text-danger stars"> * </span> 
                  </div>
                  <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    
                    <select id="vattype" name="vattype" class=""  placeholder="จดทะเบียน Vat" >
                      <option value="" selected>
                        -
                      </option>
                      <option value="2">
                          ไม่ จดทะเบียน Vat
                      </option>
                      <option value="3">
                          จดทะเบียน Vat  
                      </option>
                      
                    </select>
                  </div>
                </div>
              </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-12 mb-12 text-center" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;font-weight:550;">
                  <label class="form-label" for="" style = "margin:0;">
                    ที่อยู่
                  </label>
                  <!-- <span class="text-danger stars"> * </span>  -->
                </div>
              </div>
            </div>
            
            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เลขที่ 
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="เลขที่ " value="">
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ถนน
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ถนน" value="">
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    ตำบล/แขวง 
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ตำบล/ตำบล/แขวง" value="">
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    อำเภอ/เขต
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="อำเภอ/เขต" value="">
                </div>
              </div>
            </div>

            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    จังหวัด 
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                    <select id="province" name="province" class=""  placeholder="จังหวัด" >
                      <option value="" selected>
                        -
                      </option>
                      <option value="1"> กรุงเทพมหานคร</option><option value="2">สมุทรปราการ</option><option value="3">นนทบุรี</option><option value="4">ปทุมธานี</option><option value="5">พระนครศรีอยุธยา</option><option value="6">อ่างทอง</option><option value="7">ลพบุรี</option><option value="8">สิงห์บุรี</option><option value="9">ชัยนาท</option><option value="10">สระบุรี</option><option value="11">ชลบุรี</option><option value="12">ระยอง</option><option value="13">จันทบุรี</option><option value="14">ตราด</option><option value="15">ฉะเชิงเทรา</option><option value="16">ปราจีนบุรี</option><option value="17">นครนายก</option><option value="18">สระแก้ว</option><option value="19">นครราชสีมา</option><option value="20">บุรีรัมย์</option><option value="21">สุรินทร์</option><option value="22">ศรีสะเกษ</option><option value="23">อุบลราชธานี</option><option value="24">ยโสธร</option><option value="25">ชัยภูมิ</option><option value="26">อำนาจเจริญ</option><option value="27">หนองบัวลำภู</option><option value="28">ขอนแก่น</option><option value="29">อุดรธานี</option><option value="30">เลย</option><option value="31">หนองคาย</option><option value="32">มหาสารคาม</option><option value="33">ร้อยเอ็ด</option><option value="34">กาฬสินธุ์</option><option value="35">สกลนคร</option><option value="36">นครพนม</option><option value="37">มุกดาหาร</option><option value="38">เชียงใหม่</option><option value="39">ลำพูน</option><option value="40">ลำปาง</option><option value="41">อุตรดิตถ์</option><option value="42">แพร่</option><option value="43">น่าน</option><option value="44">พะเยา</option><option value="45">เชียงราย</option><option value="46">แม่ฮ่องสอน</option><option value="47">นครสวรรค์</option><option value="48">อุทัยธานี</option><option value="49">กำแพงเพชร</option><option value="50">ตาก</option><option value="51">สุโขทัย</option><option value="52">พิษณุโลก</option><option value="53">พิจิตร</option><option value="54">เพชรบูรณ์</option><option value="55">ราชบุรี</option><option value="56">กาญจนบุรี</option><option value="57">สุพรรณบุรี</option><option value="58">นครปฐม</option><option value="59">สมุทรสาคร</option><option value="60">สมุทรสงคราม</option><option value="61">เพชรบุรี</option><option value="62">ประจวบคีรีขันธ์</option><option value="63">นครศรีธรรมราช</option><option value="64">กระบี่</option><option value="65">พังงา</option><option value="66">ภูเก็ต</option><option value="67">สุราษฎร์ธานี</option><option value="68">ระนอง</option><option value="69">ชุมพร</option><option value="70">สงขลา</option><option value="71">สตูล</option><option value="72">ตรัง</option><option value="73">พัทลุง</option><option value="74">ปัตตานี</option><option value="75">ยะลา</option><option value="76">นราธิวาส</option><option value="77">บึงกาฬ</option>
                      
                    </select>
                    
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    รหัสไปรษณีย์
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="รหัสไปรษณีย์" value="">
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-b" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    เบอร์โทรศัพท์
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ตำบล/เบอร์โทรศัพท์" value="">
                </div>
            
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                  Fax
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="Fax" value="">
                </div>
              </div>
            </div>
            <div class="panel-content fourd-form-row-c" >
              <div class="form-row dialog-data " style = "padding-bottom:0px;">
                <div class="col-md-2 mb-2" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                  <label class="form-label" for="" style = "margin:0;">
                    Email 
                  </label>
                  <span class="text-danger stars"> * </span> 
                </div>
                <div class="col-md-4 mb-4" style="padding-top:5px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
                  <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ตำบล/ตำบล/แขวง" value="">
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
  <button type="button" class="btn btn-secondary" id = "btn_dialog_close">Close</button>
  <button type="submit" class="btn btn-primary" id ="btn_save_change">Save changes</button>
</div>
</form>

