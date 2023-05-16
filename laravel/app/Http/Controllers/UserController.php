<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = Seat::all();
        return view('user.index',compact('users'));
    }
    public function edit(Request $request){
        $user = Seat::find($request['seat_id']);
        return view('user.edit',compact('user'));
    }
    public function store(Request $request){
        $seat = Seat::find($request['seat_id']);
        if($seat){
            $seat->user_id = $request['id'];
            $seat->content = $request['content'];
            $seat->time = $request['time'];
            $seat->save();
            return redirect()->route('user.index');
        }
        else{
            return redirect()->back()->with('error', '指定されたユーザー');

        }

    }
    public function ad_index(){
        $users = Seat::all();
        return view('admin.index',compact('users'));
    }
    public function ad_edit(Request $request){
        $user = Seat::find($request['seat_id']);
        $seat = User::find($user->user_id);
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
}
