<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::all();
        //return view('users', $users);
        return response()->json([
            'status' => true,
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request) {
        $user = new User;
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->type = $request->input('type');
        $user->save();

        return redirect('/api/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        return response()->json([
            'status' => true,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUserRequest $request, User $user) {
        $user->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "User Updated successfully!",
            'post' => $user
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {
        $user->delete();

        return response()->json([
            'status' => true,
            'message' => "User Deleted successfully!",
        ], 200);
    }

    public function actionVerifyUser(Request $request) {
        $data = ['id' => $request->input('id'), 'password' => $request->input('password')];
        $user = DB::table('users')->where('id', $data['id'])->first();

        if (empty($user)) {
            return response()->json([
                'message' => "User not found"
            ], 404);
        } else {
            if (Hash::check($data['password'], $user->password)) {
                return response()->json([
                    'massage' => "User verified",
                    'match' => true,
                    'userType' => $user->type,
                    'userName' => $user->name
                ], 200);
            } else {
                return response()->json([
                    'message' => "Passwords dont match",
                    'match' => false
                ], 200);
            }
        }
    }
}