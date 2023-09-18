<div class = "hidedivpurchase" id = "purchase4">
    




<!-- <div class="row">
  <div class="col-xl-12">
    <div id="panel-1" class="panel" style="margin-bottom: 15px;">
      <div class="panel-container">
        <div id="js_list_accordion" class="accordion accordion-hover accordion-clean">
          <div class="card border-top-left-radius-0 border-top-right-radius-0">
            





					<div class="card-header" >
              <a href="javascript:void(0);" class="card-title "  aria-expanded="true" data-filter-tags="settings" style = "background-color:#959798 !important;padding-top:10px;padding-bottom:10px;">
              
                ค้นหาโดย
                
              </a>
            </div>
           
            <div id="js_list_accordion-a" class="collapse show " data-parent="#js_list_accordion">
              <div class="card-body">
                <form action="<?//=$actual_link?>" method="post" accept-charset="utf-8"
                id="form-search" name="form-search">
                  <div class="row">
                    <div class="col-sm-12">
                      <label class="form-label" for="unit_name_search">
                        ประเภทคณะกรรมการ
                      </label>
                      <select id="board_type_add" name="board_type_add" class="ele_select_add" placeholder="ประเภทคณะกรรมการ">
							
												<option value="17">
													คณะกรรมการตรวจรับพัสดุ
												</option>
												<option value="17">
													คณะกรรมการเปิดซองสอบราคา
												</option>
												<option value="17">
													คณะกรรมการประกวดราคา
												</option>
												<option value="17">
													คณะกรรมการจัดซื้อ
												</option>
												<option value="17">
													คณะกรรมการจัดจ้าง
												</option>
												<option value="17">
													คณะกรรมการตรวจการจ้าง
												</option>
												<option value="17">
													คณะกรรมการจัดจ้างโดยวิธีพิเศษ
												</option>
												
											</select>
                        
                        
                      </select>
                    </div>
                   
                  </div>
                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <div class="alert alert-warning" id='searchresults' name='searchresults'
    style="margin-bottom: 15px;">
      ค้นหาโดย : ประเภทคณะกรรมการ คณะกรรมการตรวจรับพัสดุ
    </div>
  </div>
</div> -->


<div class="form-row dialog-data " style = "padding-bottom:0px;line-height:30px;vertical-align: middle;padding-top:0px !important;">
			<div class="col-sm-12 sm-12" style="padding-top:0px !important;font-weight:550;font-size:13px;margin-bottom:0px !important;">

				<!-- <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#purchase3-modal"><i class="fa-solid fa-plus"></i></button> -->

				<!-- datatable start -->
						<table id="dynamic-table4" class="myFormat table table-md table-bordered table-hover table-striped w-100" style = "padding-top:0px !important;margin-top:0px !important;line-height:20px;">
							<thead class="bg-info-50">
								<tr>
									
									<th class="text-center" width="20px;">
										
									</th>
									<th class="text-center" style = "vertical-align: middle;">
										ชื่อบริษัท	
									</th>
									<th class="text-center" width="100px;" style = "vertical-align: middle;">
										จำนวนเงินตาม<br>ใบเสนอราคา (บาท)		
									</th>
									<th class="text-center" width="100px;" style = "vertical-align: middle;">
										จำนวนเงินใหม่ (บาท)	
									</th>
									<th class="text-center" width="100px;" style = "vertical-align: middle;">
										ส่วนลด (บาท)	
									</th>
									<th class="text-center" width="100px;" style = "vertical-align: middle;">
										ส่วนลด (%)	
									</th>
									<th class="text-center" width="30px;">
										
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>

									<td>
										1
									</td>
									<td>
										บริษัท ออนป้า จำกัด	
									</td>
									<td>
										230,000
									</td>
									<td>
										200,000
									</td>
									<td>
										30,000
									</td>
									<td>
                    13.04
									</td>
									<td>
									
										<a href="javascript:void(0);" ${txtex} class="btn btn-outline-primary btn-icon btn-xs rounded-circle waves-effect waves-themed edit-data" mode='edit' data-toggle="modal" data-target="#purchase4-modal">
											<i class="ni ni-pencil">
											</i>
										</a>
										
									</td>
								</tr>
								
								
							</tbody>
						</table>
						<!-- datatable end -->
			</div>
		
			
		</div>















</div><!-- ปิด บนสุด -->

<div class="modal fade" id="purchase4-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document" style = "max-width:900px !important;">
				<div class="modal-content">
						<div class="modal-header bg-primary text-white" style = "padding-top:5px;padding-bottom:5px;">
								<h5 class="modal-title">รายละเอียดใบเสนอราคา</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="fal fa-times"></i></span>
								</button>
						</div>
						<div class="modal-body">

					
							

							

							<div class="col-sm-12" style = "padding-right:0px;padding-left:0px;">
							<div class="">
                    <div class="row no-gutters row-grid align-items-stretch bg-primary-400"  >
                        <div class="col-sm-5">
                            <div class=" text-center" style = ""><small>รายการ</small></div>
                        </div>
                        <div class="col-sm-1">
                          <div class=" text-center td-col-h" style = ""><small>จำนวน</small></div>
                        </div>
                        <div class="col-sm-1">
                          <div class="text-center td-col-h" style = ""><small>ราคาต่อหน่วย<br>(บาท)<br>inc vat </small></div>
                        </div>
                        <div class="col-sm-2">
                          <div class="text-center td-col-h" style = ""><small>ราคาต่อหน่วยใหม่<br> (บาท)<br>inc vat</small></div>
                        </div>
                        <div class="col-sm-2">
                          <div class="text-center td-col-h" style = ""><small>จำนวนเงินรวม<br>หลังการต่อรอง<br>(บาท)</small></div>
                        </div>
                      
                        <div class="col-sm-1">
                          <div class="text-center td-col-h" style = ""><small>ราคาที่ลดลง</small></div>
                        </div>
                    </div>
                   
                </div>
                <div class="card-body p-0">
                    <div class="row no-gutters row-grid align-items-stretch">
                        <div class="col-sm-5">
                            <div class=" py-2 px-3 td-col" style = "color:#000;">ค่าจัดพิมพ์หนังสือและอื่น ๆ (54050-00)	</div>
                        </div>
                        <div class="col-sm-1">
                          <div class=" py-2 px-3 text-center td-col" style = "color:#000;">
                           10
                          </div>
                        </div>
                        <div class="col-sm-1 hidden-md-down">
                          <div class=" py-2 px-3 text-center td-col" style = "color:#000;">
                            23,000
                          </div>
                        </div>
                        <div class="col-sm-2 hidden-md-down">
                          <div class=" py-2 px-3 text-center td-col" style = "">
                            <input type="text" class="form-control form-ele clear-element" id="group_name_add" name="group_name_add" placeholder="" value="20000" style = "font-size:12px;">
                          </div>
                        </div>
                        <div class="col-sm-2 hidden-md-down">
                          <div class=" py-2 px-3 text-center td-col" style = "color:#000;">
                            200,000
                          </div>
                        </div>
                       
                        <div class="col-sm-1 hidden-md-down">
                          <div class=" py-2 px-3 text-center td-col" style = "color:#000;">
                            30,000
                          </div>
                        </div>
                    </div>
                </div>
                </div>
               


							

						
                
                <div class="panel-content fourd-form-row-a" >
                <div class="form-row dialog-data " style = "padding-top:15px;padding-bottom:15px;">
                  <div class="col-md-4 mb-4" style="padding-bottom:0px;font-weight:550;font-size:13px;margin-bottom:0px !important;">
                    <label class="form-label" for="" style = "margin:0;">
                       รายละเอียดการต่อรองราคา	 
                    </label>
                    <span class="text-danger stars">  </span> 
                  </div>
                  <div class="col-md-8 mb-8" style="padding-top:0px;padding-bottom:0px;font-size:13px;margin-bottom:0px !important;">
								<textarea class="form-control" id="example-textarea" rows="2" style = "font-size:10px;"></textarea>
                    
                  </div>    
                </div>
              </div> 



							

						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-secondary" id = "btn_purchase4_modal_close">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
						</div>
				</div>
		</div>
</div>

<script>
  var table = $("#dynamic-table4").DataTable({
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
     
    },
    {
      targets: [0,6],
      className: "text-center",
    },
    {
      targets: [2,3,4,5],
      className: "text-right",
    },
    {
      targets: [1],
      className: "text-left",
    }]

  });
		$(document).on('click', '#btn_purchase4_modal_close',
			function() {
			$('#purchase4-modal').modal('toggle');
		});

		// $(function () {
    //     $("#purchase3-modal").draggable();
    // });
	
</script>