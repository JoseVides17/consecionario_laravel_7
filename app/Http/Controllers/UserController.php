<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUserRequest;
use App\Role;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = User::with(['rol']);

        $nombre = $this->getInput($request, 'nombre');
        $email = $this->getInput($request, 'email');

        if ($nombre != null){
            $query->where('name', 'like', '%' . $nombre . '%');
        }

        if ($email != null){
            $query->where('email', 'like', '%' . $email . '%');
        }

        $users = $query->orderBy('name')->paginate(10)->withQueryString();

        return view('user.index', compact('users', 'nombre', 'email'));
    }

    public function create()
    {
        $roles = Role::all();
        $new = true;
        return view('user.create', compact('new', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveUserRequest $request)
    {
        $data = $request->validated();
        $user = new User();
        $user->fill($data);
        $user->password = bcrypt($data['password']);
        $user->rol_id = $data['rol_id'];
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('rol')->findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::with('rol')->findOrFail($id);
        $roles = Role::all();
        $new = false;

        return view('user.editar', compact('user', 'roles', 'new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveUserRequest $request, $id)
    {
        $data = $request->validated();
        $user = User::findOrFail($id);
        $user->update($data);
        $user->rol_id = $data['rol_id'];
        $user->save();
        session()->flash('success', 'Usuario actualizado correctamente.');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user != null){
            $user->delete();
            return redirect()->route('users.index');
        }
        else
            Auth::logout();
    }


    protected function getInput(Request $request, $key, $default = null)
    {
        return $request->input($key, $default);
    }
}
