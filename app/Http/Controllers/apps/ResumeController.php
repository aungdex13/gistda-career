<?php

	namespace App\Http\Controllers\apps;

	use Illuminate\Foundation\Bus\DispatchesJobs;
	use Illuminate\Routing\Controller as BaseController;
	use Illuminate\Foundation\Validation\ValidatesRequests;
	use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Str;
	class ResumeController extends Controller
	{
		use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
		public function insertresume(Request $req)
	 	{
      $user_id = (isset($_POST['user_id '])) ? $_POST['user_id'] : '0';
      $year_of_applied = (isset($_POST['year_of_applied'])) ? $_POST['year_of_applied'] : '0';
      $date_of_applied = (isset($_POST['date_of_applied'])) ? $_POST['date_of_applied'] : '0';
      $number_of_applied = (isset($_POST['number_of_applied'])) ? $_POST['number_of_applied'] : '0';
      $position_of_applied = (isset($_POST['position_of_applied'])) ? $_POST['position_of_applied'] : '0';
      $applied_announcement = (isset($_POST['applied_announcement'])) ? $_POST['applied_announcement'] : '0';
      $title_name = (isset($_POST['title_name'])) ? $_POST['title_name'] : '0';
      $first_name_th = (isset($_POST['first_name_th'])) ? $_POST['first_name_th'] : '0';
      $last_name_th = (isset($_POST['last_name_th'])) ? $_POST['last_name_th'] : '0';
      $first_name_en = (isset($_POST['first_name_en'])) ? $_POST['first_name_en'] : '0';
      $last_name_en = (isset($_POST['last_name_en'])) ? $_POST['last_name_en'] : '0';
      $gendar = (isset($_POST['gendar'])) ? $_POST['gendar'] : '0';
      $date_birth = (isset($_POST['date_birth'])) ? $_POST['date_birth'] : '0';
      $province_birth = (isset($_POST['province_birth'])) ? $_POST['province_birth'] : '0';
      $district_birth = (isset($_POST['district_birth'])) ? $_POST['district_birth'] : '0';
      $subdistrict_birth = (isset($_POST['subdistrict_birth'])) ? $_POST['subdistrict_birth'] : '0';
      $nationality = (isset($_POST['nationality'])) ? $_POST['nationality'] : '0';
      $religion = (isset($_POST['religion'])) ? $_POST['religion'] : '0';
      $military_service = (isset($_POST['military_service'])) ? $_POST['military_service'] : '0';
      $blood_type = (isset($_POST['blood_type'])) ? $_POST['blood_type'] : '0';
      $congenital_disease = (isset($_POST['congenital_disease'])) ? $_POST['congenital_disease'] : '0';
      $congenital_disease_text = (isset($_POST['congenital_disease_text'])) ? $_POST['congenital_disease_text'] : '0';
      $id_card_number = (isset($_POST['id_card_number'])) ? $_POST['id_card_number'] : '0';
      $id_card_expiration_date = (isset($_POST['id_card_expiration_date'])) ? $_POST['id_card_expiration_date'] : '0';
      $id_card_issue_date = (isset($_POST['id_card_issue_date'])) ? $_POST['id_card_issue_date'] : '0';
      $province_id_card_issue = (isset($_POST['province_id_card_issue'])) ? $_POST['province_id_card_issue'] : '0';
      $location_id_card_issue = (isset($_POST['location_id_card_issue'])) ? $_POST['location_id_card_issue'] : '0';
      $passport_no = (isset($_POST['passport_no'])) ? $_POST['passport_no'] : '0';
      $passport_expired_date = (isset($_POST['passport_expired_date'])) ? $_POST['passport_expired_date'] : '0';
      $passport_issued_date = (isset($_POST['passport_issued_date'])) ? $_POST['passport_issued_date'] : '0';
      $visa_no = (isset($_POST['visa_no'])) ? $_POST['visa_no'] : '0';
      $type_of_visa = (isset($_POST['type_of_visa'])) ? $_POST['type_of_visa'] : '0';
      $visa_issue_date = (isset($_POST['visa_issued_date'])) ? $_POST['visa_issued_date'] : '0';
      $visa_expired_date = (isset($_POST['visa_expired_date'])) ? $_POST['visa_expired_date'] : '0';
      $work_permit_no = (isset($_POST['work_permit_no'])) ? $_POST['work_permit_no'] : '0';
      $work_permit_expired_date = (isset($_POST['work_permit_expired_date'])) ? $_POST['work_permit_expired_date'] : '0';
      $work_permit_issue_date = (isset($_POST['work_permit_issue_date'])) ? $_POST['work_permit_issue_date'] : '0';
      $marital_status = (isset($_POST['marital_status'])) ? $_POST['marital_status'] : '0';
      $spouse_first_name = (isset($_POST['spouse_first_name'])) ? $_POST['spouse_first_name'] : '0';
      $spouse_last_name = (isset($_POST['spouse_last_name'])) ? $_POST['spouse_last_name'] : '0';
      $spouse_career = (isset($_POST['spouse_career'])) ? $_POST['spouse_career'] : '0';
      $spouse_career_location = (isset($_POST['spouse_career_location'])) ? $_POST['spouse_career_location'] : '0';
      $number_of_children = (isset($_POST['number_of_children'])) ? $_POST['number_of_children'] : '0';
      $writing = (isset($_POST['writing'])) ? $_POST['writing'] : '0';
      $ability_level = (isset($_POST['ability_level'])) ? $_POST['ability_level'] : '0';
      $local_language = (isset($_POST['local_language'])) ? $_POST['local_language'] : '0';
      $computer_knowledge = (isset($_POST['computer_knowledge'])) ? $_POST['computer_knowledge'] : '0';
      $programs_be_used = (isset($_POST['programs_be_used'])) ? $_POST['programs_be_used'] : '0';
      $other_special_abilities = (isset($_POST['other_special_abilities'])) ? $_POST['other_special_abilities'] : '0';
      $hobbies = (isset($_POST['hobbies'])) ? $_POST['hobbies'] : '0';
      $toefl_paper = (isset($_POST['toefl_paper'])) ? $_POST['toefl_paper'] : '0';
      $toefl_cbt = (isset($_POST['toefl_cbt'])) ? $_POST['toefl_cbt'] : '0';
      $toefl_cbt_compare_score = (isset($_POST['toefl_cbt_compare_score'])) ? $_POST['toefl_cbt_compare_score'] : '0';
      $toefl_ibt = (isset($_POST['toefl_ibt'])) ? $_POST['toefl_ibt'] : '0';
      $ielts = (isset($_POST['ielts'])) ? $_POST['ielts'] : '0';
      $ielts_compare_score = (isset($_POST['ielts_compare_score'])) ? $_POST['ielts_compare_score'] : '0';
      $cu_tep = (isset($_POST['cu_tep'])) ? $_POST['cu_tep'] : '0';
      $career = (isset($_POST['career'])) ? $_POST['career'] : '0';
      $position = (isset($_POST['position'])) ? $_POST['position'] : '0';
      $affiliation = (isset($_POST['affiliation'])) ? $_POST['affiliation'] : '0';
      $career_start_date = (isset($_POST['career_start_date'])) ? $_POST['career_start_date'] : '0';
      $career_ended_date = (isset($_POST['career_ended_date'])) ? $_POST['career_ended_date'] : '0';
      $salary = (isset($_POST['salary'])) ? $_POST['salary'] : '0';
      $date_entry = date('Y-m-d');
		$data = array(
      'user_id' => $user_id,
      'year_of_applied' => $year_of_applied,
    'date_of_applied' => $date_of_applied,
    'number_of_applied' => $number_of_applied,
    'position_of_applied' => $position_of_applied,
    'applied_announcement' => $applied_announcement,
    'title_name' => $title_name,
    'first_name_th' => $first_name_th,
    'last_name_th' => $last_name_th,
    'first_name_en' => $first_name_en,
    'last_name_en' => $last_name_en,
    'gendar' => $gendar,
    'date_birth' => $date_birth,
    'province_birth' => $province_birth,
    'district_birth' => $district_birth,
    'subdistrict_birth' => $subdistrict_birth,
    'nationality' => $nationality,
    'religion' => $religion,
    'military_service' => $military_service,
    'blood_type' => $blood_type,
    'congenital_disease' => $congenital_disease,
    'congenital_disease_text' => $congenital_disease_text,
    'id_card_number' => $id_card_number,
    'id_card_expiration_date' => $id_card_expiration_date,
    'id_card_issue_date' => $id_card_issue_date,
    'province_id_card_issue' => $province_id_card_issue,
    'location_id_card_issue' => $location_id_card_issue,
    'passport_no' => $passport_no,
    'passport_expired_date' => $passport_expired_date,
    'passport_issued_date' => $passport_issued_date,
    'visa_no' => $visa_no,
    'type_of_visa' => $type_of_visa,
    'visa_issue_date' => $visa_issue_date,
    'visa_expired_date' => $visa_expired_date,
    'work_permit_no' => $work_permit_no,
    'work_permit_expired_date' => $work_permit_expired_date,
    'work_permit_issue_date' => $work_permit_issue_date,
    'marital_status' => $marital_status,
    'spouse_first_name' => $spouse_first_name,
    'spouse_last_name' => $spouse_last_name,
    'spouse_career' => $spouse_career,
    'spouse_career_location' => $spouse_career_location,
    'number_of_children' => $number_of_children,
    'writing' => $writing,
    'ability_level' => $ability_level,
    'local_language' => $local_language,
    'computer_knowledge' => $computer_knowledge,
    'programs_be_used' => $programs_be_used,
    'other_special_abilities' => $other_special_abilities,
    'hobbies' => $hobbies,
    'toefl_paper' => $toefl_paper,
    'toefl_cbt' => $toefl_cbt,
    'toefl_cbt_compare_score' => $toefl_cbt_compare_score,
    'toefl_ibt' => $toefl_ibt,
    'ielts' => $ielts,
    'ielts_compare_score' => $ielts_compare_score,
    'cu_tep' => $cu_tep,
    'career' => $career,
    'position' => $position,
    'affiliation' => $affiliation,
    'career_start_date' => $career_start_date,
    'career_ended_date' => $career_ended_date,
    'salary' => $salary,
    'date_entry' => $date_entry

		);
	 // dd($data);
	$res1	= DB::table('tbl_resume')->insert($data);
	 // dd($res1);
	if ($res1){
		$msg = " ส่งข้อมูลสำเร็จ";
		$url_rediect = "<script>alert('".$msg."'); window.location='jobapplied';</script> ";
	}else{
		$msg = " ส่งข้อมูลไม่สำเร็จ";
		$url_rediect = "<script>alert('".$msg."');</script> ";
		}
		echo $url_rediect;

}

public function resumeindex(Request $req){
	$list=$this->prov();
	return view('apps.resume',compact(
	 'list'
 ));
}

public function prov(){
	$list=DB::table('tbl_provinces')
	->orderBy('province_name', 'ASC')
	->get();
	 // return view('AEFI.Apps.form1')->with('list',$list);
	 return $list;
}
public function fetch(Request $request){
$id=$request->get('select');
$result=array();
$query=DB::table('tbl_provinces')
->join('tbl_district','tbl_provinces.province_id','=','tbl_district.province_id')
->select('tbl_district.district_name','tbl_district.district_id','tbl_district.district_code')
->where('tbl_provinces.province_id',$id)
->get();
$output='<option value="%">   อำเภอ   </option>';
	foreach ($query as $row) {
		$output.='<option value="'.$row->district_code.'">'.$row->district_name.'</option>';
	}
	echo $output;
}
public function fetchD(Request $request){
$idD = $request->select;
// dd($idD);
$resultD=array();
$queryD=DB::table('tbl_subdistricts')
->select('tbl_subdistricts.subdistrict_name','tbl_subdistricts.subdistrict_id','tbl_subdistricts.subdistrict_code')
->where(DB::raw('left(tbl_subdistricts.subdistrict_code, 4)'),'=',$idD)
->get();

$outputD='<option value="%">   ตำบล   </option>';
foreach ($queryD as $rowD) {
	$outputD.='<option value="'.$rowD->subdistrict_code.'">'.$rowD->subdistrict_name.'</option>';
}
echo $outputD;

}

}
