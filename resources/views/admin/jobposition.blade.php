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
                        <a class="btn btn-info" href="{{ 'addjobposition' }}?user_id=123456">เปลี่ยนสถานะ</a>
          							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
          									ลบข้อมูล
          							</button>

          						</td>
          					</tr>
          					<?php endforeach;?>
          				</tbody>
			            <tfoot>
			                <tr>
													<th>#</th>
			                    <th>Position</th>
			                    <th>Job Post date</th>
			                    <th>Salary</th>
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
