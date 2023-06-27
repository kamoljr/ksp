function create_select_budget_year(){
  var aoData = '';
  $.ajax({
    type: "POST",
    url: "/public/PublicModel_cn/select_budget_year",
    dataType: "json",
    async:false,
    data: aoData,
    success: function(response) {
      var str_select = '<select class="select2-placeholder form-control searchdata" id="select_budget_year_search" name="select_budget_year_search">';
      $.each(response,function(i){
        selected = '';
        str_select = str_select+'<option value="'+response[i].budget_year+'" '+selected+' >'+response[i].budget_year+'</option>';
      });
      str_select = str_select+'</select>';
      $("#Div_budget_year").html(str_select);

    },
    error: function(response) {
        //console.log(response);
    }
  });
  $(function(){

    $(".select2-placeholder").select2(
    {
        allowClear: false
    });
  });
}


function searchdata(){
  text1 = $("#select_budget_year_search option:selected" ).text();
  if (text1 == ''){text1='ทั้งหมด';}

  text2 = $("#unit_name_search" ).val();
  if (text2 == ''){
    text2='';
  }else{
    text2=`<strong>ชื่อส่วนงาน :</strong> <u>${text2}</u>`;
  }

  let txt = `
  <strong>ผลการค้นหา : </strong>
  <strong>ปีงบประมาณ :</strong> <u>${text1}</u>&emsp;
  ${text2}
  `;

  $("#searchresults").html(txt);

  $(function(){
    table = $('#dynamic-table').DataTable();
    table.draw();
  });
}

function set_del_id(ids){
  $("#RowId").val(ids);
}

function deldata(){
  var aoData = 'ids='+$("#RowId").val();
  $.ajax({
      type: "POST",
      url: "/public/unit_cn/del_data",
      dataType: "json",
      beforeSend: function () {
        $("#overlay").fadeIn(200);　
      },
      data: aoData,
      success: function(response) {
          GoCurrentPage();
      },
      complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
        setTimeout(function(){
          $("#overlay").fadeOut(200);
        },100);
      },
      error: function(response) {
          //console.log(response);
      }
  });
}

function GoCurrentPage(){
  var table = $('#dynamic-table').DataTable();
  var info = table.page.info();
  var CurrentPage = info.page;
  table.page(CurrentPage).draw(false);
}


function editdata(d,mode){

  $("#ids").val(d.unit_id);
  $("#txtid").text(d.unit_id);
  $("#rowid").show();
  let aoData = "ids="+d.unit_id;
  $.ajax({
    type: "POST",
    url: "/public/unit_cn/edit_data",
    dataType: "json",
    beforeSend: function () {
      $("#overlay").fadeIn(200);　
    },
    data: aoData,
    success: function(response) {
        $("#unit_name").val(response[0].unit_name);
    },
    complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
      setTimeout(function(){
        $("#overlay").fadeOut(200);
      },100);
    },
    error: function(response) {
        //console.log(response);
    }
  });
  let txt = '';
  if (mode == 'edit'){
    txt = 'แก้ไข';
  }else{
    txt = 'แสดง';
    $("#btn1").hide();
    $('.form-ele').prop('disabled', true);
    $('.stars').hide(); // ซ่อนดาวแดง

  }
  $(".lblmode").text(txt);

}
function savedata(){
  var aoData = $('#myform1').serialize();
  $.ajax({
    type: "POST",
    url: "/public/unit_cn/save_data",
    dataType: "json",
    beforeSend: function () {
      $("#overlay").fadeIn(200);　
    },
    data: aoData,
    success: function(response) {
        //console.log(response)
        $(".dialog-data").hide();
        $(".dialog-success").show();
    },
    complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
      setTimeout(function(){
        $("#overlay").fadeOut(200);
      },100);
    },
    error: function(response) {
        //console.log(response);

    }
  });
}
