@extends('admin.layout.app')
@push('css')
@endpush
@push('js')
@endpush
@section('title', 'Coupon Management')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <script>
                
                
            </script>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Coupon List</h4>
                                </div>


                                <a class="btn btn-primary add-list btn-sm text-white" 
                                href="{{ route('admin.coupon.request.list') }}">
                                <i class="las la-plus mr-3"></i>Back to Coupon Request List</a>
                            </div>


                            <div class="card-body">
                                <div class="table-responsive-lg">
                                    <table class=" datatable table align-middle table-nowrap table-check" id="datatable">
                                        <thead>
                                            <tr class="ligth">
                                                <th>Req Id</th>
                                                <th>Coupon Code</th>
                                                <th>Coupon Amount</th>
                                                <th>Company Name</th>
                                                <th>Status</th>
                                                {{-- <th class="text-center">Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($coupons as $coupon)
                                                <tr>
                                                    <td>{{ $coupon->coupon_request_id }}</td>
                                                    <td>{{ $coupon->coupon_code }}</td>
                                                    <td>{{ $coupon->couponRequest->amount }}</td>
                                                    <td>{{ $coupon->couponRequest->company->company_name }}</td>
                                                    <td>{{ $coupon->status }}</td>
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


