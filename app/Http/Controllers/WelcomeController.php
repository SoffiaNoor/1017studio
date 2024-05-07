<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Portfolio;
use App\Models\FAQ;
use App\Models\Testimonial;

class WelcomeController extends Controller
{
    public function index()
    {
        $information = Information::first();
        $portfolio = Portfolio::all();
        $qanda = FAQ::all();

        return view('welcome', compact("information", "portfolio", "qanda"));
    }

    public function about_us()
    {
        $information = Information::first();

        return view('about_us', compact("information"));
    }

    public function portofolio()
    {
        $portfolio = Portfolio::all();

        return view('portofolio', compact("portfolio"));
    }

    public function testimoni()
    {
        $testimoni = Testimonial::all();

        return view('testimoni', compact("testimoni"));
    }
}