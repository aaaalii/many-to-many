<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$user = User::find(1);

        $user = User::get();

        foreach ($user as $key) {
            foreach ($key->roles as $key1) {
                echo $key->name . ": " . $key1->name . "<br>";
            }
        }
        // return $user[1]->roles;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(1);

        $user->roles()->detach(1);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
