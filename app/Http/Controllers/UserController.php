<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('pages.users.index')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.users.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "username" => "required|min:5|max:255",
            "name" => "required|max:255",
            "roles" => "required",
            "password" => "required|min:6|required_with:password_confirmation|same:password_confirmation",
            "password_confirmation" => "required",
        ]);

        $new_user = $request->all();

        $new_user["password"] = Hash::make($request->password);

        User::create($new_user);

        return redirect()
            ->route('users.index')
            ->with('status', 'User baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('pages.users.edit')->with([
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "username" => "required|min:5|max:255",
            "name" => "required|max:255",
            "roles" => "required",
            "status" => "required",
            "password" => "nullable|min:6|required_with:password_confirmation|same:password_confirmation",
            "password_confirmation" => "nullable",
        ]);

        $user = User::findOrFail($id);

        $data = $request->all();

        if ($data["password"] != null) {
            $data["password"] = Hash::make($request->password);
        } else {
            $data["password"] = $user->password;
        }

        $user->update($data);

        return redirect()
            ->route('users.index')
            ->with('status', 'User berhasil diupdate');
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
        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('status', 'User berhasil di hapus');
    }
}
