<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Img;
use File;

class ImgController extends Controller
{
	public function gallery()
	{
		$data = Img::select()->orderBy('id','DESC')->get()->toArray();
		return view('backend.img.list',compact('data'));
	}

	public function postGallery(Request $request){
		if ($request->hasFile('detailImg')) {
			foreach ($request->file('detailImg') as $file) {
				$data = new Img();
				if (isset($file)) {
					$data->image = changeTitle($file->getClientOriginalName());

					$img = 'uploads/images/gallery/'.changeTitle($file->getClientOriginalName());
					if (!File::exists($img)) {
						$file->move('uploads/images/gallery/', changeTitle($file->getClientOriginalName()));
					}
					
					$data->save();
				}
			}

			return redirect()->route('backend.img.gallery')->with([
				'flash_level' 	=> 'success',
				'flash_message' => 'Upload thành công !'
			]);
		}else{
			return redirect()->route('backend.img.gallery');
		}
	}

	public function getDelImg(Request $request, $id){
		if ($request->ajax()) {		
			$idImg = (int)$request->idImg;
			$data = Img::find($idImg);

			if (!empty($data)) {
				$img = 'uploads/images/gallery/'.$data->image;
				if (File::exists($img)) {
					File::delete($img);
				}
				$data->delete();
			}

			return 'OK';
		}
	}
}