<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Setting extends Model {
	protected $table='setting';
	protected $fillable = ['id','name','name_eg','photo','address_eg','address','phone','hotline','email','photo','mota','content','website','status','favico','codechat','analytics','description'];
	public $timestamps = true;
}
