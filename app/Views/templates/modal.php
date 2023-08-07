<!-- modal alert -->
<div class="modal modal-alert fade" id="example-modal-alert" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style = "padding-bottom:15px;">
        

        <!-- <h5 class="modal-title">ลบ</h5> -->
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fal fa-times"></i></span>
        </button> -->
      </div>
      <div class="modal-body">
       
        <h3>
          <i class="ni ni-trash fa-2x"></i>
          ยืนยันการลบข้อมูล <label id = "del_detail"></label>
        </h3>

        <div class="alert alert-warning  fade show" id = "div_del_detail" role="alert" style = "text-align:center;">
            
            <span aria-hidden="true"><i class="fal fa-exclamation-triangle"></i></span>
            
            <strong>ไม่สามารถลบข้อมูลได้</strong> ข้อมูลถูกนำไปใช้แล้ว
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-primary" id = "btn_del_data" data-dismiss="modal" onclick=deldata();>ลบ</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Right Large -->
<?
  $dialog_max_width = "800";
  if ($pages == "appgroup"){
    $dialog_max_width = "1000";
  }else if ($pages == "wdproject"){
     $dialog_max_width = "1000";
  }
?>
<div class="flex-1" >
  <div class="modal fade default-example-modal-right " role="dialog" aria-hidden="true" style ="overflow: scroll !important;">
    <div class="modal-dialog modal-dialog-right" style="max-width:<?=$dialog_max_width?>px;overflow: scroll !important;">
      <div class="modal-content bg-primary-800 bg-brand-gradient">
        <div class="modal-header " style="padding-bottom:0px;padding-top:10px;">
          <h5 class=" text-white text">
            <?= $app_name; ?> 
          </h5>
        </div>
        <?
          echo view($description_en."/".$pages."/".$pages."add.php");
          ?>
        
        
      </div>
    </div>
  </div>
</div>
<!-- loading -->
<div id="overlay" style = "z-index:9999;">
    <div class="cv-spinner">
        <span class="spinner"></span>
    </div>
</div>
