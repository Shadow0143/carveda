@extends('layouts.backend.app')

@section('title')
<title>Admin | Add & Edit</title>
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin/</span> Add, Edit</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('adminSave') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(!empty($user))
                <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                @endif


                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Admin Name <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-user"></i></span>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Admin Name"
                            aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" @if(!empty($user))
                            value="{{ $user->name }}" @endif required />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Admin Email <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-user"></i></span>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Admin Email"
                            aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" @if(!empty($user))
                            value="{{ $user->email }}" @endif required />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Admin Password <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-user"></i></span>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Admin Email" aria-label="John Doe"
                            aria-describedby="basic-icon-default-fullname2" @if(empty($user)) required @endif />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Admin Role <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-user"></i></span>
                        <select name="roles" id="roles" class="form-control">
                            <option value=""> --- Please Select Role --- </option>
                            @foreach($roles as $key => $val)
                            <option value="{{ $val->id }}" @if(!empty($user)) {{ $user->hasRole($val->name) ? 'selected'
                                : ' '}} @endif>
                                {{$val->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Status</label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                class="bx bx-status"></i></span>
                        <select name="status" id="status" class="form-control">
                            <option value="1" @if(!empty($user) && $user->status == '1') selected
                                @endif>Active
                            </option>
                            <option value="0" @if(!empty($user) && $user->status == '0') selected @endif>In
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