@extends('layouts.backend.app')

@section('title')
<title>About | Add & Edit</title>
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About Me /</span> Add, Edit</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('aboutMeSave') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(!empty($aboutme))
                <input type="hidden" name="id" id="id" value="{{ $aboutme->id }}">
                @endif
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Title <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-user"></i></span>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title"
                            aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" @if(!empty($aboutme))
                            value="{{ $aboutme->title }}" @endif required />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Image </label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-image"></i></span>
                        <input type="file" id="image" name="image" class="form-control" placeholder=""
                            aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-message">Short Description <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-message2" class="input-group-text"><i
                                class="bx bx-comment"></i></span>
                        <textarea id="shortdescription" class="form-control" name="shortdescription"
                            placeholder="Short Description !" aria-label="Description !"
                            aria-describedby="basic-icon-default-message2"
                            required>@if(!empty($aboutme)) {{ $aboutme->shortdescription }} @endif</textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-message">Long Description </label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-message2" class="input-group-text"><i
                                class="bx bx-comment"></i></span>
                        <textarea id="longdescription" class="form-control" name="longdescription"
                            placeholder="Long Description !" aria-label="Description !"
                            aria-describedby="basic-icon-default-message2"
                            required>@if(!empty($aboutme)) {{ $aboutme->longdescription }} @endif</textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Status</label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                class="bx bx-status"></i></span>
                        <select name="status" id="status" class="form-control">
                            <option value="1" @if(!empty($aboutme) && $aboutme->status == 1) selected
                                @endif>Active
                            </option>
                            <option value="0" @if(!empty($aboutme) && $aboutme->status == 0) selected @endif>In
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

@endsection