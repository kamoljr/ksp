<?
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get full url
?>
<form id="form_save" name="form_save" method="post" action=""  accept-charset="utf-8">
<div class="row">
  <div class="col-sm-1" style = "padding-top:10px;">
    <h5>ผู้ใช้งาน : </h5>
  </div>
  <div class="col-sm-11">

     <div id = "div_search_user_id"></div>
    <!-- <div class="input-group input-group-lg mb-g ">
      <input type="text" class="form-control shadow-inset-2" placeholder="เลือกชื่อผู้ใช้งาน">
      <div class="input-group-append">
        <span class="input-group-text"><i class="fal fa-search"></i></span>
      </div>
      
    </div> -->
  </div>
  

  <div class = "col-sm-12" style = "padding-top:15px;">
    <div class="card mb-g border shadow-0">
      <div class="card-header bg-primary-700 " style = "padding-top:0px;padding-bottom:0px;margin:0px;">


        <div class="row no-gutters align-items-center " >
          <div class="col" style = "padding-top:10px;">
              <h6 class="color-white" style = "font-weight:100;display: flex;">กำหนดสิทธิ์การใช้งาน : <label id ="lbl_search_username"></label></h6>
          </div>
          <div class="modal-footer">
            <!-- <button type="submit" class="btn btn-primary" id ="btn_save_change">บันทึก</button>
            <button type="button" class="btn btn-light" id = "btn_dialog_close">รีเซต</button> -->
          </div>
        </div>
      </div>
    </div>
    

    <div class="panel-container">
      <div class="panel-content" style="padding-top: 0px;">
        
        <!-- content start -->
        
        <div class="row">
          <div class="col-sm-2" style = "padding-top:10px;">
            <h5>กลุ่มผู้ใช้งาน : </h5>
          </div>
          <div class="col-sm-10" style = "padding-top:0px;padding-bottom:10px;;margin: auto;" >
            <div id = "div_group_permission_id"></div>
            
          </div>
        </div>
        
        <div class="row no-gutters">
          
          <div class="col-3">
            <div id="spyscroll-2" class="list-group p-3" style = "padding-left:0px !important;">
              <div id = "div_create_tab"></div>
              <!-- <a class="list-group-item list-group-item-action" href="#spyscroll-2-a" style="padding:10px;">
                <i class="fa-solid fa-user-gear"></i>
                <label class="mobileHide">&nbsp; ข้อมูลผู้ใช้งาน</label>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-b"style="padding:10px;">
                <i class="fa-solid fa-chess"></i>
                <label class="mobileHide">&nbsp; แผนยุทธศาสตร์และแผนงาน</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-c" style="padding:10px;">
                <i class="fa-solid fa-coins"></i> 
                <label class="mobileHide">&nbsp; งบประมาณ</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-d" style="padding:10px;">
                <i class="fa-solid fa-money-bill-transfer"></i>  
                <label class="mobileHide">&nbsp; เบิกจ่าย</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-e" style="padding:10px;">
                <i class="fa-solid fa-receipt"></i> 
                <label class="mobileHide">&nbsp; การเงิน</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-f" style="padding:10px;">
                <i class="fa-solid fa-hand-holding-dollar"></i> 
                <label class="mobileHide">&nbsp;รายรับและนำส่งเงิน</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-g" style="padding:10px;">
                <i class="fa-solid fa-file-invoice"></i> 
                <label class="mobileHide">&nbsp; จัดซื้อ/จัดจ้าง</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-h" style="padding:10px;">
                <i class="fa-solid fa-people-carry-box"></i> 
                <label class="mobileHide">&nbsp; ครุภัณฑ์</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-i" style="padding:10px;">
                <i class="fa-solid fa-boxes-packing"></i> 
                <label class="mobileHide">&nbsp; วัสดุ</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-j" style="padding:10px;">
                <i class="fa-solid fa-van-shuttle"></i> 
                <label class="mobileHide">&nbsp; จองรถ</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-k" style="padding:10px;">
                <i class="fa-solid fa-calendar-days"></i> 
                <label class="mobileHide">&nbsp; จองห้องประชุม</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-l" style="padding:10px;">
                <i class="fa-solid fa-square-poll-vertical"></i> 
                <label class="mobileHide">&nbsp; ติดตามผล</laabel>
              </a>
              <a class="list-group-item list-group-item-action" href="#spyscroll-2-m" style="padding:10px;">
                <i class="fa-solid fa-screwdriver-wrench"></i> 
                <label class="mobileHide">&nbsp; แจ้งงานบริการ</laabel>
              </a> -->

            </div>
          </div>
          <div class="col-9">
            <div data-spy="scroll" data-target="#spyscroll-2" data-offset="0" class="position-relative overflow-auto px-2 py-3" style="height:550px">
            <!-- row system -->
              
              <div id = "div_create_permission"></div>
              
            </div>
          </div>
        </div>
        
        <!-- content end -->
      </div>
    </div>
    
   <div class="card-footer " style = "padding-top:0px;padding-bottom:0px;margin:0px;">


      <div class="row no-gutters align-items-center " >
        <div class="col" style = "padding-top:10px;">
        

            <!-- <h6 class="color-white" style = "font-weight:100;display: flex;">กำหนดสิทธิ์การใช้งาน : นายสมคิด วงศ์เศวต</h6> -->
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id ="btn_save_change">บันทึก</button>
          <button type="button" class="btn btn-light" id = "btn_dialog_close">รีเซต</button>
        </div>
      </div>
    </div>






       
  </div>
</div> 
</form>

<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>


<script>
 
function create_permission(){
  
	var aoData = "a=''"; 

	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_permission",
		dataType: "json",
		async:false,
		data: aoData,
		success: function(response) {
			
      str = "";
      $.each(response,function(i){

        str = str+'<div class="row bg-primary-200 text-white rounded" style = "padding-top:20px;margin-bottom:20px;" id="spyscroll-2-'+response[i].description_id+'">';
          str = str+'<div class="col" >';
            str = str+'<h4 >'+response[i].description+'</h4>';
          str = str+'</div>';
          str = str+'<div class="col text-right" style = "padding-bottom:20px;">';
            str = str+'<div class="custom-control custom-checkbox custom-control-inline" >';
              str = str+'<input type="checkbox" class="custom-control-input" id="systemmenu'+response[i].description_id+'" onchange="fn_systemcheck('+response[i].description_id+')">';
              str = str+'<label class="custom-control-label" for="systemmenu'+response[i].description_id+'">ทั้งหมด</label>';
            str = str+'</div>';
          str = str+'</div>';
        str = str+'</div>';
        // open row menu
        var aoData = "description_id="+response[i].description_id; 
        $.ajax({
          type: "POST",
          url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_menu",
          dataType: "json",
          async:false,
          data: aoData,
          success: function(response_nemu) {
            
            //str = "";
            $.each(response_nemu,function(i){
              let app_name = response_nemu[i].app_name_des;
              let app_name1 = app_name.replace("&nbsp;", "");
              let app_name2 = app_name1.replace("&emsp;", "");
              let app_name3 = app_name2.replace("&emsp;&emsp;", "");
              let app_name4 = app_name3.replace("&emsp;&emsp;&emsp;", "");
              let app_name5 = app_name4.replace("&emsp;&emsp;&emsp;&emsp;", "");
              let app_name6 = app_name5.replace("&emsp;&emsp;&emsp;&emsp;&emsp;", "");
              let app_name7 = app_name6.replace("&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;", "");
              
              if (response_nemu[i].menu_group == "N"){
              str = str+'<div class="row">';
                str = str+'<div class="col-sm-12" style = "padding-left:20px;" >';
                  str = str+'<h5><b>'+app_name7+'</b></h5>';
                  // str = str+'<h5><b>'+app_name7+'||'+response_nemu[i].mom_id+'</b></h5>';
                str = str+'</div>';
              str = str+'</div>';
              

              str = str+'<div class="row frame-wrap" style = "margin-bottom:25px;padding-top:3px;padding-bottom:3px;">';
                str = str+'<div class="col-sm-4" style = "padding-left:20px;">';
                  str = str+'<div class="custom-control custom-checkbox custom-control-inline" >';
                  //str = str+'<input id="mom_id" name="mom_id" type="hidden" value="'+response_nemu[i].mom_id+'"/>';
                    str = str+'<input type="checkbox" class="custom-control-input" value = "'+response_nemu[i].app_id+'" id="row_'+response_nemu[i].app_id+'" onchange="fn_rowcheck('+response_nemu[i].app_id+')">';
                      str = str+'<label class="custom-control-label" for="row_'+response_nemu[i].app_id+'">ทั้งหมด</label>';
                  str = str+'</div>';
                str = str+'</div>';
                str = str+'<div class="col-sm-2">';
                  str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                    str = str+'<input type="checkbox" class="row_per'+response_nemu[i].app_id+' systemcheck'+response_nemu[i].description_id+' custom-control-input" value = "'+response_nemu[i].app_id+'" id="show_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'" name="show_'+response_nemu[i].app_id+'">';

                      str = str+'<label class="custom-control-label" for="show_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'">แสดง</label>';
                  str = str+'</div>';
                str = str+'</div>';
                str = str+'<div class="col-sm-2">';
                  str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                    str = str+'<input type="checkbox" class="row_per'+response_nemu[i].app_id+' systemcheck'+response_nemu[i].description_id+' custom-control-input" value = "'+response_nemu[i].app_id+'" id="add_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'" name="add_'+response_nemu[i].app_id+'">';

                      str = str+'<label class="custom-control-label" for="add_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'">เพิ่ม</label>';
                  str = str+'</div>';
                str = str+'</div>';
                str = str+'<div class="col-sm-2">';
                  str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                    str = str+'<input type="checkbox" class="row_per'+response_nemu[i].app_id+' systemcheck'+response_nemu[i].description_id+' custom-control-input" value = "'+response_nemu[i].app_id+'" id="edit_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'" name="edit_'+response_nemu[i].app_id+'">';

                      str = str+'<label class="custom-control-label" for="edit_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'">แก้ไข</label>';
                  str = str+'</div>';
                str = str+'</div>';
                str = str+'<div class="col-sm-2">';
                  str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                    str = str+'<input type="checkbox" class="row_per'+response_nemu[i].app_id+' systemcheck'+response_nemu[i].description_id+' custom-control-input" value = "'+response_nemu[i].app_id+'" id="del_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'" name="del_'+response_nemu[i].app_id+'">';

                      str = str+'<label class="custom-control-label" for="del_'+response_nemu[i].description_id+'_'+response_nemu[i].app_id+'">ลบ</label>';
                  str = str+'</div>';
                str = str+'</div>';
              str = str+'</div>';
              }



              if (response_nemu[i].menu_group == "Y"){
             // if (response_nemu[i].menu_group == "Y"){
              // -------------app chiid---------------
              
              var aoData = "description_id="+response_nemu[i].description_id+"&mom_id="+response_nemu[i].app_id;
              $.ajax({
                type: "POST",
                url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_menu_sub",
                dataType: "json",
                async:false,
                data: aoData,
                success: function(response_nemu_sub) {
                  
                  //str = "";
                  $.each(response_nemu_sub,function(i){
                    let app_name = response_nemu_sub[i].app_name_des;
                    let app_name1 = app_name.replace("&nbsp;", "");
                    let app_name2 = app_name1.replace("&emsp;", "");
                    let app_name3 = app_name2.replace("&emsp;&emsp;", "");
                    let app_name4 = app_name3.replace("&emsp;&emsp;&emsp;", "");
                    let app_name5 = app_name4.replace("&emsp;&emsp;&emsp;&emsp;", "");
                    let app_name6 = app_name5.replace("&emsp;&emsp;&emsp;&emsp;&emsp;", "");
                    let app_name7 = app_name6.replace("&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;", "");
                    //console.log( app_name7);
                    str = str+'<div class="row">';
                      str = str+'<div class="col-sm-12" style = "padding-left:20px;" >';
                        str = str+'<h5><b>'+app_name7+'</b></h5>';
                        // str = str+'<h5><b>'+app_name7+'||xx'+response_nemu_sub[i].mom_id_sub+'</b></h5>';
                      str = str+'</div>';
                    str = str+'</div>';
                    
                    str = str+'<div class="row frame-wrap" style = "margin-bottom:25px;padding-top:3px;padding-bottom:3px;">';
                    str = str+'<div class="col-sm-4" style = "padding-left:20px;">';
                      str = str+'<div class="custom-control custom-checkbox custom-control-inline" >';
                        //str = str+'<input id="mom_id" name="mom_id" type="hidden" value="'+response_nemu_sub[i].mom_id_sub+'"/>';
                        str = str+'<input type="checkbox" class="custom-control-input" value = "'+response_nemu_sub[i].app_id_sub+'" id="row_'+response_nemu_sub[i].app_id_sub+'" onchange="fn_rowcheck('+response_nemu_sub[i].app_id_sub+')">';
                          str = str+'<label class="custom-control-label" for="row_'+response_nemu_sub[i].app_id_sub+'">ทั้งหมด</label>';
                      str = str+'</div>';
                      str = str+'</div>';
                      str = str+'<div class="col-sm-2">';
                        str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                          str = str+'<input type="checkbox" class="row_per'+response_nemu_sub[i].app_id_sub+' systemcheck'+response_nemu_sub[i].description_id+' custom-control-input" value = "'+response_nemu_sub[i].app_id_sub+'" id="show_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'" name="show_'+response_nemu_sub[i].app_id_sub+'">';

                            str = str+'<label class="custom-control-label" for="show_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'">แสดง</label>';
                        str = str+'</div>';
                      str = str+'</div>';
                      str = str+'<div class="col-sm-2">';
                        str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                          str = str+'<input type="checkbox" class="row_per'+response_nemu_sub[i].app_id_sub+' systemcheck'+response_nemu_sub[i].description_id+' custom-control-input" value = "'+response_nemu_sub[i].app_id_sub+'" id="add_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'" name="add_'+response_nemu_sub[i].app_id_sub+'">';

                            str = str+'<label class="custom-control-label" for="add_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'">เพิ่ม</label>';
                        str = str+'</div>';
                      str = str+'</div>';
                      str = str+'<div class="col-sm-2">';
                        str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                          str = str+'<input type="checkbox" class="row_per'+response_nemu_sub[i].app_id_sub+' systemcheck'+response_nemu_sub[i].description_id+' custom-control-input" value = "'+response_nemu_sub[i].app_id_sub+'" id="edit_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'" name="edit_'+response_nemu_sub[i].app_id_sub+'">';

                            str = str+'<label class="custom-control-label" for="edit_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'">แก้ไข</label>';
                        str = str+'</div>';
                      str = str+'</div>';
                      str = str+'<div class="col-sm-2">';
                        str = str+'<div class="custom-control custom-checkbox custom-control-inline" style = "padding-left:50px;">';

                          str = str+'<input type="checkbox" class="row_per'+response_nemu_sub[i].app_id_sub+' systemcheck'+response_nemu_sub[i].description_id+' custom-control-input" value = "'+response_nemu_sub[i].app_id_sub+'" id="del_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'" name="del_'+response_nemu_sub[i].app_id_sub+'">';

                            str = str+'<label class="custom-control-label" for="del_'+response_nemu_sub[i].description_id+'_'+response_nemu_sub[i].app_id_sub+'">ลบ</label>';
                        str = str+'</div>';
                      str = str+'</div>';
                    str = str+'</div>';


                  });
                  
                  
    
                },
                error: function(response) {
                    
                }
              });
              //------------close app  child---------------
            //  }
              }






            });
            
            $("#div_create_menu").html(str);
          },
          error: function(response) {
              
          }
        });
        

			});
      
    
      $("#div_create_permission").html(str);
		},
		error: function(response) {
				
		}
	});
  
}
function create_tab(){
  
	var aoData = "a=''"; 

	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_tab",
		dataType: "json",
		async:false,
		data: aoData,
		success: function(response) {
			
      str = "";
      $.each(response,function(i){
				str = str+'<a class="list-group-item list-group-item-action" href="#spyscroll-2-'+response[i].description_id+'" style="padding:10px;">';
        str = str+'<i class="fa-solid '+response[i].icon_system_s+'"></i>';
        str = str+'<label class="mobileHide">&nbsp; '+response[i].description+'</label>';
        str = str+'</a>';
			});
    
      $("#div_create_tab").html(str);
		},
		error: function(response) {
				
		}
	});
  
}
function create_one_select(select_var){
  
	var aoData = "a=''"; 
	
	if (select_var.ctr1 != undefined){
		aoData = aoData+"&ctr1="+select_var.ctr1;
	}
	if (select_var.ctr2 != undefined){
		aoData = aoData+"&ctr2="+select_var.ctr2;
	}
	
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/"+select_var.ele_name,
		dataType: "json",
		async:false,
		data: aoData,
		success: function(response) {
			var str_select = '<select class="form-ele '+select_var.classselect+'" id="'+select_var.ele_name+'" name="'+select_var.ele_name+'" placeholder="'+select_var.placeholder+'">';
			//if (select_var.option_type == "all"){
				str_select = str_select+'<option value="" > </option>';
			//}
			$.each(response,function(i){
				selected = '';
				if (select_var.value_edit == response[i].field_id){selected = 'selected';}
				str_select = str_select+'<option value="'+response[i].field_id+'" '+selected+' >'+response[i].field_name+'</option>';
			});
			str_select = str_select+'</select>';
			$("#div_"+select_var.ele_name).html(str_select);
		},
		error: function(response) {
				
		}
	});
  $("#lbl_search_username").text($("#search_user_id option:selected" ).text());
}
//-------open------
const select_var1 = {
  ele_name:"search_user_id", 
  value_edit:"",
  option_type:"",
  placeholder:"ผู้ใช้งาน",
  classselect:"select2",
  // ctr1:$("#search_structure_name").val(),
};
create_one_select(select_var1);
//--------close-----
//-------open------
const select_var2 = {
  ele_name:"group_permission_id", 
  value_edit:"",
  option_type:"",
  placeholder:"กลุ่มผู้ใช้งาน",
  classselect:"select2",
  // ctr1:$("#search_structure_name").val(),
};
create_one_select(select_var2);
//--------close-----
function fn_systemcheck(dis_id){
  if( $('#systemmenu'+dis_id).is(':checked') ){
    $('.systemcheck'+dis_id).prop('checked', true);
  }else{
    $('.systemcheck'+dis_id).prop('checked', false);
  }
}

function fn_rowcheck(dis_id){

  if( $('#row_'+dis_id).is(':checked') ){
    $('.row_per'+dis_id).prop('checked', true);
  }else{
    $('.row_per'+dis_id).prop('checked', false);
  }

}
function savedata() {
	
	// -----ใส่ค่า--------
	var aoData = $('#form_save').serialize();
	//----------------
	
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/save_data",
		dataType: "json",
		beforeSend: function () {
		
		},
		data: aoData,
		success: function(response) {
      bootbox.alert({
      message: '<div style = "margin-top:45px;" class="alert border-info bg-transparent text-info" role="alert"><strong>บันทึกข้อมูลแล้ว</strong></div>',
      size: 'small'
      });
      
		},
		complete: function () {
			
		},
		error: function(response) {
			
		}
	});
  
}
$(document).ready(function() {



  $("#form_save").validate({
		rules: {
			search_user_id: "required",
		},
		messages: {
			search_user_id: "กรุณาป้อนชื่อ ผู้ใช้งาน",
		},
		errorPlacement: function(error, element) {
			if (element.is(":radio")) {
				error.appendTo(element.parents('.form-group'));
			} else { // This is the default behavior 
				error.insertAfter(element);
			}
		},
		submitHandler: function(form) {
			savedata();
		}
	});



  $('.systemcheck').prop('checked', true);
  
  create_tab();
  create_permission();

  $(document).on('change', '#search_user_id', function() {
    $("input[type=checkbox]").prop("checked",false);
    $("#lbl_search_username").text($("#search_user_id option:selected" ).text());
    
    aoData = "user_id="+$("#search_user_id").val();
    $.ajax({
      type: "POST",
      url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/show_edit",
      dataType: "json",
      async:false,
      data: aoData,
      success: function(response) {
        $.each(response,function(i){
          app_id = response[i].app_id;

          show_p = response[i].show_p;
          add_p = response[i].add_p;
          edit_p = response[i].edit_p;
          del_p = response[i].del_p;

          if (show_p == "Y"){
            $("input[type=checkbox][name=show_"+app_id+"]").prop("checked",true);
          }
          if (add_p == "Y"){
            $("input[type=checkbox][name=add_"+app_id+"]").prop("checked",true);
          }
          if (edit_p == "Y"){
            $("input[type=checkbox][name=edit_"+app_id+"]").prop("checked",true);
            //console.log("app_p = "+add_p+" || edit_p="+edit_p);
          }
          if (del_p == "Y"){
            $("input[type=checkbox][name=del_"+app_id+"]").prop("checked",true);
          }
        });
      },
      error: function(response) {
          
      }
    });
    // $("input[type=checkbox][name=show_5]").prop("checked",true);
    $("#group_permission_id").val("");

	});
  $(document).on('change', '#group_permission_id', function() {

    $("input[type=checkbox]").prop("checked",false);
    
    aoData = "group_permission_id="+$("#group_permission_id").val();
    $.ajax({
      type: "POST",
      url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/load_group_permission",
      dataType: "json",
      async:false,
      data: aoData,
      success: function(responsepermission) {
        
        $.each(responsepermission,function(ii){
          //console.log('xxxx');
          app_id = responsepermission[ii].app_id;
          show_p = responsepermission[ii].show_p;
          add_p = responsepermission[ii].add_p;
          edit_p = responsepermission[ii].edit_p;
          del_p = responsepermission[ii].del_p;

          if (show_p == "Y"){
            $("input[type=checkbox][name=show_"+app_id+"]").prop("checked",true);
          }
          if (add_p == "Y"){
            $("input[type=checkbox][name=add_"+app_id+"]").prop("checked",true);
          }
          if (edit_p == "Y"){
            $("input[type=checkbox][name=edit_"+app_id+"]").prop("checked",true);
            //console.log("app_p = "+add_p+" || edit_p="+edit_p);
          }
          if (del_p == "Y"){
            $("input[type=checkbox][name=del_"+app_id+"]").prop("checked",true);
          }
        });
      },
      error: function(response) {
          
      }
    });
    // $("input[type=checkbox][name=show_5]").prop("checked",true);


	});

  $(".select2").select2();
  
});

</script>
<style type="text/css">
   .mobileHide { display: inline;}
   /* Smartphone Portrait and Landscape */
   @media only screen
   and (min-device-width : 320px)
   and (max-device-width : 480px){  .mobileHide { display: none;}}
</style>
