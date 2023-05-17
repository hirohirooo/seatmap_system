<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\User;
use Illuminate\Http\Request;

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
        $seat = Seat::all();
        return view('admin.new',compact('user','seat'));
    }
    public function set(){
        return view('admin.set');
    }
    public function create(Request $request){
        User::create([
            'name' => $request['name'],
        ]);
        return redirect()->route('admin.new');
    }
}