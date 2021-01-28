<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Customer extends Model
{
	protected $table = 'customers';
	protected  $primaryKey = 'mskh';
    protected $fillable = ['name','mskh','email','phone','status'];
	public $timestamps = true;
    
}