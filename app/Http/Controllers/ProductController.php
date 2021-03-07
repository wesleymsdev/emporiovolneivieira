<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = DB::table('products')->paginate(12);
        $categories = DB::table('categories')->get();
        $suppliers = DB::table('suppliers')->get();

        return view('admin/catalog', [
            'products'   => $products,
            'categories' => $categories,
            'suppliers'  => $suppliers
        ]);
    }

    public function feactured()
    {
        $feactured = DB::table('products')->paginate(4);
        $wines     = DB::table('products')->where('category_id', '=', 1)->get();
        $juices    = DB::table('products')->where('category_id', '=', 2)->get();
        $sparkling = DB::table('products')->where('category_id', '=', 3)->get();

        return view('index', [
            'feactured' => $feactured,
            'wines'     => $wines,
            'juices'    => $juices,
            'sparkling' => $sparkling
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'category_id'       => 'required | min:1 | max:255',
            'title'             => 'required | min:3 | max:255',
            'winery_id'         => 'required | min:1 | max:255',
            'qtda_per_carton'   => 'required | min:1 | max:255',
            'country_of_origin' => 'required | min:3 | max:255',
            'region'            => 'required | min:3 | max:255',
            'classification'    => 'required | min:3 | max:255',
            'description'       => 'required | min:3 | max:255',
            'type_of_grape'     => 'required | min:3 | max:255',
            'harvest'           => 'required | min:3 | max:255',
            'temperature'       => 'required | min:2 | max:255',
            'olfactory'         => 'required | min:3 | max:255',
            'visual'            => 'required | min:3 | max:255',
            'taste'             => 'required | min:3 | max:255',
            'harmonization'     => 'required | min:3 | max:255',

        ]);

        Product::create([
            'category_id'       => $request->input('category_id'),
            'title'             => $request->input('title'),
            'winery_id'         => $request->input('winery_id'),
            'qtda_per_carton'   => $request->input('qtda_per_carton'),
            'country_of_origin' => $request->input('country_of_origin'),
            'region'            => $request->input('region'),
            'classification'    => $request->input('classification'),
            'description'       => $request->input('description'),
            'type_of_grape'     => $request->input('type_of_grape'),
            'harvest'           => $request->input('harvest'),
            'temperature'       => $request->input('temperature'),
            'olfactory'         => $request->input('olfactory'),
            'visual'            => $request->input('visual'),
            'taste'             => $request->input('taste'),
            'harmonization'     => $request->input('harmonization'),
            'image'             => $request->image->store('images/products')
        ]);

        return redirect('/admin/catalog')->with('response', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = DB::table('products')->find($id);
        return view('product', ['details' => $details]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
