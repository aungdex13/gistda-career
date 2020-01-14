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
			            <th>#</th>
									<th>Position</th>
									<th>Job Post date</th>
									<th>Salary</th>
									<th>Action</th>
			                </tr>
			            </thead>
			            <tbody>
			                <tr>
			          <td><input type="radio" name="answer"></td>
			                    <td>Financial Controller</td>
			                    <td>62</td>
			                    <td>2009/02/14</td>
			                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#job-available-Modal">View</a></td>
			                </tr>
			                <tr>
			          <td><input type="radio" name="answer"></td>
			                    <td>Office Manager</td>
			                    <td>37</td>
			                    <td>2008/12/11</td>
			                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#job-available-Modal">View</a></td>
			                </tr>
			                <tr>
			          <td><input type="radio" name="answer"></td>
			                    <td>Director</td>
			                    <td>65</td>
			                    <td>2008/09/26</td>
			                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#job-available-Modal">View</a></td>
			                </tr>
			                <tr>
			          <td><input type="radio" name="answer"></td>
			                    <td>Support Engineer</td>
			                    <td>64</td>
			                    <td>2011/02/03</td>
			                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#job-available-Modal">View</a></td>
			                </tr>
			                <tr>
			          <td><input type="radio" name="answer"></td>
			                    <td>Software Engineer</td>
			                    <td>38</td>
			                    <td>2011/05/03</td>
			                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#job-available-Modal">View</a></td>
			                </tr>
			                <tr>
			          <td><input type="radio" name="answer"></td>
			                    <td>Javascript Developer</td>
			                    <td>29</td>
			                    <td>2011/06/27</td>
			                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#job-available-Modal">View</a></td>
			                </tr>
			                <tr>
			          <td><input type="radio" name="answer"></td>
			                    <td>Customer Support</td>
			                    <td>27</td>
			                    <td>2011/01/25</td>
			                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#job-available-Modal">View</a></td>
			                </tr>
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
