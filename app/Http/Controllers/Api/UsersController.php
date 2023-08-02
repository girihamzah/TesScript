<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return response()->json([
            'data' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'npp' => $request->npp,
            'npp_supervisor' => $request->npp_supervisor
        ]);
        return response()->json([
            'data' => $user
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Epresences  $User
     * @return \Illuminate\Http\Response
     */
    public function show(UserModel $UserModel)
    {
        return response()->json([
            'data' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function edit(UserModel $UserModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserModel $UserModel)
    {
        $user ->name = $request->name;
        $user ->email = $request->emaiil;
        $user ->password = $request->password;
        $user ->npp = $request->npp;
        $user ->npp_supervisor = $request->npp_supervisor;
        $user ->save();

        return response()->json([
            'data' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserModel  $UserModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $UserModel)
    {
        $user ->delete();
        return response()->json([
            'message' => 'user deleted'
        ], 204);
    }
}
