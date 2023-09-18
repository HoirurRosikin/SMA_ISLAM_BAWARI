<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Blog;
use App\Models\kategori;
use App\Models\lampiran;
use Illuminate\Support\Facades\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('home_page.profile.profile');
    }

    public function indexp()
    {
        return view('home_page.profile.profile');
    }

    public function guru()
    {
        return view('home_page.guru.index');
    }
    //berita
    public function berita_umum()
    {
        //Ini Blog
        $data_id = kategori::where('nama_kategori', 'BERITA UMUM')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;
        return view('home_page.berita.berita_umum.index', compact('data', 'kategori'));
    }

    public function berita_sekolah()
    {
        $data_id = kategori::where('nama_kategori', 'BERITA SEKOLAH')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;
        return view('home_page.berita.berita_sekolah.index', compact('data', 'kategori'));
    }
    //download pdf
    public function download_pdf($id)
    {
        $file = lampiran::find($id);
        $path = public_path("/storage/{$file->path}");
        return \Response::download($path);
    }


    //home
    public function visi_misi()
    {
        $data_id = kategori::where('nama_kategori', 'BERITA SEKOLAH')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.home.visi_misi.index', compact('data', 'kategori'));
    }
    public function sejarah()
    {
        $data_id = kategori::where('nama_kategori', 'SEJARAH SINGKAT')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.home.sejarah.index', compact('data', 'kategori'));

    }
    public function sarjana()
    {
        $data_id = kategori::where('nama_kategori', 'SARANA PRASARAN')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.home.sarjana.index', compact('data', 'kategori'));
    }
    public function struktur()
    {
        $data_id = kategori::where('nama_kategori', 'STRUKTUR ORGANISASI')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.home.struktur.index', compact('data', 'kategori'));
    }
    public function sambutan()
    {
        $data_id = kategori::where('nama_kategori', 'SAMBUTAN KEPALA SEKOLAH')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.home.sambutan.index', compact('data', 'kategori'));
    }
    public function kemitraan()
    {
        $data_id = kategori::where('nama_kategori', 'KEMITRAAN')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.home.kemitraan.index', compact('data', 'kategori'));
    }
    public function program()
    {
        $data_id = kategori::where('nama_kategori', 'PROGRAM KERJA')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.home.program.index', compact('data', 'kategori'));
    }
    public function komite()
    {
        $data_id = kategori::where('nama_kategori', 'KOMITE SEKOLAH')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.home.komite.index', compact('data', 'kategori'));
    }
    public function prestasi()
    {
        $data_id = kategori::where('nama_kategori', 'PRESTASI')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.home.prestasi.index', compact('data', 'kategori'));
    }

    //guru
    public function direktori_guru()
    {
        $data_id = kategori::where('nama_kategori', 'DIREKTORI GURU')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.guru.direktori_guru.index', compact('data', 'kategori'));
    }
    public function prestasi_guru()
    {
        $data_id = kategori::where('nama_kategori', 'PRESTASI GURU')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.guru.prestasi_guru.index', compact('data', 'kategori'));
    }

    //siswa
    public function direktori_siswa()
    {
        $data_id = kategori::where('nama_kategori', 'DIREKTORI SISWA')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.siswa.direktori_siswa.index', compact('data', 'kategori'));
    }
    public function prestasi_siswa()
    {
        $data_id = kategori::where('nama_kategori', 'PRESTASI SISWA')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.siswa.prestasi_siswa.index', compact('data', 'kategori'));
    }
    public function ektrakurikuler()
    {
        $data_id = kategori::where('nama_kategori', 'EKSTAKURIKULER SISWA')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.siswa.ektrakurikuler.index', compact('data', 'kategori'));
    }
    public function osis()
    {
        $data_id = kategori::where('nama_kategori', 'OSIS SISWA')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.siswa.osis.index', compact('data', 'kategori'));
    }

    //informasi
    public function kalender()
    {
        $data_id = kategori::where('nama_kategori', 'KALENDER AKADEMIK')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.informasi.kalender.index', compact('data', 'kategori'));
    }
    public function beasiswa()
    {
        $data_id = kategori::where('nama_kategori', 'BEASISWA')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.informasi.beasiswa.index', compact('data', 'kategori'));
    }
    public function penerimaan()
    {
        $data_id = kategori::where('nama_kategori', 'PENERIMAAN SISWA BARU')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.informasi.penerimaan.index', compact('data', 'kategori'));
    }
    public function informasi_alumni()
    {
        $data_id = kategori::where('nama_kategori', 'ALUMNI')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.informasi.informasi_alumni.index', compact('data', 'kategori'));
    }

    //agenda
    public function agenda()
    {
        $data_id = kategori::where('nama_kategori', 'AGENDA')->get();
        $data = Blog::with('lampiran', 'image_blog', )->where('kategori_id', $data_id->last()->id)->get();
        $kategori =  $data_id->last()->nama_kategori;

        return view('home_page.agenda.index', compact('data', 'kategori'));
    }
    //kontak
    public function kontak_sekolah()
    {
        return view('home_page.kontak.index');
    }

    //download
    public function download()
    {
        return view('home_page.download.index');
    }


    public function detail($id)
    {
        $data = Blog::with('image_blog', 'kategori','user', 'lampiran')->find($id);
        $kategoris = kategori::find($data->kategori_id);
        return view('home_page.section.show', compact('data', 'kategoris'));
    }





}
