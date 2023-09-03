@extends('layouts.frontend.app')
@section('title')
<title>Carveda || Service Details </title>
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
                    <h1 class="text-white">Our Services</h1>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item  text-white fw-500">Home </li>
                        <li class="breadcrumb-item  text-white fw-500"> /</li>
                        <li class="breadcrumb-item text-white fw-500">Service</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->






<!--service details-->
<section class="inventory-details-area ptb-60">
    <div class="row justify-content-center pb-60">
        <div class="col-lg-7">
            <div class="at-section-title text-center">
                <span class="at-subtitle lead text-primary position-relative h1">Browse Top Car</span>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-xl-12">
                <div class="iv_listing mt-5 mt-xl-0">
                    <form action="{{ route('searchservices') }}" method="post">
                        @csrf
                        <div
                            class="iv_listing_top d-flex flex-wrap align-items-center bg-white justify-content-center justify-content-sm-between rounded mb-4">
                            <div
                                class="iv_listing_filter_menu d-flex flex-wrap align-items-center justify-content-center">
                                <p class="mb-0 flex-shrink-0 fw-semibold">Brand:</p>
                                <select class="form-select fw-500" id="brandId" name="brandId">
                                    <option> --- Select Brand --- </option>
                                    @foreach($brandName as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->title }}</option>
                                    @endforeach
                                </select>

                                <p class="mb-0 flex-shrink-0 fw-semibold">Car:</p>
                                <select class="form-select fw-500" id="car" name="car">
                                    <option> --- Select Car --- </option>

                                </select>
                                <div class="form-btns d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary">Submit<span class="ms-2"><i
                                                class="fa-solid fa-arrow-right"></i></span></button>

                                </div>
                            </div>

                        </div>
                    </form>
                    <div class="row g-4 justify-content-center">


                        @forelse ($services as $service)
                        <div class="col-12">
                            <div
                                class="listing_card_item bg-white rounded p-4 d-lg-flex align-items-center position-relative">
                                <div class="thumb-wrapper overflow-hidden rounded flex-shrink-0">
                                    <a href="#"><img src="{{ asset('service') }}/{{ $service->icon }}" alt="car"
                                            class="img-fluid"></a>
                                </div>
                                <div class="listing_card_content ms-lg-4 mt-4 mt-lg-0">
                                    <a href="#">
                                        <h5 class="mb-1">{{ $service->title }} ({{ $service->brand_name}} - {{
                                            $service->car_name }}) <span class="text-danger">({{
                                                ucfirst($service->type) }})</span></h5>
                                    </a>
                                    <p class="mt-3 mb-4 pera-text-2">{{$service->shortdescription}}</p>
                                    <div class="card-feature-box d-flex flex-wrap align-items-center">
                                        <div class="icon-box d-flex align-items-center border bg-primary text-white">
                                            <span class="me-2"><i class="fa-solid fa-indian-rupee-sign"></i></span>
                                            {{ $service->start_price }}
                                        </div>
                                        <span>-</span>
                                        <div class="icon-box d-flex align-items-center border bg-primary text-white">
                                            <span class="me-2"><i class="fa-solid fa-indian-rupee-sign"></i></span>
                                            {{ $service->end_price }}
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        @empty
                        <div class="col-12 text-center">
                            <p class="text-danger"> No Service added yet.</p>
                        </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
</section>
<!--service details end-->
@endsection

@section('js')
<script>
    $(document).ready(function () {
        var value = $('#brandId').val();
        var carId = $('#carId').val();
        var url = '/find-car-filter/' + value;
    
        $.ajax({
            url: url,
            type: 'GET',
            success: function (res) {
                var selectElement = $('#car');
                selectElement.empty();
                for (var i = 0; i < res.length; i++) {
                    var option = $('<option>');
                    option.val(res[i].id);
                    option.text(res[i].car_name);
                    if (res[i].id == carId) {
                        option.prop('selected', true);
                    }
    
                    selectElement.append(option);
                }
            }
        });
    });
        
    $('#brandId').on('change', function () {
        var value = $(this).val();
        var url = '/find-car-filter/' + value;
        $.ajax({
            url: url,
            type: 'GET',
            success: function (res) {
                var selectElement = $('#car'); 
                selectElement.empty();
                for (var i = 0; i < res.length; i++) {
                    var option = $('<option>');
                    option.val(res[i].id);
                    option.text(res[i].car_name);
                    selectElement.append(option);
                }
            }
        });
    });
</script>
@endsection