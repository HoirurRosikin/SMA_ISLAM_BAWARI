<?php

namespace App\Services;

use DB;
use App\Models\User;
use App\Models\saran;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;



class SaranService
{
    public static function SaranList(Request $request)
    {
        $data = saran::paginate(5);
        Paginator::useBootstrap();
        return $data;
    }
    public static function SaranStore($params)
    {
        // dd($params);
        DB::beginTransaction();
        try {
            $inputUser['nama'] = $params['name'];
            $inputUser['kontak'] = $params['kontak'];
            $inputUser['pesan'] = $params['pesan'];
            $data = saran::create($inputUser);
            DB::commit();
            return $data;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
        }
    }
    public static function delete($id)
    {
        $data = saran::find($id);
        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
}