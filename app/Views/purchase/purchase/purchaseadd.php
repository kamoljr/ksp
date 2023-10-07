<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
  <input id="ids" name="ids" type="hidden" value=""/>
  <input id="for_log_app_id" name="for_log_app_id" type="hidden" value="<?=$app_id?>"/>
  <input id="for_log_app_name" name="for_log_app_name" type="hidden" value="<?=$app_name?>"/>
  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:10px;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;">
      <h5 class="color-primary-500" style = "font-weight:600;display: flex;">
        <!-- <i class="ni ni-big-plus fa-2x" id = "icon_add_form" style = "padding-right:10px;"></i> -->
        <!-- <i class="ni ni-pencil fa-2x" id = "icon_edit_form" style = "padding-right:10px;"></i>
        <i class="ni ni-eye fa-2x" id = "icon_view_form" style = "padding-right:10px;"></i> -->
        <label class = "lblmode" style = "padding-top:7px;"></label>
        <label  style = "padding-top:7px;" id = "lblchangepurchase"><?//= $app_name; ?></label>
      </h5>
      

         
              
      <div id="panel-2" class="panel div_edit" ><!-- div edit -->
        <div class="panel-container show " style = "color:#666666;">
          <div class="panel-content" style = "padding:8px;">





          <?=view("purchase/purchase/purchase1.php")?>
          <?=view("purchase/purchase/purchase2.php")?>
          <?=view("purchase/purchase/purchase3.php")?>
          <?=view("purchase/purchase/purchase4.php")?>
          <?=view("purchase/purchase/purchase5.php")?>
          <?=view("purchase/purchase/purchase6.php")?>
          <?=view("purchase/purchase/purchase7.php")?>
          <?=view("purchase/purchase/purchase8.php")?>
          <?=view("purchase/purchase/purchase9.php")?>
          <?=view("purchase/purchase/purchase10.php")?>
          <?=view("purchase/purchase/purchase11.php")?>
             




              
              




            

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

