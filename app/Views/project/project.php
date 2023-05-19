<?
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get full url
?>
<!-- BEGIN Page Content -->
<!-- the #js-page-content id is needed for some plugins to initialize -->
<main id="js-page-content" role="main" class="page-content">
  <?=view("templates/breadcrumb.php")?>
  <!-- <div class="subheader" style = "margin-bottom:15px;">
        <h1 class="subheader-title">
            โครงการ
        </h1>
    </div> -->
  <div class="row">
    <div class="col-xl-12">
      <div id="panel-1" class="panel" style="margin-bottom: 15px;">
        <div class="panel-container">
          <div id="js_list_accordion" class="accordion accordion-hover accordion-clean">
            <div class="card border-top-left-radius-0 border-top-right-radius-0">
              <div class="card-header">
                <a href="javascript:void(0);" class="card-title" data-toggle="collapse" data-target="#js_list_accordion-a" aria-expanded="true" data-filter-tags="settings">
                  <i class="fal fa-search width-2 fs-xl"></i>
                  ค้นหาโดย
                  <span class="ml-auto">
                    <span class="collapsed-reveal">
                      <i class="fal fa-chevron-up fs-xl"></i>
                    </span>
                    <span class="collapsed-hidden">
                      <i class="fal fa-chevron-down fs-xl"></i>
                    </span>
                  </span>
                </a>
              </div>
              <div id="js_list_accordion-a" class="collapse show" data-parent="#js_list_accordion">
                <div class="card-body">
                  <form action="<?=$actual_link?>" method="post" accept-charset="utf-8" id="form-search" name="form-search">
                    <input type="hidden" id="modes" name="modes" value="" />
                    <input type="hidden" id="RowId" name="RowId" value="" />
                    <div class="row">
                      <div class="col-sm">
                        <label class="form-label" for="unit_search">
                          ส่วนงาน
                        </label>
                        <div id = "Div_SearchUnit_id"></div>
                      </div>
                      <div class="col-sm">
                        <label class="form-label" for="group_search">
                          กลุ่มงาน
                        </label>
                        <div id = "Div_SearchGroup_id"></div>
                      </div>
                      <div class="col-sm">
                        <label class="form-label" for="projectname_search">
                          ชื่อโครงการ
                        </label>
                        <input id="projectname_search" name="projectname_search" class="form-control searchdata" type="text" placeholder="ชื่อโครงการ"/>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="alert alert-warning" id ='searchresults' name ='searchresults' style="margin-bottom: 15px;">
        <strong>ผลการค้นหา : </strong>

        โครงการ : สำนักอำนวยการ
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-12">
      <div id="panel-1" class="panel">
        <!-- <div class="panel-hdr">
            <h2>
                Example <span class="fw-300"><i>Table</i></span>
            </h2>
            <div class="panel-toolbar">
                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                    data-offset="0,10" data-original-title="Collapse"></button>
                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                    data-offset="0,10" data-original-title="Fullscreen"></button>
                <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10"
                    data-original-title="Close"></button>
            </div>
        </div> -->
        <div class="panel-container">
          <div class="panel-content" style="padding-top: 0px;">
            <!-- <div class="panel-tag">
                This example demonstrates FixedHeader being used with individual column
                filters, placed into a second row of the table's header (using
                <code>$().clone()</code>).
            </div> -->

            <div class="frame-wrap mt-3 mb-0 w-100">
              <button type="button" id="btnadd" class="btn btn-primary" data-toggle="modal" data-target=".default-example-modal-right-lg">เพิ่ม</button>

              <div class="collapse" id="collapsedivadd" style="padding-top: 15px;">
                <div class="card card-body"></div>
              </div>
            </div>
            <!-- datatable start -->
            <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
              <thead class="bg-primary-600">
                <tr>
                  <th width="15"></th>
                  <th>โครงการ</th>
                  <th width="80">จำนวนเงิน</th>
                  <th width="50">สถานะ</th>
                  <th width="35"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>อำนวยการ</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <!-- datatable end -->
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->
<!-- ย้าย script ด้านล่างไปไว้ที่ file page ไม่ได้ -->



<script src="<?= base_url().'/public/';?>js/budget/project.js"></script>
<!-- ปิด script ที่ย่้ายไม่ได้ -->
<script>
let displaymode = 'inline'; //inline dialog

$(document).ready(function() {

  search_select1();

  if (displaymode == "inline"){
      $("#btnadd").removeAttr("data-toggle data-target")
  }else{
      $("#btnadd").attr( "data-toggle", "modal" );
      $("#btnadd").attr( "data-target", ".default-example-modal-right-lg" );
  }
  var table = $("#dynamic-table").DataTable({
  orderCellsTop: true,
  fixedHeader: true,
  bLengthChange: false,
  searching: false,
  bAutoWidth: false,
  bStateSave: true,
  processing: true,
  bPaginate: true,
  serverSide: true,
  bProcessing: true,
  iDisplayLength: 15,
  bServerSide: true,
  sAjaxSource: "/project_cn/load_data",
  async: false,
  aaSorting: [],
  fnServerParams: function (aoData) {
    var acolumns = this.fnSettings().aoColumns,
      columns = [];
    $.each(acolumns, function (i, item) {
      columns.push(item.data);
    });
    aoData.push({
      name: "columns",
      value: columns,
    });
    aoData.push({
        name: 'unit_id',
        value: $("#unit_search").val()
    });
    aoData.push({
        name: 'group_id',
        value: $("#group_search").val()
    });
    aoData.push({
        name: 'projectname_search',
        value: $("#projectname_search").val()
    });
  },
  columns: [
    {
      data: "ProjectId",
      className: "details-control",
      //orderable:      false,
      //"defaultContent": ''
    },
    {
      data: "ProjectName",
      render: function (data, type, row) {
        //str_btn = data;
        //success primary default
        let txtex = "";
        if (displaymode == "dialog") {
          txtex = 'data-toggle="modal" data-target=".default-example-modal-right-lg"';
        }

        str_btn = `
        <h6>
            ${data}
        </h6>
        <div class="demo details-control">
        <button type="button" ${txtex} class="btn btn-xs btn-stage btn-stage1-id-${row.ProjectId} btn-default waves-effect waves-themed details-control-1">ทั่วไป</button>
        <button type="button" ${txtex} class="btn btn-xs btn-stage btn-stage2-id-${row.ProjectId} btn-default waves-effect waves-themed details-control-2">เชิงปริมาณ</button>
        <button type="button" ${txtex} class="btn btn-xs btn-stage btn-stage3-id-${row.ProjectId} btn-default waves-effect waves-themed details-control-3">เชิงคุณภาพ</button>
        <button type="button" ${txtex} class="btn btn-xs btn-stage btn-stage4-id-${row.ProjectId} btn-default waves-effect waves-themed details-control-4">กิจกรรม</button>
        <button type="button" ${txtex} class="btn btn-xs btn-stage btn-stage5-id-${row.ProjectId} btn-default waves-effect waves-themed details-control-5">ค่าใช้จ่าย</button>
        <button type="button" ${txtex} class="btn btn-xs btn-stage btn-stage6-id-${row.ProjectId} btn-default waves-effect waves-themed details-control-6">แผนปฎิบัติ</button>
        <button type="button" ${txtex} class="btn btn-xs btn-stage btn-stage7-id-${row.ProjectId} btn-default waves-effect waves-themed details-control-7">งบรายจ่าย</button>
        </div>
        `;
        return str_btn;
      },
    },
    {
      data: "ProjectId",
    },
    { data: "ProjectId" },
    {
      data: "ProjectId",
      render: function (data, type, row) {
        str_btn = "";

        str_btn = str_btn + '<a href="javascript:void(0);" class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed"><i class="fal fa-search"></i></a>&nbsp;&nbsp;';

        str_btn =
          str_btn +
          `<a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"data-toggle="modal" data-target="#example-modal-alert" onclick=set_del_id('${row.ProjectId}')><i class="fal fa-times"></i></a>`;
        return str_btn;
      },
    },
  ],
  order: [[0, "desc"]],
  lengthMenu: [
    [10, 25, 50, 100],

    [10, 25, 50, 100],
  ],
  oLanguage: {
    sLengthMenu: "_MENU_",
  },
  fnInitComplete: function () {
    //oTable.fnAdjustColumnSizing();
  },
  fnServerData: function (sSource, aoData, fnCallback) {
    $.ajax({
      dataType: "json",
      async: true,
      type: "POST",
      url: sSource,
      data: aoData,
      success: fnCallback,
    });
  },
  fnDrawCallback: function () {
    $("body").css("min-height", $("#table1 tr").length * 50 + 200);
    $(window).trigger("resize");
  },
  columnDefs: [
    {
      targets: [2, 3],
      orderable: false,
    },
    {
      targets: [0, 2, 3],
      className: "text-center",
    },
  ],
});


  $(document).on('submit', '#myform1', function(){
      var form = $(this)[0];
      if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
      }else{
          event.preventDefault();
          event.stopPropagation();
          savedata1();
      }
      form.classList.add('was-validated');
  });

  $(document).on('click', '.close-dialog', function(){
      $('#collapsedivadd').slideUp();
      $('#collapsedivadd').html(``);
      $("#dialogmode").html('');
      table = $('#dynamic-table').DataTable();
      table.draw();
  });
  $(document).on('change', '.searchdata', function(){

      searchdata();

  });

  //$(document).on('click', '#adddata', function(){
      // var tr = $('#dynamic-table tbody td div .details-control-1').closest('tr');
      // var row = table.row( tr );
      // row.child( format1() ).show();
      // tr.addClass('shown');
  //});
  <?
  for($ii=1;$ii<=7;$ii++){
  ?>
  $('#dynamic-table tbody').on('click', 'td div .details-control-<?=$ii?>', function () {
    $('#collapsedivadd').slideUp();
    $('#collapsedivadd').html(``);
    $('#dialogmode').html(``);

    table.rows().every(function(){
        if(this.child.isShown()){
            this.child.hide();
            $(this.node()).removeClass('shown');
        }
    });
    var tr = $(this).closest('tr');
    var row = table.row( tr );
    var d = row.data();
    var ProjectId = d.ProjectId;

    if (displaymode == 'inline'){
        row.child( format<?=$ii?>(d) ).show();
        tr.addClass('shown');
        if (ProjectId != ''){
            editdata<?=$ii?>(d);
        }
    }else{
        $('#dialogmode').html(`<?=view("project/projectadd".$ii.".php")?>`);
        if (ProjectId != ''){
            editdata<?=$ii?>(d);
        }
    }
  });

  function format<?=$ii?> ( d ) {
      $(".dialog-success").hide();
      return `<?=view("project/projectadd".$ii.".php")?>`;
  }

  <?
  }
  ?>

  $(document).on('click', '#btnadd', function(){
      $("#dialogmode").html('');
      table = $('#dynamic-table').DataTable();
      table.draw();
      if (displaymode == 'inline'){
          $('#collapsedivadd').html(`<?=view("project/projectadd1.php")?>`);
          $('#collapsedivadd').slideDown();
      }else{
          $('#dialogmode').html(`<?=view("project/projectadd1.php")?>`);
      }
      $("#lblmode").text("เพิ่ม");
  });
  searchdata();
});

</script>


<style >
/* td.details-control {
    background: url('../resources/details_open.png') no-repeat center center;
    cursor: pointer;
}

tr.shown td.details-control {
    background: url('../resources/details_close.png') no-repeat center center;
} */
</style>

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
<div class="modal fade default-example-modal-right-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-right modal-lg" style='max-width:1095px;important'>
    <!-- 1095px -->
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title h4">Large right side modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div> -->
            <div class="modal-body" id ='dialogmode'>
            ...
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
