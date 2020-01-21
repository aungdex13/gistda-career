<?php

	namespace App\Http\Controllers\frontend;

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
      $user_id = $_GET['user_id'];
			// dd($user_id);
      $position_id = $_GET['position_id'];
      $status = $_GET['status'];
      $date_entry = date('Y-m-d');
			$date_update = date('Y-m-d');
		$data = array(
      'user_id' => $user_id,
      'position_id' => $position_id,
    	'status' => $status,
    	'date_entry' => $date_entry,
    	'date_update' => $date_update

		);
			// dd($data);
	$res1	= DB::table('tbl_select_job')->insert($data);
	 // dd($res1);
	if ($res1){
		$msg = " ส่งข้อมูลสำเร็จ";
		$url_rediect = "<script>alert('".$msg."'); window.location='/#job-available-section';</script> ";
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
									->whereIn('status',[1] )
									->get();
	return view('frontend.index',compact(
		'jobavailabledata',
		'listfile',
	 'list'
 ));
}

public function prov(){
	$list=DB::table('tbl_provinces')
	->orderBy('province_name', 'ASC')
	->get();
	 // return view('AEFI.frontend.form1')->with('list',$list);
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
public function jobavailableajax(Request $req){
	$id = $_POST['id'];
	// echo $filename;
	$result=array();
	$query=DB::table('tbl_position')
									->select('*')
									->where('id', $id )
									->get();
		foreach ($query as $row) {
				$link='<p class="lead">Job Descriptions :</p>
								<p class="text-muted mb-4">'
									.$row->job_descriptions.
								'</p>
								<p class="lead">Education :</p>
								<p class="text-muted mb-4">'
										.$row->education.
								'</p>
								<p class="lead">Experiences :</p>
								<p class="text-muted mb-4">'
										.$row->experiences.
								'</p>
								<p class="lead">Attributes :</p>
								<p class="text-muted mb-4">'
										.$row->attributes.
								'</p>
								<p class="lead">Gender :</p>
								<p class="text-muted mb-4">'
										.$row->gender.
								'</p>
								<p class="lead">Age :</p>
								<p class="text-muted mb-4">'
										.$row->age.
								'</p>
								<p class="lead">Saraly :</p>
								<p class="text-muted mb-4">'
										.$row->saraly.
								'</p>
								<p class="lead">Job Post Date :</p>
								<p class="text-muted mb-4">'
										.$row->job_post_date.
								'</p>
								<div class="modal-footer">
								<a class="btn btn-danger" href="insertjobavailable?user_id='.$row->id.'&position_id='.$row->id.'&status='.$row->status.'">ยืนยัน</a>
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								</div>';
		}
	 echo $link;
							}

}
