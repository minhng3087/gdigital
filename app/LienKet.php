<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class LienKet extends Model {
	protected $table='lienket';
	protected $fillable = ['id','name','link','photo','mota','mota_eg','mota_uae','mota_tai','content','status','noibat','com'];
	public $timestamps = true;
}
