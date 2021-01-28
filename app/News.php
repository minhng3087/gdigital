<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class News extends Model {
	protected $table='news';
	protected $fillable = ['id','cate_id','name','name_eg','alias','photo','mota','content','mota_eg','content_eg','status','title','description','title_eg','description_eg','com','types','link'];
	public $timestamps = true;
}
