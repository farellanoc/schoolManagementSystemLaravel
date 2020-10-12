<?php

namespace App\Http\Controllers;

use App\User;
use App\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('user.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        $request->session()->flash('user.id', $user->id);

        return redirect()->route('user.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\user $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\user $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\user $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update([]);

        $request->session()->flash('user.id', $user->id);

        return redirect()->route('user.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\user $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }
}
