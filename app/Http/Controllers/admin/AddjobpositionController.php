<?php

	namespace App\Http\Controllers\admin;

	use Illuminate\Foundation\Bus\DispatchesJobs;
	use Illuminate\Routing\Controller as BaseController;
	use Illuminate\Foundation\Validation\ValidatesRequests;
	use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Str;
	class AddjobpositionController extends Controller
	{
		use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
		public function insertposition(Request $req)
	 	{
      $position_name = (isset($_POST['position_name'])) ? $_POST['position_name'] : '0';
      $location = (isset($_POST['location'])) ? $_POST['location'] : '0';
      $job_descriptions = (isset($_POST['job_descriptions'])) ? $_POST['job_descriptions'] : '0';
      $job_type = (isset($_POST['job_type'])) ? $_POST['job_type'] : '0';
      $education = (isset($_POST['education'])) ? $_POST['education'] : '0';
      $experiences = (isset($_POST['experiences'])) ? $_POST['experiences'] : '0';
      $attributes = (isset($_POST['attributes'])) ? $_POST['attributes'] : '0';
      $gender = (isset($_POST['gender'])) ? $_POST['gender'] : '0';
      $age = (isset($_POST['age'])) ? $_POST['age'] : '0';
      $saraly = (isset($_POST['saraly'])) ? $_POST['saraly'] : '0';
      $request = (isset($_POST['request'])) ? $_POST['request'] : '0';
      $job_post_date = (isset($_POST['job_post_date'])) ? $_POST['job_post_date'] : '0';
			$user_id = 123456;
			$status = 2 ;
      $date_entry = date('Y-m-d');
		$data = array(
    'position_name' => $position_name,
    'location' => $location,
    'job_descriptions' => $job_descriptions,
    'job_type' => $job_type,
    'education' => $education,
    'experiences' => $experiences,
    'attributes' => $attributes,
    'gender' => $gender,
    'age' => $age,
    'saraly' => $saraly,
    'request' => $request,
    'job_post_date' => $job_post_date,
		'user_id' => $user_id,
		'status' => $status,
    'date_entry' => $date_entry

		);
	 // dd($data);
	$res1	= DB::table('tbl_position')->insert($data);
	 // dd($res1);
	if ($res1){
		$msg = " ส่งข้อมูลสำเร็จ";
		$url_rediect = "<script>alert('".$msg."'); window.location='jobposition';</script> ";
	}else{
		$msg = " ส่งข้อมูลไม่สำเร็จ";
		$url_rediect = "<script>alert('".$msg."');</script> ";
		}
		echo $url_rediect;

}

public function addjobpositionindex(Request $req){
	$list=$this->prov();
	return view('admin.addjobposition',compact(
	 'list'
 ));
}
public function jobpositionindex(Request $req){
	$list=$this->prov();
	$listfile= DB::table('tbl_position')
									->select('*')
									->where('user_id', '1' )
									->get();
	return view('admin.jobposition',compact(
		'listfile',
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
