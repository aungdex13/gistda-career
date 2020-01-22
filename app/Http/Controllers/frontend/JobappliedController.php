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
	class JobappliedController extends Controller
	{
		use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


public function jobapplied(Request $req){
	$listjobapplied = DB::table('tbl_select_job')
            ->join('tbl_position', 'tbl_select_job.position_id', '=', 'tbl_position.id')
            ->select('tbl_select_job.id',
						'tbl_select_job.position_id',
						'tbl_select_job.user_id',
						'tbl_select_job.status',
						'tbl_position.position_name',
						'tbl_position.job_descriptions',
						'tbl_position.saraly',
						'tbl_position.position_name'
							 )
						 ->where('tbl_select_job.status', '1')
            ->get();
	return view('frontend.jobapplied',compact(
		'listjobapplied'
 ));
}
public function jobapplieddelete(Request $req){
	$jobapplieddelete= DB::table('tbl_select_job')
            ->where('id', $req->id)
            ->update(['status' => 2]);
	if ($jobapplieddelete){
									$msg = " ลบข้อมูลสำเร็จ";
									$url_rediect = "<script>alert('".$msg."'); window.location='/jobapplied';</script> ";
								}else{
									$msg = " ลบข้อมูลไม่สำเร็จ";
									$url_rediect = "<script>alert('".$msg."');window.location='/jobapplied';</script> ";
									}
									echo $url_rediect;
							}
public function deletejobappliedajax(Request $req){
	$id = $_POST['id'];
	 // echo $id;
	 // exit;
	$result=array();
	$query=DB::table('tbl_position')
									->select('*')
									->where('id', $id )
									->get();
										 // echo $query;
										 // exit;
		foreach ($query as $row) {
				$link='<a class="btn btn-danger" href="jobapplieddelete/id/'.$row->id.'">ยืนยัน</option>';
		}
	 echo $link;
							}
}
