<?
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; // get full url
?>


<div class="row">
  <div class="col-sm-4 text-right" style="padding-top:10px;">
    <label class="form-label" for="group_name_search">
        <h5 class=" color-Secondary-500">
            โครงสร้างปี
        </h5>
      </label>
  </div>
  <div class="col-sm-6">
    <div class="input-group input-group-lg mb-g ">
      
     

      <select id="group_name_search" name="group_name_search" class="select2" placeholder="กลุ่มงาน">
        <option value="17">
          2566-1	
        </option>
        <option value="18">
          2566
        </option>
        <option value="11">
          2565
        </option>
        
      </select>
    </div>
  </div>
  <div class="col-sm-2">
      
  </div>
</div>

<div class = "row">
<div class="col-sm-12">
  <div class="card mb-g border shadow-0">


  



    <div class="card-header bg-primary-700 " style = "padding-top:0px;padding-bottom:0px;margin:0px;">
      <div class="row no-gutters align-items-center " >
        <div class="col text-center" style = "padding-top:10px;">
            <h5 class="color-white" style = "font-weight:100;">โครงสร้างปี : 2566-1	</h5>
        </div>
        <div class="modal-footer">
          <!-- <button type="submit" class="btn btn-warning" id ="btn_save_change">คัดลอกโครงสร้าง</button> -->
        
        </div>
      </div>
    </div>
    
    <div class="panel-container">
      <div class="panel-content" style="padding-top: 0px;">
        
        <!-- content start -->
        
        
        <!-- <div class="add-task-container">
          <input type="text" maxlength="12" id="taskText" placeholder="New Task..." onkeydown="if (event.keyCode == 13)
                                document.getElementById('add').click()">
          <button id="add" class="button add-button" onclick="addTask()">Add New Task</button>
          <button type="submit" class="btn btn-primary" id ="btn_save_change">เพิ่มสำนัก</button>
          <button type="submit" class="btn btn-primary" id ="btn_save_change">เพิ่มกลุ่มงาน</button>
        </div> -->
        
        <div class = "row">
          <div class = "col-sm-12 text-center align-items-center" style = "margin-top:20px;">
            
            
          </div>
        </div>
        <div class="main-container" style = "overflow-x: scroll;">
          <ul class="columns">

            <li class="column to-do-column" >
                
                <div class="column-header font-header-org text-center hover-to-show-link" style = "position:relative;">
                  <div class="" style="margin-right:0px !important;">
                
                    สำนักมาตรฐานวิชาชีพ
                    
                  </div>
                  <div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">

                    <a href="javascript:void(0);" style = "" class="btn_unit btn btn-primary btn-xs btn-icon rounded-circle" style="">
                        <i class="ni ni-pencil"></i>
                    </a>
                    &nbsp;&nbsp;
                    <a href="javascript:void(0);" class="btn_del_unit btn btn-danger btn-xs btn-icon rounded-circle">
                        <i class="ni ni-trash"></i>
                    </a>
                  </div>

                </div>
              <ul class="task-list unit1" id="to-do" >
                <li class="task hover-to-show-link" value = '11'>
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มมาตรฐานการประกอบวิชาชีพ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle btn_group" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle btn_del_group">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                  <!-- <p style = "padding-left:5px;">กลุ่มมาตรฐานการประกอบวิชาชีพ	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  
                </li>
                <li class="task hover-to-show-link" value = '22'>
                  <!-- <p style = "padding-left:5px;">กลุ่มรับรองความรู้และความชำนาญ	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มรับรองความรู้และความชำนาญ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
                <li class="task hover-to-show-link" value = '33'>
                  <!-- <p style = "padding-left:5px;">ทดสอบความรู้ในการประกอบวิชาชีพ	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      ทดสอบความรู้ในการประกอบวิชาชีพ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
                <li class="task hover-to-show-link" value = '44'>
                  <!-- <p style = "padding-left:5px;">กลุ่มรับรองปริญญาและประกาศนียบัตร 	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มรับรองปริญญาและประกาศนียบัตร
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
              </ul>
            </li>

            <li class="column doing-column">
              <!-- <div class="column-header  font-header-org text-center">
                <div class="custom-control-inline" style="margin-right:0px !important;">
                 
                  สำนักทะเบียนและใบอนุญาตประกอบวิชาชีพ
                  
                     
                    <div class="demo" style="margin-left:3px;display:inline-block;background-color: #ffff;padding-top:4px;padding-left:5px;width:30px;height:55px;padding-bottom:0;border-radius: 0.2rem;">
                      <a href="javascript:void(0);" style = "margin-bottom:5px !important;" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div>
                </div>
              </div> -->
              <div class="column-header font-header-org text-center hover-to-show-link " style = "position:relative;">
                <div class="" style="margin-right:0px !important;">
                 
                  สำนักทะเบียนและใบอนุญาตประกอบวิชาชีพ
                  
                </div>
                <div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">

               

                  <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                      <i class="ni ni-pencil"></i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                      <i class="ni ni-trash"></i>
                  </a>
                </div>

              </div>
              <ul class="task-list" id="doing">
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:5px;">กลุ่มบริการผู้ขอประกอบวิชาชีพ	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มบริการผู้ขอประกอบวิชาชีพ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:5px;">กลุ่มทะเบียนใบอนุญาตประกอบวิชาชีพ	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มทะเบียนใบอนุญาตประกอบวิชาชีพ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:5px;">กลุ่มใบอนุญาตประกอบวิชาชีพ 1	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มใบอนุญาตประกอบวิชาชีพ 1
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
              </ul>
            </li>

            <li class="column done-column">
              <!-- <div class="column-header  font-header-org text-center">
              
                <div class="custom-control-inline" style="margin-right:0px !important;">
                 
                  สำนักจรรยาบรรณวิชาชีพและนิติการ
                    <div class="demo" style="margin-left:3px;display:inline-block;background-color: #ffff;padding-top:4px;padding-left:5px;width:30px;height:55px;padding-bottom:0;border-radius: 0.2rem;">
                      <a href="javascript:void(0);" style = "margin-bottom:5px !important;" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div>
                </div>
              </div> -->
              <div class="column-header font-header-org text-center hover-to-show-link" style = "position:relative;">
                <div class="" style="margin-right:0px !important;">
                 
                  สำนักจรรยาบรรณวิชาชีพและนิติการ
                  
                </div>
                <div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">

                  <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                      <i class="ni ni-pencil"></i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                      <i class="ni ni-trash"></i>
                  </a>
                </div>

              </div>
              <ul class="task-list" id="done">
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:5px;">กลุ่มกำกับดูแลจรรยาบรรณวิชาชีพ	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มกำกับดูแลจรรยาบรรณวิชาชีพ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:10px;" >กลุ่มนิติการ	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มนิติการ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: -30px;;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
              </ul>
            </li>

            <li class="column trash-column">
              <!-- <div class="column-header  font-header-org text-center">
                
                <div class="custom-control-inline" style="margin-right:0px !important;">
                 
                  สำนักพัฒนาและส่งเสริมวิชาชีพ
                    <div class="demo" style="margin-left:3px;display:inline-block;background-color: #ffff;padding-top:4px;padding-left:5px;width:30px;height:55px;padding-bottom:0;border-radius: 0.2rem;">
                      <a href="javascript:void(0);" style = "margin-bottom:5px !important;" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div>
                </div>
              </div> -->
              <div class="column-header font-header-org text-center hover-to-show-link" style = "position:relative;">
                <div class="" style="margin-right:0px !important;">
                 
                  สำนักพัฒนาและส่งเสริมวิชาชีพ
                  
                </div>
                <div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">

                  <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                      <i class="ni ni-pencil"></i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                      <i class="ni ni-trash"></i>
                  </a>
                </div>

              </div>
              <ul class="task-list" id="trash">
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:5px;">กลุ่มพัฒนาการประกอบวิชาชีพ	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มพัฒนาการประกอบวิชาชีพ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:5px;">กลุ่มวิเทศสัมพันธ์	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มวิเทศสัมพันธ์
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:95px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left:0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>

              </ul>
              <!-- <div class="column-button">
                <button class="button delete-button" onclick="emptyTrash()">Delete</button>
              </div> -->
            </li>

            <li class="column doing-column">
              <!-- <div class="column-header font-header-org text-center">
                
                <div class="custom-control-inline" style="margin-right:0px !important;">
                 
                  สำนักนโยบายและแผน
                    <div class="demo" style="margin-left:3px;display:inline-block;background-color: #ffff;padding-top:4px;padding-left:5px;width:30px;height:55px;padding-bottom:0;border-radius: 0.2rem;">
                      <a href="javascript:void(0);" style = "margin-bottom:5px !important;" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div>
                </div>
              </div> -->
              <div class="column-header font-header-org text-center hover-to-show-link" style = "position:relative;">
                <div class="" style="margin-right:0px !important;">
                 
                  สำนักนโยบายและแผน
                  
                </div>
                <div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">

                  <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                      <i class="ni ni-pencil"></i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                      <i class="ni ni-trash"></i>
                  </a>
                </div>

              </div>
              <ul class="task-list" id="to-do1">
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:5px;">กลุ่มวิจัย ติดตาม และประเมินผล	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มวิจัย ติดตาม และประเมินผล	
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:5px;">กลุ่มแผนและงบประมาณ	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มแผนและงบประมาณ
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
               
              </ul>
            </li>

            <li class="column to-do-column">
              <!-- <div class="column-header font-header-org text-center">
                
                <div class="custom-control-inline" style="margin-right:0px !important;">
                 
                  สำนักเทคโนโลยีสารสนเทศ
                    <div class="demo" style="margin-left:3px;display:inline-block;background-color: #ffff;padding-top:4px;padding-left:5px;width:30px;height:55px;padding-bottom:0;border-radius: 0.2rem;">
                      <a href="javascript:void(0);" style = "margin-bottom:5px !important;" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div>
                </div>
              </div> -->
              <div class="column-header font-header-org text-center hover-to-show-link" style = "position:relative;">
                <div class="" style="margin-right:0px !important;">
                 
                  สำนักมาตรฐานวิชาชีพ
                  
                </div>
                <div class="demo hover-to-show" style="margin-left:1px;background-color: #ffff;padding-top:2px;padding-left:5px;width:127px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:1px;left: 0;">

                  <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                      <i class="ni ni-pencil"></i>
                  </a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                      <i class="ni ni-trash"></i>
                  </a>
                </div>

              </div>
              <ul class="task-list" id="to-do3">
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:5px;">กลุ่มวิทยบริการและวารสาร	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มวิทยบริการและวารสาร
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
                <li class="task hover-to-show-link">
                  <!-- <p style = "padding-left:5px;">กลุ่มเทคโนโลยีสารสนเทศและการสื่อสาร	</p>
                  <div class="demo text-right" style="padding-top:5px;display:block">
                      <a href="javascript:void(0);" class="btn btn-primary btn-xs btn-icon rounded-circle" style="margin-bottom:10px !important;">
                          <i class="ni ni-pencil"></i>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                  </div> -->
                  <div class="" style = "position:relative;">
                    <div class="" style="margin-right:0px !important;">
                      กลุ่มเทคโนโลยีสารสนเทศและการสื่อสาร
                    </div>
                    <div class="demo hover-to-show" style="margin-left:5px;background-color: #ffff;padding-top:2px;padding-left:5px;width:105px;height:25px;padding-bottom:0;border-radius: 0.2rem;opacity:.8;position:absolute;bottom:-15px;left: 0;">

                      <a href="javascript:void(0);" style = "" class="btn btn-primary btn-xs btn-icon rounded-circle" style="">
                          <i class="ni ni-pencil"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle">
                          <i class="ni ni-trash"></i>
                      </a>
                    </div>

                  </div>
                </li>
               
              </ul>
            </li>

            




          </ul>
        </div>

        
        <!-- content end -->
      </div>
    </div>
    


       
  </div>
</div> 
</div> 

<div class="modal fade example-modal-centered-transparent" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-transparent" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title text-white">
                  <label id = "text_modal-transparent">ยืนยันย้ายส่วนงาน</label>
                  <small class="m-0 text-white opacity-70">
                      <!-- Below is a static modal example -->
                  </small>
              </h4>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="fal fa-times"></i></span>
              </button>
          </div>
          <div class="modal-body">
              ...
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="javascript:location.reload();">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
  </div>
</div>
<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js"></script>


<script>
$(document).ready(function() {
  $(".select2").select2();
  $('#unit_name_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#unit_name_adds').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#unit_name_add2').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $('#group_names').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });
  $(document).on('click', '#btn_dialog_close', function() {
	  $('.default-example-modal-right').modal('toggle');
  });
  $(document).on('click', '.btn_copy', function() {
	  $('.example-modal-centered-transparent').modal('toggle');
    $("#text_modal-transparent").text("ต้องการคัดลอกโครงการ ใช่หรือไม่");
  });
  $(document).on('click', '.btn_del_unit', function() {
	  $('.example-modal-centered-transparent').modal('toggle');
    $("#text_modal-transparent").text("ต้องการลบส่วนงาน ใช่หรือไม่");
  });
});


/* Custom Dragula JS */

dragula([
  document.getElementById("to-do"),
  document.getElementById("to-do1"),
  document.getElementById("to-do2"),
  document.getElementById("to-do3"),
  document.getElementById("doing"),
  document.getElementById("done"),
  document.getElementById("trash")
])
  .on('drag', function (el) {
    el.className = el.className.replace('ex-moved', '');
    //console.log("a");
  }).on('drop', function (el) {
    el.className += ' ex-moved';
    // console.log("b");
    
    $('ul.unit1 li').each(function(element) {
       console.log($(this).val());
     
    });
    $('.example-modal-centered-transparent').modal('toggle'); 
    $("#text_modal-transparent").text("ต้องการย้ายส่วนงาน ใช่หรือไม่");
  }).on('over', function (el, container) {
    container.className += ' ex-over';
   //console.log("c");
  }).on('out', function (el, container) {
   container.className = container.className.replace('ex-over', '');
   //console.log("d");
  });
  
  $(document).on('click', '.btn_unit', function() {
    console.log('unit');
    $(".unitadd").show();
    $(".groupadd").hide();
    $(".deladd").hide();
    $('.default-example-modal-right').modal('toggle');
    $("#ex_name").text("เพิ่มส่วงนงาน")
  });
  $(document).on('click', '.btn_group', function() {
    console.log('group');
    $(".unitadd").hide();
    $(".deladd").hide();
    $(".groupadd").show();
    $('.default-example-modal-right').modal('toggle');
    $("#ex_name").text("เพิ่มกลุ่มงาน")
  });

  $(document).on('click', '.btn_del_group', function() {
    $(".unitadd").hide();
    $(".deladd").show();
    $(".groupadd").hide();
    $('.default-example-modal-right').modal('toggle');
    $("#ex_name").text("รวมกลุ่มงาน")
  });

/* Vanilla JS to add a new task */
function addTask() {
  /* Get task text from input */
  var inputTask = document.getElementById("taskText").value;
  /* Add task to the 'To Do' column */
  document.getElementById("to-do").innerHTML +=
    "<li class='task'><p>" + inputTask + "</p></li>";
  /* Clear task text from input after adding task */
  document.getElementById("taskText").value = "";
  console.log('xxx');

  
}

/* Vanilla JS to delete tasks in 'Trash' column */
function emptyTrash() {
  /* Clear tasks from 'Trash' column */
  document.getElementById("trash").innerHTML = "";
}


</script>
<style>
  
/* show hide bottom */
 .hover-to-show {
   overflow: hidden;
   max-height: 0px;
   -o-transition: all .2s ease-in-out;
   -moz-transition: all .2s ease-in-out;
   -webkit-transition: all .2s ease-in-out;
   transition: all .2s ease-in-out;
 }
 .hover-to-show-link:hover .hover-to-show {
   max-height: 50px;
 }

  /* @import url("https://fonts.googleapis.com/css?family=Arimo:400,700|Roboto+Slab:400,700"); */

/* : */

.add-task-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 20rem;
  height: 5.3rem;
  margin: auto;
  background: #a8a8a8;
  border: #000013 0.2rem solid;
  border-radius: 0.2rem;
  padding: 0.4rem;
}

.main-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.columns {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  margin: 1.6rem auto;
}

.column {
  width: 8.4rem;
  margin: 0 0.6rem;
  background: #a8a8a8;
  border: #a8a8a8 0.2rem solid;
  border-radius: 0.4rem;
  
}

.column-header {
  padding: 0.1rem;
  border-bottom: #a8a8a8 0.2rem solid;
  /* height: 70px; */
  height: auto;
  min-height: 65px;
  /* height: 50px; */
  /* max-height: 100%;  */
  /* overflow: auto;  */
  padding-top:5px;
  padding-bottom:15px;
}

.column-header h4 {
  text-align: center;
}

.to-do-column .column-header {
  background: #7a59ad;
}

.doing-column .column-header {
  background: #56b0a5;
}

.done-column .column-header {
  background: #fd3995;
}

.trash-column .column-header {
  background: #ffba28;
}

.task-list {
  min-height: 3rem;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  list-style-type: none;
}

.column-button {
  text-align: center;
  padding: 0.1rem;
}

.button {
  font-family: "Arimo", sans-serif;
  font-weight: 700;
  border: #000013 0.14rem solid;
  border-radius: 0.2rem;
  color: #000013;
  padding: 0.6rem 1rem;
  margin-bottom: 0.3rem;
  cursor: pointer;
}

.delete-button {
  background-color: #ff4444;
  margin: 0.1rem auto 0.6rem auto;
}

.delete-button:hover {
  background-color: #fa7070;
}

.add-button {
  background-color: #ffcb1e;
  padding: 0 1rem;
  height: 2.8rem;
  width: 10rem;
  margin-top: 0.6rem;
}

.add-button:hover {
  background-color: #ffdd6e;
}

.task {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  vertical-align: middle;
  list-style-type: none;
  background: #fff;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  margin: 0.4rem;
  /* height: 5rem; */
  height: auto;
  border: #5d5b5b 0.07rem solid;
  border-radius: 0.2rem;
  cursor: move;
  text-align: center;
  vertical-align: middle;
  padding-bottom:15px;
}

#taskText {
  background: #fff;
  border: #000013 0.15rem solid;
  border-radius: 0.2rem;
  text-align: center;
  font-family: "Roboto Slab", serif;
  height: 4rem;
  width: 7rem;
  margin: auto 0.8rem auto 0.1rem;
}

.task p {
  margin: auto;
}

/* Dragula CSS Release 3.2.0 from: https://github.com/bevacqua/dragula */

.gu-mirror {
  position: fixed !important;
  margin: 0 !important;
  z-index: 9999 !important;
  opacity: 0.8;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
  filter: alpha(opacity=80);
}

.gu-hide {
  display: none !important;
}

.gu-unselectable {
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  -ms-user-select: none !important;
  user-select: none !important;
}

.gu-transit {
  opacity: 0.2;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
  filter: alpha(opacity=20);
}

.font-header-org{
 
  color: #ffff !important;
 
}

</style>