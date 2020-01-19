<?php
//Eloquent model -> ORM -> Object relation model

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //
    protected $table 		= "categories";
    protected $primaryKey 	= "category_id";
}
