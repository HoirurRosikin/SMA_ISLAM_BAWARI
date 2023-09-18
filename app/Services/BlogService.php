<?php

namespace App\Services;

use DB;
use File;
use Storage;
use App\Models\Blog;
use App\Models\User;
use App\Models\lampiran;
use App\Models\image_blog;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;




class BlogService
{
    public static function BlogList(Request $request)
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
            $data = Blog::with('image_blog','kategori', 'lampiran')->paginate(5);
        }

      
        Paginator::useBootstrap();
        return $data;
    }
    public static function BlogStore($params)
    {
        DB::beginTransaction();
        try {
            $inputUser['judul'] = $params['judul'];
            if(isset($params['image_thumbnail'])){
                $inputUser['image_thumbnail'] = $params['image_thumbnail'];
            } 
            $inputUser['kategori_id'] = $params['kategori'];
            $inputUser['user_id'] = $params['user_id'];
            if(isset($params['isi'])){
                $inputUser['isi'] = $params['isi'];
            } 
            if(isset($params['keterangan'])){
                $inputLampiran['keterangan'] = $params['keterangan'];
            }
            if (isset($params['id'])) 
            {
                // kalau ad req id maka proses edit
                $relasi =  Blog::with('image_blog', 'lampiran')->find($params['id']);
                $blog =  Blog::find($params['id']);
                // prosedur edit blog
                // 1. jika ada req image dan data di relasi image_blog tidak null 
                if(isset($params['image']) AND $relasi->image_blog != NULL)
                {
                    // 1.1 hapus semua data lama  dari relasi image_blog dan lampiran
                    foreach($relasi->image_blog as $img)
                        {
                            File::delete ('public/storage/'. $img);
                        } 
                        image_blog::where("blog_id",$params['id'])->delete();
                }
                if(isset($params['path']) AND $relasi->lampiran != NULL)
                {
                    foreach($relasi->lampiran as $patch)
                        {
                            File::delete ('public/storage/'. $patch);
                        } 
                        lampiran::where("blog_id",$params['id'])->delete();
                }
                // 2.create ulang image dan lampiran
                if(isset($params['image']) )
                {
                    foreach($params['image'] as $img)
                    {
                        $name = Storage::disk('public')->put('images_blog', $img);
                        $str_img['image'] = $name;
                        $images = $relasi->image_blog()->create($str_img);
                    }
                }
                if(isset($params['path']))
                {
                    foreach($params['path'] as $path)
                    {
                        $name = Storage::disk('public')->put('lampiran', $path);
                        $inputLampiran['path'] = $name;
                        $lampiran = $relasi->lampiran()->create($inputLampiran);
                    }
                }                
                // 3.update data blog
                $data = $blog->update($inputUser);
                // 4.celecay ;P
            }else{
                // prose create
                // 1.create data blog yang sudah di req
                $data = Blog::create($inputUser);
                // 2.create data image  simpan di stroe
                    foreach($params['image'] as $img)
                    {
                        $name = Storage::disk('public')->put('images_blog', $img);
                        $str_img['image'] = $name;
                        $images = $data->image_blog()->create($str_img);
                    }
                // 3.kalo ada req lampitran simpan di di stroe dan cretae di database
                    if(isset($params['path']))
                    {
                        foreach($params['path'] as $path)
                        {
                            $name = Storage::disk('public')->put('lampiran', $path);
                            $inputLampiran['path'] = $name;
                            $lampiran = $data->lampiran()->create($inputLampiran);
                        }
                    }
                // 4.finish
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
        $data = Blog::with('image_blog', 'lampiran')->find($id);
        $data->delete();
        if($data){
            return "Deleted";
        }else{
            return "Failed";
        }
    }
}