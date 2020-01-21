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
	class testController extends Controller
	{
		use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function test(Request $req){
	$listfile= DB::table('tbl_file_upload')
									->select('*')
									->where('user_id', '1' )
									->where('status', '1')
									->get();
	return view('apps.test',compact(
	 'listfile'
 ));
}

public function testajax(Request $req){
	$id = $_POST['id'];
	echo $id;
							}
}
