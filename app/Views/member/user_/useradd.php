<div class="dialog-data">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="bg-primary-600" style='padding-top:7px;padding-left:10px;opacity: 0.7;'>

        <div class=" text-truncate text-truncate-lg">
          <label class="lblmode"></label>
          <?= $app_name ?>
        </div>
        <div class="panel-toolbar"></div>
      </div>
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 20px;">
          <form id="myform1" name="form1" method="post" action="" novalidate>
            <input id="idsa" name="idsa" type="text" value="" />ddp


            <!-- close row  -->
            <div class="row">
              <div class="col-sm" style="padding-bottom: 20px;">
                <div class="has-float-label">
                  <input id="user_name" name="user_name" class="form-control form-ele" type="text"
                    placeholder="ชื่อ-นามสกุล" required />
                  <label id="lbl_user_name" for="user_name">ชื่อ-นามสกุล <span class='stars'>*</span></label>
                  <div class="invalid-feedback">
                    ชื่อ-นามสกุล
                  </div>
                </div>
              </div>
            </div>
            <!-- close row  -->


            <!-- open images -->
            <div class="row">
              <div class="col-sm" style="padding-bottom: 20px;">
                <input type="file" class="btn_img js-loadfile" value="Upload" />
                <button class="btn_img js-reset">Reset</button>
                <button class="btn_img js-crop">Crop</button>
                <div class="crop-wrapper"">
                  <div class=" top-overlay">
                </div>
                <div class="bottom-overlay">
                </div>
                <div class="left-overlay">
                </div>
                <div class="right-overlay">
                </div>
                <div class="overlay">
                  <div class="overlay-inner">
                  </div>
                </div>
                <img class="resize-image" src="img/image.jpg" alt="image for resizing">
              </div>
            </div>
        </div>


        <!-- close images -->

        <div class="row">
          <div class="col-sm" style="padding-bottom: 20px;">
            <button type="button" class="btn btn-default waves-effect waves-themed close-dialog"
              style="padding-left:30px;padding-right:30px;" data-dismiss="modal"> ปิด </button>
            <button class="btn btn-primary waves-effect waves-themed" type="submit" id="btn1">บันทึก</button>

            <!-- <button type="button" class="btn btn-secondary" >Close</button> -->
            <!-- <button class="btn btn-info waves-effect waves-themed" type="submit">รีเซ็ต</button> -->
          </div>
        </div>
        </form>

      </div>

    </div>
  </div>
</div>
</div>
<?= view("templates/modalclose.php") ?>