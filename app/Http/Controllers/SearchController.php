<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
class SearchController extends Controller
{
	public function index(){

   $data = Product::orderBy('id','asc')->paginate(5);
   reteun view ('home' , compact('data'));  
	}
    
}
