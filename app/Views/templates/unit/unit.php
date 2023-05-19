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
                                <a href="javascript:void(0);" class="card-title" data-toggle="collapse"
                                    data-target="#js_list_accordion-a" aria-expanded="true" data-filter-tags="settings">
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
                                    <form action="<?=$actual_link?>" method="post" accept-charset="utf-8"
                                        id="form-search" name="form-search">
                                        <input type="hidden" id="modes" name="modes" value="" />
                                        <input type="hidden" id="RowId" name="RowId" value="" />
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class="form-label" for="unit_search">
                                                    ปีงบประมาณ
                                                </label>
                                                <div id="Div_budget_year"></div>
                                            </div>

                                            <div class="col-sm">
                                                <label class="form-label" for="unit_name_search">
                                                    ชื่อส่วนงาน
                                                </label>
                                                <input id="unit_name_search" name="unit_name_search"
                                                    class="form-control searchdata" type="text"
                                                    placeholder="ชื่อส่วนงาน" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-warning" id='searchresults' name='searchresults' style="margin-bottom: 15px;"></div>
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
                            <button type="button" id="btnadd" class="btn btn-primary" data-toggle="modal"
                                data-target=".default-example-modal-right-lg">เพิ่ม</button>

                            <div class="collapse" id="collapsedivadd" style="padding-top: 15px;">
                                <div class="card card-body"></div>
                            </div>
                        </div>
                        <!-- datatable start -->
                        <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
                            <thead class="bg-primary-600">
                                <tr>
                                    <th width="15"></th>
                                    <th>ชื่อส่วนงาน</th>

                                    <th width="90"></th>
                                </tr>
                            </thead>
                            <tbody>

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

<script src="<?= base_url().'/public/';?>js/budget/unit.js"></script>
<script>
< ?
$displaymode = '';
if ($_SESSION['display'] == 'L') {
    $displaymode = 'inline';
} else {
    $displaymode = 'dialog';
} ?
>
let displaymode = '<?=$displaymode?>'; //inline dialog

$(document).ready(function() {
    search_select1();

    if (displaymode == "inline") {
        $("#btnadd").removeAttr("data-toggle data-target")
    } else {
        $("#btnadd").attr("data-toggle", "modal");
        $("#btnadd").attr("data-target", ".default-example-modal-right-lg");
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
        iDisplayLength: 8,
        bServerSide: true,
        sAjaxSource: "/unit_cn/load_data",
        async: false,
        aaSorting: [],
        fnServerParams: function(aoData) {
            var acolumns = this.fnSettings().aoColumns,
                columns = [];
            $.each(acolumns, function(i, item) {
                columns.push(item.data);
            });
            aoData.push({
                name: "columns",
                value: columns,
            });
            aoData.push({
                name: 'budget_year',
                value: $("#budget_year_search").val()
            });
            aoData.push({
                name: 'unit_name',
                value: $("#unit_name_search").val()
            });
        },
        columns: [{
                data: "unit_id",
                className: "details-control",
                //orderable:      false,
                //"defaultContent": ''
            },
            {
                data: "unit_name",
            },
            {
                data: "unit_id",
                render: function(data, type, row) {
                    let txtex = "";
                    if (displaymode == "dialog") {
                        txtex =
                            'data-toggle="modal" data-target=".default-example-modal-right-lg"';
                    }

                    str_btn = "";

                    str_btn = str_btn +
                        '<a href="javascript:void(0);" class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed"><i class="fal fa-search"></i></a>&nbsp;&nbsp;';

                    str_btn = str_btn +
                        `<a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data"><i class="fal fa-edit"></i></a>&nbsp;&nbsp;`;

                    str_btn =
                        str_btn +
                        `<a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"data-toggle="modal" data-target="#example-modal-alert" onclick=set_del_id('${row.unit_id}')><i class="fal fa-times"></i></a>`;
                    return str_btn;
                },
            },
        ],
        order: [
            [0, "desc"]
        ],
        lengthMenu: [
            [10, 25, 50, 100],

            [10, 25, 50, 100],
        ],
        oLanguage: {
            sLengthMenu: "_MENU_",
        },
        fnInitComplete: function() {
            //oTable.fnAdjustColumnSizing();
        },
        fnServerData: function(sSource, aoData, fnCallback) {
            $.ajax({
                dataType: "json",
                async: true,
                type: "POST",
                url: sSource,
                data: aoData,
                success: fnCallback,
            });
        },
        fnDrawCallback: function() {
            $("body").css("min-height", $("#table1 tr").length * 50 + 200);
            $(window).trigger("resize");
        },
        columnDefs: [{
                targets: [2],
                orderable: false,
            },
            {
                targets: [0, 2],
                className: "text-center",
            },
        ],
    });

    //----------------ไม่ต้องแก้----------------
    $(document).on('submit', '#myform1', function() {
        var form = $(this)[0];
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            event.preventDefault();
            event.stopPropagation();
            savedata();
        }
        form.classList.add('was-validated');
    });

    $(document).on('click', '.close-dialog', function() {
        $('#collapsedivadd').slideUp();
        $('#collapsedivadd').html(``);
        $("#dialogmode").html('');
        GoCurrentPage();
    });
    $(document).on('change', '.searchdata', function() {
        searchdata();
    });
    //----------------ปิด ไม่ต้องแก้----------------
    $('#dynamic-table tbody').on('click', 'td .edit-data', function() {
        $('#collapsedivadd').slideUp();
        $('#collapsedivadd').html(``);
        $('#dialogmode').html(``);

        table.rows().every(function() {
            if (this.child.isShown()) {
                this.child.hide();
                $(this.node()).removeClass('shown');
            }
        });
        var tr = $(this).closest('tr');
        var row = table.row(tr);
        var d = row.data();
        var unit_id = d.unit_id;

        if (displaymode == 'inline') {
            row.child(format(d)).show();
            tr.addClass('shown');
            if (unit_id != '') {
                editdata(d);
            }
        } else {
            $('#dialogmode').html(`<?=view("member/unit/unitadd.php")?>`);

            if (unit_id != '') {
                editdata(d);
            }
        }
    });

    function format(d) {
        $(".dialog-success").hide();
        return `<?=view("member/unit/unitadd.php")?>`;
    }


    $(document).on('click', '#btnadd', function() {
        $("#dialogmode").html('');
        table = $('#dynamic-table').DataTable();
        table.draw();
        if (displaymode == 'inline') {
            $('#collapsedivadd').html(`<?=view("member/unit/unitadd.php")?>`);
            $('#collapsedivadd').slideDown();
        } else {
            $('#dialogmode').html(`<?=view("member/unit/unitadd.php")?>`);
        }
        $(".lblmode").text("เพิ่ม");
    });
    searchdata();
});
</script>

<?=view("templates/modal.php")?>