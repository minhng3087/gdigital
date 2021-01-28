<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Images;

use App\Products;

use Request,Input;

class UploadController extends Controller

{

    //

    public function postImages(Request $request)

    {

        if ($request->ajax()) {

            if ($request->hasFile('file')) {

                $imageFiles = $request->file('file');

                // set destination path

                $folderDir = 'upload/hinhanh';

                $destinationPath = base_path() . '/' . $folderDir;

                // this form uploads multiple files

                foreach ($request->file('file') as $fileKey => $fileObject ) {

                    // make sure each file is valid

                    if ($fileObject->isValid()) {

                        // make destination file name

                        $destinationFileName = time() . $fileObject->getClientOriginalName();

                        // move the file from tmp to the destination path

                        $fileObject->move($destinationPath, $destinationFileName);

                        // save the the destination filename

                        $prodcuctImage = new Images;

                        $ProdcuctImage->image_path = $folderDir . $destinationFileName;

                        $prodcuctImage->name = $originalNameWithoutExt;

                        $prodcuctImage->alt = $originalNameWithoutExt;

                        $prodcuctImage->save();

                    }

                }

            }

        }

    }

    public function upfle(){

        $file = Input::file('upl');

        $destinationPath = '/upload/product/';

        $ext      = $file->guessClientExtension();  // Get real extension according to mime type

        $fullname = $file->getClientOriginalName(); // Client file name, including the extension of the client

        $hashname = date('H.i.s').'-'.md5($fullname).'.'.$ext; // Hash processed file name, including the real extension

        $upload_success = Input::file('upl')->move($destinationPath, $hashname);

    }

}