<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\News;

class KelanaController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function destinasi()
    {
        return view('destinasi');
    }

    public function blog()
    {
        // $banners = Banner::all();
        $featureds = News::where('is_featured', true)->get();
        return view('blog', compact('featureds')); 
    }
    public function blogShow(News $news)
    {
        $news->load(['newsCategory', 'author']);
        return view('blog-show', compact('news'));
    }
}
