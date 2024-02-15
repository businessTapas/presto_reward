@extends('admin.layout.app')
@push('css')
@endpush
@push('js')
@endpush
@section('title', 'wallet list')
@section('content')

<div class="main-content">
    <div class="page-content">
        <script>
            @if (Session::has('success'))
                    toastr.options = {
                        "closeButton": true,
                        "progressBar" : true,
                        "positionClass": "toast-top-center",
                        "showDuration": "300",
                    }
                    toastr.success("{{ session('success') }}");
                @endif

                @if (Session::has('update_success'))
                    toastr.options = {
                        "closeButton": true,
                        "progressBar" : true,
                        "positionClass": "toast-top-center",
                        "showDuration": "300",
                    }
                    toastr.success("{{ session('update_success') }}");
                @endif
            </script>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Transaction History</h4>
                            </div>


                            <!-- <a class="btn btn-primary add-list btn-sm text-white" href="{{route('admin.catalog.add')}}"><i class="las la-plus mr-3"></i>Add Catalog</a> -->
                        </div>


                        <div class="card-body">
                            <div class="table-responsive-lg">
                                <table class=" datatable table align-middle table-nowrap table-check" id="datatable">
                                    <thead>
                                        <tr class="ligth">
                                            <th>#</th>
                                            <th>Transaction Type</th>
                                            <th>Amount</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <!-- <th class="text-center">Action</th> -->
                                        </tr>
                                    </thead>
                                    <script type="text/javascript">
                                        $(function() {
                                           
                                            var table = $('#datatable').DataTable({
                                                processing: true,
                                                serverSide: true,
                                                ajax: "{{ route('admin.wallet.transaction',['id' => $cus_id])}}",
                                                type:'Get',
                                                columns: [{
                                                        data: 'id',
                                                        name: 'id',
                                                    },
                                                    {
                                                        data: 'transactiontype',
                                                        name: 'transactiontype',
                                                    },
                                                    {
                                                        data: 'amount',
                                                        name: 'amount',
                                                    },
                                                    {
                                                        data: 'description',
                                                        name: 'description'
                                                    },
                                                    {
                                                        data: 'date',
                                                        name: 'date'
                                                    },
                                                    // Add more columns as needed
                                                ]
                                            });
                                        });
                                    </script>
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

@endsection

{{-- 
<tbody>

    @foreach ($trans as $tran)
        

        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$tran->transactiontype}} </td>
            <td>{{$tran->amount}}</td>
            <td>{{$tran->description}}</td>
            <td>{{$tran->date}}</td> --}}

            {{-- <td class="text-center"> --}}

                <!-- Add action buttons here -->
               
                    
                        <!-- <a href="" class="btn btn-danger btn-sm delete-btn" id="deleteRoleBtn"><i
                            class="fas fa-ban"></i> Deactivate</a>   -->
                      
                        <!-- <a href="" class="btn btn-danger btn-sm"><i
                            class="fas fa-ban"></i>Activate</a> -->
                       

{{-- 
                            <script>
                                $(document).ready(function() {
                                    $('.delete-btn').on('click', function(e) {
                                        e.preventDefault();

                                        // Show a custom confirmation dialog
                                        var confirmation = window.confirm('Are you sure you want to deactivate this company?');

                                        // If user confirms, navigate to the delete URL
                                        if (confirmation) {
                                            var url = $(this).attr('href');
                                            window.location.href = url;
                                        }
                                    });
                                });
                            </script> --}}
            {{-- </td> --}}

        {{-- </tr>
     @endforeach
    </tbody> --}}