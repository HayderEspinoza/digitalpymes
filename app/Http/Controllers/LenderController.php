<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pymes\Configuracion\City;
use Pymes\Configuracion\Lender;
use Pymes\Configuracion\Service;
use Pymes\Configuracion\Category;
use App\Http\Requests\LenderRequest;

class LenderController extends Controller
{
	private $lender;
	private $city;
	private $service;
	private $category;

	public function __construct(Lender $lender, City $city, Service $service, Category $category)
	{
		$this->middleware('auth');
        $this->lender = $lender;
		$this->city = $city;
		$this->service = $service;
		$this->category = $category;
	}

    public function index()
    {
        $lenders = $this->lender->get();
    	return view('admin.lenders.index', compact('lenders'));
    }

    public function create()
    {
    	$cities = $this->city->pluck('name', 'id');
    	$services = $this->service->pluck('name', 'id');
    	$categories = $this->category->pluck('name', 'id');
    	return view('admin.lenders.create', compact('cities', 'services', 'categories'));
    }

    public function edit(Request $request, $id)
    {
        $lender = $this->lender->findOrFail($id);
        $cities = $this->city->pluck('name', 'id');
    	$services = $this->service->pluck('name', 'id');
    	$categories = $this->category->pluck('name', 'id');
        return view('admin.lenders.edit', compact('lender', 'cities', 'services', 'categories'));
    }

    public function store(LenderRequest $request)
    {
    	$lender = new $this->lender;
        $lender->fill($request->all());
        $lender->save();
        return redirect()->route('lenders.index')->with('status', $this->creado);
    }

    public function update(LenderRequest $request, $id)
    {
        $lender = $this->lender->findOrFail($id);
        $lender->fill($request->all());
        $lender->save();
        return redirect()->route('lenders.index')->with('status', $this->actualizado);
    }

    public function destroy($id)
    {
        $lender = $this->lender->findOrFail($id);
        $lender->delete();
        return redirect()->route('lenders.index')->with('status', $this->eliminado);
    }
}
