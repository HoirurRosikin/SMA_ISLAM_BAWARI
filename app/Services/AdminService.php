<?php

namespace App\Services;

use DB;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class AdminService
{
    public static function AdminList(Request $request)
    {
        if($request->has('keywords')){
            // $data = Admin::leftJoin('users', 'users.id', 'admins.user_id')->select('users.*', 'admins.*')
            // ->where(function ($row) use ($request){
            //         $row->where(function ($query) use ($request) {
            //             $query->where('users.name', 'like', '%' . $request->keywords . '%')
            //                 ->orWhere('users.nip', 'like', '%' . $request->keywords . '%');
            //         });
            // })->paginate(5);
// SELECT `users`.*, `admins*` FROM `admins` LEFT JOIN `users` ON `users`.`id` = `admins`.`user_id`
// WHERE ((`users`.`name` LIKE % $request % OR `users`.`nip` LIKE % $request %) )
        }else{
            $data = User::paginate(5);
        }

      
        Paginator::useBootstrap();
        return $data;
    }
    public static function AdminStore($params)
    {
        // dd($params);s
        DB::beginTransaction();
        try {
            $inputUser['name'] = $params['name'];
            $inputUser['email'] = $params['email'];
            $inputUser['password'] = Hash::make($params['password']);
            if (isset($params['id'])) {
                $admin =  User::find($params['id']);
                // dd($admin); 
                $data = $admin->update($inputUser);
            }else{
                // dd('Please');
                $data = User::create($inputUser);
            }
            DB::commit();
            return $data;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }
    public static function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
}