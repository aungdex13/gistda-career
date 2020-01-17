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
                    <a href="#job-available-Modal" type="button" class="btn btn-info" data-toggle="modal" data-target="#job-available-Modal">
                        View
                    </a>
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
