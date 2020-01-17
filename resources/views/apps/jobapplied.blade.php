<!doctype html>
<html lang="en">
@include('layout.headerscript')
@include('layout.header')
<section class="site-section" style="background-color: #D6EAF8"  data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-md-8 blog-content" style="background-color: #FDFEFE">
					<!-- END comment-list -->
					<h3 class="mb-5">Job applied</h3>
					<form action="#" class="">
							<p class="lead">
								{{-- <a href="#" class="btn btn-success" data-toggle="modal" data-target="#job-available-Modal">Select Job</a> --}}
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
