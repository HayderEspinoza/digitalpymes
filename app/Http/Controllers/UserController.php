<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pymes\Configuracion\Role;
use Pymes\Configuracion\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    private $user;
	private $role;

	public function __construct(User $user, Role $role)
	{
		$this->middleware('auth');
        $this->user = $user;
		$this->role = $role;
	}

    public function index()
    {
        $users = $this->user->with('role')->get();
    	return view('admin.users.index', compact('users'));
    }

    public function create()
    {
    	$roles = $this->role->pluck('name', 'id');
    	return view('admin.users.create', compact('roles'));
    }

    public function edit(Request $request, $id)
    {
    	$roles = $this->role->pluck('name', 'id');
        $user = $this->user->findOrFail($id);
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function store(UserRequest $request)
    {
    	$user = new $this->user;
        $user->fill($request->all());
        $user->save();
        return redirect()->route('users.index')->with('status', $this->creado);
    }

    public function update(UserRequest $request, $id)
    {
        $user = $this->user->findOrFail($id);
        $user->fill($request->all());
        $user->save();
        return redirect()->route('users.index')->with('status', $this->actualizado);
    }

    public function destroy($id)
    {
        $user = $this->user->findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('status', $this->eliminado);
    }

    public function password($id)
    {
        $user = $this->user->findOrFail($id);
        return view('admin.users.password', compact('user'));
    }

    public function changePassword(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        $user = $this->user->findOrFail($id);
        $user->password =  $request->input('password');
        $user->save();
        return redirect()->route('users.index')->with('status', $this->actualizado);
    }

}
