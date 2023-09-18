<?
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get full url
?>








<div class="modal-body" style="padding-top:0px;padding-left:5px;background: url(<?= base_url().'';?>img/svg/pattern-1.svg) no-repeat right bottom fixed; background-size: cover;" tabindex='-1'">

  <div class="col-xl-12 ml-auto mr-auto" style="padding-top:0px;padding-left:0px !important;">
    <div class="card p-4 rounded-plus bg-faded" style="padding-top:10px !important;padding-left:10px !important;padding-right:10px !important;">
      <!-- <h5 class="color-primary-500" style = "font-weight:600;display: flex;">
        sss
      </h5> -->
                                  <div id="panel-12" class="panel bg-primary">
                                    <div class=" text-center ml-auto mr-auto" style = "text-align:center !important;">
                                        <h4 class="text-white text-center" style = "font-weight:500;padding-top:10px;">
                                          เพิ่มโครงการ
                                        </h4>
                                        
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content bg-white">
                                            <div class="row">
                                                <div class="col-auto" style="padding-left:0px !important;padding-right:0px !important;">
                                                  
                                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                            <!-- <i class="fal fa-home"></i> -->
                                                            <i class="fa-solid fa-check"></i>
                                                            <span class="hidden-sm-down ml-1"> ข้อมูลทั่วไป1</span>
                                                        </a>
                                                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                            <!-- <i class="fal fa-home"></i> -->
                                                            <i class="fa-solid fa-check"></i>
                                                            <span class="hidden-sm-down ml-1"> ข้อมูลทั่วไป2</span>
                                                        </a>
                                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                            <!-- <i class="fal fa-user"></i> -->
                                                            <i class="fa-solid fa-check"></i>
                                                            <span class="hidden-sm-down ml-1"> ตัวชี้วัด</span>
                                                        </a>
                                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                            <!-- <i class="fal fa-envelope"></i> -->
                                                            <i class="fa-solid fa-check"></i>
                                                            <span class="hidden-sm-down ml-1"> เป้าหมายเขิงปริมาณ</span>
                                                        </a>
                                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                            <!-- <i class="fal fa-cog"></i> -->
                                                            <i class="fa-solid fa-check"></i>
                                                            <span class="hidden-sm-down ml-1"> เป้าหมายคุณภาพ</span>
                                                        </a>
                                                        <!-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                            
                                                           
                                                            &nbsp;&nbsp;&nbsp;
                                                            <span class="hidden-sm-down ml-1"> กิจกรรม</span>
                                                        </a> -->
                                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                            
                                                            <!-- <i class="fa-solid fa-check"></i> -->
                                                            <i class="fa-solid fa-xmark" style = "color: #f25353; "></i>
                                                            <span class="hidden-sm-down ml-1"> งบรายจ่าย</span>
                                                        </a>
                                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                           
                                                            <!-- <i class="fa-solid fa-check"></i> -->
                                                            <!-- <span class="hidden-sm-down ml-1"> งบรายจ่าย</span> -->
                                                            <i class="fa-solid fa-xmark" style = "color: #f25353; "></i>
                                                            <span class="hidden-sm-down ml-1"> ส่งโครงการ</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col" style="padding-left:0px !important;padding-right:0px !important;">
                                                    <div class="tab-content" id="v-pills-tabContent">
                                                        <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                            <?=view("budget/projectdetail/projectdetail1.php")?>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                            <?=view("budget/projectdetail/projectdetail2.php")?>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                            <?=view("budget/projectdetail/projectdetail3.php")?>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                            <?=view("budget/projectdetail/projectdetail4.php")?>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                            <?=view("budget/projectdetail/projectdetail5.php")?>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                            <?=view("budget/projectdetail/projectdetail8.php")?>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                            <?=view("budget/projectdetail/projectdetail6.php")?>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                            <?=view("budget/projectdetail/projectdetail7.php")?>
                                                        </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

    </div>
  </div>

</div>  



<style>
.td-col-h{
  padding:0px !important;
  color:#ffffff !important;
}
.td-col{
  padding:0px !important;

}
/* 
a:link {
  color: black;
}


a:visited {
  color: white;
}

a:hover {
  color: white;
}

a:active {
  color: white;
} */
</style>








<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>
    
$(document).ready(function() {
  $(".select2").select2();
  $('#unit_name_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#unit_name2_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#indoffice').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });

  var table = $("#dynamic-table").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    columnDefs: [{
      targets: [3],
      orderable: false,
    },
    {
      targets: [0,2],
      className: "text-center",
    },
    {
      targets: [1],
      className: "text-left",
    },
    {
      targets: [],
      className: "text-right",
    }]

  });
  var table = $("#dynamic-table4").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    columnDefs: [{
      targets: [3],
      orderable: false,
    },
    {
      targets: [0,2,3],
      className: "text-center",
    },
    {
      targets: [1],
      className: "text-left",
    },
    {
      targets: [],
      className: "text-right",
    }]

  });
  var table = $("#dynamic-table5").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    columnDefs: [{
      targets: [3],
      orderable: false,
    },
    {
      targets: [0,2,3],
      className: "text-center",
    },
    {
      targets: [1],
      className: "text-left",
    },
    {
      targets: [],
      className: "text-right",
    }]

  });

  var table = $("#dynamic-table6").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    columnDefs: [{
      targets: [],
      orderable: false,
    },
    {
      targets: [0],
      className: "text-center",
    },
    {
      targets: [1],
      className: "text-left",
    },
    {
      targets: [2],
      className: "text-right",
    }]

  });

  $(document).on('click', '.btnadd',
  function() {
    console.log(this.value);
    btnadd_value = this.value;
    // $("#ids").val('');



    $(".lblmode").text("เพิ่ม");

    $("#icon_add_form").show();
    $("#icon_edit_form").hide();
    $("#icon_view_form").hide();

    $('.div_show_rowid').css('display', 'none');

    $(".clear-element").val('');

    $('.form-ele').prop('disabled', false);
    $('.stars').show(); // ซ่อนดาวแดง
    $(".dialog-data").show();
    $(".dialog-success").hide();

    $("#btn_save_change").show();
    $("#btn_dialog_close").show()
    
    $(".project_step_name").text("");
    $(".dialog_hide_all").hide();
    if (btnadd_value == "ind"){
      $(".project_step_name").text("ตัวชี้วัด");
      $(".dialog-data-ind").show();
    }else if (btnadd_value == "target1"){
      $(".dialog-data-target1").show();
      $(".project_step_name").text("เป้าหมายเชิงปริมาณ");
    }else if (btnadd_value == "target2"){
      $(".dialog-data-target2").show();
      $(".project_step_name").text("เป้าหมายเชิงคุณภาพ");

    }
  });

$(document).on('click', '#btn_dialog_close',
  function() {
    $('.default-example-modal-right').modal('toggle');
  });
});




$(function(){
    // $(".datepk").datetimepicker({
     
    //     timepicker:false,
    //     format:'d-m-Y',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
    //     lang:'th',  // แสดงภาษาไทย
    //     onChangeMonth:thaiYear,          
    //     onShow:thaiYear,                  
    //     yearOffset:543,  // ใช้ปี พ.ศ. บวก 543 เพิ่มเข้าไปในปี ค.ศ
    //     closeOnDateSelect:true,
    // });       
});
$(".showhideindoffice2").hide();
$(".showhideindoffice1").hide();
function changindoffice(ii){
  if (ii == 3){
    $(".showhideindoffice1").hide();
    $(".showhideindoffice2").show();
  }else{
    $(".showhideindoffice1").show();
    $(".showhideindoffice2").hide();
  }
}
</script>
