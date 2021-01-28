<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Product_Image extends Model
{
	protected $table = 'product_image'; 

	protected $fillable = ['image', 'product_id'];
	
    public $timestamps = false;

	public function product()
	{
		return $this->belongsTo('App\Products');
	}

	public function imgdetail($request, $id)
	{
        $flag = false;

		if ($request->hasFile('detailImg')) {
			foreach ($request->file('detailImg') as $file) {
				$img = new Product_Image();
				if (isset($file)) {
					$img->image = $file->getClientOriginalName();
					$img->product_id = $id;

					$data = 'uploads/images/img_detail/'.$file->getClientOriginalName();
					if (!File::exists($data)) {
						$file->move('uploads/images/img_detail/', $file->getClientOriginalName());
					}
					
					if($img->save()){
		                $flag = true;
		            }
				}
			}
		}
        return $flag;
	}
}