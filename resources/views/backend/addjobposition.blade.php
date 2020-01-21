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
					<h4 class="mb-5">แบบฟอร์มตำแหน่งที่ต้องการรับสมัคร</h4>
					<form action="{{route('insertposition') }}" id="regForm" method="post">
						{{ csrf_field() }}
						<!-- One "tab" for each step in the form: -->
						<div class="tab">
							<div class="row form-group">
								<div class="col-md-6">
									<label for="">ตำแหน่ง *</label>
									<input type="text" name="position_name"  class="form-control" required>
								</div>
								<div class="col-md-6">
									<label for="">สถานที่ปฏิบัตงาน </label>
									<select name="location" id="location" class="form-control">
									@foreach ($list as $row)
									<option value="{{$row->province_id}}">{{$row->province_name}}</option>
									@endforeach
								</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="">รายละเอียดงาน : </label>
									<textarea type="text" name="job_descriptions" class="form-control" required></textarea>
								</div>
								<div class="col-md-6">
									<label for="">ประเภทงาน *</label>
									<input type="text" name="job_type"  class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="">ระดับการศึกษา : </label>
									<textarea type="text" name="education"  class="form-control" requiredv></textarea>
								</div>
								<div class="col-md-6">
									<label for="">ประสบการณ์ *</label>
									<textarea type="text" name="experiences" class="form-control" required></textarea>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="">คุณลักษณะ : </label>
									<textarea  type="text" name="attributes"  class="form-control" required></textarea>
								</div>
								<div class="col-md-6">
									<label for="">เพศ *</label>
									<select name="gender" id="gender" class="form-control">
									<option value="1">Male</option>
									<option value="2">Female</option>
									<option value="3">All Gender</option>
								</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">อายุ </label>
									<input type="text" name="age" id="intTextBox"  class="form-control">
								</div>
								<div class="col-md-4">
									<label for="">เงินเดือน : </label>
									<input type="text" name="saraly" id="intTextBox" class="form-control">
								</div>
								<div class="col-md-4">
									<label for="">จำนวนที่ต้องการ *</label>
									<input type="text" name="request" id="intTextBox" class="form-control" required>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="">วันทีเปิดรับสมัคร : </label>
									<input type="text" name="job_post_date" id="datepicker"  class="form-control" required>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
								</div>
								<div class="col-md-3">
								<button type="submit" class="btn btn-primary">Submit</button>
								</div>
								<div class="col-md-4">
								</div>
							</div>
					</form>

				</div>
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


<script>
	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
		// This function will display the specified tab of the form...
		var x = document.getElementsByClassName("tab");
		x[n].style.display = "block";
		//... and fix the Previous/Next buttons:
		if (n == 0) {
			document.getElementById("prevBtn").style.display = "none";
		} else {
			document.getElementById("prevBtn").style.display = "inline";
		}
		if (n == (x.length - 1)) {
			document.getElementById("nextBtn").innerHTML = "Submit";
		} else {
			document.getElementById("nextBtn").innerHTML = "Next";
		}
		//... and run a function that will display the correct step indicator:
		fixStepIndicator(n)
	}

	function nextPrev(n) {
		// This function will figure out which tab to display
		var x = document.getElementsByClassName("tab");
		// Exit the function if any field in the current tab is invalid:
		if (n == 1 && !validateForm()) return false;
		// Hide the current tab:
		x[currentTab].style.display = "none";
		// Increase or decrease the current tab by 1:
		currentTab = currentTab + n;
		// if you have reached the end of the form...
		if (currentTab >= x.length) {
			// ... the form gets submitted:
			document.getElementById("regForm").submit();
			return false;
		}
		// Otherwise, display the correct tab:
		showTab(currentTab);
	}

	function validateForm() {
		// This function deals with validation of the form fields
		var x, y, i, valid = true;
		x = document.getElementsByClassName("tab");
		y = x[currentTab].getElementsByTagName("input");
		// A loop that checks every input field in the current tab:
		for (i = 0; i < y.length; i++) {
			// If a field is empty...
			if (y[i].value == "") {
				// add an "invalid" class to the field:
				// y[i].className += " invalid";
				// // and set the current valid status to false
				// valid = false;
			}
		}
		// If the valid status is true, mark the step as finished and valid:
		// if (valid) {
		//   document.getElementsByClassName("step")[currentTab].className += " finish";
		// }
		return valid; // return the valid status
	}

	function fixStepIndicator(n) {
		// This function removes the "active" class of all steps...
		var i, x = document.getElementsByClassName("step");
		for (i = 0; i < x.length; i++) {
			x[i].className = x[i].className.replace(" active", "");
		}
		//... and adds the "active" class on the current step:
		x[n].className += " active";
	}
</script>

<script type="text/javascript">
	$('.provinces').change(function() {
		if ($(this).val() != '') {
			var select = $(this).val();
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url: "{{route('dropdown.fetch')}}",
				method: "POST",
				data: {
					select: select,
					_token: _token
				},
				success: function(result) {
					$('.district').html(result);
				}
			})
		}
	});
</script>
<script type="text/javascript">
	$('.district').change(function() {
		var selectD = $(this).val();
		if ($(this).val() != '') {
			console.log(selectD);
			var _token = $('input[name="_token"]').val();
			$.ajax({
				url: "{{route('dropdown.fetchD')}}",
				method: "POST",
				data: {
					select: selectD,
					_token: _token
				},
				success: function(result) {
					$('.subdistrict').html(result);
				}
			})
		}
	});
</script>
<script type="text/javascript">

// Restricts input for each element in the set of matched elements to the given inputFilter.
(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  };
}(jQuery));

$("#intTextBox").inputFilter(function(value) {
  return /^-?\d*$/.test(value); });

 // end input filter
 // datepicker

</script>
<script>
var date = $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
</script>
</body>

</html>
