<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountriesController extends Controller
{

    public function index()
    {
        $countries = DB::table('countries')->paginate(8);


        return view('admin/countries', ['countries' => $countries]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'   => 'required|min:2|max:25',
            'uf' => 'required|min:2|max:25',
            'flag'   => 'image|mimes:jpeg,png,webp,jpg,gif,svg|max:2048',
        ]);



        Countries::create([

            'name'   => $request->input('name'),
            'uf' => $request->input('uf'),
            'flag'   => $request->flag->store('images/flags'),

        ]);

        return redirect('/admin/countries')->with('response', 'País cadastrado com sucesso!');
    }
}
