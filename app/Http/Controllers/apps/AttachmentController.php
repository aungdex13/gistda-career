<?php

	namespace App\Http\Controllers\apps;

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
			$path = Storage::putFile('file_upload/'.$a, $file);

						if($path){
							$filename=$file->getClientOriginalName();
							// dd($filename);
							$user_id = $a;
							$title_file_name = (isset($_POST['title_file_name'])) ? $_POST['title_file_name'] : '0';
							$filenamegenerate=str_replace("file_upload/".$a."/" ,"", $path);
							$file_type=strstr($filename, ".");
							$filename = $filename;
							$originalfilename = $filename;
							$path = $path;
							$status = $a;
							$date_entry = date('Y-m-d');
									$data = array(
										'user_id' => $user_id,
										'title_file_name' => $title_file_name,
										'filename' => $filenamegenerate,
										'file_type' => $file_type,
										'originalfilename' => $originalfilename,
									'path' => $path,
									'status' => $status,
									'date_entry' => $date_entry
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
		// 	if($request)
		// 		{
		// $file=	$request->file('file_name');
		// $filename=$file->getClientOriginalName();
		// Storage::put($filename, $contents);
		 				// ->store('file_upload');
		// 	if($request)
		// 		{
		// $file=	$request->file('file_name');
		// $filename=$file->getClientOriginalName();
		// 		dd($filename);
		// 			if($files=$request->file('images')){
		// 		$name=$files->getClientOriginalName();
		// 		$files->move('image',$name);
		// 		DB::table('img')->insert([
		// 		'image' => $name
				// ]);
			 //
			   }
public function attachmentindex(Request $req){
	return view('apps.attachment');
}

}
