<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $users = Seat::all();
        return view('admin.index',compact('users'));
    }
    public function edit(Request $request){
        $user = Seat::find($request['seat_id']);
        $seat = User::find($user->user_id);
//        $seat = User::find($user->id);
        return view('admin.edit',compact('user','seat'));
    }
    public function delete(Request $request)
    {
        $user = Seat::find($request['seat_id']);
        $user->updated_at = null;
        $user->user->name = "未登録";
        $user->time = 0;
        $user->content = "未登録";
        $user->save();
        return redirect()->route('admin.index');
    }
    public function newstudent(){
        $user = User::all();
        return view('admin.new',compact('user'));
    }
    public function set(){
        return view('admin.set');
    }
    public function create(Request $request){
        User::create([
            'name' => $request['name'],
        ]);
        return redirect()->route('admin.new')->with('success', '正常に登録されました。');
    }
    public function user_edit(Request $request)
    {
        $user = User::find($request['user_id']);
        return view('admin.user_edit',compact('user'));
    }
    public function user_delete(Request $request){
        $user = User::find($request['user_id']);
        $user->delete();
        return redirect()->route('admin.new')->with('success', '正常に削除されました。');
    }
    public function ad_create(){
        return view('admin.create');
    }

    public function ad_create_post(Request $request){
        Auth::create([
            'email' => $request['email'],
            'password' =>Hash::make($request['password']),
        ]);
        return redirect()->route('admin.create')->with('success', '正常に登録されました。');
    }

}
