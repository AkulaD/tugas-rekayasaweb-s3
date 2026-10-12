<?php

namespace App\Http\Controllers;

use App\Models\HomeData;
use App\Models\Listwork;

class HomeController extends Controller
{

    public function index()
    {
        $textBanner = HomeData::getTextBanner();
        $banners = HomeData::getBanners();
        $works = Listwork::orderBy('tahun_rilis', 'desc')->take(8)->get();

        return view('page.home', compact('textBanner', 'banners', 'works'));
    }
}