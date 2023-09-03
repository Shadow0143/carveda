@extends('layouts.backend.app')

@section('title')
<title>Services | Add & Edit</title>
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Service/</span> Add, Edit</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('servicesSave') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(!empty($services))
                <input type="hidden" name="id" id="id" value="{{ $services->id }}">
                <input type="hidden" name="carId" id="carId" value="{{ $services->car }}">
                @endif

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Type <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <input type="radio" name="type" id="type" value="premium" required @if(!empty($services))
                            @if($services->type == 'premium')
                        checked
                        @endif
                        @endif>&nbsp; Premium &nbsp; &nbsp;
                        &nbsp;
                        <input type="radio" name="type" id="type" value="normal" required @if(!empty($services))
                            @if($services->type == 'normal')
                        checked
                        @endif
                        @endif>&nbsp; Normal
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Brand <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-money"></i></span>
                        <select name="brand" id="brand" class="form-control" required>
                            <option value=""> --- Please Select Brand --- </option>
                            @foreach ($brandCategory as $key=>$val)
                            <option value="{{ $val->id }}" @if(!empty($services)) @if ($val->id == $services->brand)
                                selected
                                @endif
                                @endif >{{ $val->title }}</option>
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
                        <select name="car" id="car" class="form-control" required>
                            <option value=""> --- Please Select Car --- </option>

                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Category <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-money"></i></span>
                        <select name="category" id="category" class="form-control" required>
                            <option value=""> --- Please Select Category --- </option>
                            @foreach ($serviceCategory as $key=>$val)
                            <option value="{{ $val->id }}" @if(!empty($services)) @if ($val->id === $services->cat_id)
                                selected @endif @endif >{{ $val->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>



                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Title <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-user"></i></span>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title"
                            aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" @if(!empty($services))
                            value="{{ $services->title }}" @endif required />
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Image <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-image"></i></span>
                        <input type="file" id="image" name="image" class="form-control" placeholder=""
                            aria-label="john.doe" aria-describedby="basic-icon-default-email2" @if(empty($services))
                            required @endif />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Start Price <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-image"></i></span>
                        <input type="text" id="start_price" name="start_price" class="form-control" required
                            placeholder="Start Price" aria-label="" aria-describedby="basic-icon-default-email2"
                            @if(!empty($services)) value="{{ $services->start_price }}" @endif />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">End Price <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-image"></i></span>
                        <input type="text" id="end_price" name="end_price" class="form-control" required
                            placeholder="End Price" aria-label="" aria-describedby="basic-icon-default-email2"
                            @if(!empty($services)) value="{{ $services->end_price }}" @endif />
                    </div>
                </div>




                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-message">Description <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-message2" class="input-group-text"><i
                                class="bx bx-comment"></i></span>
                        <textarea id="description" class="form-control editor" cols="12" rows="6" name="description"
                            placeholder="Description !" aria-label="Description !"
                            aria-describedby="basic-icon-default-message2"
                            required>@if(!empty($services)) {{ $services->shortdescription }} @endif</textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Status</label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                class="bx bx-status"></i></span>
                        <select name="status" id="status" class="form-control">
                            <option value="1" @if(!empty($services) && $services->status == 1) selected
                                @endif>Active
                            </option>
                            <option value="0" @if(!empty($services) && $services->status == 0) selected @endif>In
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
<script>
    $(document).ready(function () {
        var value = $('#brand').val();
        var carId = $('#carId').val();
        var url = '/admin/find-car/' + value;
    
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
    
    $('#brand').on('change', function () {
        var value = $(this).val();
        var url = '/admin/find-car/'+ value;
        $.ajax({
            url: url,
            type: 'GET',
            success: function (res) {
                var selectElement = $('#car'); 
                selectElement.empty();
    
                // Loop through the response data and create option elements
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