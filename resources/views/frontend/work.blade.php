@extends('layouts.frontend.app')
@section('title')
<title>Carveda || Works </title>
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
                    <h1 class="text-white">Our Recent Work</h1>
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

<!--latest collection start-->
<section class="latest-collection pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="at-section-title text-center">
                    <span class="at-subtitle lead text-primary position-relative h1">Browse Top Car</span>

                </div>
            </div>
        </div>
        <div class="filter-items-wrapper mt-5">
            <div class="row g-4 justify-content-center filter-grid">

                @foreach ($works as $key=>$val)
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="filter-card-item position-relative overflow-hidden rounded bg-white">

                        <div class="feature-thumb position-relative overflow-hidden">
                            <a href="recentwork-details.html"><img src="{{ asset('worksImage') }}/{{ $val->image }}"
                                    alt="car" class="img-fluid"></a>
                        </div>
                        <div class="filter-card-content">
                            <div class="price-btn text-end position-relative">
                                <span class="small-btn-meta">{{ date('d-m-Y',strtotime($val->created_at)) }}</span>
                            </div>
                            <a href="{{ route('workDeails', ['id' => $val->id]) }}" class="mt-4 d-block">
                                <h5>{{ $val->title }}</h5>
                            </a>
                            <hr class="spacer mt-3 mb-3">
                            <span class="meta-content"><strong>Description:</strong> {{$val->description}}</span>

                            <a href="{{ route('workDeails', ['id' => $val->id]) }}"
                                class="btn outline-btn btn-sm d-block mt-3">Know More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="template-pagination mt-50">

                <ul class="d-flex align-items-center">
                    {{-- Previous Page Link --}}
                    @if ($works->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fa-solid fa-arrow-left"></i></a>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $works->previousPageUrl() }}"><i
                                class="fa-solid fa-arrow-left"></i></a>
                    </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($works->links()->elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                    <li class="page-item disabled"><a class="page-link" href="#">{{ $element }}</a></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                    @foreach ($element as $page => $url)
                    @if ($page == $works->currentPage())
                    <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                    @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                    @endforeach
                    @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($works->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $works->nextPageUrl() }}"><i
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

    </div>
</section>
<!--latest collection end-->

@endsection