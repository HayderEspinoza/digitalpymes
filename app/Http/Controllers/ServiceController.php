<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pymes\Configuracion\Service;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    private $service;

	public function __construct(Service $service)
	{
		$this->middleware('auth');
        $this->service = $service;
	}

    public function index()
    {
        $services = $this->service->get();
    	return view('admin.services.index', compact('services'));
    }

    public function create()
    {
    	return view('admin.services.create');
    }

    public function edit(Request $request, $id)
    {
        $service = $this->service->findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function store(ServiceRequest $request)
    {
    	$service = new $this->service;
        $service->fill($request->all());
        $service->save();
        return redirect()->route('services.index')->with('status', $this->creado);
    }

    public function update(ServiceRequest $request, $id)
    {
        $service = $this->service->findOrFail($id);
        $service->fill($request->all());
        $service->save();
        return redirect()->route('services.index')->with('status', $this->actualizado);
    }

    public function destroy($id)
    {
        $service = $this->service->findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('status', $this->eliminado);
    }
}
