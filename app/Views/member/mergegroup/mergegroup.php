<?
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get full url
?>


<div class="row">
  <div class="col-sm-4 text-right" style="padding-top:10px;">
    <label class="form-label" for="group_name_search">
        <h5 class=" color-Secondary-500">
            โครงสร้างปี
        </h5>
      </label>
  </div>
  <div class="col-sm-6">
    <div id ="div_search_structure_id"></div>
  </div>
  <div class="col-sm-2">
      
  </div>
</div>

<div class = "row">
<div class="col-sm-12">
  <div class="card mb-g border shadow-0">


  



    <div class="card-header bg-primary-700 " style = "padding-top:0px;padding-bottom:0px;margin:0px;">
      <div class="row no-gutters align-items-center " >
        <div class="col text-center" style = "padding-top:10px;">
            <h5 class="color-white" style = "font-weight:100;"><label id = "lvl_structure_id"></label></h5>
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
    
    <div class="panel-container">
      <div class="panel-content" style="padding-top: 0px;">
        
        <!-- content start -->
     
        <div class = "row">
          <div class = "col-sm-12 text-center align-items-center" style = "margin-top:20px;">
            
            
          </div>
        </div>


        <!-- <div class="main-container" style = "overflow-x: scroll;">
          <ul class="columns">
          
           
            

            <li class="column to-do-column" >
                
                <div class="column-header font-header-org text-center hover-to-show-link" style = "position:relative;">
                  <div class="" style="margin-right:0px !important;">
                
                    สำนักมาตรฐานวิชาชีพ
                    
                  </div>
                  <div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">

                    <a href="javascript:void(0);" style = "" class="btn_unit btn btn-primary btn-xs btn-icon rounded-circle" style="">
                        <i class="ni ni-pencil"></i>
                    </a>
                    &nbsp;&nbsp;
                    <a href="javascript:void(0);" class="btn_del_unit btn btn-danger btn-xs btn-icon rounded-circle">
                        <i class="ni ni-trash"></i>
                    </a>
                  </div>

                </div>
              <ul class="task-list unit1" id="to-do" >
                
                <li class="task hover-to-show-link" value = '22'>
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มรับรองความรู้และความชำนาญ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
               
              </ul>
            </li>

            <li class="column doing-column">
              
              <div class="column-header font-header-org text-center hover-to-show-link " style = "position:relative;">
                <div class="" style="margin-right:0px !important;">
                 
                  สำนักทะเบียนและใบอนุญาตประกอบวิชาชีพ
                  
                </div>
                <div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">

               

                  <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                      <i class="ni ni-pencil"></i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                      <i class="ni ni-trash"></i>
                  </a>
                </div>

              </div>
              <ul class="task-list" id="doing">
                <li class="task hover-to-show-link">
                  
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มบริการผู้ขอประกอบวิชาชีพ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
               
              </ul>
            </li>
            <li class="" style = "display:block">dd</li>
            <li class="column doing-column">
              
              <div class="column-header font-header-org text-center hover-to-show-link " style = "position:relative;">
                <div class="" style="margin-right:0px !important;">
                 
                  สำนักทะเบียนและใบอนุญาตประกอบวิชาชีพ
                  
                </div>
                <div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">

               

                  <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                      <i class="ni ni-pencil"></i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                      <i class="ni ni-trash"></i>
                  </a>
                </div>

              </div>
              <ul class="task-list" id="doing">
                <li class="task hover-to-show-link">
                  
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มบริการผู้ขอประกอบวิชาชีพ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
               
              </ul>
            </li>
            
          </ui>
        </div> -->
        


        <!-- <div class="main-container" style = "overflow-x: scroll;">
          <ul class="columns"> -->
            <!-- <div id = "displayorgchart" class="main-container" style = "overflow-x: scroll;"></div> -->
            <div id = "displayorgchart"></div>
           
            

         

            <!-- -----เปิด สำนัก  -->
            <!-- <li class="column to-do-column" >
              <div class="column-header font-header-org text-center hover-to-show-link" style = "position:relative;">
                <div class="" style="margin-right:0px !important;">
                  สำนักมาตรฐานวิชาชีพ
                </div>
                <div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">
                  <a href="javascript:void(0);" style = "" class="btn_unit btn btn-primary btn-xs btn-icon rounded-circle" style="">
                      <i class="ni ni-pencil"></i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn_del_unit btn btn-danger btn-xs btn-icon rounded-circle">
                      <i class="ni ni-trash"></i>
                  </a>
                </div>
              </div>
              <ul class="task-list unit1" id="to-do" > -->
                <!-- -----เปิด กลุ่มงาน  -->
                <!-- <li class="task hover-to-show-link" value = '11'>
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มมาตรฐานการประกอบวิชาชีพ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">
                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle btn_group" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle btn_del_group">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                 
                  
                </li> -->
                <!-- -----ปิด กลุ่มงาน  -->
              <!-- </ul>
            </li> -->
            <!-- -----ปิด สำนัก  -->
           

          
          <!-- </ul>
        </div> -->

        
        <!-- content end -->
      </div>
    </div>
    


       
  </div>
</div> 
</div> 

<div class="modal fade example-modal-centered-transparent" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-transparent" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title text-white">
                  <label id = "text_modal-transparent">ยืนยันย้ายส่วนงาน</label>
                  <small class="m-0 text-white opacity-70">
                      <!-- Below is a static modal example -->
                  </small>
              </h4>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="fal fa-times"></i></span>
              </button>
          </div>
          <div class="modal-body">
              ...
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="javascript:location.reload();">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
  </div>
</div>
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js"></script>


<script>
  function create_orgchart_unit(){
		var aoData = "search_structure_id="+$("#search_structure_id").val();
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_orgchart_unit",
			dataType: "json",
			async:false,
			data: aoData,
			success: function(response) {
				str = "";
        zz = 1;
        str = str+'<div class="main-container" style = "overflow-x: scroll;">';
        str = str+'<ul class="columns">';
				$.each(response,function(i){
          //response[i].user_id
          
          str = str+'<li class="column to-do-column-'+zz+'" >';
            str = str+'<div class="column-header font-header-org text-center hover-to-show-link" style = "position:relative;">';
              str = str+'<div class="" style="margin-right:0px !important;">';
                str = str+response[i].unit_name+response[i].unit_id;
              str = str+'</div>';
              str = str+'<div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">';
                str = str+'<a href="javascript:void(0);" style = "" class="btn_unit btn btn-primary btn-xs btn-icon rounded-circle" style="">';
                    str = str+'<i class="ni ni-pencil"></i>';
                str = str+'</a>';
                str = str+'&nbsp;&nbsp;';
                // str = str+'<a href="javascript:void(0);" class="btn_del_unit btn btn-danger btn-xs btn-icon rounded-circle">';
                    // str = str+'<i class="ni ni-trash"></i>';
                // str = str+'</a>';
              str = str+'</div>';
            str = str+'</div>';
            str = str+'<ul class="uid'+response[i].unit_id+' task-list" id = "to-do-'+zz+'" name = "to-do-'+zz+'" data-value = "'+response[i].unit_id+'" >';
              //-------เปิด กลุ่มงาน-------
              var aoData = "search_structure_id="+$("#search_structure_id").val()+"&unit_id="+response[i].unit_id;
              $.ajax({
                type: "POST",
                url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/create_orgchart_group",
                dataType: "json",
                async:false,
                data: aoData,
                success: function(response_sub) {
                
                  $.each(response_sub,function(ii){
                    let num1 = response[i].unit_id;
                    let text1 = num1.toString();

                    let num2 = response_sub[ii].group_id;
                    let text2 = num2.toString();

                    ans = text1+"00000"+text2;
                    str = str+'<li class="task hover-to-show-link group" data-value = "'+ans+'" value = "'+ans+'">';
                      str = str+'<div class="" style = "position:relative;">';
                        str = str+'<div class="" style="margin-right:0px !important;">';
                          str = str+response_sub[ii].group_name+response_sub[ii].group_id;
                        str = str+'</div>';
                        str = str+'<div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">';
                          str = str+'<a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle btn_group" style="">';
                              str = str+'<i class="ni ni-pencil"></i>';
                          str = str+'</a>';
                          
                          str = str+'&nbsp;&nbsp;';
                          str = str+'<a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle btn_del_group" onclick=btn_del_group("'+response_sub[ii].group_name+'",'+response_sub[ii].group_id+') title = "รวมกลุ่มงาน"> ';
                              // str = str+'<i class="ni ni-trash"></i>';
                              str = str+'<i class="fa-solid fa-user-plus"></i>';
                          str = str+'</a>';
                        str = str+'</div>';
                      str = str+'</div>';
                    str = str+'</li>';
                  });
                  

                },
                error: function(response) {
                    //console.log(response);
                }
              });
              
              //-------ปิด กลุ่มงาน-------
            str = str+'</ul>';
          str = str+'</li>';
        
          if (zz==7){
           str = str+'</div>';
           str = str+'</ul>';
           str = str+'<div class="main-container" style = "overflow-x: scroll;">';
          str = str+'<ul class="columns">'; 
          }
          zz++;
				});
        str = str+'</div>';
        str = str+'</ul>';
        $("#displayorgchart").html(str);

			},
			error: function(response) {
					//console.log(response);
			}
		});
    
  dragula([
    document.getElementById("to-do-1"),
    document.getElementById("to-do-2"),
    document.getElementById("to-do-3"),
    document.getElementById("to-do-4"),
    document.getElementById("to-do-5"),
    document.getElementById("to-do-6"),
    document.getElementById("to-do-7"),
    document.getElementById("to-do-8"),
    document.getElementById("to-do-9"),
    document.getElementById("to-do-10"),
    document.getElementById("to-do-11"),
    document.getElementById("to-do-12"),
    document.getElementById("to-do-13"),
    document.getElementById("to-do-14"),
    document.getElementById("to-do-15"),
    document.getElementById("to-do-16"),
    document.getElementById("to-do-17"),
    document.getElementById("to-do-18"),
    document.getElementById("to-do-19"),
    document.getElementById("to-do-20"),
    
   ])
  .on('drag', function (el,target) {
    el.className = el.className.replace('ex-moved', '');

    var value = el.getAttribute('data-value');
    
    //console.log("drag_value"+value);
    //var droppedValue = el.textContent;
     //console.log('Dropped Value:', droppedValue);
    
    


  }).on('drop', function (el,target) {
    el.className += ' ex-moved';
       //var droppedValue = el.textContent;
     //console.log('Dropped Value:', droppedValue);

       var targetuid = target.className; // Assuming your containers have unique IDs
      //console.log(targetuid);
      let uid_new = targetuid;
       uid_new = uid_new.replace("ex-over", "");
       uid_new = uid_new.replace("task-list", "");
       uid_new = uid_new.replace("uid", "");
       uid_new = uid_new.replace(" ", "");
      console.log("u_new_id="+uid_new);
      // console.log('ssss='+$("#to-do-2").val());
      
     // console.log('Element Dropped into Container:', $("#"+targetId).val());
     //console.log('Element Dropped into Container:', targetId);
      //console.log("xxxxx"+el);
      //console.log('id= '+target);
      var oldgroup = el.getAttribute('data-value');
    

      let oldgroup_arr = oldgroup.split("00000");
      let uid_old = oldgroup_arr[0];
      let gid_old = oldgroup_arr[1];
      console.log("-----------------");
      console.log("uid_old="+uid_old);
      console.log("gid_old="+gid_old);
      moveunit(uid_old,gid_old,uid_new)
      // console.log("group_move_id"+value);
      //console.log('Dropped element into container:', target);
    $('ul.unit li.group').each(function(element) {

      //console.log('li value='+$(this).val());
      // console.log('li value='+unitvalue.value);
      
    });
    //$('.example-modal-centered-transparent').modal('toggle'); 
    //$("#text_modal-transparent").text("ต้องการย้ายส่วนงาน ใช่หรือไม่");
    }).on('over', function (el, container) {
      container.className += ' ex-over';
    //console.log("c");
    }).on('out', function (el, container) {
    container.className = container.className.replace('ex-over', '');
    //console.log("d");
    });
	}
  function moveunit(uid_old,gid_old,uid_new){
    //alert(uid_old+gid_old+uid_new);
    
    if (uid_old != "" && gid_old != "" && uid_new != ""){
      var aoData = "uid_old="+uid_old+"&gid_old="+gid_old+"&uid_new="+uid_new+"&search_structure_id="+$("#search_structure_id").val();
      $.ajax({
        type: "POST",
        url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/findmessages",
        dataType: "json",
        beforeSend: function () {
          
        },
        data: aoData,
        success: function(response) {
          group_name_old = "";
          unit_name_old = "";
          unit_name_new = "";
          //$.each(response,function(i){
            // console.log("ssssaaaa"+response.group_name_old);
            group_name_old = response.group_name_old;
            unit_name_old = response.unit_name_old;
            unit_name_new = response.unit_name_new;

          //});
        
          bootbox.confirm({
            message: "<h5> ย้ายกลุ่มงาน : "+group_name_old+" <br>จาก : "+unit_name_old+" <br>ไปยัง : "+unit_name_new+"</h5>",
             //message: "<h5> ย้ายกลุ่มงาน : </h5>",
            buttons: {
            confirm: {
            label: 'ยืนยัน',
            className: 'btn-primary'
            },
            cancel: {
            label: 'ยกเลิก',
            className: 'btn-secondary'
            }
            },
              callback: function (result) {
                console.log('This was logged in the callback: ' + result);
                if (result == true){
                  moveunit_save(uid_old,gid_old,uid_new,group_name_old,unit_name_old,unit_name_new);
                }
                
              }
            });
          //location.reload();

        },
        complete: function () {
          
        },
        error: function(response) {
          
        }
      });
      
    }else{
      alert("มีบางอย่างผิดปกติ");
    }
    
  }
  function searchdata(){
		$("#lvl_structure_id").text($("#search_structure_id option:selected" ).text());
   
    create_orgchart_unit();
	}

  function copyorg(structure_name_new){
		// -----ใส่ค่า--------
    //console.log('aaa'+structure_name_new);
    var aoData = "search_structure_id="+$("#search_structure_id").val()+"&structure_name_new="+structure_name_new;
    //----------------
    console.log(aoData);
    $.ajax({
      type: "POST",
      url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/copyorg",
      dataType: "json",
      beforeSend: function () {
        
      },
      data: aoData,
      success: function(response) {

        bootbox.alert({
        message: 'บันทึกข้อมูลแล้ว',
        size: 'small'
        });

        location.reload();

      },
      complete: function () {
        
      },
      error: function(response) {
        
      }
    });
	}
  function moveunit_save(uid_old,gid_old,uid_new,group_name_old,unit_name_old,unit_name_new){
		// -----ใส่ค่า--------
    // console.log('aaa'+structure_name_new);
    var aoData = "uid_old="+uid_old+"&gid_old="+gid_old+"&uid_new="+uid_new+"&search_structure_id="+$("#search_structure_id").val()+"&group_name_old="+group_name_old+"&unit_name_old="+unit_name_old+"&unit_name_new="+unit_name_new;
    //----------------
    console.log(aoData);
    $.ajax({
      type: "POST",
      url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/moveunit_save",
      dataType: "json",
      beforeSend: function () {
        
      },
      data: aoData,
      success: function(response) {

        bootbox.alert({
        message: 'บันทึกข้อมูลแล้ว',
        size: 'small'
        });

        location.reload();

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
			merge_group_add: "required",
		},
		messages: {
			merge_group_add: "เลือกกลุ่มงาน",
		},
		errorPlacement: function(error, element) {
			if (element.is(":radio")) {
				error.appendTo(element.parents('.form-group'));
			} else { // This is the default behavior 
				error.insertAfter(element);
			}
		},
		submitHandler: function(form) {
			
      bootbox.confirm({
        message: "<h5> ยืนยันรวมกลุ่มงาน</h5>",
        buttons: {
        confirm: {
        label: 'ยืนยัน',
        className: 'btn-primary'
        },
        cancel: {
        label: 'ยกเลิก',
        className: 'btn-secondary'
        }
        },
          callback: function (result) {
            // console.log('This was logged in the callback: ' + result1);
            if (result == true){
               savedata();
            }
           
          }
        });
		}
	});
  
  //-------open------
	const select_var = {
		ele_name:"search_structure_id",
		value_edit:"",
		option_type:"",
		placeholder:"โครงสร้างปี",
		classselect:"select2 searchdata",
	};
	create_one_select(select_var);
	//--------close-----

  $(".select2").select2();
  
  create_orgchart_unit();
  searchdata();
  $(document).on('change', '.searchdata', function() {
			searchdata();
	});
  $(document).on('click', '#btn_dialog_close', function() {
	  $('.default-example-modal-right').modal('toggle');
  });
  $(document).on('click', '.btn_copy', function() {
	  //$('.example-modal-centered-transparent').modal('toggle');
    //$("#text_modal-transparent").text("ต้องการคัดลอกโครงการ ใช่หรือไม่");
    let locale = {
    OK: 'ตกลง',
    CONFIRM: 'ยืนยัน',
    CANCEL: 'ยกเลิก',
    };

    bootbox.addLocale('custom', locale);
    bootbox.prompt({
    title: "<h5> คัดลอกโครงสร้างจาก : "+$("#search_structure_id option:selected" ).text()+" ไปยังโครงสร้าง :</h5>",
    locale: 'custom',
    callback: function (result) {
      console.log('This was logged in the callback: ' + result);

      if(result != "" && result != null){
        bootbox.confirm({
        message: "<h5> ยืนยัน คัดลอกโครงสร้างจาก : "+$("#search_structure_id option:selected" ).text()+"</h5><br> <h5>ไปยังโครงสร้าง : "+result+"</h5>",
        buttons: {
        confirm: {
        label: 'ยืนยัน',
        className: 'btn-primary'
        },
        cancel: {
        label: 'ยกเลิก',
        className: 'btn-secondary'
        }
        },
          callback: function (result1) {
            if (result1 == true){
              copyorg(result);
            }
             console.log('This was logged in the callback: ' + result1);
            
          }
        });
      }else{
        //alert("ใส่ชื่อโครงสร้างใหม่");
        if(result == null){
          return true;
          
        }else{
          alert("ใส่ชื่อโครงสร้างใหม่");
        }
        
      }


    }
    });
    
  });
  $(document).on('click', '.btn_del_unit', function() {
	  $('.example-modal-centered-transparent').modal('toggle');
    $("#text_modal-transparent").text("ต้องการลบส่วนงาน ใช่หรือไม่");
  });

  $('.ele_select_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
});


/* Custom Dragula JS */

  
  $(document).on('click', '.btn_unit', function() {
    window.location.href = "unit";
    console.log('unit');
    $(".unitadd").show();
    $(".groupadd").hide();
    $(".deladd").hide();
    $('.default-example-modal-right').modal('toggle');
    $("#ex_name").text("เพิ่มส่วงนงาน")
  });
  $(document).on('click', '.btn_group', function() {
    window.location.href = "group";
    console.log('group');
    $(".unitadd").hide();
    $(".deladd").hide();
    $(".groupadd").show();
    $('.default-example-modal-right').modal('toggle');
    $("#ex_name").text("เพิ่มกลุ่มงาน")
  });

  $(document).on('click', '.btn_del_group', function() {
    //-------open------ ตัวเลือก ส่วนงาน หน้า รวมกลุ่มงาน 
    const select_var1 = {
      ele_name:"merge_unit_add",
      value_edit:"",
      option_type:"",
      placeholder:"ส่วนงาน",
      classselect:"ele_select_add",
      ctr1:$("#search_structure_id").val(),
    };
    
    create_one_select(select_var1);
    
    
    
    
    const select_var2 = {//สร้าง select
      ele_name:"merge_group_add", 
      value_edit:"",
      option_type:"-",
      placeholder:"กลุ่มงาน",
      classselect:"ele_select_add",
      ctr1:$("#search_structure_id").val(),
      ctr2:$("#merge_unit_add").val(),
    };
    create_one_select(select_var2);
    
    $('.ele_select_add').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
    //--------close-----
    $(".unitadd").hide();
    $(".deladd").show();//dialog รวมกลุ่มงาน
    $(".groupadd").hide();
    $('.default-example-modal-right').modal('toggle');
    $("#ex_name").text("รวมกลุ่มงาน")
  });
  $(document).on('change', '#merge_unit_add', function() {
    const select_var3 = {
      ele_name:"merge_group_add", // ชื่อ element
      value_edit:"", // ใช้เลื่อกค่า ตอนแก้ไข ใส่ค่าที่ต้องการ
      option_type:"-", //แสดงตัวเลือกทั้งหมด หรือไม่ option_type:all,""
      placeholder:"กลุ่มงาน",
      classselect:"ele_select_add ", //ใส่ class ที่ต้องการ 
      ctr1:$("#search_structure_id").val(),
      ctr2:this.value,//เงื่อนไขแสดงข้อมูล
    };
    // console.log(this.value);
    create_one_select(select_var3);
    $('.ele_select_add').select2({
      dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
    });
  });
/* Vanilla JS to add a new task */
function addTask() {
  /* Get task text from input */
  var inputTask = document.getElementById("taskText").value;
  /* Add task to the 'To Do' column */
  document.getElementById("to-do").innerHTML +=
    "<li class='task'><p>" + inputTask + "</p></li>";
  /* Clear task text from input after adding task */
  document.getElementById("taskText").value = "";
  console.log('xxx');

  
}

/* Vanilla JS to delete tasks in 'Trash' column */
function emptyTrash() {
  /* Clear tasks from 'Trash' column */
  document.getElementById("trash").innerHTML = "";
}
function btn_del_group(group_name,o_gid){
  $("#merge_group_view").text(group_name);
  $("#merge_old_group_id").val(o_gid);
}
// ------------------open save จุดที่ 1/1-----------------------
function savedata() {
	
	var aoData = $('#form_save').serialize()+"&structure_id="+$("#search_structure_id").val();
	//----------------
	
	
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/save_data",
		dataType: "json",
		beforeSend: function () {
			//$("#overlay").fadeIn(200);　
		},
		data: aoData,
		success: function(response) {
			location.reload();
			
		},
		complete: function () {
			//$("#overlay").fadeOut(200);
		},
		error: function(response) {
				//console.log(response);
		}
	});
}
// ------------------close save จุดที่ 1/1-----------------------

</script>
<style>
  
/* show hide bottom */
 .hover-to-show {
   overflow: hidden;
   max-height: 0px;
   -o-transition: all .2s ease-in-out;
   -moz-transition: all .2s ease-in-out;
   -webkit-transition: all .2s ease-in-out;
   transition: all .2s ease-in-out;
 }
 .hover-to-show-link:hover .hover-to-show {
   max-height: 50px;
 }

  /* @import url("https://fonts.googleapis.com/css?family=Arimo:400,700|Roboto+Slab:400,700"); */

/* : */

.add-task-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 20rem;
  height: 5.3rem;
  margin: auto;
  background: #aF80C0;
  border: #000013 0.2rem solid;
  border-radius: 0.2rem;
  padding: 0.4rem;
}

.main-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.columns {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  margin: 1.6rem auto;
}

.column {
  width: 8.4rem;
  margin: 0 0.6rem;
  background: #a8a8a8;
  border: #a8a8a8 0.2rem solid;
  border-radius: 0.4rem;
  
}

.column-header {
  padding: 0.1rem;
  border-bottom: #a8a8a8 0.2rem solid;
  /* height: 70px; */
  height: auto;
  min-height: 65px;
  /* height: 50px; */
  /* max-height: 100%;  */
  /* overflow: auto;  */
  padding-top:5px;
  padding-bottom:15px;
}

.column-header h4 {
  text-align: center;
}

.to-do-column-1 .column-header {
  background: #7a59ad;
}

.to-do-column-2 .column-header {
  background: #56b0a5;
}

.to-do-column-3 .column-header {
  background: #fd3995;
}

.to-do-column-4 .column-header {
  background: #ffba28;
}
.to-do-column-5 .column-header {
  background: #E57A72;
}
.to-do-column-6 .column-header {
  background: #8B4513;
}
.to-do-column-7 .column-header {
  background: #D273FF;
}
.to-do-column-8 .column-header {
  background: #2A505A;
}
.to-do-column-9 .column-header {
  background: #0F4267;
}
.to-do-column-10 .column-header {
  background: #219DFF;
}
.to-do-column-11 .column-header {
  background: #FFBBDA;
}
.to-do-column-12 .column-header {
  background: #FFD10A;
}
.to-do-column-13 .column-header {
  background: #FEB9D0;
}
.to-do-column-14 .column-header {
  background: #A1ACB0;
}
.to-do-column-15 .column-header {
  background: #C6D9BB;
}
.to-do-column-16 .column-header {
  background: #6BA08A;
}
.to-do-column-17 .column-header {
  background: #CC9B71;
}
.to-do-column-18 .column-header {
  background: #FFD3B6;
}
.to-do-column-19 .column-header {
  background: #FFF4C7;
}
.to-do-column-20 .column-header {
  background: #FFD3B6;
}

.task-list {
  min-height: 3rem;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  list-style-type: none;
}

.column-button {
  text-align: center;
  padding: 0.1rem;
}

.button {
  font-family: "Arimo", sans-serif;
  font-weight: 700;
  border: #000013 0.14rem solid;
  border-radius: 0.2rem;
  color: #000013;
  padding: 0.6rem 1rem;
  margin-bottom: 0.3rem;
  cursor: pointer;
}

.delete-button {
  background-color: #ff4444;
  margin: 0.1rem auto 0.6rem auto;
}

.delete-button:hover {
  background-color: #fa7070;
}

.add-button {
  background-color: #ffcb1e;
  padding: 0 1rem;
  height: 2.8rem;
  width: 10rem;
  margin-top: 0.6rem;
}

.add-button:hover {
  background-color: #ffdd6e;
}

.task {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  vertical-align: middle;
  list-style-type: none;
  background: #fff;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  margin: 0.4rem;
  /* height: 5rem; */
  height: auto;
  border: #5d5b5b 0.07rem solid;
  border-radius: 0.2rem;
  cursor: move;
  text-align: center;
  vertical-align: middle;
  padding-bottom:15px;
}

#taskText {
  background: #fff;
  border: #000013 0.15rem solid;
  border-radius: 0.2rem;
  text-align: center;
  font-family: "Roboto Slab", serif;
  height: 4rem;
  width: 7rem;
  margin: auto 0.8rem auto 0.1rem;
}

.task p {
  margin: auto;
}

/* Dragula CSS Release 3.2.0 from: https://github.com/bevacqua/dragula */

.gu-mirror {
  position: fixed !important;
  margin: 0 !important;
  z-index: 9999 !important;
  opacity: 0.8;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
  filter: alpha(opacity=80);
}

.gu-hide {
  display: none !important;
}

.gu-unselectable {
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  -ms-user-select: none !important;
  user-select: none !important;
}

.gu-transit {
  opacity: 0.2;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
  filter: alpha(opacity=20);
}

.font-header-org{
 
  color: #ffff !important;
 
}

</style>