@extends('layouts.backend.app')

@section('title')
<title>Role In Permission | Add & Edit</title>
@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Role In Permission /</span> Add, Edit</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('rolePermissionSave') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(!empty($dataArray))
                <input type="hidden" name="id" id="id" value="{{ $dataArray[0]['role_id'] }}">
                @endif


                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Roles <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                class="bx bx-user"></i></span>
                        <select name="role" id="role" class="form-control" required>
                            <option value=""> --- Please Select Role --- </option>
                            @foreach($roles as $key => $value)
                            <option value="{{ $value->id }}" @if(!empty($dataArray))
                                @if($dataArray[0]['role_id']==$value->
                                id)selected @endif @endif>{{$value->name }}</option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Permissions <span
                            class="text-danger">*</span></label>
                    <div class="input-group input-group-merge">

                        @foreach ($perimissions as $key => $val)
                        <input type="checkbox" name="permission[]" id="permission_{{ $val->id }}" value="{{ $val->id }}"
                            @if (!empty($dataArray) && in_array($val->name, $dataArray[0]['permissions']))
                        checked
                        @endif
                        >&nbsp; {{ $val->name }} &nbsp; &nbsp;
                        @endforeach

                    </div>
                </div>


                <button type="submit" class="btn btn-outline-primary text-primary">Save</button>
                <a href="{{ route('rolePermissionList') }}" class="btn btn-outline-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection