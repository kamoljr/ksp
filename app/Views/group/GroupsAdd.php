<div class="dialog-data">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">

      <div class="bg-primary-600" style = 'padding-top:7px;padding-left:10px;opacity: 0.7;'>

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
            <!-- open row  -->
            <div class="row" id = "rowid" style = 'padding-button:30px;'>
              <div class="col-sm" style="padding-bottom: 20px;">
                <div class="panel-tag">
                    รหัส  <label id ="txtid"></label>
                </div>
              </div>


            </div>
            <!-- close row  -->
            <!-- open row  -->
            <div class="row">
              <div class="col-sm" style="padding-bottom: 20px;">
                <div class="has-float-label">
                  <input id="unit_name" name="unit_name" class="form-control form-ele" type="text" placeholder="ชื่อส่วนงาน" required/>
                  <label id="lbl_unit_name" for="unit_name">ชื่อส่วนงาน <span  class = 'stars'>*</span></label>
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

              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?=view("templates/modalclose.php")?>
