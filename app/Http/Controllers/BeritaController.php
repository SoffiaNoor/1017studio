<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\TagBerita;


class BeritaController extends Controller
{
    public function index()
    {
        $berita = News::all();
        $tagNews = TagBerita::all();

        return view('pages.berita', compact('berita', 'tagNews'));
    }
    public function detail_berita(Request $request)
    {
        $berita = News::where('id', $request->id)->first();
        $tagIds = explode(',', $berita->berita_tag); // Assuming berita_tag is a comma-separated string of tag IDs
        $tagNews = TagBerita::whereIn('id', $tagIds)->get(); // Fetch only the tags included in berita_tag

        return view('pages.detail_berita', compact('berita', 'tagNews'));
    }

    public function detail()
    {
        return view('pages.detail_berita', []);
    }
}