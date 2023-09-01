<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\RoleHasPermission;
use Exception;

class RoleController extends Controller
{
    //====================== Permission ===================================
        public function permissionList(){
            $permission = Permission::all();
            return view('permission/list',compact('permission'));
        }

        public function permissionAdd(){
            return view('permission/addEdit');
        }

        public function permissionEdit($id){
            $permission = Permission::find($id);
            return view('permission/addEdit',compact('permission'));
        }

        public function permissionSave(Request $request){
            // dd($request->all());
            if (!empty($request->id)) {
                $permission = Permission::find($request->id);
                $permission->name = $request->permission_name;               
                $permission->save();
                toast('Record has been updated!', 'success');
            
            } else {    
                $permission = Permission::create(['name' => $request->permission_name ]);
                toast('New permission is added!', 'success');
            }
            return redirect()->route('permissionList');
        }

        public function permissionDelete(Request $request){
            $package = Permission::find($request->id);
            $package->delete();
        }
    //====================== / Permission ===================================



    //====================== Role ===================================
        public function roleList(){
            $role = Role::all();
            return view('role/list',compact('role'));
        }

        public function roleAdd(){
            return view('role/addEdit');
        }

        public function roleEdit($id){
            $role = Role::find($id);
            return view('role/addEdit',compact('role'));
        }

        public function roleSave(Request $request){
            // dd($request->all());
            if (!empty($request->id)) {
                $permission = Role::find($request->id);
                $permission->name = $request->role_name;               
                $permission->save();
                toast('Record has been updated!', 'success');
            
            } else {    
                $role = Role::create(['name' => $request->role_name ]);
                toast('New role is added!', 'success');
            }
            return redirect()->route('roleList');
        }

        public function roleDelete(Request $request){
            $role = Role::find($request->id);
            $role->delete();
        }
    //====================== / Role ===================================


    //====================== Role ===================================
    public function rolePermissionList(){
        $dataArray = array();
        $roleHasPermission = RoleHasPermission::get();

        foreach ($roleHasPermission as $key => $val) {
            $role = Role::where('id', $val->role_id)->first();
            $permission = Permission::where('id', $val->permission_id)->first();

            if ($role && $permission) {
                $roleId = $role->id;
                $roleName = $role->name;
                $permissionName = $permission->name;
                $permissionId = $permission->id;

                // Check if the role is already in the array
                if (isset($dataArray[$roleName])) {
                    // If the role exists, add the permission to its array
                    $dataArray[$roleName]['permissions'][] = $permissionName;
                    // $dataArray[$roleName]['permissionsId'][] = $permissionId;
                } else {
                    // If the role doesn't exist, create a new entry
                    $dataArray[$roleName] = [
                        'role_id' => $roleId,
                        'roleName' => $roleName,
                        'permissions' => [$permissionName],
                        // 'permissions_id' => [$permissionId],
                    ];
                }
            }
        }

        $dataArray = array_values($dataArray);
        return view('role_in_permission/list',compact('dataArray'));
    }

    public function rolePermissionAdd(){
        $roles = Role::all();
        $perimissions = Permission::all();
        return view('role_in_permission/addEdit',compact('roles','perimissions'));
    }

    public function rolePermissionEdit($id){
        $roles = Role::all();
        $perimissions = Permission::all();
        $roleHasPermission = RoleHasPermission::where('role_id',$id)->get();

        $dataArray = array();
        // $roleHasPermission = RoleHasPermission::get();

        foreach ($roleHasPermission as $key => $val) {
            $role = Role::where('id', $val->role_id)->first();
            $permission = Permission::where('id', $val->permission_id)->first();

            if ($role && $permission) {
                $roleId = $role->id;
                $roleName = $role->name;
                $permissionName = $permission->name;
                $permissionId = $permission->id;

                // Check if the role is already in the array
                if (isset($dataArray[$roleName])) {
                    // If the role exists, add the permission to its array
                    $dataArray[$roleName]['permissions'][] = $permissionName;
                    // $dataArray[$roleName]['permissionsId'][] = $permissionId;
                } else {
                    // If the role doesn't exist, create a new entry
                    $dataArray[$roleName] = [
                        'role_id' => $roleId,
                        'roleName' => $roleName,
                        'permissions' => [$permissionName],
                        // 'permissions_id' => [$permissionId],
                    ];
                }
            }
        }

        $dataArray = array_values($dataArray);

        // dd($dataArray);
        return view('role_in_permission/addEdit',compact('roles','perimissions','dataArray'));
    }

    public function rolePermissionSave(Request $request){
        // dd($request->all());
        try{
            if (!empty($request->id)) {
                $role = RoleHasPermission::where('role_id',$request->id);
                $role->delete();
                $data = array();
                $perimissions = $request->permission;
                foreach($perimissions as $key=>$val){
                    $data['role_id']= $request->role;
                    $data['permission_id'] = $val;
                    $save = RoleHasPermission::create($data);
                    
                }
                toast('Record has been updated!', 'success');
            
            } else {    
                $data = array();
                $perimissions = $request->permission;
                foreach($perimissions as $key=>$val){
                    $data['role_id']= $request->role;
                    $data['permission_id'] = $val;
                    $save = RoleHasPermission::create($data);
                    
                }
                // $role = Role::create(['name' => $request->role_name ]);
                toast('Permissions are added in role!', 'success');
            }
            return redirect()->route('rolePermissionList');
        }
        catch(Exception $e){
            Alert::error('Error','Please check, you have already added permissions for the same role.');
            return back();
        }
       
    }

    public function rolePermissionDelete(Request $request){
        $role = RoleHasPermission::where('role_id',$request->id);
        $role->delete();
    }
//====================== / Role ===================================


}
