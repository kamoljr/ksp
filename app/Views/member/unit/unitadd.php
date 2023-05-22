<div class="modal-body bg-primary-600" style="padding-top:0px;padding-left:5px;">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h5 class="color-fusion-500">
        เพิ่ม
        <?= $app_name; ?>

      </h5>
      <div id="panel-2" class="panel">
        <div class="panel-container show">
        
            
          
          <div class="panel-content">
            <div class="form-row">
              <div class="col-md-12 mb-12">
                <label class="form-label color-fusion-500" for="unit_name">
                  ส่วนงาน
                  <span class="text-danger"> * </span>
                </label>

                <input type="text" class="form-control" id="unit_name" name="unit_name" placeholder="ขื่อส่วนงาน" value="">

              </div> 
            </div>
          </div>
          

        </div>
      </div>
    </div>
  </div>
  
</div>  
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Save changes</button>
</div>
</form>