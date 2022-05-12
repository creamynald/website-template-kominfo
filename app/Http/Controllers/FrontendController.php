<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Banner;
use App\Models\Kategori;
use App\Models\Materi;
use App\Models\Playlist;
use App\Models\Sambutan;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){

        $kategori = Kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();
        $bannerS = Banner::where('id', '1')->first();
        $sambutan = Sambutan::all();
        $materi = Materi::all()->where('playlist_id', '1')->sortDesc();
        $galeriKegiatan = Materi::all()->where('playlist_id', '2')->sortDesc();
        $playlistPertama = Playlist::all()->where('judul_playlist');


        return view('front.home',[
            'kategori' => $kategori,
            'artikel' => $artikel,
            'slide' => $slide,
            'bannerS' => $bannerS,
            'title' => 'Website Template Laravel Kabupaten Bengkalis',
            'post' => Artikel::latest()->paginate(5)->withQueryString(),
            'sambutan' => $sambutan,
            'materi' => $materi,
            'galeriKegiatan' => $galeriKegiatan,
            'playlistPertama' => $playlistPertama
        ]);
    }

    public function detail($slug){

        $kategori = Kategori::all();
        $slide = Slide::all();
        $artikel = Artikel::where('slug', $slug)->first();
        $artikel->increment('views');
        $bannerS = Banner::where('id', '1')->first();
        $users = User::all();
        $sambutan = Sambutan::all();

        $postinganTerbaru = Artikel::orderBy('created_at', 'DESC')->limit(5)->get();
        
        return view('front.artikel.detail-artikel', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'slide' => $slide,
            'bannerS' => $bannerS,
            'postinganTerbaru' => $postinganTerbaru,
            'title' => 'Website Template Laravel Kabupaten Bengkalis',
            'users' => $users,
            'sambutan' => $sambutan,
        ]);

    }


}
