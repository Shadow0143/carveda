@extends('layouts.backend.app')

@section('title')
<title>Role | Add & Edit</title>
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Role/</span> Add, Edit</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('roleSave') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(!empty($role))
                <input type="hidden" name="id" id="id" value="{{ $role->id }}">
                @endif


                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Role Name <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-user"></i></span>
                        <input type="text" class="form-control" name="role_name" id="role_name" placeholder="Role Name"
                            aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" @if(!empty($role))
                            value="{{ $role->name }}" @endif required />
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