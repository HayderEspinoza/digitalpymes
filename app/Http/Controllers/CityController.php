<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pymes\Configuracion\City;
use App\Http\Requests\CityRequest;
use Pymes\Configuracion\Departament;

class CityController extends Controller
{
    private $city;
	private $departament;

	public function __construct(City $city, Departament $departament)
	{
		$this->middleware('auth');
        $this->city = $city;
		$this->departament = $departament;
	}

    public function index()
    {
        $cities = $this->city->with('departament')->get();
    	return view('admin.cities.index', compact('cities'));
    }

    public function create()
    {
    	$departaments = $this->departament->pluck('name', 'id');
    	return view('admin.cities.create', compact('departaments'));
    }

    public function edit(Request $request, $id)
    {
        $city = $this->city->findOrFail($id);
        $departaments = $this->departament->pluck('name', 'id');
        return view('admin.cities.edit', compact('city', 'departaments'));
    }

    public function store(CityRequest $request)
    {
    	$city = new $this->city;
        $city->fill($request->all());
        $city->save();
        return redirect()->route('cities.index')->with('status', $this->creado);
    }

    public function update(CityRequest $request, $id)
    {
        $city = $this->city->findOrFail($id);
        $city->fill($request->all());
        $city->save();
        return redirect()->route('cities.index')->with('status', $this->actualizado);
    }

    public function destroy($id)
    {
        $city = $this->city->findOrFail($id);
        $city->delete();
        return redirect()->route('cities.index')->with('status', $this->eliminado);
    }
}
