<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\RoleHasPermission;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //====================== Permission ===================================
        public function adminList(){
            $user = User::where('role',1)->get();
            return view('admin/list',compact('user'));
        }

        public function adminAdd(){
            $roles = Role::all();
            return view('admin/addEdit',compact('roles'));
        }

        public function adminEdit($id){
            $user = User::find($id);
            $roles = Role::all();

            return view('admin/addEdit',compact('user','roles'));
        }

        public function adminSave(Request $request){
            // dd($request->all());
            if (!empty($request->id)) {
                $user = User::find($request->id);
                $user->name = $request->name;
                $user->email = $request->email;
                if($request->password){
                    $user->password = Hash::make($request->password);              
                }
                $user->status = $request->status;
                $user->save();

                $user->roles()->detach();
                if($request->roles){
                    $user->assignRole($request->roles);
                }
                toast('Record has been updated!', 'success');
            
            } else {    
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->role = 1;
                $user->status = $request->status;
                $user->save();

                if($request->roles){
                    $user->assignRole($request->roles);
                }

                toast('New Admin is added!', 'success');
            }
            return redirect()->route('adminList');
        }

        public function adminDelete(Request $request){
            $user = User::find($request->id);
            $user->delete();
        }
    //====================== / Permission ===================================

}
