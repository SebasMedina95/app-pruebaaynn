<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{

    public function index()
    {
    	$cities = City::where('id', '<>', 1)->orderBy('city_name')->paginate(10);
    	return view('cities.index')->with(compact('cities')); // listado

    }

    public function create()
    {
    	return view('cities.create'); // formulario de registro
    }

    public function store(Request $request)
    {

        $city = new City();
        $city->city_name = $request->input('city_name');

        $city->save(); // UPDATE

        return redirect('/cities');
    }

    public function edit(City $city)
    {
        return view('cities.edit')->with(compact('city')); // form de edición
    }

    public function update(Request $request, $id)
    {

        $city = City::find($id); //Re insert pero entiende por find
        $city->city_name = $request->input('city_name');

        $city->save();
        return redirect('/cities');

    }

    public function destroy(Request $request, $id)
    {
        $city = City::find($request->input('city_id_delete'));
        $city->delete();
        return back();
    }

}
