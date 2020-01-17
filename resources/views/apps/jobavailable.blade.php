<section class="site-section" style="background-color: #c6e2ff" id="job-available-section">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-12 align-self-center mr-auto text-left heading-section mb-12">
        <div class="paws ml-4">
          <span class="icon-paw"></span>
        </div>
        <h2 class="text-black mb-12">About Us</h2>
        <p class="lead">
    <table id="example" class="display text-black" style="width:100%">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Job Descriptions</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($listfile as $value) : ?>
                <tr>
                    <td>{{ $value->position_name }}</td>
                    <td>{{ $value->job_descriptions }}</td>
                    <td>{{ $value->location }}</td>
                    <td>{{ $value->age }}</td>
                    <td>{{ $value->saraly }}</td>
                    <td>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#job-available-Modal">
                        View
                    </button>
                    </td>
                    <!-- <td><a href="?id={{ $value->id }}" class="btn btn-info" data-toggle="modal"  data-target="#job-available-Modal">View</a></td> -->
                </tr>
                <?php endforeach;?>
            </tbody>
            <tfoot>
                <tr>
                  <th>Position</th>
                  <th>Job Descriptions</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Salary</th>
                  <th>Action</th>
                </tr>
            </tfoot>
        </table>
  </p>
      </div>
    </div>
  </div>
</section>
<!-- Modal -->
<div id="job-available-Modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
		<h4 class="modal-title text-black mb-3 text-left">Position : <?php echo $position_name = (isset($value->position_name)) ? $value->position_name : '0';?></h4>
		</div>
		<div class="modal-header">
		<h5 class="modal-title text-black mb-3 text-left">Location : </h5>
      </div>
      <div class="modal-body">
        <div id="test"></div>
	  <p class="lead">Job Descriptions :</p>
            <p class="text-muted mb-4">
			</p>
            <ul class="list-unstyled ul-paw primary mb-0">
              <li><?php echo $value->job_descriptions; ?></li>
            </ul>
			<p class="lead">Job Descriptions :</p>
			<p class="text-muted mb-4">
					NOC Engineer (Site Ploenchit)
					Being a Network Operation Center Engineer, or a NOC engineer means they are an expert in the
					management and monitoring of network and system from any centralized location. A technical NOC
					team is comprised of skilled IT & NOC engineers. They watch the IT environment, and ensure that
					the uptime and connectivity of the IT systems are seamless 24/7.
			</p>
			<p class="lead">Education :</p>
			<p class="text-muted mb-4">
					Bachelor’s Degree in Computer Engineering, Computer Science or any related fields
			</p>
			<p class="lead">Experiences :</p>
			<p class="text-muted mb-4">
					0+
			</p>
			<p class="lead">Attributes :</p>
			<ul class="list-unstyled ul-paw primary mb-0">
              <li>Good command of English</li>
              <li>Customer-oriented and cool-tempered</li>
              <li>Good command of English</li>
            </ul>
			<p class="lead">Gender :</p>
			<p class="text-muted mb-4">
					All Gender
			</p>
			<p class="lead">Age :</p>
			<p class="text-muted mb-4">
					22+
			</p>
			<p class="lead">Salary :</p>
			<p class="text-muted mb-4">
					N/A
			</p>
			<p class="lead">Request :</p>
			<p class="text-muted mb-4">
					6
			</p>
			<p class="lead">Job Post Date :</p>
			<p class="text-muted mb-4">
					2019-10-29
			</p>
      </div>
      <div class="modal-footer">
	  	<button type="button" class="btn btn-primary" data-dismiss="modal">Apply</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
	</div>

	</div>
	</div>
	<!-- END Modal content-->
