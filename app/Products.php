<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Products extends Model {
	protected $table='products';
	protected $fillable = ['id', 'cate_id', 'name', 'name_eg', 'alias', 'photo', 'photo1','photo2','photo3','photo4','user_id', 'mota', 'link','content',  'updated_at', 'created_at', 'status', 'title', 'keyword', 'description', 'hot', 'tinhtrang', 'stt', 'noibat'];
	public $timestamps = true;
    public function pimg()
	{
		return $this->hasMany('App\Product_Image','product_id');
	}
}
