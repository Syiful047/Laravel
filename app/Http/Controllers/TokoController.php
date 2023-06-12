<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function about()
    {
        return view('toko/about');
    }

    public function admin()
    {
        $products = Product::all();
        return view('toko/admin', compact('products'));
    }

    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
       ]);

       Product::create($request->all());
       return redirect()->route('produk.admin')->with('success','Product created successfully');
    }

    public function customers()
    {
        $customer = Customer::all();
        return view('toko/customers', compact('customer'));
    }

    public function create_cus()
    {
        return view('toko/create_cus');
    }

    public function storee(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'address'=> 'required',
            'no_hp'=>'required'
        ]);

        Customer::create($request->all());
        return redirect()->route('cus.customers')->with('success','Customer created successfully');
    }
    
}
