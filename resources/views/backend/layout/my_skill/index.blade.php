@extends('backend.app')

@section('title', 'Data')

@section('styles')

@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h5 class="card-title mb-0">My Skills Lists</h5>
                                <a href="{{ route('admin.my.skill.create') }}" class="btn btn-primary btn-sm">Add New
                                    skill</a>
                            </div>
                            <div class="card-body">
                                <div id="alternative-pagination_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="alternative-pagination_length"><label>Show
                                                    <select id="per_page" name="alternative-pagination_length"
                                                        aria-controls="alternative-pagination"
                                                        class="form-select form-select-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="alternative-pagination_filter" class="dataTables_filter">
                                                <label>Search:<input type="search" class="form-control form-control-sm"
                                                        placeholder="" id="search"
                                                        aria-controls="alternative-pagination"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="data-table" class="table table-bordered align-middle"
                                                style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Percentage</th>
                                                        <th>Skill Type</th>
                                                        <th>Icon</th>
                                                        <th>Description</th>
                                                        <th style="width: 180px">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($skills as $item)
                                                        <tr>
                                                            <td class="text-center">{{ $item->id }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->percentage }}</td>
                                                            <td>{{ $item->skill_type }}</td>
                                                            <td class="text-center"><img src="{{ asset($item->icon) }}"
                                                                    alt="icon" width="30"></td>
                                                            <td>{{ $item->description }}</td>
                                                            <td>
                                                                <a href=""
                                                                    class="btn btn-sm btn-soft-primary">View</a>
                                                                <a href="{{ route('admin.my.skill.edit', $item->id) }}"
                                                                    class="btn btn-sm btn-soft-success">Edit</a>
                                                                <button class="btn btn-sm btn-soft-danger"
                                                                    onclick="deleteData({{ $item->id }})">Delete</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="alternative-pagination_info" role="status"
                                                aria-live="polite">Showing {{ $skills->firstItem() }} to
                                                {{ $skills->lastItem() }} of {{ $skills->total() }} entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_full_numbers"
                                                id="alternative-pagination_paginate">
                                                <ul class="pagination">
                                                    <li
                                                        class="paginate_button page-item {{ $skills->onFirstPage() ? 'disabled' : '' }}">
                                                        <a href="{{ $skills->previousPageUrl() }}"
                                                            aria-controls="alternative-pagination" data-dt-idx="0"
                                                            tabindex="0" class="page-link">Previous</a>
                                                    </li>
                                                    @for ($i = 1; $i <= $skills->lastPage(); $i++)
                                                        <li
                                                            class="paginate_button page-item {{ $skills->currentPage() == $i ? 'active' : '' }}">
                                                            <a href="{{ $skills->url($i) }}"
                                                                aria-controls="alternative-pagination" data-dt-idx="2"
                                                                tabindex="0" class="page-link">{{ $i }}</a>
                                                        </li>
                                                    @endfor
                                                    <li
                                                        class="paginate_button page-item {{ $skills->hasMorePages() ? '' : 'disabled' }}">
                                                        <a href="{{ $skills->nextPageUrl() }}"
                                                            aria-controls="alternative-pagination" data-dt-idx="5"
                                                            tabindex="0" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            let debounceTimer;

            function fetchData() {
                let searchQuery = $('#search').val();
                let perPage = $('#per_page').val();

                $.ajax({
                    url: "{{ route('admin.project.index') }}",
                    method: "GET",
                    data: {
                        search: searchQuery,
                        per_page: perPage,
                    },
                    success: function(response) {
                        $('#alternative-pagination_wrapper').html(response.html);
                    }
                });
            }

            // Handle per-page change
            $('#per_page').on('change', function() {
                fetchData();
            });

            // Handle search with debounce
            $('#search').on('keyup', function() {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(fetchData, 500);
            });
        });
    </script>
@endsection
