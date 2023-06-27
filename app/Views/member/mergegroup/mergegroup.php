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
          <button type="submit" class="btn btn-warning" id ="btn_save_change">คัดลอกโครงสร้าง</button>
        
        </div>
      </div>
    </div>
    
    <div class="panel-container">
      <div class="panel-content" style="padding-top: 0px;">
        
        <!-- content start -->
        
        <!--  
        <div class="add-task-container">
          <input type="text" maxlength="12" id="taskText" placeholder="New Task..." onkeydown="if (event.keyCode == 13)
                                document.getElementById('add').click()">
          <button id="add" class="button add-button" onclick="addTask()">Add New Task</button>
          <button type="submit" class="btn btn-primary" id ="btn_save_change">เพิ่มสำนัก</button>
          <button type="submit" class="btn btn-primary" id ="btn_save_change">เพิ่มกลุ่มงาน</button>
        </div>
        -->
        <div class = "row">
          <div class = "col-sm-12 text-center align-items-center" style = "margin-top:20px;">
            
            <button id="btnadd" type="button" class="btn btn-primary" data-toggle="modal" data-target=".default-example-modal-right"> <span style = "padding-top:5px;">เพิ่มสำนัก</span> </button>
            
            <button id="btnadd" type="button" class="btn btn-primary" data-toggle="modal" data-target=".default-example-modal-right"> <span style = "padding-top:5px;">เพิ่มกลุ่มงาน</span> </button>
          
            
          </div>
        </div>
        <div class="main-container" style = "overflow-x: scroll;">
          <ul class="columns">

            <li class="column to-do-column">
              <div class="column-header font-header-org text-center">
                <h5>สำนักมาตรฐานวิชาชีพ	</h5>
              </div>
              <ul class="task-list" id="to-do">
                <li class="task">
                  
                  <p style = "padding-left:5px;">กลุ่มมาตรฐานการประกอบวิชาชีพ	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>  
                </li>
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มรับรองความรู้และความชำนาญ	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>  
                </li>
                <li class="task">
                  <p style = "padding-left:5px;">ทดสอบความรู้ในการประกอบวิชาชีพ	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มรับรองปริญญาและประกาศนียบัตร	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="column doing-column">
              <div class="column-header  font-header-org text-center">
                <h5>สำนักทะเบียนและใบอนุญาตประกอบวิชาชีพ	</h5>
              </div>
              <ul class="task-list" id="doing">
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มบริการผู้ขอประกอบวิชาชีพ	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มทะเบียนใบอนุญาตประกอบวิชาชีพ	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มใบอนุญาตประกอบวิชาชีพ 1	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="column done-column">
              <div class="column-header  font-header-org text-center">
                <h5>สำนักจรรยาบรรณวิชาชีพและนิติการ		</h5>
              </div>
              <ul class="task-list" id="done">
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มกำกับดูแลจรรยาบรรณวิชาชีพ	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
                <li class="task">
                  <p style = "padding-left:10px;">กลุ่มนิติการ	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="column trash-column">
              <div class="column-header  font-header-org text-center">
                <h5>สำนักพัฒนาและส่งเสริมวิชาชีพ	</h5>
              </div>
              <ul class="task-list" id="trash">
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มพัฒนาการประกอบวิชาชีพ	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มวิเทศสัมพันธ์	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>

              </ul>
              <!-- <div class="column-button">
                <button class="button delete-button" onclick="emptyTrash()">Delete</button>
              </div> -->
            </li>

            <li class="column doing-column">
              <div class="column-header font-header-org text-center">
                <h5>สำนักนโยบายและแผน		</h5>
              </div>
              <ul class="task-list" id="to-do">
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มวิจัย ติดตาม และประเมินผล	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มแผนและงบประมาณ	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
               
              </ul>
            </li>

            <li class="column to-do-column">
              <div class="column-header font-header-org text-center">
                <h5>สำนักเทคโนโลยีสารสนเทศ		</h5>
              </div>
              <ul class="task-list" id="to-do">
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มวิทยบริการและวารสาร	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มเทคโนโลยีสารสนเทศและการสื่อสาร	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
               
              </ul>
            </li>

            <li class="column done-column">
              <div class="column-header font-header-org text-center">
                <h5>สำนักอำนวยการ		</h5>
              </div>
              <ul class="task-list" id="to-do">
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มบริหารงานกลาง	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มการเงินและบัญชี	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
                </li>
                <li class="task">
                  <p style = "padding-left:5px;">กลุ่มการประชุมและประสานงาน	</p>
                  <a href="javascript:void(0);" class="btn btn-xs btn-icon">
                      <i class="fal fa-times"></i>
                  </a>
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


<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js"></script>


<script>
$(document).ready(function() {
  $(".select2").select2();
});
/* Custom Dragula JS */
dragula([
  document.getElementById("to-do"),
  document.getElementById("doing"),
  document.getElementById("done"),
  document.getElementById("trash")
]);
removeOnSpill: false
  .on("drag", function(el) {
    el.className.replace("ex-moved", "");
  })
  .on("drop", function(el) {
    el.className += "ex-moved";
  })
  .on("over", function(el, container) {
    container.className += "ex-over";
  })
  .on("out", function(el, container) {
    container.className.replace("ex-over", "");
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
}

/* Vanilla JS to delete tasks in 'Trash' column */
function emptyTrash() {
  /* Clear tasks from 'Trash' column */
  document.getElementById("trash").innerHTML = "";
}

</script>
<style>
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
  border: #000013 0.2rem solid;
  border-radius: 0.2rem;
  
}

.column-header {
  padding: 0.1rem;
  border-bottom: #000013 0.2rem solid;
}

.column-header h4 {
  text-align: center;
}

.to-do-column .column-header {
  background: #ff872f;
}

.doing-column .column-header {
  background: #13a4d9;
}

.done-column .column-header {
  background: #15d072;
}

.trash-column .column-header {
  background: #ff4444;
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
  height: 4rem;
  border: #000013 0.15rem solid;
  border-radius: 0.2rem;
  cursor: move;
  text-align: center;
  vertical-align: middle;
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