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
  //text1 = $("#select_budget_year_search option:selected" ).text();
  //if (text1 == '') { text1 = 'ทั้งหมด'; }
  
  text2 = $("#unit_name_search" ).val();
  if (text2 == ''){
    text2='ทั้งหทด';
  }

  let txt = `
  <strong>ผลการค้นหา : </strong>
  <strong>ชื่อส่วนงาน :</strong> <u>${text2}</u>&emsp;
  
  `;

  $("#searchresults").html(txt);

  $(function(){
    table = $('#dynamic-table').DataTable();
    table.draw();
  });
}

function set_del_id(ids){
  $("#ids").val(ids);
  $("#del_detail").text('รหัส ' + ids);
  
  // เช็คมีการใช้ รายการนี้ไป ?
  
  url = "/public/member/unit_cn/chk_del";
  aoData = 'ids='+ids;
  ans = find_count_reccord(url, aoData);

  if (ans == 0) {
    console.log("not found");
    $("#btn_del_data").show();
    $("#div_del_detail").hide();
  } else { 
    console.log('found');
    $("#btn_del_data").hide();
    $("#div_del_detail").show();
  }
}

function find_count_reccord(url,aoData) { // not found return 0
  var aoData = aoData;
  ans = "";
  $.ajax({
      type: "POST",
      url: url,
      dataType: "json",
      async:false,
      
      beforeSend: function () {
       
      },
      data: aoData,
      success: function(response) {
        ans = response[0].count_reccord;
      },
      complete: function () {
        
      },
      error: function(response) {
    
      }
  });
  return ans;
}


function deldata() {
  $("#del_detail").text('');
  var aoData = 'ids='+$("#ids").val();
  $.ajax({
      type: "POST",
      url: "/public/member/unit_cn/del_data",
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
  $('.default-example-modal-right').modal('toggle');
  $(".dialog-data").show();
  $(".dialog-success").hide();

  $("#icon_add_form").hide();
  

  $("#ids").val(d.unit_id);
  $("#txtid").text(d.unit_id);
  $("#rowid").show();
  let aoData = "ids="+d.unit_id;
  $.ajax({
    type: "POST",
    url: "/public/member/unit_cn/edit_data",
    dataType: "json",
    beforeSend: function () {
      $("#overlay").fadeIn(200);　
    },
    data: aoData,
    success: function(response) {
        $("#unit_name").val(response[0].unit_name);
    },
    complete: function () {
      setTimeout(function(){
        $("#overlay").fadeOut(200);
      },100);
    },
    error: function(response) {
        //console.log(response);
    }
  });
  let txt = '';

  $("#btn_dialog_close").show();

  if (mode == 'edit'){
    txt = 'แก้ไข';
    $('.form-ele').prop('disabled', false);
    $('.stars').show(); // ซ่อนดาวแดง
    $("#btn_save_change").show();

    $("#icon_edit_form").show();
    $("#icon_view_form").hide();

  }else{
    txt = 'แสดง';
    $('.form-ele').prop('disabled', true);
    $('.stars').hide(); // ซ่อนดาวแดง
    $("#btn_save_change").hide();

    $("#icon_view_form").show();
    $("#icon_edit_form").hide();
    
  }

  $('#lbl_rowid').text("รหัส "+d.unit_id);

  $('.div_show_rowid').css('display','block');
  
  $(".lblmode").text(txt);

}
function savedata() {
  
  var aoData = $('#form_save').serialize();
  $.ajax({
    type: "POST",
    url: "/public/member/unit_cn/save_data",
    dataType: "json",
    beforeSend: function () {
      $("#overlay").fadeIn(200);　
    },
    data: aoData,
    success: function(response) {
    
      $(".dialog-data").hide();
      $(".dialog-success").show();


      $("#btn_save_change").hide();
      $("#btn_dialog_close").hide();
      
      
      setTimeout(() => {
        if ($("#ids").val() == "") {
          table = $('#dynamic-table').DataTable();
          table.draw();
        } else { 
          GoCurrentPage();
        }
        
        $('.default-example-modal-right').modal('toggle');
      }, "500");
    },
    complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
      $("#overlay").fadeOut(200);
    },
    error: function(response) {
        //console.log(response);

    }
  });
}

$(document).ready(function(){
  $(function() {
    $("#form_save").validate({  

      rules: {
        unit_name: {
        required: true,
        maxlength: 1000
        },

      },

      messages: {
        unit_name: "กรุณาป้อน ส่วนงาน",
      },
      
      submitHandler: function(form) {
       
        savedata()
      }
    });

  });
})