@extends('layouts.backend.app')

@section('title')
<title>Cars | Add & Edit</title>
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Cars/</span> Add, Edit</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('carSave') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(!empty($car))
                <input type="hidden" name="id" id="id" value="{{ $car->id }}">
                @endif

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Brand <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-money"></i></span>
                        <select name="brand" id="brand" class="form-control" required>
                            <option value=""> --- Please Select Brand --- </option>
                            @foreach ($brandCategory as $key=>$val)
                            <option value="{{ $val->id }}" @if(!empty($car)) @if ($val->id == $car->brand_id)
                                selected @endif @endif >{{ $val->title }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Cars <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-money"></i></span>
                        <input type="text" name="car_name" id="car_name" class="form-control" @if (!empty($car))
                            value="{{ $car->car_name }}" @endif>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Status</label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                class="bx bx-status"></i></span>
                        <select name="status" id="status" class="form-control">
                            <option value="1" @if(!empty($car) && $car->status == 1) selected
                                @endif>Active
                            </option>
                            <option value="0" @if(!empty($car) && $car->status == 0) selected @endif>In
                                active
                            </option>
                        </select>

                    </div>
                </div>

                <button type="submit" class="btn btn-outline-primary text-primary">Save</button>
                <a href="javaScript:void(0);" onclick="window.history.back()" class="btn btn-outline-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection