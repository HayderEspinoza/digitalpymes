<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pymes\Configuracion\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    private $category;

	public function __construct(Category $category)
	{
		$this->middleware('auth');
        $this->category = $category;
	}

    public function index()
    {
        $categories = $this->category->get();
    	return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function edit(Request $request, $id)
    {
        $category = $this->category->findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function store(CategoryRequest $request)
    {
    	$category = new $this->category;
        $category->fill($request->all());
        $category->save();
        return redirect()->route('categories.index')->with('status', $this->creado);
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = $this->category->findOrFail($id);
        $category->fill($request->all());
        $category->save();
        return redirect()->route('categories.index')->with('status', $this->actualizado);
    }

    public function destroy($id)
    {
        $category = $this->category->findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('status', $this->eliminado);
    }
}
