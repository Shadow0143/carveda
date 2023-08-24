<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\About;
use App\Models\Service;
use App\Models\Contact;
use App\Models\Works;
use App\Models\Blog;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    //====================== Dashboard ===================================
        public function index()
        {
            return view('home');
        }
    //====================== / Dashboard ===================================


    //====================== Testimonial ===================================
        public function testimonialList(){
            $allTestimonial = Testimonial::orderBy('id', 'desc')->paginate(10);
            return view('testiminial/list',compact('allTestimonial'));
        }

        public function testimonialAdd(){
            return view('testiminial/addedit');
        }

        public function testimonialEdit($id){
            $testimonial = Testimonial::find($id);
            return view('testiminial/addedit',compact('testimonial'));
        }

        public function testimonialSave(Request $request){
            if (!empty($request->id)) {
                $testimonial = Testimonial::find($request->id);
                $testimonial->name = $request->user_name;
                $testimonial->designation = $request->designation;
                $testimonial->text = $request->description;
                $testimonial->status = $request->status;
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $name = 'Testiminial' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('testimonialImage');
                    $image->move($result, $name);
                    $testimonial->image = $name;
                }
                $testimonial->save();
                toast('Record has been updated!', 'success');
            
            } else {    
                // dd($request->all());
                $testimonial = new Testimonial();
                $testimonial->name = $request->user_name;
                $testimonial->designation = $request->designation;
                $testimonial->text = $request->description;
                $testimonial->status = $request->status;
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $name = 'Testiminial' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('testimonialImage');
                    $image->move($result, $name);
                    $testimonial->image = $name;
                }
                $testimonial->save();
                toast('New Testimonial as been added!', 'success');
            }
            return redirect()->route('testimonialList');
        }

        public function testimonialDelete(Request $request){
            $package = Testimonial::find($request->id);
            $package->delete();
        }
    //====================== / Testimonial ===================================


    //====================== About Me ===================================
        public function aboutMeList(){
            $allAbout = About::orderBy('id', 'desc')->paginate(10);
            return view('about/list',compact('allAbout'));
        }

        public function aboutMeAdd(){
            return view('about/addedit');
        }

        public function aboutMeEdit($id){
            $aboutme = About::find($id);
            return view('about/addedit',compact('aboutme'));
        }

        public function aboutMeSave(Request $request){
            // dd($request->all());
            if (!empty($request->id)) {
                $aboutme = About::find($request->id);
                $aboutme->title = $request->title;
                $aboutme->shortdescription = $request->shortdescription;
                $aboutme->longdescription = $request->longdescription;
                $aboutme->status = $request->status;
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $name = 'MyImage' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('aboutme');
                    $image->move($result, $name);
                    $aboutme->image = $name;
                }
                if ($request->hasfile('resume')) {
                    $image = $request->file('resume');
                    $name = 'Resume' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('aboutme');
                    $image->move($result, $name);
                    $aboutme->image = $name;
                }
                $aboutme->save();
                toast('Record has been updated!', 'success');
            
            } else {    
                $aboutme = new About();
                $aboutme->title = $request->title;
                $aboutme->shortdescription = $request->shortdescription;
                $aboutme->longdescription = $request->longdescription;
                $aboutme->status = $request->status;
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $name = 'MyImage' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('aboutme');
                    $image->move($result, $name);
                    $aboutme->image = $name;
                }
                if ($request->hasfile('resume')) {
                    $image = $request->file('resume');
                    $resume = 'Resume' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('aboutme');
                    $image->move($result, $resume);
                    $aboutme->resume = $resume;
                }

                $aboutme->save();
                toast('New About section is added!', 'success');
            }
            return redirect()->route('aboutMeList');
        }

        public function aboutMeDelete(Request $request){
            $package = About::find($request->id);
            $package->delete();
        }
    //====================== / About Me ===================================


     //====================== Services ===================================
        public function servicesList(){
            $services = Service::orderBy('id', 'desc')->paginate(10);
            return view('service/list',compact('services'));
        }

        public function servicesAdd(){
            return view('service/addedit');
        }

        public function servicesEdit($id){
            $services = Service::find($id);
            return view('service/addedit',compact('services'));
        }

        public function servicesSave(Request $request){
            // dd($request->all());
            if (!empty($request->id)) {
                $service = Service::find($request->id);
                $service->title = $request->title;
                $service->shortdescription = $request->shortdescription;
                $service->longdescription = $request->longdescription;
                $service->status = $request->status;
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $name = 'Service' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('service');
                    $image->move($result, $name);
                    $service->icon = $name;
                }
               
                $service->save();
                toast('Record has been updated!', 'success');
            
            } else {    
                $service = new Service();
                $service->title = $request->title;
                $service->shortdescription = $request->shortdescription;
                $service->longdescription = $request->longdescription;
                $service->status = $request->status;
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $name = 'Service' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('service');
                    $image->move($result, $name);
                    $service->icon = $name;
                }
               
                $service->save();
                toast('New service is added!', 'success');
            }
            return redirect()->route('servicesList');
        }

        public function servicesDelete(Request $request){
            $package = Service::find($request->id);
            $package->delete();
        }
    //====================== / Services ===================================


    //======================= Contact =============================================
        public function contactList(){
            $contact = Contact::orderBy('id','desc')->paginate(10);
            return view('contact/list',compact('contact'));

        }
    //======================= / Contact =============================================


    //====================== Works ===================================
        public function worksList(){
            $allWorks = Works::orderBy('id', 'desc')->paginate(10);
            return view('works/list',compact('allWorks'));
        }

        public function worksAdd(){
            return view('works/addEdit');
        }

        public function worksEdit($id){
            $work = Works::find($id);
            return view('works/addEdit',compact('work'));
        }

        public function worksSave(Request $request){
            // dd($request->all());
            if (!empty($request->id)) {
                $work = Works::find($request->id);
                $work->title = $request->title;
                $work->category = $request->category;
                $work->description = $request->description;
                $work->status = $request->status;
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $name = 'Works' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('worksImage');
                    $image->move($result, $name);
                    $work->image = $name;
                }
                $work->save();
                toast('Record has been updated!', 'success');
            
            } else {    
                // dd($request->all());
                $work = new Works();
                $work->title = $request->title;
                $work->category = $request->category;
                $work->description = $request->description;
                $work->status = $request->status;
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $name = 'Works' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('worksImage');
                    $image->move($result, $name);
                    $work->image = $name;
                }
                $work->save();
                toast('New Work as been added!', 'success');
            }
            return redirect()->route('worksList');
        }

        public function worksDelete(Request $request){
            $package = Works::find($request->id);
            $package->delete();
        }
    //====================== / Works ===================================


    //====================== Blogs ===================================
        public function blogsList(){
            $allBlogs = Blog::orderBy('id', 'desc')->paginate(10);
            return view('blogs/list',compact('allBlogs'));
        }

        public function blogsAdd(){
            return view('blogs/addEdit');
        }

        public function blogsEdit($id){
            $blog = Blog::find($id);
            return view('blogs/addEdit',compact('blog'));
        }

        public function blogsSave(Request $request){
            // dd($request->all());
            if (!empty($request->id)) {
                $blog = Blog::find($request->id);
                $blog->title = $request->title;
                $blog->post_by = $request->post_by;
                $blog->small_description = $request->small_description;
                $blog->long_description = $request->long_description;
                $blog->status = $request->status;
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $name = 'Blogs' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('blogsImage');
                    $image->move($result, $name);
                    $blog->image = $name;
                }
                $blog->save();
                toast('Record has been updated!', 'success');
            
            } else {    
                // dd($request->all());
                $blog = new Blog();
                $blog->title = $request->title;
                $blog->post_by = $request->post_by;
                $blog->small_description = $request->small_description;
                $blog->long_description = $request->long_description;
                $blog->status = $request->status;
                if ($request->hasfile('image')) {
                    $image = $request->file('image');
                    $name = 'Blogs' . time() . '.' . $image->getClientOriginalExtension();
                    $result = public_path('blogsImage');
                    $image->move($result, $name);
                    $blog->image = $name;
                }
                $blog->save();
                toast('New blogs has been added!', 'success');
            }
            return redirect()->route('blogsList');
        }

        public function blogsDelete(Request $request){
            $blogs = Blog::find($request->id);
            $blogs->delete();
        }
    //====================== / Blogs ===================================

}
