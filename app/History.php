<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class History extends Model
{
	protected $table = 'history';
    protected $fillable = ['id','customer_id','name','position','period','amount','day_action'];
	public $timestamps = true;
    
}