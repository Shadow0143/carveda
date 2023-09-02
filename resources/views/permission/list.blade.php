@extends('layouts.backend.app')

@section('title')
<title>Permission | List</title>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y container-fluid">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Permission /</span> List</h4>
    <!-- Basic Bootstrap Table -->

    <div class="card">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column mt-5">
            {{-- <a href="{{ route('permissionAdd') }}" class="btn btn-outline-primary btn-sm"> + ADD</a> --}}
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Sl.No</th>
                        <th>Permission Name</th>
                        {{-- <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($permission as $key => $value)
                    <tr id="willremove{{ $value->id }}" class="table-primary text-center">
                        <td>{{ $key+1}}</td>
                        <td>{{ $value->name }}</td>
                        {{-- <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item text-warning"
                                        href="{{ route('permissionEdit', ['id' => $value->id]) }}"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>

                                    <a class="dropdown-item text-danger delete" href="javascript:void(0);"
                                        data-id="{{ $value->id }}"><i class="bx bx-trash me-1 "></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td> --}}
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">No data found.</td>
                    </tr>
                    @endforelse()

                </tbody>


            </table>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="demo-inline-spacing">
                        <!-- Basic Pagination -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                {{-- Previous Page Link --}}
                                @if ($permission->onFirstPage())
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i
                                            class="tf-icon bx bx-chevrons-left"></i></a>
                                </li>
                                @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $permission->previousPageUrl() }}"><i
                                            class="tf-icon bx bx-chevrons-left"></i></a>
                                </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($permission->links()->elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                <li class="page-item disabled"><a class="page-link" href="#">{{ $element }}</a></li>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                @foreach ($element as $page => $url)
                                @if ($page == $permission->currentPage())
                                <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                                @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                                @endforeach
                                @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($permission->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $permission->nextPageUrl() }}"><i
                                            class="tf-icon bx bx-chevron-right"></i></a>
                                </li>
                                @else
                                <li class="page-item disabled">
                                    <a class="page-link" href="#"><i class="tf-icon bx bx-chevron-right"></i></a>
                                </li>
                                @endif
                            </ul>
                        </nav>



                        <!--/ Basic Pagination -->
                    </div>
                </div>
            </div>
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
                text: "want to remove this permission.",
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
                        url:'{{ route('permissionDelete') }}',
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