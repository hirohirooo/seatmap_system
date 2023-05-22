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
        $user = User::find($request['id']);
        $seat = Seat::find($request['seat_id']);
        $seat_user = Seat::where('user_id', $request['id'])->first();
        if($seat_user){
            return redirect()->back()->with('error', '指定されたユーザーは既に登録されています。');
        }
        else if($user){
            $seat->user_id = $request['id'];
            $seat->content = $request['content'];
            $seat->time = $request['time'];
            $seat->save();
            return redirect()->route('user.index');
        }
        else{
            return redirect()->back()->with('error', '指定されたユーザーは存在しません');
        }
    }
}
