<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        $products = Product::all();
        $data = DB::table('products')->orderBy('id','asc')->paginate(5);


        return view('home',compact('products','data'));
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $sort_by = $request->get('sortby');
      $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $data = DB::table('products')
                    ->where('id', 'like', '%'.$query.'%')
                    ->orWhere('name', 'like', '%'.$query.'%')
                    ->orWhere('detail', 'like', '%'.$query.'%')
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(5);
      return view('layouts.paginate', compact('data'))->render();
     }
    }
    /*public function search(Request $request)
    {
        if($request->ajax())
        {
            $output= "";

            $products = DB::table('products')
            ->where('title','LIKE','%'.$request->search."%")
            ->get();

            if($products)
            {
                foreach ($products as $key => $product)
                {
                    $output.='<tr>'.
                    '<td>'.$product->id.'</td>'.
                    '<td>'.$product->title.'</td>'.
                    '<td>'.$product->description.'</td>'.
                    '<td>'.$product->price.'</td>'.
                    '</tr>';

                }
                return Response($output);
            }
        }
    }*/
public function customer()
{
  return view('customer');
}
public function  admin()
{
  return view('admin');
}
public function  agent()
{
  return view('agent');
}
    

    
}
