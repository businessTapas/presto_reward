@extends('admin.layout.app')
@push('css')
@endpush
@push('js')
@endpush
@section('title', 'Customer List')
@section('content')

    <div class="main-content">
        <div class="page-content">
            <script>
                @if (Session::has('success'))
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "showDuration": "300",
                    }
                    toastr.success("{{ session('success') }}");
                @endif
                </script>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Customer List</h4>
                                </div>
                                <a class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"
                                    href="{{ route('customer.add') }}"><i class="mdi mdi-plus me-1"></i> New Customer</a>
                                {{-- <a class="btn btn-primary add-list btn-sm text-white" href="{{ route('customer.add') }}"><i class="las la-plus mr-3"></i>Add Customer</a> --}}
                            </div>


                            <div class="card-body">
                                <div class="table-responsive-lg">
                                    <table class=" datatable table align-middle table-nowrap table-check" id="datatable">
                                        <thead>
                                            <tr class="ligth">
                                                <th>#</th>
                                                <th>Customer Name</th>
                                                <th>Phone Number</th>
                                                {{-- <th>Address</th> --}}
                                                <th>State</th>
                                                <th>District</th>
                                                {{-- <th>Last login</th> --}}
                                                <th>Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <script type="text/javascript">
                                                $(function() {
                                                    var table = $('.datatable').DataTable({
                                                        processing: true,
                                                        serverSide: true,
                                                        ajax: "{{ route('admin.customerlist') }}",
                                        
                                                        columns: [{
                                                                data: 'id',
                                                                name: 'id',
                                                            },
                                                            {
                                                                data: 'first_name',
                                                                name: 'first_name',
                                                            },
                                                            {
                                                                data: 'phone_number',
                                                                name: 'phone_number'
                                                            },
                                                            {
                                                                data: 'address.address_1',
                                                                name: 'address.address_1'
                                                            },
                                                            {
                                                                data: 'address.address_2',
                                                                name: 'address.address_2'
                                                            },
                                                            // {
                                                            //     data: 'address.customerstate.district',
                                                            //     name: 'address.customerstate.district',
                                                            // },
                                                            // {
                                                            //     data: 'Last Login',
                                                            //     name: 'Last Login'
                                                            // },
                                                            {
                                                                data: 'status',
                                                                name: 'status'
                                                            },
                                                            {
                                                                data: 'action',
                                                                name: 'action',
                                                                orderable: false,
                                                                searchable: false,
                                                            },
                                                            // Add more columns as needed
                                                        ]
                                                    });
                                                });
                                            </script>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
    </div>


{{-- -------------------------------------------View Mdal------------------------ --}}
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="view_modal" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Customer View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close">
                </button>
            </div>
            <div class="modal-body" id="modal_body">
               
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    {{-- ---------------------- View Mdal End------------------------------------------------------------- --}}

@endsection
