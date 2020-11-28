<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')
            ->with('users', $users)
            ->with('title', 'All Organizations');
    }

    public function registeredit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit', compact('users'));
    }

    public function validatedData(){
        return request()->validate([
            'name' => 'required',
            'usertype' => 'required'
        ]);

    }

    public function update($id)
    {
        $users = User::find($id);
        $users->name = request()->input('username');
        $users->usertype = request()->input('usertype');
        $users->update();
        return redirect('/role-register')->with('status', 'Data is Updated');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/role-register')->with('status', 'Data is Deleted');

    }
}
