@extends('layouts.frontend.app')
@section('title')
<title>Carveda || Work</title>
@endsection
@section('content')


<!--breadcrumb section start-->
<section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75 "
    data-background="{{ asset('frontend/assets/img/shapes/texture-bg.png') }}" style="margin-top: -100px;">
    <img src="{{ asset('frontend/assets/img/shapes/tire-print-left.pn') }}g" alt="tire print"
        class="position-absolute start-0 z-1 tire-print">
    <img src="{{ asset('frontend/assets/img/shapes/tire-print-right.png') }}" alt="tire print"
        class="position-absolute end-0 z-1 tire-print">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                    <h1 class="text-white">Recent Work Details</h1>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item  text-white fw-500">Home </li>
                        <li class="breadcrumb-item  text-white fw-500"> /</li>
                        <li class="breadcrumb-item text-white fw-500">Recent Work</li>
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
                <div class="blog-single-area bg-white rounded">
                    <div class="bs-blog-meta d-flex align-items-center justify-content-between">
                        <span class="date">{{ date('d-m-Y',strtotime($works->created_at)) }}</span>
                    </div>
                    <h3 class="blog-title mt-3">{{ $works->title }}</h3>
                    <div class="bs-blog-thumb position-relative mt-40 mb-4">

                        <img src="{{ asset('worksImage') }}/{{ $works->image }}" alt="not found" class="img-fluid">
                    </div>
                    <p>{{ $works->description }}</p>


                    </span>
                    </blockquote>


                </div>
            </div>
            <div class="col-xl-4">
                <div class="blog-sidebar mt-60 mt-xl-0">

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
                                    <span class="date">{{ date('d M , Y',strtotime($val->created_at)) }}</span>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--blog list section end-->


@endsection