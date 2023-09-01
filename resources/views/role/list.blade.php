@extends('layouts.backend.app')

@section('title')
<title>Role | List</title>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y container-fluid">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Role /</span> List</h4>
    <!-- Basic Bootstrap Table -->

    <div class="card">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column mt-5">
            <a href="{{ route('roleAdd') }}" class="btn btn-outline-primary btn-sm"> + ADD</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Sl.No</th>
                        <th>Role Name</th>
                        {{-- <th>Group Name</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($role as $key => $value)
                    <tr id="willremove{{ $value->id }}" class="table-primary text-center">
                        <td>{{ $key+1}}</td>
                        <td>{{ $value->name }}</td>
                        {{-- <td></td> --}}
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item text-warning"
                                        href="{{ route('roleEdit', ['id' => $value->id]) }}"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>

                                    <a class="dropdown-item text-danger delete" href="javascript:void(0);"
                                        data-id="{{ $value->id }}"><i class="bx bx-trash me-1 "></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">No data found.</td>
                    </tr>
                    @endforelse()

                </tbody>


            </table>

        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>
@endsection


@section('js')
<script>
    $('.delete').on('click',function(){
            const id = $(this).data('id');
            swal({
                title: "Are you sure?",
                text: "want to remove this role.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
                },
                function(isConfirm){
                if (isConfirm) {
                    $.ajax({
                        url:'{{ route('roleDelete') }}',
                        type:'GET',
                        data:{id:id},
                        success:function(res){
                            $('#willremove'+id).hide();
                            swal("Deleted!", 'Deleted successfully',"success");
                        }
                    })
                } else {
                    swal("Cancelled", "Data save :)", "error");
                }
            });
        })
</script>
@endsection