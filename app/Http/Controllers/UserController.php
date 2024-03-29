<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function list()
    {
        $pageConfigs = ['pageHeader' => false];

        $users = User::get();

        return view('user/list', [
            'pageConfigs' => $pageConfigs,
            'users'       => $users
        ]);
    }

    public function settings()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('user/settings', [
            'pageConfigs' => $pageConfigs,
        ]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        if(!$user) abort(403);

        if($user->id == Auth::user()->id) abort(403);
        if(Auth::user()->role !== 'admin') abort(403);

        $user->delete();
        return redirect('/user/list');
    }

    public function make_admin($id)
    {
        $user = User::find($id);
        if(!$user) abort(403);

        if($user->id == Auth::user()->id) abort(403);
        if(Auth::user()->role !== 'admin') abort(403);

        $user->role = $user->role == 'admin' ? 'user' : 'admin';
        $user->save();

        return redirect('/user/list');
    }
}
