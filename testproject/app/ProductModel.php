<?php
//Eloquent model -> ORM -> Object relation model

// relationship -> between model
// form processing + validation
// Google hangout 
// gmail
// muhammedmubashir305@gmail.com


namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    //
    protected $table 		= "products";
    protected $primaryKey 	= "product_id";

    // everyproduct belongsto Category

    function category()
    {
    	return $this->belongsTo("App\CategoryModel","category_id");
    }


}
