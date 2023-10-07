<div class="dialog-data">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="bg-primary-600" style = 'padding-top:7px;padding-left:10px;opacity: 0.5;-webkit-filter: sepia(80%) hue-rotate(30deg);'>

          <div class=" text-truncate text-truncate-lg">
            <label class = "lblmode"></label>
            <?=$app_name?>
          </div>


        <div class="panel-toolbar"></div>
      </div>

      <div class="panel-container">
        <form id="myform1" name="form1" method="post" action="" novalidate>
        <input id="ids" name="ids" type="hidden" value=""/>
  <input id="for_log_app_id" name="for_log_app_id" type="hidden" value="<?=$app_id?>"/>
  <input id="for_log_app_name" name="for_log_app_name" type="hidden" value="<?=$app_name?>"/>
          <div class="panel-content" style="padding-top: 20px;">
            <!-- close row  -->
            <div class="row">
              <div class="col-sm" style="padding-bottom: 20px;">
                <div class="has-float-label">
                  <input id="unit_name" name="unit_name" class="form-control" type="text" placeholder="ชื่อส่วนงาน" required/>
                  <label for="unit_name">ชื่อส่วนงาน *</label>
                  <div class="invalid-feedback">
                  ชื่อส่วนงาน
                  </div>
                </div>
              </div>
            </div>
            <!-- close row  -->

            <div class="row">
              <div class="col-sm" style="padding-bottom: 20px;">
                <button type="button" class="btn btn btn-default waves-effect waves-themed close-dialog" style = "padding-left:30px;padding-right:30px;" data-dismiss="modal"> ปิด </button>
                <button class="btn btn-primary waves-effect waves-themed" type="submit" id="btn1">บันทึก</button>

                <!-- <button type="button" class="btn btn-secondary" >Close</button> -->
                <!-- <button class="btn btn-info waves-effect waves-themed" type="submit">รีเซ็ต</button> -->
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="dialog-success" style = "display:none;">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-hdr">
        <h2>
          <div class="color-primary-700">
            <label class = "lblmode"></label>
            <?=$app_name?>
          </div>
          <strong></strong> <span class="fw-300"><i></i></span>
        </h2>
        <div class="panel-toolbar"></div>
      </div>
      <div class="panel-container">
        <div class="panel-content" style = "padding-top:30px;">
          <div class="d-flex align-items-center mb-5">
              <h2 class="keep-print-font fw-500 mb-0 text-primary flex-1 position-relative text-center">
              บันทึกข้อมูลสำเร็จ
              <br><br>
              <button type="button" class="btn btn btn-default waves-effect waves-themed close-dialog" style = "padding-left:30px;padding-right:30px;" data-dismiss="modal"> ปิด </button>
                  <small class="text-muted mb-0 fs-xs"></small>
              </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
