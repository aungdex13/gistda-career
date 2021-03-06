<?php

	namespace App\Http\Controllers\frontend;

	use Illuminate\Foundation\Bus\DispatchesJobs;
	use Illuminate\Routing\Controller as BaseController;
	use Illuminate\Foundation\Validation\ValidatesRequests;
	use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
	use Illuminate\Support\Facades\Storage;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Str;
	class AttachmentController extends Controller
	{
		use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
		public function uploadFilePost(Request $request){
			$a=1;

			$file=	$request->file('file_name');
			$path = Storage::putFile('file_upload', $file);

						if($path){
							$filename=$file->getClientOriginalName();
							// dd($filename);
							$user_id = $a;
							$title_file_name = (isset($_POST['title_file_name'])) ? $_POST['title_file_name'] : '0';
							$filenamegenerate=str_replace("file_upload/" ,"", $path);
							$file_type=strstr($filename, ".");
							$filename = $filename;
							$originalfilename = $filename;
							$path = $path;
							$status = $a;
							$date_entry = date('Y-m-d');
							$date_update = date('Y-m-d');
									$data = array(
										'user_id' => $user_id,
										'title_file_name' => $title_file_name,
										'filename' => $filenamegenerate,
										'file_type' => $file_type,
										'originalfilename' => $originalfilename,
									'path' => $path,
									'status' => $status,
									'date_entry' => $date_entry,
									'date_update' => $date_update
								);
							  // dd($data);
							$res1	= DB::table('tbl_file_upload')->insert($data);
							 // dd($res1);
							if ($res1){
								$msg = " ส่งข้อมูลสำเร็จ";
								$url_rediect = "<script>alert('".$msg."'); window.location='attachment';</script> ";
							}else{
								$msg = " ส่งข้อมูลไม่สำเร็จ";
								$url_rediect = "<script>alert('".$msg."');</script> ";
								}
								echo $url_rediect;

						}

			   }

public function attachmentindex(Request $req){
	$listfile= DB::table('tbl_file_upload')
									->select('*')
									->where('user_id', '1' )
									->where('status', '1')
									->get();
	return view('frontend.attachment',compact(
	 'listfile'
 ));
}
public function deletefile(Request $req){
	$filename = $req->filename;
	$status = $req->status;
	$date_update = date('Y-m-d');
	// dd($date_update);
	$updateDetails_1 = [
		'status' => '2',
		'date_update' => $date_update
];
	$deletefile= DB::table('tbl_file_upload')
            ->where('filename', $req->filename)
            ->update($updateDetails_1);
	if ($deletefile){
									$msg = " ลบข้อมูลสำเร็จ";
									$url_rediect = "<script>alert('".$msg."'); window.location='/attachment';</script> ";
								}else{
									$msg = " ลบข้อมูลไม่สำเร็จ";
									$url_rediect = "<script>alert('".$msg."');window.location='/attachment';</script> ";
									}
									echo $url_rediect;
							}

							public function attachmentajax(Request $req){
								$filename = $_POST['filename'];
								// echo $filename;
								$result=array();
								$query=DB::table('tbl_file_upload')
																->select('*')
																->where('filename', $filename )
																->get();
									foreach ($query as $row) {
											$link='<a class="btn btn-danger" href="deletefile/filename/'.$row->filename.'/status/'.$row->status.'">ยืนยัน</a>';
									}
								 echo $link;
														}


}
