<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $user = auth()-> user();
        return Inertia::render('Users/Users', ['user' => $user,'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

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
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user_id)
    {

        $user = auth()-> user();

        $userDetails = User::find($user_id);

        return Inertia::render('Users/EditForm', ['user' => $user,'user_details' => $userDetails]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $request-> validate([
            'name'      => ['required'],
            'email'     => ['required']
        ]);

        $user = User::find($request-> id);

        $user->update([
            'name'      => $request-> name,
            'email'     => $request-> email
        ]);

        return to_route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
