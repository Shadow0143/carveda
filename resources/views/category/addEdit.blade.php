@extends('layouts.backend.app')

@section('title')
<title>Master Category | Add & Edit</title>
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master Category /</span> Add, Edit</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('categorySave') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(!empty($category))
                <input type="hidden" name="id" id="id" value="{{ $category->id }}">
                @endif
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Category Type <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <select name="type" id="type" class="form-control">
                            <option value=""> --- Select Please --- </option>
                            <option value="brand" @if(!empty($category) && $category->type == 'brand') selected
                                @endif >Brands</option>
                            {{-- <option value="cars" @if(!empty($category) && $category->type == 'cars') selected
                                @endif >Cars</option> --}}
                            <option value="service" @if(!empty($category) && $category->type == 'service') selected
                                @endif >Services</option>
                            <option value="blog" @if(!empty($category) && $category->type == 'blog') selected
                                @endif >Blogs</option>
                            <option value="contact" @if(!empty($category) && $category->type == 'contact') selected
                                @endif >Contact us Service</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Sub Category Title <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-money"></i></span>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title"
                            aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" @if(!empty($category))
                            value="{{ $category->title }}" @endif required />
                    </div>
                </div>


                <div class="mb-3" id="ImageDiv">
                    <label class="form-label" for="basic-icon-default-email"> Image </label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-image"></i></span>
                        <input type="file" id="image" name="image" class="form-control" placeholder=""
                            aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Status</label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                class="bx bx-status"></i></span>
                        <select name="status" id="status" class="form-control">
                            <option value="1" @if(!empty($category) && $category->status == 1) selected
                                @endif>Active
                            </option>
                            <option value="0" @if(!empty($category) && $category->status == 0) selected @endif>In
                                active
                            </option>
                        </select>

                    </div>
                </div>

                <button type="submit" class="btn btn-outline-primary">Save</button>
                <a href="javaScript:void(0);" onclick="window.history.back()" class="btn btn-outline-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#ImageDiv').hide();
    });

    $('#type').on('change',function(){
        const value = $(this).val();
        if(value == 'service'){
            $('#ImageDiv').show();
        }else{
            $('#ImageDiv').hide();
        }
    })
</script>
@endsection