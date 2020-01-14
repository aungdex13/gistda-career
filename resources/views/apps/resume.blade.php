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
					<form action="{{route('insertdataresume') }}" id="regForm" method="post">
						{{ csrf_field() }}
						<!-- One "tab" for each step in the form: -->
						<div class="tab">
							<h4 class="mb-5">ตำแหน่งที่ต้องการสมัคร</h4>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="">ปีที่สมัคร *</label>
									<input type="text" name="year_of_applied" oninput="this.className = ''" >
								</div>
								<div class="col-md-6">
									<label for="">วันที่สมัคร *</label>
									<input type="text" name="date_of_applied" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="">เลขที่ใบสมัคร : </label>
									<input type="text" name="number_of_applied" oninput="this.className = ''">
								</div>
								<div class="col-md-6">
									<label for="">ตำแหน่งที่เปิดรับสมัคร *</label>
									<input type="text" name="" id="position_of_applied" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="">ประกาศรับสมัคร : </label>
									<input type="text" name="applied_announcement" oninput="this.className = ''">
								</div>
							</div>
						</div>

						<div class="tab">
							<h4 class="mb-5">ประวัติส่วนส่วนตัว</h4>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="">คำนำหน้าชื่อ *</label>
									<input type="text" name="title_name" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">ชื่อ(TH) *</label>
									<input type="text" name="first_name_th" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">นามสกุล(TH) *</label>
									<input type="text" name="last_name_th" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="">ชื่อ(EN) : </label>
									<input type="text" name="first_name_en" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">นามสกุล(EN) : </label>
									<input type="text" name="last_name_en" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="">เพศ *</label>
									<input type="text" name="gendar" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">วันเดือนปีเกิด *</label>
									<input type="text" name="date_birth" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="">จังหวัดเกิด : </label>
									<select name="province_birth" id="provinces" class="form-control provinces">
										<option value="">เลือกจังหวัด</option>
										@foreach ($list as $row)
										<option value="{{$row->province_id}}">{{$row->province_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-md-3">
									<label for="">เขต/อำเภอเกิด : </label>
									<select name="district_birth" id="district" class="form-control district">
										<option value="">เลือกอำเภอ/เขต</option>
									</select>
								</div>
								<div class="col-md-3">
									<label for="">แขวง/ตำบลเกิด : </label>
									<select name="subdistrict_birth" id="subdistrict" class="form-control subdistrict">
										<option value="">เลือกตำบล</option>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="">สัญชาติ : </label>
									<input type="text" name="nationality" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">ศาสนา : </label>
									<input type="text" name="religion" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">การรับราชการทหาร : </label>
									<input type="text" name="military_service" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">หมู่โลหิต : </label>
									<input type="text" name="blood_type" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">โรคประจำตัว : </label>
									<input type="text" name="congenital_disease" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">ระบุโรคประจำตัว : </label>
									<input type="text" name="congenital_disease_text" oninput="this.className = ''">
								</div>
							</div>
						</div>

						<div class="tab">
							<h4 class="mb-5">ประวัติส่วนส่วนตัว</h4>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">เลขบัตรประชาชน : </label>
									<input type="text" id="intTextBox" name="id_card_number" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">วันที่บัตรหมดอายุ : </label>
									<input type="text" id="datepicker" name="id_card_expiration_date" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">วันที่ออกบัตร : </label>
									<input type="text" name="id_card_issue_date" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">จังหวัดที่ออกบัตร : </label>
									<input type="text" name="province_id_card_issue" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">สถานที่ออกบัตร : </label>
									<input type="text" name="location_id_card_issue" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">Passport NO : </label>
									<input type="text" name="passport_no" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">Expired Date : </label>
									<input type="text" name="passport_expired_date" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">Issue Date : </label>
									<input type="text" name="passport_issued_date" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="">Visa NO : </label>
									<input type="text" name="visa_no" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">Type of Visa : </label>
									<input type="text" name="type_of_visa" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">Issue Date : </label>
									<input type="text" name="visa_issue_date" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">Expired Date : </label>
									<input type="text" name="visa_expired_date" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">Work Permit NO :</label>
									<input type="text" name="work_permit_no" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">Expired Date : </label>
									<input type="text" name="work_permit_expired_date" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">Issue Date : </label>
									<input type="text" name="work_permit_issue_date" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="">สถานภาพสมรส:</label>
									<input type="text" name="marital_status" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">ชื่อคู่สมรส : </label>
									<input type="text" name="spouse_first_name" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">นามสกุลคู่สมรส : </label>
									<input type="text" name="spouse_last_name" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">อาชีพคู่สมรส : </label>
									<input type="text" name="spouse_career" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="">สถานที่ทำงานคู่สมรส : </label>
									<input type="text" name="spouse_career_location" oninput="this.className = ''">
								</div>
								<div class="col-md-3">
									<label for="">จำนวนบุตร : </label>
									<input type="text" name="number_of_children" oninput="this.className = ''">
								</div>
							</div>
						</div>

						<div class="tab">
							<h4 class="mb-5">ประวัติส่วนส่วนตัว</h4>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">การเขียน : </label>
									<input type="text" name="writing" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">ระดับความสามารถ : </label>
									<input type="text" name="ability_level" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">ภาษาท้องถิ่น : </label>
									<input type="text" name="local_language" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="">ความรู้เกี่ยวกับคอมพิวเตอร์ : </label>
									<input type="text" name="computer_knowledge" oninput="this.className = ''">
								</div>
								<div class="col-md-6">
									<label for="">โปรแกรมที่ใช้งานได้ : </label>
									<input type="text" name="programs_be_used" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="">ความสามารถพิเศษอื่นๆ : </label>
									<input type="text" name="other_special_abilities" oninput="this.className = ''">
								</div>
								<div class="col-md-6">
									<label for="">งานอดิเรก : </label>
									<input type="text" name="hobbies" oninput="this.className = ''">
								</div>
							</div>
						</div>

						<div class="tab">
							<h4 class="mb-5">ผลสอบภาษาอังกฤษ</h4>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">TOEFL Paper : </label>
									<input type="text" name="toefl_paper" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">คะแนนเทียบ TOEFL : </label>
									<input type="text" name="toefl_compare_score" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">TOEFL CBT : </label>
									<input type="text" name="toefl_cbt" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">คะแนนเทียบ TOEFL : </label>
									<input type="text" name="toefl_cbt_compare_score" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">TOEFL IBT : </label>
									<input type="text" name="toefl_ibt" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">IELTS : </label>
									<input type="text" name="ielts" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">คะแนนเทียบ TOEFL : </label>
									<input type="text" name="ielts_compare_score" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">CU-TEP : </label>
									<input type="text" name="cu_tep" oninput="this.className = ''">
								</div>
							</div>
						</div>

						<div class="tab">
							<h4 class="mb-5">ประวัติการทำงาน</h4>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">อาชีพ : </label>
									<input type="text" name="career" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">ตำแหน่ง : </label>
									<input type="text" name="position" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">สังกัด : </label>
									<input type="text" name="affiliation" oninput="this.className = ''">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-4">
									<label for="">เริ่มต้นวันที่ : </label>
									<input type="text" name="career_start_date" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">สิ้นสุดวันที่ : </label>
									<input type="text" name="career_ended_date" oninput="this.className = ''">
								</div>
								<div class="col-md-4">
									<label for="">เงินเดือน : </label>
									<input type="text" name="salary" oninput="this.className = ''">
								</div>
							</div>
						</div>


						<div style="overflow:auto;">
							<div style="float:right;">
								<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
								<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
							</div>
						</div>

						<!-- Circles which indicates the steps of the form: -->
						<div style="text-align:center;margin-top:40px;">
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
						</div>

					</form>

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
$( function() {
	$( "#datepicker" ).datepicker();
} );
</script>
</body>

</html>
