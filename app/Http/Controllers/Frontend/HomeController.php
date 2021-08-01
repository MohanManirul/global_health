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
        $data['logo'] = logo::orderBy('id', 'asc')->get();
        $data['sliders'] = Slider::orderBy('id', 'desc')->get();
        $data['aboutus'] = AboutUs::orderBy('id', 'desc')->get();
        $data['nonprofit'] = NonProft::orderBy('id', 'desc')->get();        
        $data['bod'] = Bod::orderBy('id', 'desc')->get();
        $data['boa'] = Boa::orderBy('id', 'desc')->get();
        $data['address'] = Address::orderBy('id', 'desc')->get();
        $data['msg'] = Messege::orderBy('id', 'desc')->get();
        $data['subscribe'] = Subscribe::orderBy('id', 'desc')->get();
        return view('index', $data);
    }
}
