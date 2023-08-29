@extends('layouts.frontend.app')
@section('title')
<title>Carveda || Blogs</title>
@endsection
@section('content')


<!--breadcrumb section start-->
<section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75 "
    data-background="{{ asset('frontend/assets/img/shapes/texture-bg.png') }}" style="margin-top: -100px;">
    <img src="{{ asset('frontend/assets/img/shapes/tire-print-left.png') }}" alt="tire print"
        class="position-absolute start-0 z-1 tire-print">
    <img src="{{ asset('frontend/assets/img/shapes/tire-print-right.png') }}" alt="tire print"
        class="position-absolute end-0 z-1 tire-print">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                    <h1 class="text-white">Guides & Articles</h1>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item  text-white fw-500">Home </li>
                        <li class="breadcrumb-item  text-white fw-500"> /</li>
                        <li class="breadcrumb-item text-white fw-500">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->


<!--blog list section start-->
<section class="blog-list-section ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="blog-list-wrapper">
                    @forelse ($blogs as $key=>$val)
                    <div class="h2-blog-card bg-white p-0 mt-5">
                        <div class="feature-img position-relative overflow-hidden w-100 rounded-top">

                            <a href="{{ route('blogDetails', ['id' => $val->id]) }}"><img
                                    src="{{ asset('blogsImage') }}/{{ $val->image }}" alt="blog thumb"
                                    class="img-fluid"></a>
                        </div>
                        <div class="h2-blog-card-content p-4">
                            <a href="{{ route('blogwithCategory', ['slug' => $val->category_name]) }}"
                                class="btn-meta">{{ $val->category_name }}</a>
                            <a href="{{ route('blogDetails', ['id' => $val->id]) }}
                                " class="mt-3 d-block">
                                <h3>{{ $val->title }}</h3>
                            </a>
                            <p>{{$val->small_description}}</p>
                            <div class="blog-author mt-30 d-flex align-items-center">
                                <img src="{{ asset('blogsUserImage') }}/{{ $val->user_image }}" alt="author"
                                    class="rounded-circle flex-shrink-0">
                                <div class="author-content ms-3">
                                    <h6 class="mb-1">{{ $val->post_by }}</h6>
                                    <span>{{ date('M d , Y',strtotime($val->created_at) ) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="h2-blog-card bg-white p-0 mt-5 text-center">
                        <h5 class="text-danger"> No Blog added for this category.</h5>
                    </div>
                    @endforelse

                </div>
                <div class="template-pagination mt-50">

                    <ul class="d-flex align-items-center">
                        {{-- Previous Page Link --}}
                        @if ($blogs->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fa-solid fa-arrow-left"></i></a>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $blogs->previousPageUrl() }}"><i
                                    class="fa-solid fa-arrow-left"></i></a>
                        </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($blogs->links()->elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                        <li class="page-item disabled"><a class="page-link" href="#">{{ $element }}</a></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                        @foreach ($element as $page => $url)
                        @if ($page == $blogs->currentPage())
                        <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                        @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                        @endforeach
                        @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($blogs->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $blogs->nextPageUrl() }}"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </li>
                        @else
                        <li class="page-item disabled">
                            <a class="page-link" href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </li>
                        @endif
                    </ul>

                </div>
            </div>
            <div class="col-xl-4">
                <div class="blog-sidebar mt-60 mt-xl-0">
                    <div class="sidebar-widget tmg-search-widget bg-white widget-padding rounded">
                        <form class="d-flex align-items-center justify-content-between" action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit" class="btn btn-primary"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar-widget tmg-categories-widget bg-white widget-padding rounded mt-4">
                        <div class="widget-top d-flex">
                            <h5 class="mb-0 flex-shrink-0">Categories</h5>
                            <span class="spacer align-self-end"></span>
                        </div>
                        <ul class="widget-nav mt-30">
                            @foreach ($blogCategory as $key=>$val)
                            <li><a href="{{ route('blogwithCategory', ['slug' => $val->title]) }}">{{ $val->title
                                    }}<span class="float-end">({{ $val->count }})</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar-widget recent_post-widget bg-white widget-padding rounded mt-4">
                        <div class="widget-top d-flex">
                            <h5 class="mb-0 flex-shrink-0">Recent Post</h5>
                            <span class="spacer align-self-end"></span>
                        </div>
                        <ul class="recent_posts_list mt-30">
                            @foreach ($popular as $key=>$val)
                            <li class="d-flex align-items-center">
                                <div class="thumb-wrapper">
                                    <a href="{{ route('blogDetails', ['id' => $val->id]) }}"><img
                                            src="{{ asset('blogsImage') }}/{{ $val->image }}" alt="not found"
                                            class="img-fluid"></a>
                                </div>
                                <div class="rp_content">
                                    <a href="{{ route('blogDetails', ['id' => $val->id]) }}"
                                        class="mb-1">{{$val->title}}</a>
                                    <span class="date">{{ date('M d , Y',strtotime($val->created_at) ) }}</span>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    {{-- <div class="sidebar-widget tags-widget widget-padding bg-white rounded mt-4">
                        <div class="widget-top d-flex">
                            <h5 class="mb-0 flex-shrink-0">Popular Tags</h5>
                            <span class="spacer align-self-end"></span>
                        </div>
                        <div class="tags-list mt-30">
                            <a href="#">Car Dealership</a>
                            <a href="#">Breaks Discs</a>
                            <a href="#">WordPress</a>
                            <a href="#">Car Dealership</a>
                            <a href="#">Spares</a>
                            <a href="#">Sedan</a>
                            <a href="#">Diesel</a>
                            <a href="#">Luxury</a>
                            <a href="#">Sport</a>
                        </div>
                    </div> --}}
                    <div class="sidebar-widget subscribe-widget bg-white rounded overflow-hidden mt-4">
                        <div class="sb-top text-center has-overlay"
                            data-background="{{ asset('frontend/assets/img/blog/sb-bg.jpg') }}">
                            <img src="{{ asset('frontend/assets/img/icons/mail.png') }}" alt="main" class="img-fluid">
                            <h4 class="mt-3 mb-4 text-white">Subscribe us</h4>
                            <p class="mb-0 text-white">Subscribe us and get latest news and upcoming events.</p>
                        </div>
                        <div class="widget-padding text-center">
                            <form class="sb-form d-block" method="post" action="{{ route('subscribe') }}">
                                @csrf
                                <input type="email" placeholder="Enter Email Address" name="email" required
                                    class="d-block w-100 bg-transparent border-bottom text-center">
                                <button type="submit" class="btn btn-primary rounded-0 mt-30">Subscribe</button>
                            </form>
                            <p class="mb-0 mt-3 fw-semibold fs-sm">*Never share your email with others.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog list section end-->

@endsection