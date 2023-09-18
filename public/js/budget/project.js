
function searchdata(){
  console.log("aaa");
  text1 = $("#unit_search option:selected" ).text();
  text2 = $("#group_search option:selected" ).text();
  text3 = $("#projectname_search" ).val();
  if (text1 == ''){text1='ทั้งหมด';}
  if (text2 == ''){text2='ทั้งหมด';}
  if (text3 == ''){
    text3='';
  }else{
    text3=`<strong>ชื่อโครงการ :</strong> <u>${text3}</u>`;
  }
  let txt = `
  <strong>ผลการค้นหา : </strong>

  <strong>ส่วนงาน :</strong> <u>${text1}</u>&emsp;
  <strong>กลุ่มงาน :</strong> <u>${text2}</u>&emsp;
  ${text3}
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
      url: "/project_cn/del_data",
      dataType: "json",
      data: aoData,
      success: function(response) {
          table = $('#dynamic-table').DataTable();
          table.draw();
      },
      error: function(response) {
          //console.log(response);
      }
  });
}
function editdata2(d){
  $("#lblmode").text("แก้ไข");
}
function editdata1(d){
  $("#ids").val(d.ProjectId);
  var aoData = "ProjectId="+d.ProjectId;
  $.ajax({
    type: "POST",
    url: "/project_cn/edit_data",
    dataType: "json",
    data: aoData,
    success: function(response) {
        $("#ProjectName").val(response[0].ProjectName);
        $("#Objective").val(response[0].Objective);
    },
    error: function(response) {
        //console.log(response);
    }
  });
  $("#lblmode").text("แก้ไข");
}

function savedata1(){
  var aoData = $('#myform1').serialize();
  $.ajax({
    type: "POST",
    url: "/project_cn/save_data",
    dataType: "json",
    data: aoData,
    success: function(response) {
        //console.log(response)
        $(".dialog-data").hide();
        $(".dialog-success").show();
    },
    error: function(response) {
        //console.log(response);
    }
  });
}
function search_select1(){
  var aoData = '';
  $.ajax({
    type: "POST",
    url: "/project_cn/search_select1",
    dataType: "json",
    async:false,
    data: aoData,
    success: function(response) {
      var str_select = '<select class="select2-placeholder form-control searchdata" id="unit_search" name="unit_search" onchange=search_select2()>';
      str_select = str_select+'<option value=""></option>';
      $.each(response,function(i){
        selected = '';
        str_select = str_select+'<option value="'+response[i].unit_id+'" '+selected+' >'+response[i].unit_name+'</option>';
        	});
      str_select = str_select+'</select>';
      $("#Div_SearchUnit_id").html(str_select);

    },
    error: function(response) {
        //console.log(response);
    }
  });

  search_select2();
}
function search_select2(){
  unit_id = $('#unit_search').val();
  var aoData = `unit_id=${unit_id}`;
  $.ajax({
    type: "POST",
    url: "/project_cn/search_select2",
    dataType: "json",
    async:false,
    data: aoData,
    success: function(response) {
      var str_select = '<select class="select2-placeholder form-control searchdata" id="group_search" name="group_search">';
      str_select = str_select+'<option value=""></option>';
      $.each(response,function(i){
        selected = '';
        str_select = str_select+'<option value="'+response[i].group_id+'" '+selected+' >'+response[i].group_name+'</option>';
      });
      str_select = str_select+'</select>';
      $("#Div_SearchGroup_id").html(str_select);
      //$('.select2').select2();


    },
    error: function(response) {
        //console.log(response);
    }
  });
  $(function(){

    $(".select2-placeholder").select2(
    {
        placeholder: "ทั้งหมด",
        allowClear: true
    });
  });

  //create_select_group(gid);
}
