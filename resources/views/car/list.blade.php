@extends('layouts.backend.app')

@section('title')
<title>Cars | List</title>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y container-fluid">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Cars /</span> List</h4>
    <!-- Basic Bootstrap Table -->

    <div class="card">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column mt-5">
            <a href="{{ route('carAdd') }}" class="btn btn-outline-primary btn-sm"> + ADD</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Brand Name</th>
                        <th>Car Name</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($cars as $key => $value)
                    <tr id="willremove{{ $value->id }}" class="table-primary text-center">
                        <td>{{ ucfirst($value->category_name) }}</td>
                        <td>{{ $value->car_name }}</td>
                        <td>
                            @if($value->status == 1)
                            <span class="badge bg-label-success me-1">Active</span>
                            @else
                            <span class="badge bg-label-danger me-1">Inactive</span>
                            @endif
                        </td>
                        <td>{{ date('d M, Y',strtotime($value->created_at)) }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item text-warning"
                                        href="{{ route('carEdit', ['id' => $value->id]) }}"><i
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
                        <td colspan="5" class="text-center">No data found.</td>
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
                text: "want to remove this service.",
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
                        url:'{{ route('carDelete') }}',
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