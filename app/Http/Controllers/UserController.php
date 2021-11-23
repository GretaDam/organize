<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => 'required|email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $reference
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // return view('nom', [
        //     'user' => $user
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit($reference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy($reference)
    {
        //
    }
}
