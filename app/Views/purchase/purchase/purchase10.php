<div class = "hidedivpurchase" id = "purchase10">
    





<div class="panel-content fourd-form-row-a" >
  <div class="form-row dialog-data " style = "padding-bottom:5px;line-height:30px;vertical-align: middle;padding-top:5px;">
    <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
      <label class="form-label" for="" style = "margin:0;">
        บริษัท	
      </label>
    </div>
    <div class="col-md-3 mb-3" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
      <label class="form-label" for="" style = "margin:0;">
        บริษัท ออนป้า จำกัด	
      </label>
    </div>

    <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
      <label class="form-label" for="" style = "margin:0;">
        <!-- เรื่อง  -->
      </label>
    </div>
    <div class="col-md-3 mb-3" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
      <!-- <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ตำแหน่งชื่อผู้รับเงิน" value=""> -->
      <label class="form-label" for="" style = "margin:0;">
        <!-- ขอความอนุเคราะห์ดำเนินการจ้าง -->
      </label>
    </div>
  </div>
</div>
<div class="panel-content fourd-form-row-b" >
  <div class="form-row dialog-data " style = "padding-bottom:5px;line-height:30px;vertical-align: middle;padding-top:5px;">
    

    <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
      <label class="form-label" for="" style = "margin:0;">
        สัญญาเลขที่ 
      </label>
    </div>
    <div class="col-md-9 mb-9" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
      <!-- <input type="text" class="form-control form-ele clear-element" id="position_name" name="position_name" placeholder="ตำแหน่งชื่อผู้รับเงิน" value=""> -->
      <label class="form-label" for="" style = "margin:0;">
        2/66
      </label>
    </div>
  </div>
</div>
<div class="panel-content fourd-form-row-a" >
  <div class="form-row dialog-data " style = "padding-bottom:5px;line-height:30px;vertical-align: middle;padding-top:5px;">
    <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
      <label class="form-label" for="" style = "margin:0;">
        วันที่สัญญา (วันที่ลงนาม)	
      </label>
    </div>
    <div class="col-md-3 mb-3" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
      <input type="text" class="form-control form-ele clear-element datepk" id="position_name" name="position_name" placeholder="วันที่สัญญา" value="">
    </div>

    <div class="col-md-3 mb-3" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
      <label class="form-label" for="" style = "margin:0;">
        <!-- จำนวนเงิน (บาท) -->
      </label>
    </div>
    <div class="col-md-3 mb-3" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
     
      <label class="form-label" for="" style = "margin:0;">
        <!-- 200,000 -->
      </label>
    </div>
  </div>
</div>






</div><!-- ปิด บนสุด -->



<script>
  $("#typecash").hide();
  $("#typenotcash").hide();
  function purchase10_show_hide(optval){
    
    if (optval.value == 1){
      $("#typenotcash").hide();
      $("#typecash").show();
    }else{
      $("#typenotcash").show();
      $("#typecash").hide();
    }
  }
	
</script>