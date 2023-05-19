
<main id="js-page-content" role="main" class="page-content">
  <div class="row">
    <div class="col-sm">
			<h1>404 - File Not Found</h1>

			<p>
				ไม่พบ File <?
				if ($url == ''){
					echo 'ไม่มีข้อมูลใน database';
				}else{
					echo 'ไม่มี file ใน view';
				}
				?>
			</p>
		</div>
	</div>
</main>
