@extends('layouts.backend.app')

@section('title')
<title>Subscribe | List</title>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y container-fluid">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Subscribe /</span> List</h4>
    <!-- Basic Bootstrap Table -->

    <div class="card">

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Email</th>

                        <th>Subscribe Date</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($subscribe as $key => $value)
                    <tr id="willremove{{ $value->id }}" class="table-primary text-center">

                        <td>{{$value->email}}</td>
                        <td>
                            {{ date_format($value->created_at,'d M, Y') }}
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


        {{-- Pagination --}}
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="demo-inline-spacing">
                        <!-- Basic Pagination -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                {{-- Previous Page Link --}}
                                @if ($subscribe->onFirstPage())
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i
                                            class="tf-icon bx bx-chevrons-left"></i></a>
                                </li>
                                @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $subscribe->previousPageUrl() }}"><i
                                            class="tf-icon bx bx-chevrons-left"></i></a>
                                </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($subscribe->links()->elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                <li class="page-item disabled"><a class="page-link" href="#">{{ $element }}</a></li>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                @foreach ($element as $page => $url)
                                @if ($page == $subscribe->currentPage())
                                <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                                @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                                @endforeach
                                @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($subscribe->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $subscribe->nextPageUrl() }}"><i
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
        {{-- / Pagination --}}
    </div>
    <!--/ Basic Bootstrap Table -->
</div>
@endsection