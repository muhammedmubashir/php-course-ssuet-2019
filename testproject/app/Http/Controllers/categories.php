<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use App\ProductModel;


class categories extends Controller
{
    // function list()
    // {
    // 	$data['categories'] = CategoryModel::all();	
    // 	return view("ecomm/categories",$data);
    // }

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

    function index()
    {
        $data['categories'] = CategoryModel::all(); 
        return view("category/list",$data);
    }


    function create()
    {
        $data['categories'] = CategoryModel::all(); 
        return view("category/create",$data);
    }

    function store(Request $request)
    {
        $postedData = $request->all();   
        // print_r($postedData);die;
        // CSRF
        // XSS attack
        // sql injection 
        $request->validate([
            'name'=>"required|max:255|unique:categories"
            ]);

        $category_obj = new CategoryModel;
        $category_obj->name = $postedData['name'];
        $category_obj->parent_id = $postedData['categoryParent'];
        $category_obj->save();
        return redirect()->route("category.index")->with("status","Record Saved Successfully");
    }

    function edit($category_id)
    {
        // record fetch w.r.t category_id
        // load view with category data
    }

    function update($category_id, Request $request)
    {
        
    }
}
