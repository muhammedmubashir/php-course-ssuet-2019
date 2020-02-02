<?php
//Eloquent model -> ORM -> Object relation model

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //
    protected $table 		= "categories";
    protected $primaryKey 	= "category_id";
    public $timestamps      = false;

    // onecategoryhasmanyproducts

    function products()
    {
    	return $this->hasMany("App\ProductModel","category_id");
    	// hasOne
    	// hasManyToMany
    }

}
