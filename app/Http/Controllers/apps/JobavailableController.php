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
	class JobavailableController extends Controller
	{
		use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
		public function insertjobavailable(Request $req)
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
    'date_entry' => $date_entry

		);
	 // dd($data);
	$res1	= DB::table('tbl_job_applied')->insert($data);
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
public function jobavailableindex(Request $req){
	$list=$this->prov();
	$jobavailabledata = DB::select('select * FROM tbl_position WHERE status = "1"' );
	$listfile= DB::table('tbl_position')
									->select('*')
									->whereIn('status',[1,2] )
									->get();
	return view('apps.index',compact(
		'jobavailabledata',
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

public function test() {
	echo "<b>testxxxx</b>";
}

}
