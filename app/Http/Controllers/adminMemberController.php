<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class adminMemberController extends Controller
{
    public function memberList()
    {
        $users = DB::table('users')->get();
        return view('admin/pages/memberList')->with('members', $users);
    }

    public function verifiedMemberList()
    {
        $users = DB::table('users')->where('status', '0')->get();
        return view('admin/pages/verifiedMemberList')->with('members', $users);
    }


    public function bannedMemberList()
    {
        $users = DB::table('users')->where('status', '9')->get();
        return view('admin/pages/bannedMemberList')->with('members', $users);
    }


    public function singleMemberUpdate($id)
    {
        $id = DB::table('users')->where('id', $id)->get()->first();
        return view('admin/pages/singleMemberUpdate')->with('id', $id);
    }

    public function admin_update_singleMember(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|max:25',
            'phone_no' => 'required|numeric',
            'address' => 'required|max:60',
            'status' => 'required|numeric',
        ]);


        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_no = $request->phone_no;
        $user->address = $request->address;
        $user->status = $request->status;


        $user->save();

        session()->flash('success', 'Updated successfully');

        $users = DB::table('users')->get();
        return view('admin/pages/memberList')->with('members', $users);
    }


    public function member_list_delete_single($id)
    {
        $user = User::find($id);

        $user->delete();

        session()->flash('success', 'The user has been deleted successfully');

        return back();
    }

    //
}
