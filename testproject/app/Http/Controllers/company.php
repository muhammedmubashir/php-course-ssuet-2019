<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class company extends Controller
{
    function services()
    {
    	$data["services"][] = "Web Development";
		$data["services"][] = "Graphic Designing";
		$data["services"][] = "SEO";
		return view("services",$data);
    }

    function aboutus()
    {
    	return view("aboutus");
    }

}
