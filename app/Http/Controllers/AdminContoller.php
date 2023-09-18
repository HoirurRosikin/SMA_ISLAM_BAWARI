<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;

class AdminContoller extends Controller
{
    public function index(Request $request)
    {
        $data = AdminService::adminList($request);
        return view('admin.admin.index', compact('data'));
    }

    public function save_admin(Request $request)
    {
        // dd($request);
        if(!isset($request['id'])){
            $validated = $request->validate([
                'name' => 'required|min:3|max:255',
                'email' => 'required|email:dns|unique:users',
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6'
            ]);
            $params = $validated;
        }else{
            // dd("edit");
            $validated = $request->validate([
                'id'=>'required',
                'name' => 'min:3|max:255',
                'email' => 'email:dns',
                'password' => 'same:password_confirmation',
                'password_confirmation' => ''
            ]);
            $params = $validated;
            // dd($params);
        }        
        $data = AdminService::AdminStore($params);
        if(!isset($request['id'])){
            return redirect('admin')->with('success', 'Berhasil menambahkan data');
        }else{
            return redirect('admin')->with('successEdit', 'Berhasil mengedit data');
        }
    }

    public function delete_admin($id)
    {
        $data = AdminService::delete($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }
}
