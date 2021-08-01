<?php

namespace App\Http\Controllers\Backend;

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
class BackendController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    
    public function index()
    {
      $logo = logo::orderBy('id', 'asc')->get();
      return view('backend.pages.logo.index', compact('logo'));
    }
  
    public function store(Request $request)
    { 
    
    //dd(($request->file('image')));
      $logo = new logo();
  
   if ($request->file('image')) {
    $file = $request->file('image');
    $filename = date('YmdHi').$file->getClientOriginalName();
    $file->move(public_path('upload/student_images'), $filename);
    $logo->image = $filename;
    }
      $logo->save();
  
      session()->flash('success', 'A new logo has added successfully !!');
      return redirect()->route('admin.logos');
  
    }
  
      public function update(Request $request, $id)
      {
           
  
          $logo = logo::find($id);

            //dd(($request->file('image')));
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/student_images/'. $logo->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/student_images'), $filename);
            $logo->image = $filename;
        }
          $logo->save();
  
          session()->flash('success', 'logo has updated successfully !!');
          return redirect()->route('admin.logos');
  
      }
  
      public function delete($id)
      {
        $logo = logo::find($id);
        if (!is_null($logo)) {
          //Delete Image
          if (File::exists('upload/student_images/'.$logo->image)) {
              File::delete('upload/student_images/'.$logo->image);
            }
          $logo->delete();
        }
        session()->flash('success', 'logo has deleted successfully !!');
        return back();
  
      }


    public function showSliders()
    {
      $sliders = Slider::orderBy('id', 'asc')->get();
      return view('backend.pages.slider.index', compact('sliders'));
    }
  
    public function sliderStore(Request $request)
    { 
    
    //dd(($request->file('slider')));
      $slider = new Slider();
      $slider->slider_text = $request->slider_text;

   if ($request->file('slider')) {
    $file = $request->file('slider');
    $filename = date('YmdHi').$file->getClientOriginalName();
    $file->move(public_path('upload/student_images'), $filename);
    $slider->slider = $filename;
    }
      $slider->save();
  
      session()->flash('success', 'A new slider has added successfully !!');
      return redirect()->route('admin.sliders');
  
    }
  
      public function sliderUpdate(Request $request, $id)
      {        
  
        $slider = Slider::find($id);
        $slider->slider_text = $request->slider_text;
            //dd(($request->file('image')));
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/student_images/'. $slider->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/student_images'), $filename);
            $slider->slider = $filename;
        }
          $slider->save();
  
          session()->flash('success', 'slider has updated successfully !!');
          return redirect()->route('admin.sliders');
  
      }
  
      public function sliderDelete($id)
      {
        $slider = Slider::find($id);
        if (!is_null($slider)) {
          //Delete Image
          if (File::exists('upload/student_images/'.$slider->slider)) {
              File::delete('upload/student_images/'.$slider->slider);
            }
          $slider->delete();
        }
        session()->flash('success', 'slider has deleted successfully !!');
        return back();
  
      }


      // aboutus starts
  public function aboutusIndex()
    {
      $aboutus = AboutUs::orderBy('id', 'desc')->get();
      return view('backend.pages.aboutus.index', compact('aboutus'));
    }
  
  public function aboutusStore(Request $request)
    { 
    
    //dd(($request->file('image')));
      $aboutus = new AboutUs();
      $aboutus->title = $request->title;
      $aboutus->description = html_entity_decode($request->description);
      $aboutus->save();
  
      session()->flash('success', 'A new aboutus has added successfully !!');
      return redirect()->route('admin.aboutus');
  
    }
  
      public function aboutusUpdate(Request $request, $id)
      {   
        
        $aboutus = AboutUs::find($id);
          $aboutus->title = $request->title;
          $aboutus->description = html_entity_decode($request->description);
          $aboutus->save();
  
          session()->flash('success', 'aboutus has updated successfully !!');
          return redirect()->route('admin.aboutus');
  
      }
  
      public function aboutusDelete($id)
      {
        $aboutus = AboutUs::find($id);
        $aboutus->delete();
        
        session()->flash('success', 'aboutus has deleted successfully !!');
        return back();
  
      }



      // non profit methods starts
  public function nonprofitIndex()
    {
      $nonprofit = NonProft::orderBy('id', 'desc')->get();
      return view('backend.pages.nonprofit.index', compact('nonprofit'));
    }
  
  public function nonprofitStore(Request $request)
    { 
    
    //dd(($request->file('image')));
      $nonprofit = new NonProft();
      $nonprofit->title = $request->title;
      $nonprofit->description = html_entity_decode($request->description);
      $nonprofit->save();
  
      session()->flash('success', 'A new nonprofit has added successfully !!');
      return redirect()->route('admin.nonprofit');
  
    }
  
      public function nonprofUpdate(Request $request, $id)
      {
           
  
          $nonprofit = NonProft::find($id);

            //dd(($request->file('image')));
            $nonprofit->title = $request->title;
            $nonprofit->description = html_entity_decode($request->description);
          $nonprofit->save();
  
          session()->flash('success', 'nonprofit has updated successfully !!');
          return redirect()->route('admin.nonprofit');
  
      }
  
      public function nonprofDelete($id)
      {
        $nonprofit = NonProft::find($id);
        $nonprofit->delete();
        
        session()->flash('success', 'nonprofit has deleted successfully !!');
        return back();
  
      }



      // board  of directories

  public function bodIndex()
    {
      $bod = Bod::orderBy('id', 'asc')->get();
      return view('backend.pages.bod.index', compact('bod'));
    }
  
    public function bodStore(Request $request)
    { 
    
    //dd(($request->file('image')));
      $bod = new Bod();
      $bod->name = $request->name;
      $bod->designation = $request->designation;
      $bod->fb = $request->fb;
      $bod->tw = $request->tw;
      $bod->in = $request->in;
      $bod->ints = $request->ints;

  
   if ($request->file('image')) {
    $file = $request->file('image');
    $filename = date('YmdHi').$file->getClientOriginalName();
    $file->move(public_path('upload/student_images'), $filename);
    $bod->image = $filename;
    }
    
    $bod->save();
  
      session()->flash('success', 'A new bod has added successfully !!');
      return redirect()->route('admin.bod');
  
    }
  
      public function bodUpdate(Request $request, $id)
      {
           
  
          $bod = Bod::find($id);
          $bod->name = $request->name;
          $bod->designation = $request->designation;
          $bod->fb = $request->fb;
          $bod->tw = $request->tw;
          $bod->in = $request->in;
          $bod->ints = $request->ints;

            //dd(($request->file('image')));
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/student_images/'. $bod->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/student_images'), $filename);
            $bod->image = $filename;
        }
          $bod->save();
  
          session()->flash('success', 'bod has updated successfully !!');
          return redirect()->route('admin.bod');
  
      }
  
      public function bodDelete($id)
      {
        $bod = Bod::find($id);
        if (!is_null($bod)) {
          //Delete Image
          if (File::exists('upload/student_images/'.$bod->image)) {
              File::delete('upload/student_images/'.$bod->image);
            }
          $bod->delete();
        }
        session()->flash('success', 'bod has deleted successfully !!');
        return back();
  
      }
  
  
 // board  of advisors

  public function boaIndex()
    {
      $boa = Boa::orderBy('id', 'asc')->get();
      return view('backend.pages.boa.index', compact('boa'));
    }
  
    public function boaStore(Request $request)
    { 
    
    //dd(($request->file('image')));
      $boa = new Boa();
      $boa->name = $request->name;
      $boa->designation = $request->designation;
      $boa->fb = $request->fb;
      $boa->tw = $request->tw;
      $boa->in = $request->in;
      $boa->ints = $request->ints;

  
   if ($request->file('image')) {
    $file = $request->file('image');
    $filename = date('YmdHi').$file->getClientOriginalName();
    $file->move(public_path('upload/student_images'), $filename);
    $boa->image = $filename;
    }
    
    $boa->save();
  
      session()->flash('success', 'A new boa has added successfully !!');
      return redirect()->route('admin.boa');
  
    }
  
      public function boaUpdate(Request $request, $id)
      {
           
  
          $boa = Boa::find($id);
          $boa->name = $request->name;
          $boa->designation = $request->designation;
          $boa->fb = $request->fb;
          $boa->tw = $request->tw;
          $boa->in = $request->in;
          $boa->ints = $request->ints;

            //dd(($request->file('image')));
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/student_images/'. $boa->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/student_images'), $filename);
            $boa->image = $filename;
        }
          $boa->save();
  
          session()->flash('success', 'boa has updated successfully !!');
          return redirect()->route('admin.boa');
  
      }
  
      public function boaDelete($id)
      {
        $boa = Boa::find($id);
        if (!is_null($boa)) {
          //Delete Image
          if (File::exists('upload/student_images/'.$boa->image)) {
              File::delete('upload/student_images/'.$boa->image);
            }
          $boa->delete();
        }
        session()->flash('success', 'data has deleted successfully !!');
        return back();
  
      }



 // addres

  public function addressIndex()
    {
      $address = Address::orderBy('id', 'asc')->get();
      return view('backend.pages.address.index', compact('address'));
    }
  
    public function addressStore(Request $request)
    { 
    
    //dd(($request->file('image')));
      $addres = new Address();
      $addres->address = $request->address;
      $addres->email = $request->email;
      $addres->mobile_no = $request->mobile_no;
    
    $addres->save();
  
      session()->flash('success', 'A new addres has added successfully !!');
      return redirect()->route('admin.address');
  
    }
  
      public function addressUpdate(Request $request, $id)
      {
           
  
          $addres = Address::find($id);
          $addres->address = $request->address;
          $addres->email = $request->email;
          $addres->mobile_no = $request->mobile_no;

          $addres->save();
  
          session()->flash('success', 'addres has updated successfully !!');
          return redirect()->route('admin.address');
  
      }
  
      public function addressDelete($id)
      {
        $address = Address::find($id);
        if (!is_null($address)) {
          
          $address->delete();
        }
        session()->flash('success', 'data has deleted successfully !!');
        return back();
  
      }


 // messege

  public function messegeIndex()
    {
      $messege = Messege::orderBy('id', 'asc')->get();
      return view('backend.pages.messege.index', compact('messege'));
    }
  
    public function messegeStore(Request $request)
    { 
      $messege = new Messege();
      $messege->name = $request->name;
      $messege->email = $request->email;
      $messege->subject = $request->subject;
      $messege->messege = $request->messege;
    
    $messege->save();
  
      session()->flash('success', 'A new messege has added successfully !!');
      return back();
  
    }
  
      public function messegeUpdate(Request $request, $id)
      {
           
  
          $messege = Messege::find($id);
          $messege->messege = $request->messege;
          $messege->email = $request->email;
          $messege->mobile_no = $request->mobile_no;

          $messege->save();
  
          session()->flash('success', 'messege has updated successfully !!');
          return redirect()->route('admin.messege');
  
      }
  
      public function messegeDelete($id)
      {
        $messege = Messege::find($id);
        if (!is_null($messege)) {
          
          $messege->delete();
        }
        session()->flash('success', 'data has deleted successfully !!');
        return back();
  
      }
      
 // Subcribe

  public function subcribeIndex()
    {
      $subcribe = Subscribe::orderBy('id', 'asc')->get();
      return view('backend.pages.subscribe.index', compact('subcribe'));
    }
  
    public function subcribeStore(Request $request)
    { 
      $subcribe = new Subscribe();
      $subcribe->email = $request->email;
    
    $subcribe->save();
  
      session()->flash('success', 'A new subcribe has added successfully !!');
      return back();
  
    }
  
      public function subcribeUpdate(Request $request, $id)
      {
           
  
          $subcribe = Subscribe::find($id);
          $subcribe->email = $request->email;

          $subcribe->save();
  
          session()->flash('success', 'subcribe has updated successfully !!');
          return redirect()->route('admin.subcribe');
  
      }
  
      public function subcribeDelete($id)
      {
        $subcribe = Subscribe::find($id);
        if (!is_null($subcribe)) {
          
          $subcribe->delete();
        }
        session()->flash('success', 'data has deleted successfully !!');
        return back();
  
      }

  }
  