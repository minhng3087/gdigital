<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryMenu extends Model
{
   	protected $table = 'category_menu';
    protected $fillable = ['title', 'url', 'parent_id', 'type', 'position', 'class', 'icon'];
    public function get_child_cate()
    {
    	return $this->where('parent_id', $this->id)->orderBy('position')->get();
    }
}