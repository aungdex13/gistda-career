<!doctype html>
<html lang="en">
@include('layout.headerscript')
@include('layout.header')
<section class="site-section" style="background-color: #D6EAF8"  data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-md-8 blog-content" style="background-color: #FDFEFE">
        	<p class="lead">
					<!-- END comment-list -->
          <div class="pt-5">
              <div class="form-group">
                  <h5>ข้อมูลตำแหน่ง</h5>
              </div>
              <br>
              <div class="row form-group">
              <div class="form-group col-md-6">
                  <a class="btn btn-info" href="{{ 'addjobposition' }}?user_id=123456">เพิ่มข้อมูลตำแหน่งที่เปิดรับสมัคร</a>
              </div>
            </div>
        </div>
					<form action="#" class="">
			    <table id="example" class="display text-black" style="width:90%">
			            <thead>
			                <tr>
									<th>Position</th>
									<th>Job Post date</th>
									<th>status</th>
									<th>Action</th>
			                </tr>
			            </thead>
                  <tbody>
          					<?php foreach($listfile as $value) : ?>
          					<tr>
          						<th scope="row">{{ $value->position_name }}</th>
          						<td>{{ $value->job_post_date }}</td>
          						<td>{{ $value->status }}</td>
          						<td>
												<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#changes">
														เปลี่ยนสถานะ
												</button>
												<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
														ลบข้อมูล
												</button>

          						</td>
          					</tr>
          					<?php endforeach;?>
          				</tbody>
			            <tfoot>
			                <tr>
												<th>Position</th>
												<th>Job Post date</th>
												<th>status</th>
												<th>Action</th>
			                </tr>
			            </tfoot>
			        </table>
			  </p>
					</form>
			</div>

			@include('layout.usersidebar')

		</div>
	</div>
	</div>
	</div>
	<!-- The Modal -->
<div class="modal fade" id="delete">
<div class="modal-dialog">
<div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title"><font color="#FFC300">WARNING:</font></h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body">
	หากท่านต้องการลบข้อมูลที่เลือกให้กดปุ่ม "<font color="red">ยืนยัน</font>" หรือหากต้องการยกเลิกการลบข้อมูลให้กดปุ่ม "ยกเลิก"
</div>
<!-- Modal footer -->
<div class="modal-footer">
<a class="btn btn-danger" href="{{ 'deleteposition' }}?id=<?php echo $id = (isset($value->id)) ? $value->id : '0';?> ">ยืนยัน</a>
<button type="button" class="btn" style="background-color: #e7e7e7;" data-dismiss="modal">ยกเลิก</button>
</div>

</div>
</div>
</div>

<!-- The Modal -->
<div class="modal fade" id="changes">
<div class="modal-dialog">
<div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title"><font color="#FFC300">WARNING:</font></h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body">
หากท่านต้องการเปลี่ยนสถานะข้อมูลที่เลือกให้กดปุ่ม "<font color="success">ยืนยัน</font>" หรือหากต้องการยกเลิกการการเปลี่ยนสถานะข้อมูลให้กดปุ่ม "ยกเลิก"
</div>
<!-- Modal footer -->
<div class="modal-footer">
<a class="btn btn-warning" href="{{ 'changesposition' }}?id=<?php echo $id = (isset($value->id)) ? $value->id : '0';?>&status=<?php echo $id = (isset($value->status)) ? $value->status : '0';?> ">ยืนยัน</a>
<button type="button" class="btn" style="background-color: #e7e7e7;" data-dismiss="modal">ยกเลิก</button>
</div>

</div>
</div>
</div>
</section>
@include('layout.footer')
</div> <!-- .site-wrap -->
@include('layout.footerscript')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
</body>

</html>
