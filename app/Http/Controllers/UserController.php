<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ['title' => 'Home'];
        return view("users.index", $data );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            if(!$request->name) throw new Exception('Name required.', 422);

            $payload = [
                'name' => $request->name,
                'email' => $request->email,
                'password' =>Hash::make($request->password)
            ];


            $query = User::create($payload);

            return response()->json([
                'error' => false,
                'message' => 'Data user has been created.',
                'data' => $query
            ]);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }


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
