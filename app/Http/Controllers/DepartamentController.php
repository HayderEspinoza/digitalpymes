<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pymes\Configuracion\Departament;
use App\Http\Requests\DepartamentRequest;

class DepartamentController extends Controller
{
    private $departament;

	public function __construct(Departament $departament)
	{
		$this->middleware('auth');
        $this->departament = $departament;
	}

    public function index()
    {
        $departaments = $this->departament->get();
    	return view('admin.departaments.index', compact('departaments'));
    }

    public function create()
    {
    	return view('admin.departaments.create');
    }

    public function edit(Request $request, $id)
    {
        $departament = $this->departament->findOrFail($id);
        return view('admin.departaments.edit', compact('departament'));
    }

    public function store(DepartamentRequest $request)
    {
    	$departament = new $this->departament;
        $departament->fill($request->all());
        $departament->save();
        return redirect()->route('departaments.index')->with('status', $this->creado);
    }

    public function update(DepartamentRequest $request, $id)
    {
        $departament = $this->departament->findOrFail($id);
        $departament->fill($request->all());
        $departament->save();
        return redirect()->route('departaments.index')->with('status', $this->actualizado);
    }

    public function destroy($id)
    {
        $departament = $this->departament->findOrFail($id);
        $departament->delete();
        return redirect()->route('departaments.index')->with('status', $this->eliminado);
    }
}
