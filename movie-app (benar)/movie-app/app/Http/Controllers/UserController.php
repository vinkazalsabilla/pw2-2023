<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
    public function index() {
        $users = User::all();
        return view("users.index", compact("users"));
    }

    public function create() {
        return view("users.create");
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            "nama" => "required",
            "username" => "required",
            "password" => "required",
            "email" => "required",
            "role" => "required",
        ]);

        User::create($validatedData);

        return redirect("/users")->with("success", "User added successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user) {
        return view("users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user) {
        $validatedData = $request->validate([
            "nama" => "required",
            "username" => "required",
            "password" => "required",
            "email" => "required",
            "role" => "required",
        ]);

        $user->update($validatedData);

        return redirect("/users")->with("success", "User updated successfully!");
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect("/users")->with("success", "User delete successfully!");
    }
}
