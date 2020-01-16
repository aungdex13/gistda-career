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
          <form action="/uploadfile" method="post" enctype="multipart/form-data">
              @csrf
							<div class="form-group">
							</div>
							<div class="form-group">
									<input type="text" class="form-control" name="title_file_name">
							</div>
              <div class="form-group">
                  <input type="file" class="form-control-file" name="file_name">
                  <small id="fileHelp" class="form-text text-muted">Please upload a valid PDF or image file. Size of image should not be more than 2MB.</small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>

				</div>
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

</body>

</html>
