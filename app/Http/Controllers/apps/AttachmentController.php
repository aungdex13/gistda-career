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
	class AttachmentController extends Controller
	{
		use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
		public function uploadFilePost(Request $request){
        $request->validate([
            'fileToUpload' => 'required|file|max:1024',
        ]);

        $fileName = "fileName".time().'.'.request()->fileToUpload->getClientOriginalExtension();

        $request->fileToUpload->storeAs('logos',$fileName);

        return back()
            ->with('success','You have successfully upload image.');

    }
public function attachmentindex(Request $req){
	return view('apps.attachment');
}

}
