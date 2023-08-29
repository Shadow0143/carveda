<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Contact;
USE App\Models\About;
use App\Models\Service;
use App\Models\Works;
use App\Models\Blog;
use App\Models\Subscribe;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;

class welcomeController extends Controller
{
        public function welcome(){
            $testimonials = Testimonial::select('name','designation','image','text','title','rating')->orderBy('id','DESC')->where('status',true)->get();
            $serviceCategory = Category::orderBy('id','DESC')->where('type','service')->where('status',true)->take(10)->get();
            $works = Works::orderBy('id','DESC')->where('status',true)->take(4)->get();
            $blogs = Blog::orderBy('id','DESC')->where('status',true)->take(3)->get();
            $about = About::first();
            return view('welcome',compact('testimonials','about','works','blogs','serviceCategory'));
        }

        public function contact(){
            return view('frontend/contact');
        }

        public function services(){
            $services = Service::orderBy('id','DESC')->where('status',true)->get();
            return view('frontend/services',compact('services'));
        }

        public function blogs(){
            $blogs = Blog::orderBy('id','DESC')->where('status',true)->paginate(10);
            $popular = Blog::orderBy('id','DESC')->where('status',true)->take(15)->get();
            return view('frontend/blog',compact('blogs','popular'));
        }

        public function aboutUs(){
            return view('frontend/about');
        }

        public function blogDetails($id)
        {
            $blog = Blog::where('id',$id)->first();
            $popular = Blog::orderBy('id','DESC')->where('status',true)->take(15)->get();
            return view('frontend/blog_detail',compact('blog','popular'));
        }

        public function work(){
            $works = Works::orderBy('id','DESC')->where('status',true)->paginate(20);
            return view('frontend/work',compact('works'));
        }


        public function workDeails($id){
            $works = Works::where('id',$id)->first();
            $popular = Blog::orderBy('id','DESC')->where('status',true)->take(15)->get();
            return view('frontend/work_detail',compact('works','popular'));
        }

        public function submitContact(Request $request){
           
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->services = $request->services;
            $contact->message = $request->message;
            $contact->save();
            toast('Thanks','We will contact you soon, stay with me.');
            return back();
            
        }

        public function subscribe(Request $request){
            $subscibe = new Subscribe();
            $subscibe->email = $request->email;
            $subscibe->save();
            toast('Thanks','We will contact you soon, stay with me.');
            return back();
        }
}
