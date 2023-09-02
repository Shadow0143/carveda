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

        public function notFound(){
            return view('notFound');
        }

        public function welcome(){
            $testimonials = Testimonial::select('name','designation','image','text','title','rating')->orderBy('id','DESC')->where('status',true)->get();
            $serviceCategory = Category::orderBy('id','DESC')->where('type','service')->where('status',true)->take(10)->get();
            $works = Works::orderBy('id','DESC')->where('status',true)->take(4)->get();
            $blogs = Blog::orderBy('id','DESC')->where('status',true)->take(3)->get();

            $blogCategory = Category::orderBy('id','DESC')->where('type','blog')->where('status',true)->get();
            foreach($blogs as $key=>$val){
                $category = Category::select('title')->where('type','blog')->where('id',$val->category)->first();
                $blogs[$key]->category_name = $category->title;
            }


            $about = About::orderBy('id','DESC')->where('status',true)->take(3)->get();
            return view('welcome',compact('testimonials','about','works','blogs','serviceCategory'));
        }

        public function contact(){
            return view('frontend/contact');
        }

        public function services(){
            $about = About::orderBy('id','DESC')->where('status',true)->take(3)->get();
            $services = Category::orderBy('id','DESC')->where('type','service')->where('status',true)->get();
            return view('frontend/services',compact('services','about'));
        }

        public function servicesDetails($slug){
            $category_id = Category::select('id')->where('type','service')->where('title',$slug)->first();
            $services = Service::orderBy('id', 'desc')->where('cat_id',$category_id->id)->paginate(10);
            foreach($services as $key=>$val){
                $category = Category::select('title')->where('type','service')->where('id',$val->cat_id)->first();
                $services[$key]->category_name = $category->title;
            }
            // dd($services);
            return view('frontend/service_detail',compact('services'));
        }

        public function blogs(){
            $blogCategory = Category::orderBy('id','DESC')->where('type','blog')->where('status',true)->get();
            foreach($blogCategory as $key=>$cat){
            $count = Blog::where('category',$cat->id)->count();
            $blogCategory[$key]->count = $count; 
            }
           
            $blogs = Blog::orderBy('id','DESC')->where('status',true)->paginate(10);
            foreach($blogs as $key=>$val){
                $category = Category::select('title')->where('type','blog')->where('id',$val->category)->first();
                $blogs[$key]->category_name = $category->title;
            }

            $popular = Blog::orderBy('id','DESC')->where('status',true)->take(15)->get();
            return view('frontend/blog',compact('blogs','popular','blogCategory'));
        }


        public function blogDetails($id)
        {
            $blogCategory = Category::orderBy('id','DESC')->where('type','blog')->where('status',true)->get();
            foreach($blogCategory as $key=>$cat){
                $count = Blog::where('category',$cat->id)->count();
                $blogCategory[$key]->count = $count; 
                }
            $blog = Blog::where('id',$id)->first();
            $category = Category::select('title')->where('type','blog')->where('id',$blog->category)->first();
            $blog->category_name = $category->title;
            $popular = Blog::orderBy('id','DESC')->where('status',true)->take(15)->get();
            return view('frontend/blog_detail',compact('blog','popular','blogCategory'));
        }

        public function blogwithCategory($slug){
            $blogCategory = Category::orderBy('id','DESC')->where('type','blog')->where('status',true)->get();
            foreach($blogCategory as $key=>$cat){
                $count = Blog::where('category',$cat->id)->count();
                $blogCategory[$key]->count = $count; 
                }

            $category_id = Category::select('id')->where('type','blog')->where('title',$slug)->first();

            $blogs = Blog::where('category',$category_id->id)->paginate(10);
            foreach($blogs as $key=>$val){
                $category = Category::select('title')->where('type','blog')->where('id',$val->category)->first();
                $blogs[$key]->category_name = $category->title;
            }
            $popular = Blog::orderBy('id','DESC')->where('status',true)->take(15)->get();
            return view('frontend/blogwithcategory',compact('blogs','popular','blogCategory'));
        }

        public function aboutUs(){
            return view('frontend/about');
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
            toast('Thanks ,We will contact you soon, stay with us.', 'success');
            return back();
            
        }

        public function subscribe(Request $request){
            $subscibe = new Subscribe();
            $subscibe->email = $request->email;
            $subscibe->save();
            toast('Thank you for subscribing us.' ,'success');
            return back();
        }
}
