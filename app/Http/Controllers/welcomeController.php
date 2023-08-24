<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Contact;
USE App\Models\About;
use App\Models\Service;
use App\Models\Works;
use App\Models\Blog;
use RealRashid\SweetAlert\Facades\Alert;

class welcomeController extends Controller
{
    public function welcome(){
        $testimonials = Testimonial::select('name','designation','image','text')->orderBy('id','DESC')->where('status',true)->get();
        $services = Service::orderBy('id','DESC')->where('status',true)->get();
        $works = Works::orderBy('id','DESC')->where('status',true)->get();
        $blogs = Blog::orderBy('id','DESC')->where('status',true)->get();
        $about = About::first();
        return view('welcome',compact('testimonials','about','services','works','blogs'));
    }

    // ========================== Contact Form =============================

        public function contact(){
            return view('frontend/contact');
        }

        public function submitContact(Request $request){
           
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->services = $request->services;
            $contact->message = $request->message;
            $contact->save();
            toast('Thanks','I will contact you soon, stay with me.');
            return back();
            
        }
}
