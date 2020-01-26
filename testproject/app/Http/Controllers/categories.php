<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use App\ProductModel;


class categories extends Controller
{
    function list()
    {
    	$data['categories'] = CategoryModel::all();	
    	return view("ecomm/categories",$data);
    }

    function products($category_id="")
    {
    	// simple way
    	// $data['category'] = CategoryModel::where("category_id",$category_id)->first();
    	// relationship
    	// one to one
    	// one to many
    	// many to many

    	$data['products'] = ProductModel::where
    							("category_id",$category_id)
    							->get();
    	$data['category'] = ProductModel::where("category_id",$category_id)
    						->first()
    						->category;
    	
    	return view("product/list",$data);

    }
}
