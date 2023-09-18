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
                                          ตรวจสอบกิจกรรม
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
                                                            <span class="hidden-sm-down ml-1"> รายละเอียดกิจกรรม</span>
                                                        </a>
                                                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                            <!-- <i class="fal fa-home"></i> -->
                                                            <i class="fa-solid fa-check"></i>
                                                            <span class="hidden-sm-down ml-1"> รายละเอียดงบรายจ่าย</span>
                                                        </a>
                                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                            <!-- <i class="fal fa-user"></i> -->
                                                            <!-- <i class="fa-solid fa-check"></i> -->
                                                            <!-- &nbsp;&nbsp;&nbsp; -->
                                                            <i class="fa-solid fa-check"></i>
                                                            <span class="hidden-sm-down ml-1"> แผนปฏิบัติ</span>
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col" style="padding-left:0px !important;padding-right:0px !important;">
                                                    <div class="tab-content" id="v-pills-tabContent">
                                                        <div class="tab-pane fade active show" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                            <?=view("budget/projectactdconfirm/projectactd1.php")?>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                            <?=view("budget/projectactdconfirm/projectactd2.php")?>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                            <?=view("budget/projectactdconfirm/projectactd3.php")?>
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
  $('#expend_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#month_start').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#month_end').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  // $('#baths').select2({
  //   dropdownParent: $('.default-example-modal-right') 
  // });

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
      targets: [0,1,2,3],
      className: "text-center",
    },
    {
      targets: [],
      className: "text-left",
    },
    {
      targets: [4],
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
    // btnadd_value = this.value;
    btnadd_value =$(this).data("value");
    // $("#ids").val('');



    $(".lblmode").text("แสดง");

    $("#icon_add_form").hide();
    $("#icon_edit_form").hide();
    $("#icon_view_form").show();

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

    if (btnadd_value == "expend"){
      $(".project_step_name").text("รายละเอียดงบรายจ่าย");
      $(".dialog-data-expend").show();
    }else if (btnadd_value == "actplan"){
      $(".dialog-data-actplan").show();
      $(".project_step_name").text("แผนปฏิบัติ");
    // }else if (btnadd_value == "target2"){
    //   $(".dialog-data-target2").show();
    //   $(".project_step_name").text("เป้าหมายเชิงคุณภาพ");

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
</script>
