<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::paginate();
        return view("users.index", ['users' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'type' => $request->type,
            'phone' => $request->phone
        ];
        User::create($user);
        return redirect()->route('users.index')->with('success', 'user added successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::findOrFail($id);
        $data=$request->validate([
            'name'=>['required','string','max:100','min:3'],
            'email'=>['required','email',Rule::unique('users')->ignore($user->id)],
            'password'=>['nullable','string','min:6','max:30'],
            'confirm_password'=>['nullable','string','min:6','max:30','same:password'],
            'type'=>['required','in:admin,writer,user'],
            'phone'=>['required']
        ]);
        $data['password']=$request->has('password') ? bcrypt($request->password):$user->password;
        unset($data['confirm_password']);
        User::where('id',$id)->update($data);
        return redirect()->route('users.index')->with('success', 'User Updated Successfuly');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'user deleted successfully');
    }
}
