<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\logo;
use App\Models\Backend\Slider;
use App\Models\Backend\NonProft;
use App\Models\Backend\Bod;
use App\Models\Backend\Boa;
use App\Models\Backend\Address;
use App\Models\Backend\Messege;
use App\Models\Backend\Subscribe;
use App\Models\Backend\AboutUs;

use Image;
use File;
class HomeController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function about(){
        return view('pages.about');
    }
    public function service(){
        return view('pages.services');
    }
    public function pricing(){
        return view('pages.pricing');
    }
    public function software(){
        return view('pages.software');
    }
    public function hardware(){
        return view('pages.hardware');
    }
}
