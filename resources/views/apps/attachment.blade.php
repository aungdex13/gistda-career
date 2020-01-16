<!doctype html>
<html lang="en">
@include('layout.headerscript')
@include('layout.header')
<section class="site-section" style="background-color: #E0F2F1" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-md-8 blog-content" style="background-color: #FDFEFE">
				<div class="pt-5">
					<!-- END comment-list -->
					<h4 class="mb-5">แบบฟอร์มใบสมัครงานออนไลน์</h4>
							<div class="form-group">
								<table id="file_attachment" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ชื่อไฟล์</th>
                <th>ประเภทไฟล์</th>
                <th>วันที่อัพโหลด</th>
                <th>Action</th>
            </tr>
        </thead>
				<tbody>
					<?php foreach($listfile as $value) : ?>
					<tr>
						<th scope="row">{{ $value->title_file_name }}</th>
						<td>{{ $value->originalfilename }}</td>
						<td>{{ $value->date_entry }}</td>
						<td>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
									ลบข้อมูล
							</button>

						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
        <tfoot>
            <tr>
							<th>ชื่อไฟล์</th>
							<th>ประเภทไฟล์</th>
							<th>วันที่อัพโหลด</th>
							<th>Action</th>
            </tr>
        </tfoot>
    </table>
							</div>
						</div>
							<br>

							<form action="/uploadfile" method="post" enctype="multipart/form-data">
									@csrf
					<div class="pt-5">
							<div class="form-group">
									<h5>อัพโหลดไฟล์ข้อมูล</h5>
							</div>
							<div class="row form-group">
							<div class="form-group col-md-6">
								<label for="">ชื่อไฟล์ : </label>
									<input type="text" class="form-control" name="title_file_name">
							</div>
              <div class="form-group col-md-12">
                  <input type="file" class="form-control-file" name="file_name">
                  <small id="fileHelp" class="form-text text-muted">Please upload a valid PDF or image file. Size of image should not be more than 2MB.</small>
              </div>
						</div>
              <button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
			@include('layout.usersidebar')

		</div>
	</div>
	</div>
	</div>

	<!-- The Modal -->
<div class="modal fade" id="myModal">
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
<a class="btn btn-danger" href="{{ 'deletefile' }}?filename=<?php echo $filename = (isset($value->filename)) ? $value->filename : '0';?> ">ยืนยัน</a>
<button type="button" class="btn" style="background-color: #e7e7e7;" data-dismiss="modal">ยกเลิก</button>
</div>

</div>
</div>
</div>
</section>
@include('layout.footer')
</div> <!-- .site-wrap -->
@include('layout.footerscript')

</body>
<script>
$(document).ready(function() {
	$('#file_attachment').DataTable();
} );
</script>
</html>
