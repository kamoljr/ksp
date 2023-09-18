function search_select1() {
  var aoData = "";
  $.ajax({
    type: "POST",
    url: "/public/index.php/user_cn/search_select1",
    dataType: "json",
    async: false,
    data: aoData,
    success: function (response) {
      var str_select =
        '<select class="select2-placeholder form-control searchdata" id="budget_year_search" name="budget_year_search">';
      $.each(response, function (i) {
        selected = "";
        str_select =
          str_select +
          '<option value="' +
          response[i].budget_year +
          '" ' +
          selected +
          " >" +
          response[i].budget_year +
          "</option>";
      });
      str_select = str_select + "</select>";
      $("#Div_budget_year").html(str_select);
    },
    error: function (response) {
      //console.log(response);
    },
  });
  $(function () {
    $(".select2-placeholder").select2({
      //placeholder: "ปีงบประมาณ",
      allowClear: false,
    });
  });
  //search_select2();
}
function search_select2() {
  user_id = $("#user_search").val();
  var aoData = `user_id=${user_id}`;
  $.ajax({
    type: "POST",
    url: "/public/index.php/user_cn/search_select2",
    dataType: "json",
    async: false,
    data: aoData,
    success: function (response) {
      var str_select =
        '<select class="select2-placeholder form-control searchdata" id="group_search" name="group_search">';
      str_select = str_select + '<option value=""></option>';
      $.each(response, function (i) {
        selected = "";
        str_select =
          str_select +
          '<option value="' +
          response[i].group_id +
          '" ' +
          selected +
          " >" +
          response[i].group_name +
          "</option>";
      });
      str_select = str_select + "</select>";
      $("#Div_SearchGroup_id").html(str_select);
    },
    error: function (response) {
      //console.log(response);
    },
  });
  $(function () {
    $(".select2-placeholder").select2({
      placeholder: "ทั้งหมด",
      allowClear: false,
    });
  });

  //create_select_group(gid);
}

function searchdata() {
  text1 = $("#budget_year_search option:selected").text();
  if (text1 == "") {
    text1 = "ทั้งหมด";
  }

  text2 = $("#user_name_search").val();
  if (text2 == "") {
    text2 = "";
  } else {
    text2 = `<strong>ชื่อส่วนงาน :</strong> <u>${text2}</u>`;
  }

  let txt = `
  <strong>ผลการค้นหา : </strong>
  <strong>ปีงบประมาณ :</strong> <u>${text1}</u>&emsp;
  ${text2}
  `;

  $("#searchresults").html(txt);

  $(function () {
    table = $("#dynamic-table").DataTable();
    table.draw();
  });
}

function set_del_id(ids) {
  $("#RowId").val(ids);
}

function deldata() {
  var aoData = "ids=" + $("#RowId").val();
  $.ajax({
    type: "POST",
    url: "/public/index.php/user_cn/del_data",
    dataType: "json",
    beforeSend: function () {
      $("#overlay").fadeIn(200);
    },
    data: aoData,
    success: function (response) {
      GoCurrentPage();
    },
    complete: function () {
      // Set our complete callback, adding the .hidden class and hiding the spinner.
      setTimeout(function () {
        $("#overlay").fadeOut(200);
      }, 100);
    },
    error: function (response) {
      //console.log(response);
    },
  });
}

function GoCurrentPage() {
  var table = $("#dynamic-table").DataTable();
  var info = table.page.info();
  var CurrentPage = info.page;
  table.page(CurrentPage).draw(false);
}

function editdata_(d, mode) {
  $("#ids").val(d.user_id);
  // console.log("sssaa");
  // alert("ssss");
  // let aoData = "ids=" + d.user_id;
  // $.ajax({
  //   type: "POST",
  //   url: "/public/index.php/user_cn/edit_data",
  //   dataType: "json",
  //   beforeSend: function () {
  //     $("#overlay").fadeIn(200);
  //   },
  //   data: aoData,
  //   success: function (response) {
  //     console.log("ssss" + response[0].user_name);
  //     $("#user_name").val(response[0].user_name);
  //   },
  //   complete: function () {
  //     // Set our complete callback, adding the .hidden class and hiding the spinner.
  //     setTimeout(function () {
  //       $("#overlay").fadeOut(200);
  //     }, 100);
  //   },
  //   error: function (response) {
  //     //console.log(response);
  //   },
  // });

  // let txt = "";
  // if (mode == "edit") {
  //   txt = "แก้ไข";
  // } else {
  //   txt = "แสดง";
  //   $("#btn1").hide();
  //   $(".form-ele").prop("disabled", true);
  //   $(".stars").hide(); // ซ่อนดาวแดง
  // }
  // $(".lblmode").text(txt);
}

function savedata() {
  //console.log(chksubmit+'save');
  imgdata = $(".resize-image").attr("src");
  var aoData = $("#myform1").serialize();
  aoData = aoData + "&imgdata=" + imgdata;
  $.ajax({
    type: "POST",
    url: "/public/user_cn/save_data",
    dataType: "json",
    beforeSend: function () {
      $("#overlay").fadeIn(200);
    },
    data: aoData,
    success: function (response) {
      $(".dialog-data").hide();
      $(".dialog-success").show();
    },
    complete: function () {
      setTimeout(function () {
        $("#overlay").fadeOut(200);
      }, 100);
    },
    error: function (response) {
      //console.log(response);
    },
  });
}
