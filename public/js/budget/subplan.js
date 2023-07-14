$(document).ready(function(){
  $(function() {
    $("#form_save").validate({  

      rules: {
        group_name_add: {
        required: true,
        maxlength: 1000
        },

      },

      messages: {
        group_name_add: "กรุณาป้อน แผนยุทธศาสตร์ชาติ",
      },
      
      submitHandler: function(form) {
       
        savedata()
      }
    });

  });
})