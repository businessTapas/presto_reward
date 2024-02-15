@extends('admin.layout.app')
@push('css')
@endpush
@push('js')
@endpush
@section('title', 'Add Coupon Request')
@section('content')


    <div class="main-content">
        <div class="page-content">
            <script>
                @if (Session::has('failure'))
                    toastr.options = {
                        "closeButton": true,
                        "positionClass": "toast-top-center",
                        "showDuration": "300",
                    }
                    toastr.error("{{ session('failure') }}");
                @endif
            </script>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">


                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title text-capitalize">Create Coupon</h4>
                                </div>
                                    <a href="{{route('admin.coupon.request.list')}}">
                                        <button type="submit" class="btn btn-primary add-list btn-md btn-rounded" ><i class="uil-arrow-left"></i>Back to Coupon Request List</button>
                                    </a>
                            </div>

                            <div class="card-body">
                                <form id="form_data" action="{{ route('admin.coupon.store') }}" method="POST">
                                    @csrf
                                   <div class="row">
                                         {{-- <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="type" class="required">No of Coupons</label>
                                                <input type="number" class="form-control" name="no_of_coupons"
                                                    placeholder="Enter no of coupoms">
                                                @error('no_of_coupons')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="required">No of Coupons</label>
                                                <select id=""  type="number" class="form-control selectpicker" data-live-search="true"
                                                    name="no_of_coupons">
                                                    <option value="">Select One</option>
                                                    {{-- @foreach ($companies as $company) --}}
                                                        <option value="1">1 </option>
                                                        <option value="20">20 </option>
                                                        <option value="30">30 </option>
                                                        <option value="40">40 </option>
                                                        <option value="50">50 </option>
                                                    {{-- @endforeach --}}
                                                </select>
                                                @error('no_of_coupons')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                      

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="amount" class="required">Amount</label>
                                                <input type="number" class="form-control" name="amount"
                                                    placeholder="Enter amount" required>
                                                @error('amount')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> 

                                        <div class="col-sm-4">
                                            <div class="form-group" >
                                                <label class="required">Company</label>
                                                <select id="company_id" type="text" class="form-control selectpicker" data-live-search="true"
                                                    name="company_id" required>
                                                    <option selected disabled>Select One</option>
                                                    @foreach ($companies as $company)
                                                        <option value="{{ $company->id }}">{{ $company->company_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('company_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label  class="">Product</label>
                                                <select id="company_id"  type="text" class="form-control selectpicker" data-live-search="true"
                                                    name="product_id">
                                                    <option value="">Select One</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}">{{ $product->product_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('product_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="optional">Category</label>
                                                <select id="category_id"  type="text" class="form-control selectpicker" data-live-search="true"
                                                    name="category_id">
                                                    <option value="">Select One</option>
                                                    @foreach ($category as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label  class="required">Coupon Expaire Date</label>
                                                <input  type="date" class="form-control"
                                                    placeholder="Enter description" name="expiry_date">
                                                @error('expiry_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label class="required">Description</label>
                                                <textarea  type="text" class="form-control"
                                                    placeholder="Enter description" name="description"></textarea>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12  mt-4 mb-4 text-center">
                                        <button type="submit" class="btn btn-success btn-rounded"><i class="uil uil-check me-2"></i>Add
                                            Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.selectpicker').selectpicker();
        });
    </script>
@endsection
