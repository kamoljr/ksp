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
              <a href="javascript:void(0);" class="card-title" data-toggle="collapse"
              data-target="#js_list_accordion-a" aria-expanded="true" data-filter-tags="settings">
                <i class="fal fa-search width-2 fs-xl">
                </i>
                ค้นหาโดย
                <span class="ml-auto">
                  <span class="collapsed-reveal">
                    <i class="fal fa-chevron-up fs-xl">
                    </i>
                  </span>
                  <span class="collapsed-hidden">
                    <i class="fal fa-chevron-down fs-xl">
                    </i>
                  </span>
                </span>
              </a>
            </div>
            <!-- จุดที่ 1 เปิด แก้ส่วนค้นหาโดย -->
            <div id="js_list_accordion-a" class="collapse show" data-parent="#js_list_accordion">
              <div class="card-body">
                <form action="<?=$actual_link?>" method="post" accept-charset="utf-8"
                id="form-search" name="form-search">
                  <div class="row">
                    <div class="col-sm-12">
                      <label class="form-label" for="unit_name_search">
                        ปีงบประมาณ
                      </label>
                      <div id = "div_search_strategyyear_id"></div>
                    </div>
                    
                    
                  </div>
                </form>
              </div>
            </div>
            <!-- ปิด แก้ส่วนค้นหาโดย -->
          </div>
        </div>
      </div>
    </div>
    <div class="alert alert-warning" id='searchresults' name='searchresults'
    style="margin-bottom: 15px;">
      ค้นหาโดย : ปีงบประมาณ 2566
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel">
      <div class="panel-container">
        <div class="panel-content" style="padding-top: 0px;">
         
          <!-- datatable start -->
          
          <table id="dynamic-table" class="table table-md table-bordered table-hover table-striped w-100">
            <thead class="bg-primary-600">
              <tr>
                <th width = "30px;">
                  คะแนน
                </th>
                <th class="text-center">
                  เลือกประเด็น
                </th>
               
              
                
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>
                  10
                </td>
                <td>
                  <div id = "div_issuesandswot_id_10"></div>
                </td>
              </tr>
              <tr>
                <td>
                  9
                </td>
                <td>
                  <div id = "div_issuesandswot_id_9"></div>
                </td>
              </tr>
              <tr>
                <td>
                  8
                </td>
                <td>
                  <div id = "div_issuesandswot_id_8"></div>
                </td>
              </tr>
              <tr>
                <td>
                  7
                </td>
                <td>
                  <div id = "div_issuesandswot_id_7"></div>
                </td>
              </tr>
              <tr>
                <td>
                  6
                </td>
                <td>
                  <div id = "div_issuesandswot_id_6"></div>
                </td>
              </tr>
              <tr>
                <td>
                  5
                </td>
                <td>
                  <div id = "div_issuesandswot_id_5"></div>
                </td>
              </tr>
              <tr>
                <td>
                  4
                </td>
                <td>
                  <div id = "div_issuesandswot_id_4"></div>
                </td>
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td>
                  <div id = "div_issuesandswot_id_3"></div>
                </td>
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                  <div id = "div_issuesandswot_id_2"></div>
                </td>
              </tr>
              <tr>
                <td>
                  1
                </td>
                <td>
                  <div id = "div_issuesandswot_id_1"></div>
                </td>
              </tr>

              <!-- <tr>
                <td>
                  9
                </td>
                <td>
                  <select id="ist2" name="ist2" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  8
                </td>
                <td>
                  <select id="ist3" name="ist3" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  7
                </td>
                <td>
                  <select id="ist4" name="ist4" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  6
                </td>
                <td>
                  <select id="ist5" name="ist5" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  5
                </td>
                <td>
                  <select id="ist6" name="ist6" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  4
                </td>
                <td>
                  <select id="ist7" name="ist7" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  3
                </td>
                <td>
                  <select id="ist8" name="ist8" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  2
                </td>
                <td>
                  <select id="ist9" name="ist9" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
              <tr>
                <td>
                  1
                </td>
                <td>
                  <select id="ist10" name="ist10" class="select2 ist"
                      placeholder="เลือกประเด็น">
                      <option>-</option>
                        <option value="">01คณะกรรมการคุรุสภามีอำนาจในแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการคุรุสภา</option>
                        <option value="17">02คณะกรรมการมาตรฐานวิชาชีพมีอำนาจในการแต่งตั้งคณะอนุกรรมการเพื่อกระทำการอันอยู่ในอำนาจของคณะกรรมการมาตรฐานวิชาชีพ</option>
                        <option value="17">03คุรุสภามีสายงานการบังคับบัญชาที่มีความชัดเจน</option>
                        <option value="17">04คณะกรรมการคุรุสภามีอำนาจในปรับเปลี่ยนโครงสร้างองค์การได้ตามความเหมาะสม</option>
                        <option value="17">05แผนยุทธศาสตร์ที่ผ่านมามีผลการประเมินตามตัวชี้วัดในระดับดี และมีผลการประเมินระดับความพึงพอใจและความเชื่อมั่นในระดับมากเป็นส่วนใหญ่</option>
                      </select>
                    </div>
                </td>
                
                
              </tr>
               -->
              
              
            </tbody>
          </table>
          
          <!-- datatable end -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- this overlay is activated only when mobile menu is triggered -->
<div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
<!-- END Page Content -->

<script src="<?= base_url().'/';?>js/budget/<?=$pages;?>.js"></script>
<script>
    
$(document).ready(function() {
  $(".select2").select2();
  $('#unit_name_add').select2({
    dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
  });

  var table = $("#dynamic-table").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    bLengthChange: false,
    searching: false,
    bAutoWidth: false,
    bStateSave: true,
    processing: true,
    bPaginate: true,
    orderable:false,
    "ordering": false,
    "paging": false,
    "info":     false,
    columnDefs: [{
      // targets: [0,1],
      // orderable: false,
    },
    {
      targets: [0],
      className: "text-center",
    },
    {
      targets: [0],
      order: "desc",
    },
    {
      targets: [1],
      className: "text-left",
    }]

  });

  // $(document).on('click', '#btnadd',
  // function() {
  //   $("#ids").val('');

  //   $(".lblmode").text("เพิ่ม");

  //   $("#icon_add_form").show();
  //   $("#icon_edit_form").hide();
  //   $("#icon_view_form").hide();

  //   $('.div_show_rowid').css('display', 'none');

  //   $(".clear-element").val('');

  //   $('.form-ele').prop('disabled', false);
  //   $('.stars').show(); // ซ่อนดาวแดง
  //   $(".dialog-data").show();
  //   $(".dialog-success").hide();

  //   $("#btn_save_change").show();
  //   $("#btn_dialog_close").show();

  // });

  // $(document).on('click', '#btn_dialog_close',
  // function() {
  //   $('.default-example-modal-right').modal('toggle');
  // });
  // $(document).on('change', '.ist',
  // function() {
  //   alert("บันทึกข้อมูลแล้ว");
  // });
  
  //-------open------
	const select_var = {
		ele_name:"search_strategyyear_id",
		value_edit:"<?//=$para1?>",
		option_type:"",
		placeholder:"ประเด็น",
		classselect:"select2 searchdata",
    //ctr1:'',
	};
	create_one_select(select_var);
	//--------close-----
  
  $(".select2").select2();
  searchdata();

  $(document).on('change', '.searchdata', function() {
			searchdata();
	});
});
function searchdata(){
  //-------open------
	const select_var10 = {
		ele_name:"issuesandswot_id_10",
		value_edit:"<?//=$para1?>",
		option_type:"-",
		placeholder:"ประเด็น",
		classselect:"select2",
    ctr1:$("#search_strategyyear_id").val(),
    num_score:'10',
	};
	create_one_select_edit(select_var10);
	//--------close-----
  //-------open------
	const select_var9 = {
		ele_name:"issuesandswot_id_9",
		value_edit:"<?//=$para1?>",
		option_type:"-",
		placeholder:"ประเด็น",
		classselect:"select2",
    ctr1:$("#search_strategyyear_id").val(),
    num_score:'9',
	};
	create_one_select_edit(select_var9);
	//--------close-----
  //-------open------
	const select_var8 = {
		ele_name:"issuesandswot_id_8",
		value_edit:"<?//=$para1?>",
		option_type:"-",
		placeholder:"ประเด็น",
		classselect:"select2",
    ctr1:$("#search_strategyyear_id").val(),
    num_score:'8',
	};
	create_one_select_edit(select_var8);
	//--------close-----
  //-------open------
	const select_var7 = {
		ele_name:"issuesandswot_id_7",
		value_edit:"<?//=$para1?>",
		option_type:"-",
		placeholder:"ประเด็น",
		classselect:"select2",
    ctr1:$("#search_strategyyear_id").val(),
    num_score:'7',
	};
	create_one_select_edit(select_var7);
	//--------close-----
  //-------open------
	const select_var6 = {
		ele_name:"issuesandswot_id_6",
		value_edit:"<?//=$para1?>",
		option_type:"-",
		placeholder:"ประเด็น",
		classselect:"select2",
    ctr1:$("#search_strategyyear_id").val(),
    num_score:'6',
	};
	create_one_select_edit(select_var6);
	//--------close-----
  //-------open------
	const select_var5 = {
		ele_name:"issuesandswot_id_5",
		value_edit:"<?//=$para1?>",
		option_type:"-",
		placeholder:"ประเด็น",
		classselect:"select2",
    ctr1:$("#search_strategyyear_id").val(),
    num_score:'5',
	};
	create_one_select_edit(select_var5);
	//--------close-----
  //-------open------
	const select_var4 = {
		ele_name:"issuesandswot_id_4",
		value_edit:"<?//=$para1?>",
		option_type:"-",
		placeholder:"ประเด็น",
		classselect:"select2",
    ctr1:$("#search_strategyyear_id").val(),
    num_score:'4',
	};
	create_one_select_edit(select_var4);
	//--------close-----
  //-------open------
	const select_var3 = {
		ele_name:"issuesandswot_id_3",
		value_edit:"<?//=$para1?>",
		option_type:"-",
		placeholder:"ประเด็น",
		classselect:"select2",
    ctr1:$("#search_strategyyear_id").val(),
    num_score:'3',
	};
	create_one_select_edit(select_var3);
	//--------close-----
  //-------open------
	const select_var2 = {
		ele_name:"issuesandswot_id_2",
		value_edit:"<?//=$para1?>",
		option_type:"-",
		placeholder:"ประเด็น",
		classselect:"select2",
    ctr1:$("#search_strategyyear_id").val(),
    num_score:'2',
	};
	create_one_select_edit(select_var2);
	//--------close-----
  //-------open------
	const select_var1 = {
		ele_name:"issuesandswot_id_1",
		value_edit:"<?//=$para1?>",
		option_type:"-",
		placeholder:"ประเด็น",
		classselect:"select2",
    ctr1:$("#search_strategyyear_id").val(),
    num_score:'1',
	};
	create_one_select_edit(select_var1);
	//--------close-----
  $(".select2").select2();

  setTimeout(function () {
  	editdata();
  }, 1000);
  
}

function create_one_select_edit(select_var){

	var aoData = "a=''";
	//console.log(select_var.ele_name+"||"+select_var.ctr1);
	if (select_var.ctr1 != undefined){
		aoData = aoData+"&ctr1="+select_var.ctr1;
	}
	if (select_var.ctr2 != undefined){
		aoData = aoData+"&ctr2="+select_var.ctr2;
	}

	val_num_score = select_var.num_score;
	
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/"+select_var.ele_name,
		dataType: "json",
		async:false,
		data: aoData,
		success: function(response) {
			var str_select = '<select class="'+select_var.classselect+'" id="'+select_var.ele_name+'" name="'+select_var.ele_name+'" placeholder="'+select_var.placeholder+'" onchange=savepoinvalue(this,'+val_num_score+')>';
			if (select_var.option_type == "all"){
				str_select = str_select+'<option value="" >ทั้งหมด</option>';
			}
			if (select_var.option_type == "-"){
				str_select = str_select+'<option value="" >-</option>';
			}
            if (response == ""){
							str_select = str_select+'<option value="" >ไม่พบข้อมูล</option>';
            }else{
							$.each(response,function(i){
								selected = '';
								if (select_var.value_edit == response[i].field_id){selected = 'selected';}
								str_select = str_select+'<option value="'+response[i].field_id+'" '+selected+' >'+response[i].field_name+'</option>';
							});
            }
			
			str_select = str_select+'</select>';
			$("#div_"+select_var.ele_name).html(str_select);
		},
		error: function(response) {
				//console.log(response);
		}
	});
}
function savepoinvalue(evalue,num_score){
  console.log("issuesandswot_id = "+evalue.value);
  console.log("คะแนน"+num_score);
  // -----ใส่ค่า--------
	 var aoData = "search_strategyyear_id="+$("#search_strategyyear_id").val()+"&evalue="+evalue.value+"&num_score="+num_score;
	// var aoData = $('#form_save').serialize();
	//----------------
	console.log(aoData);
	$.ajax({
		type: "POST",
		url: "/public/index.php/<?=$description_en;?>/<?=$pages;?>_cn/save_data",
		dataType: "json",
		beforeSend: function () {
			//$("#overlay").fadeIn(200);

		},
		data: aoData,
		success: function(response) {
			//console.log("response=".response);
			
			bootbox.alert('บันทึกค่าคะแนนประเด็นเรียบร้อยแล้ว');
				
			
		},
		complete: function () {
			
		},
		error: function(response) {
				//console.log(response);
		}
	});

  
}


function editdata() {
   // $("#form_add_lbl_strategyyear").text($("#search_strategyyear_id option:selected" ).text());
		// $("#form_add_lbl_strategylvone").text($("#search_strategylvone_id option:selected" ).text());
		// $("#form_add_lbl_strategylvtwo").text($("#search_strategylvtwo_id option:selected" ).text());
		// $("#form_add_lbl_strategylvthree").text($("#search_strategylvthree_id option:selected" ).text());
		// --------open-----
    var aoData1 = "search_strategyyear_id="+$("#search_strategyyear_id").val();
		$.ajax({
			type: "POST",
			url: "/public/index.php/<?=$description_en.'/'.$pages?>_cn/edit_data",
			dataType: "json",
			beforeSend: function () {
				//$("#overlay").fadeIn(200);
			},
			data: aoData1,
			success: function (response) {
        if (response == ""){
         
        }else{
          $.each(response,function(i){
             
            //$('#issuesandswot_id_'+response[i].scores).val(response[i].issuesandswot_id).trigger('change');
           
            //-------open------
            const select_var1 = {
              ele_name:"issuesandswot_id_"+response[i].scores,
              value_edit:response[i].issuesandswot_id,
              option_type:"-",
              placeholder:"ประเด็น",
              classselect:"ele_select_add",
              ctr1:$("#search_strategyyear_id").val(),
              num_score:response[i].scores,
            };
            create_one_select_edit(select_var1);
            $('.ele_select_add').select2({
              //dropdownParent: $('.default-example-modal-right') // ทำให้ select  แสดงใน modal
            });
            //--------close-----

            
           
          });
        }
				// $("#policyksp_add").val(response[0].policyksp);
				
        // //--- ติ๊ก checkbox----
        // if (response[0].plantargetlvfour_id_multi != null){
        //   let text = response[0].plantargetlvfour_id_multi;
        //   const array1 = text.split(",");
        //   ii = 0;
        //   setTimeout(function () {
        //     while (ii < array1.length) {
        //       console.log(array1[ii]);
        //       $('#plantargetlvfour_id_multi_'+array1[ii]).prop('checked', true);
        //       ii++;
        //   }
        //   }, 100);
        // }
				//------ ปิด------ 
			},
			complete: function () {
				// setTimeout(function () {
				// 	$("#overlay").fadeOut(200);
				// }, 100);
			},
			error: function (response) {
				//console.log(response);
			}
		});
}
</script>