<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;  

class ProductController extends Controller
{
    /**
     * Display a listing of the resourse.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dump("aqui");

        $sql = "select * from products";
        $productAll = Product::all();
        #dd($productAll);

        $pro = Product::where('name','P1')->where('stock',10)->get();

        #dump($pro->id);
        #dump($pro->name);
        #dump($pro->price);
        
        return view('product.index');
    }
}
