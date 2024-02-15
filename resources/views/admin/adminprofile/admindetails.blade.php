@extends('admin.layout.app')
@push('css')
@endpush
@push('js')
@endpush
@section('title', 'Admin')
@section('content')


<script>
                @if (Session::has('update'))
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "showDuration": "300",
                    }
                    toastr.success("{{ session('update') }}");
                    @endif
</script>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Admin Details</h4>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive-lg">
                                <table class=" datatable table   table-striped table-bordered ">
                                    <thead>
                                        <tr class="ligth">
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Email ID</th>
                                            <th>Phone No</th>
                                            <th>User Type</th>
                                            <th>state</th>
                                            <th>Address</th>
                                            <th>District</th>
                                            
                                        
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach($users as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->full_name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->user_type}}</td>
                                            <td>{{$user->address->state}}</td>
                                            <td>{{$user->address->address_1}}</td>
                                            <td>{{$user->address->district}}</td>
                                           
                                            <td class="text-center">
                                                <!-- Add action buttons here -->
                                                <a href="{{route('admin.edit',[$user->id])}}" class="btn btn-primary btn-sm"><i
                                                        class="fas fa-edit"></i> Edit</a>
                                                        
                                                        {{-- <a href=" class="btn btn-danger btn-sm delete-btn" id="deleteRoleBtn"><i
                                                            class="fas fa-ban"></i> Reject</a>   --}}
                                                       

                                                            {{-- <script>
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
                                            </td>
                                        </tr>
                                      @endforeach
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
@endsection