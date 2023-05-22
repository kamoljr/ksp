<!-- modal alert -->
<div class="modal modal-alert fade" id="example-modal-alert" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ยืนยันการลบ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fal fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        ยืนยันการลบข้อมูล
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick=deldata();>ลบ</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Right Large -->

  <div class="modal fade default-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-right" style="max-width:800px;">
      <div class="modal-content">
        <div class="modal-header bg-primary-600" style="padding-bottom:0px;padding-top:10px;">
          <h3 class="">
            <?= $app_name; ?> 
          </h3>
        </div>
        <?
          echo view($description_en."/".$pages."/".$pages."add.php");
          ?>
        
        
      </div>
    </div>
  </div>
