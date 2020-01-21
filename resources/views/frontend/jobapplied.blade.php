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
												<th>Job Descriptions</th>
												<th>Saraly</th>
												<th>Action</th>
						                </tr>
						            </thead>
			                  <tbody>
			          					<?php foreach($listjobapplied as $value) : ?>
			          					<tr>
			          						<th scope="row">{{ $value->position_name }}</th>
			          						<td>{{ $value->job_descriptions }}</td>
														<td>{{ $value->saraly }}</td>
			          						<td>
															<button type="button" class="btn btn-danger jobapplieddeletestatus" data-id="{{ $value->id }}" data-toggle="modal" data-target="#delete">
																	ลบข้อมูล
															</button>

			          						</td>
			          					</tr>
			          					<?php endforeach;?>
			          				</tbody>
						            <tfoot>
						                <tr>
															<th>Position</th>
															<th>Job Descriptions</th>
															<th>Saraly</th>
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
	<div id="jobapplieddelete">
	</div>
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


<script type="text/javascript">
$(document).ready(function() {

$(".jobapplieddeletestatus").click(function() {
var id = $(this).attr('data-id');
	$.ajax({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
		type: "POST",
		url: "{{ url('jobapplied/deletejobappliedajax') }}",
		data: {'id': id},
		success: function(result) {
			$('#jobapplieddelete').html(result);
		},
		error: function() {
			alert('err');
		}
	});
});
});
</script>
</body>

</html>
