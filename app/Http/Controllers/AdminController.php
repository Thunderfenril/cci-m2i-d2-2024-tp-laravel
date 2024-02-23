<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Controller\ControllerResolver as Controller;

class AdminController extends  Controller {

    function index()
    {
        return view("admin.index", [
            'app_name' => config('app.name'),
            'users' => User::paginate(15)
        ]);
    }

    function create()
    {
        return view("admin.create", [
            'app_name' => config('app.name'),
        ]);
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:10|max:128|regex:/[a-zA-Z0-9\s]+/',
            'email' => 'required|email|max:128',
            'password' => 'requireed|min:10|max:128'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        try {
            $user->save();
        } catch(\Exception $e) {
            report($e);
            return back()->withErrors('An error occurred while creating the user');
        }

        return back();
    }

    function show(int $id)
    {
        return view('admin.show', [
            'user' => User::find($id)
        ]);
    }

    function destroy(int $id)
    {
        User::destroy($id);
        return back()->with('message', trans('Utilisateur supprimé'));
    }

    function login(Request $request) {
        if($request->password === "ThePepina67") { //Un autre système de vérification est nécessaire
            return redirect("Admin.index");
        }
    }

}