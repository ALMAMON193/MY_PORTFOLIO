@extends('backend.app')

@section('title', 'Projects')
@section('content')
    <main class="main-content">
        <div class="position-relative iq-banner">
            <!--Nav Start-->
            @include('backend.partials.header')
            <!--Nav End-->
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between flex-wrap">
                            <div class="header-title">
                                <h4 class="card-title mb-0">Projects</h4>
                            </div>
                            <div class="">
                                <a href="{{route('admin.project.create')}}" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3">
                                    <i class="btn-inner">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                    </i>
                                    <span>Add Project</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                    <div class="table-responsive border-bottom my-3">
                                        <table id="datatable" class="table table-striped" role="grid"
                                            data-bs-toggle="data-table">
                                            <thead>
                                                <tr class="ligth">
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Image</th>

                                                    <th>Status</th>
                                                    <th>Created At</th>
                                                    <th style="min-width: 100px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#datatable')) {
                let dTable = $('#datatable').DataTable({
                    order: [],
                    lengthMenu: [
                        [25, 50, 100, 200, 500, -1],
                        [25, 50, 100, 200, 500, "All"]
                    ],
                    processing: true,
                    responsive: true,
                    serverSide: true,
                    searching: true,
                    language: {
                        processing: `<div class="text-center">
                                    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                 </div>`,
                        search: "" // Remove the default search label text
                    },
                    ajax: {
                        url: "{{ route('admin.project.index') }}",
                        type: "GET",
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            orderable: true,
                            searchable: false
                        },
                        {
                            data: 'name',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'image',
                            orderable: true,
                            searchable: true
                        },

                        {
                            data: 'status',
                            orderable: true,
                            searchable: false
                        },
                        {
                            data: 'created_at',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ],
                    // Custom DOM structure without label text
                    dom: `<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>
                      <'row'<'col-sm-12'tr>>
                      <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>`,

                    initComplete: function() {

                        $('#datatable_filter input[type="search"]').attr("placeholder", "Search");
                    }
                });

                // Remove label text for length menu
                $('.dataTables_length label').contents().filter(function() {
                    return this.nodeType === 3;
                }).remove();
            }
        });
        // delete Confirm
        function showDeleteConfirm(id) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to delete this record?',
                text: 'If you delete this, it will be gone forever.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteItem(id);
                }
            });
        };
        // Delete Button
        function deleteItem(id) {
            var url = '{{ route('admin.project.destroy', ':id') }}';
            var csrfToken = '{{ csrf_token() }}';
            $.ajax({
                type: "DELETE",
                url: url.replace(':id', id),
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(resp) {
                    console.log(resp);
                    // Reloade DataTable
                    $('#datatable').DataTable().ajax.reload();
                    if (resp.success === true) {
                        // show toast message
                        toastr.success(resp.message);

                    } else if (resp.errors) {
                        toastr.error(resp.errors[0]);
                    } else {
                        toastr.error(resp.message);
                    }
                }, // success end
                error: function(error) {
                    // location.reload();
                } // Error
            })
        }

         // Status Change Confirm Alert
         function showStatusChangeAlert(event, id, newStatus) {
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to update the status to ' + newStatus + '?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                customClass: {
                    confirmButton: 'custom-confirm-button',
                    cancelButton: 'custom-cancel-button'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    statusChange(id, newStatus);
                }
            });
        }

        // Status Change Function
        function statusChange(id, newStatus) {
            var url = '{{ route('admin.project.status', ':id') }}';
            $.ajax({
                type: "PATCH",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                url: url.replace(':id', id),
                data: {
                    status: newStatus
                },
                success: function(resp) {
                    console.log(resp);

                    $('#datatable').DataTable().ajax.reload();

                    if (resp.success) {
                        toastr.success(resp.message);
                    } else {
                        toastr.error(resp.message);
                    }
                },
                error: function(error) {
                    toastr.error('Something went wrong!');
                }
            });
        }
    </script>
@endpush
