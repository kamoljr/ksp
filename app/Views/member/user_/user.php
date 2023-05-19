<?
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get full url
?>

<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel" style="margin-bottom: 15px;">
      <div class="panel-container">
        <div id="js_list_accordion" class="accordion accordion-hover accordion-clean">
          <div class="card border-top-left-radius-0 border-top-right-radius-0">
            <div class="card-header">
              <a href="javascript:void(0);" class="card-title" data-toggle="collapse" data-target="#js_list_accordion-a"
                aria-expanded="true" data-filter-tags="settings">
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
                <form action="<?= $actual_link ?>" method="post" accept-charset="utf-8" id="form-search"
                  name="form-search">

                  <input type="hidden" id="RowId" name="RowId" value="" />
                  <div class="row">
                    <div class="col-sm">
                      <label class="form-label" for="user_name_search">
                        ชื่อ-นามสกุล
                      </label>
                      <input id="user_name_search" name="user_name_search" class="form-control searchdata" type="text"
                        placeholder="ชื่อ-นามสกุล" />
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
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 0px;">
          <div class="frame-wrap mt-3 mb-0 w-100">
            <button type="button" id="btnadd" class="btn btn-primary" data-toggle="modal"
              data-target=".default-example-modal-right-lg">เพิ่ม</button>

            <div class="collapse" id="collapsedivadd" style="padding-top: 15px;">
              <div class="card card-body">
                <? //= view("user/useradd.php") ?>
              </div>
            </div>
          </div>
          <!-- datatable start -->
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width="15"></th>
                <th>ชื่อ-นามสกุล</th>
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

<!-- <div class="modal-body" id='dialogmode'></div> -->

<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->

<script src="<?= base_url() . '/'; ?>js/budget/user.js"></script>
<script src="https://foliotek.github.io/Croppie/croppie.js"></script>

<script>


  <?
  $displaymode = '';
  if ($_SESSION['display'] == 'L') {
    $displaymode = 'inline';
  } else {
    $displaymode = 'dialog';
  }
  ?>
  let displaymode = '<?= $displaymode ?>'; //inline dialog

  $(document).ready(function () {
    //search_select1();

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
      sAjaxSource: "/public/user_cn/load_data",
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
        // aoData.push({
        //     name: 'budget_year',
        //     value: $("#budget_year_search").val()
        // });
        aoData.push({
          name: 'user_name',
          value: $("#user_name_search").val()
        });
      },
      columns: [
        {
          data: "user_id",
          className: "details-control",
          //orderable:      false,
          //"defaultContent": ''
        },
        {
          data: "user_name",
        },
        {
          data: "user_id",
          render: function (data, type, row) {
            let txtex = "";
            if (displaymode == "dialog") {
              txtex = 'data-toggle="modal" data-target=".default-example-modal-right-lg"';
            }

            str_btn = "";

            //str_btn = str_btn + '<a href="javascript:void(0);" class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed"><i class="fal fa-search"></i></a>&nbsp;&nbsp;';
            str_btn = str_btn + `<a href="javascript:void(0);" ${txtex} class="btn btn-outline-success btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode = 'view'><i class="fal fa-search"></i></a>&nbsp;&nbsp;`;

            str_btn = str_btn + `<a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode = 'edit'><i class="fal fa-edit"></i></a>&nbsp;&nbsp;`;

            str_btn =
              str_btn +
              `<a href="javascript:void(0);" class="btn btn-outline-danger btn-icon btn-xs rounded-circle waves-effect waves-themed"data-toggle="modal" data-target="#example-modal-alert" onclick=set_del_id('${row.user_id}')><i class="fal fa-times"></i></a>`;
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
    $(document).on('submit', '#myform1', function () {
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

    $(document).on('click', '.close-dialog', function () {
      $('#collapsedivadd').slideUp();
      $('#collapsedivadd').hide;

      GoCurrentPage();
    });
    $(document).on('change', '.searchdata', function () {
      //searchdata();
    });

    //----------------ปิด ไม่ต้องแก้----------------
    $('#dynamic-table tbody').on('click', 'td .edit-data', function () {

      let mode = $(this).attr("mode");
      $('#collapsedivadd').slideUp();
      $('#collapsedivadd').hide;


      table.rows().every(function () {
        if (this.child.isShown()) {
          this.child.hide();
          $(this.node()).removeClass('shown');
        }
      });
      var tr = $(this).closest('tr');
      var row = table.row(tr);
      var d = row.data();
      var user_id = d.user_id;

      if (displaymode == 'inline') {
        row.child(format(d)).show();
        tr.addClass('shown');
        if (user_id != '') {
          editdata(d, mode);
        }
      } else {

        if (user_id != '') {
          editdata(d, mode);
        }
      }
    });

    function format(d) {
      $(".dialog-success").hide();
      return `<?= view("user/useradd.php") ?>`;
    }

    $(document).on('click', '#btnadd', function () {
      //$("#dialogmode").html('');
      table = $('#dynamic-table').DataTable();
      table.draw();
      if (displaymode == 'inline') {
        $('#collapsedivadd').show;
        $('#collapsedivadd').slideDown();
      } else {

      }

      $(".lblmode").text("เพิ่ม");



    });
    //searchdata();

  });



</script>




<script type="text/javascript">
  var resize;

  var fileTypes = ['jpg', 'jpeg', 'png'];



  function editdata(d, mode) {
    alert(d.user_id);
    //$("#overlay").fadein(300);
    $("#idsa").val(d.user_id);


    let aoData = "ids=" + d.user_id;
    $.ajax({
      type: "POST",
      url: "/public/user_cn/edit_data",
      dataType: "json",
      beforeSend: function () {
        $("#overlay").fadeIn(200);
      },
      data: aoData,
      success: function (response) {
        $("#user_name").val(response[0].user_name);

        $(".resize-image").attr("src", response[0].cropimage);


      },
      complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
        setTimeout(function () {
          $("#overlay").fadeOut(200);
        }, 100);
      },
      error: function (response) {
        //console.log(response);
      }
    });
    let txt = '';
    if (mode == 'edit') {
      txt = 'แก้ไข';
    } else {
      txt = 'แสดง';
      $("#btn1").hide();
      $('.form-ele').prop('disabled', true);
      $('.stars').hide(); // ซ่อนดาวแดง

    }
    $(".lblmode").text(txt);

  }


  // Start upload preview image

  var resizeableImage = function (image_target) {
    // Some variable and settings
    var $container,
      orig_src = new Image(),
      image_target = $(image_target).get(0),
      event_state = {},
      constrain = false,
      min_width = 60, // Change as required
      min_height = 60,
      max_width = 1800, // Change as required
      max_height = 1900,
      init_height = 500,
      resize_canvas = document.createElement('canvas');
    imageData = null;

    init = function () {

      //load a file with html5 file api
      $('.js-loadfile').change(function (evt) {
        var files = evt.target.files; // FileList object
        var reader = new FileReader();

        reader.onload = function (e) {
          imageData = reader.result;
          loadData();
        }
        reader.readAsDataURL(files[0]);
      });

      //add the reset evewnthandler
      $('.js-reset').click(function () {
        if (imageData)
          loadData();
      });


      // When resizing, we will always use this copy of the original as the base
      orig_src.src = image_target.src;

      // Wrap the image with the container and add resize handles
      $(image_target).height(init_height)
        .wrap('<div class="resize-container"></div>')
        .before('<span class="resize-handle resize-handle-nw"></span>')
        .before('<span class="resize-handle resize-handle-ne"></span>')
        .after('<span class="resize-handle resize-handle-se"></span>')
        .after('<span class="resize-handle resize-handle-sw"></span>');

      // Assign the container to a variable
      $container = $('.resize-container');

      $container.prepend('<div class="resize-container-ontop"></div>');

      // Add events
      $container.on('mousedown touchstart', '.resize-handle', startResize);
      $container.on('mousedown touchstart', '.resize-container-ontop', startMoving);
      $('.js-crop').on('click', crop);
    };

    loadData = function () {

      //set the image target
      image_target.src = imageData;
      orig_src.src = image_target.src;

      //set the image tot he init height
      $(image_target).css({
        width: 'auto',
        height: init_height
      });


      //resize the canvas
      $(orig_src).bind('load', function () {
        resizeImageCanvas($(image_target).width(), $(image_target).height());
      });
    };

    startResize = function (e) {
      e.preventDefault();
      e.stopPropagation();
      saveEventState(e);
      $(document).on('mousemove touchmove', resizing);
      $(document).on('mouseup touchend', endResize);
    };

    endResize = function (e) {
      resizeImageCanvas($(image_target).width(), $(image_target).height())
      e.preventDefault();
      $(document).off('mouseup touchend', endResize);
      $(document).off('mousemove touchmove', resizing);
    };

    saveEventState = function (e) {
      // Save the initial event details and container state
      event_state.container_width = $container.width();
      event_state.container_height = $container.height();
      event_state.container_left = $container.offset().left;
      event_state.container_top = $container.offset().top;
      event_state.mouse_x = (e.clientX || e.pageX || e.originalEvent.touches[0].clientX) + $(window).scrollLeft();
      event_state.mouse_y = (e.clientY || e.pageY || e.originalEvent.touches[0].clientY) + $(window).scrollTop();

      // This is a fix for mobile safari
      // For some reason it does not allow a direct copy of the touches property
      if (typeof e.originalEvent.touches !== 'undefined') {
        event_state.touches = [];
        $.each(e.originalEvent.touches, function (i, ob) {
          event_state.touches[i] = {};
          event_state.touches[i].clientX = 0 + ob.clientX;
          event_state.touches[i].clientY = 0 + ob.clientY;
        });
      }
      event_state.evnt = e;
    };

    resizing = function (e) {
      var mouse = {}, width, height, left, top, offset = $container.offset();
      mouse.x = (e.clientX || e.pageX || e.originalEvent.touches[0].clientX) + $(window).scrollLeft();
      mouse.y = (e.clientY || e.pageY || e.originalEvent.touches[0].clientY) + $(window).scrollTop();

      // Position image differently depending on the corner dragged and constraints
      if ($(event_state.evnt.target).hasClass('resize-handle-se')) {
        width = mouse.x - event_state.container_left;
        height = mouse.y - event_state.container_top;
        left = event_state.container_left;
        top = event_state.container_top;
      } else if ($(event_state.evnt.target).hasClass('resize-handle-sw')) {
        width = event_state.container_width - (mouse.x - event_state.container_left);
        height = mouse.y - event_state.container_top;
        left = mouse.x;
        top = event_state.container_top;
      } else if ($(event_state.evnt.target).hasClass('resize-handle-nw')) {
        width = event_state.container_width - (mouse.x - event_state.container_left);
        height = event_state.container_height - (mouse.y - event_state.container_top);
        left = mouse.x;
        top = mouse.y;
        if (constrain || e.shiftKey) {
          top = mouse.y - ((width / orig_src.width * orig_src.height) - height);
        }
      } else if ($(event_state.evnt.target).hasClass('resize-handle-ne')) {
        width = mouse.x - event_state.container_left;
        height = event_state.container_height - (mouse.y - event_state.container_top);
        left = event_state.container_left;
        top = mouse.y;
        if (constrain || e.shiftKey) {
          top = mouse.y - ((width / orig_src.width * orig_src.height) - height);
        }
      }

      // Optionally maintain aspect ratio
      if (constrain || e.shiftKey) {
        height = width / orig_src.width * orig_src.height;
      }

      if (width > min_width && height > min_height && width < max_width && height < max_height) {
        // To improve performance you might limit how often resizeImage() is called
        resizeImage(width, height);
        // Without this Firefox will not re-calculate the the image dimensions until drag end
        $container.offset({ 'left': left, 'top': top });
      }
    }

    resizeImage = function (width, height) {
      $(image_target).width(width).height(height);
    };

    resizeImageCanvas = function (width, height) {
      resize_canvas.width = width;
      resize_canvas.height = height;
      resize_canvas.getContext('2d').drawImage(orig_src, 0, 0, width, height);
      $(image_target).attr('src', resize_canvas.toDataURL("image/png"));
      //$(image_target).width(width).height(height);
    };

    startMoving = function (e) {
      e.preventDefault();
      e.stopPropagation();
      saveEventState(e);
      $(document).on('mousemove touchmove', moving);
      $(document).on('mouseup touchend', endMoving);
    };

    endMoving = function (e) {
      e.preventDefault();
      $(document).off('mouseup touchend', endMoving);
      $(document).off('mousemove touchmove', moving);
    };

    moving = function (e) {
      var mouse = {}, touches;
      e.preventDefault();
      e.stopPropagation();

      touches = e.originalEvent.touches;

      mouse.x = (e.clientX || e.pageX || touches[0].clientX) + $(window).scrollLeft();
      mouse.y = (e.clientY || e.pageY || touches[0].clientY) + $(window).scrollTop();
      $container.offset({
        'left': mouse.x - (event_state.mouse_x - event_state.container_left),
        'top': mouse.y - (event_state.mouse_y - event_state.container_top)
      });
      // Watch for pinch zoom gesture while moving
      if (event_state.touches && event_state.touches.length > 1 && touches.length > 1) {
        var width = event_state.container_width, height = event_state.container_height;
        var a = event_state.touches[0].clientX - event_state.touches[1].clientX;
        a = a * a;
        var b = event_state.touches[0].clientY - event_state.touches[1].clientY;
        b = b * b;
        var dist1 = Math.sqrt(a + b);

        a = e.originalEvent.touches[0].clientX - touches[1].clientX;
        a = a * a;
        b = e.originalEvent.touches[0].clientY - touches[1].clientY;
        b = b * b;
        var dist2 = Math.sqrt(a + b);

        var ratio = dist2 / dist1;

        width = width * ratio;
        height = height * ratio;
        // To improve performance you might limit how often resizeImage() is called
        resizeImage(width, height);
      }
    };

    crop = function () {
      //Find the part of the image that is inside the crop box
      var crop_canvas,
        left = $('.overlay').offset().left - $container.offset().left,
        top = $('.overlay').offset().top - $container.offset().top,
        width = $('.overlay').width(),
        height = $('.overlay').height();

      crop_canvas = document.createElement('canvas');

      crop_canvas.width = width;
      crop_canvas.height = height;

      crop_canvas.getContext('2d').drawImage(image_target, left, top, width, height, 0, 0, width, height);
      var dataURL = crop_canvas.toDataURL("image/png");
      image_target.src = dataURL;
      orig_src.src = image_target.src;


      $(image_target).bind("load", function () {
        $(this).css({
          width: width,
          height: height
        }).unbind('load').parent().css({
          top: $('.overlay').offset().top - $('.crop-wrapper').offset().top,
          left: $('.overlay').offset().left - $('.crop-wrapper').offset().left
        })
      });
      //window.open(crop_canvas.toDataURL("image/png"));
    }

    init();
  };

  // Kick everything off with the target image
  resizeableImage($('.resize-image'));
  // End upload preview image
</script>
<style>
  /* open image crop */
  .crop-wrapper {
    background-color: rgba(255, 255, 255, 1);
    position: relative;
    width: 100%;
    height: 90vh;
    overflow: hidden;
  }

  .resize-container {
    position: relative;
    display: inline-block;
    cursor: move;
    margin: 0 auto;
  }

  .resize-container-ontop {
    position: absolute;
    cursor: move;
    background-color: rgba(5, 255, 5, 0);
    z-index: 1000;
    width: 100%;
    height: 100%;
  }

  .resize-container img {
    display: block;
  }

  .resize-container:hover img,
  .resize-container:active img {
    outline: 2px dashed rgba(0, 0, 0, .9);
  }

  .resize-handle-ne,
  .resize-handle-se,
  .resize-handle-nw,
  .resize-handle-sw {
    position: absolute;
    display: block;
    width: 10px;
    height: 10px;
    background: rgba(0, 0, 0, .9);
    z-index: 999;
  }

  .resize-handle-nw {
    top: -5px;
    left: -5px;
    cursor: nw-resize;
  }

  .resize-handle-sw {
    bottom: -5px;
    left: -5px;
    cursor: sw-resize;
  }

  .resize-handle-ne {
    top: -5px;
    right: -5px;
    cursor: ne-resize;
  }

  .resize-handle-se {
    bottom: -5px;
    right: -5px;
    cursor: se-resize;
  }

  .top-overlay {
    z-index: 990;
    background-color: rgba(222, 222, 222, .6);
    width: 100%;
    height: 50%;
    margin-top: -150px;
    position: absolute;
  }

  .bottom-overlay {
    z-index: 990;
    background-color: rgba(222, 222, 222, .6);
    width: 100%;
    height: 50%;
    margin-bottom: -150px;
    position: absolute;
    bottom: 0;
  }

  .right-overlay {
    z-index: 990;
    background-color: rgba(222, 222, 222, .6);
    width: 50%;
    height: 300px;
    top: 50%;
    margin-top: -150px;
    margin-left: -150px;
    position: absolute;
  }

  .left-overlay {
    z-index: 990;
    background-color: rgba(222, 222, 222, .6);
    width: 50%;
    height: 300px;
    top: 50%;
    right: 0px;
    margin-top: -150px;
    margin-right: -150px;
    position: absolute;
  }



  .overlay {
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -150px;
    margin-top: -150px;
    z-index: 999;
    width: 300px;
    height: 300px;
    border: solid 2px rgba(222, 222, 222, .9);
    box-sizing: content-box;
    pointer-events: none;
  }

  .overlay:before {
    top: 0;
    margin-left: -2px;
    margin-top: -40px;
  }

  .overlay:after {
    bottom: 0;
    margin-left: -2px;
    margin-bottom: -40px;
  }


  .overlay-inner:before {
    left: 0;
    margin-left: -40px;
    margin-top: -2px;
  }

  .overlay-inner:after {
    right: 0;
    margin-right: -40px;
    margin-top: -2px;
  }

  .btn_img {
    padding: 6px 10px;
    background-color: rgb(222, 60, 80);
    border: none;
    border-radius: 5px;
    color: #FFF;
    margin: 10px 5px;
    line-height: 30px;
  }

  .btn-crop img {
    vertical-align: middle;
    margin-left: 8px;
  }

  /* close image crop */
</style>