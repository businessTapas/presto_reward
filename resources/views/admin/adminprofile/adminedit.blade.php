@extends('admin.layout.app')
@push('css')
@endpush
@push('js')
@endpush
@section('title', 'admin edit')
@section('content')




<div class="main-content">
    <div class="page-content">
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Page List</h4>
                            </div>


                            <!-- <a class="btn btn-primary add-list btn-sm text-white" href="{{route('admin.setting.showdata')}}"><i -->
                                    <!-- class="las la-plus mr-3"></i>Back to setting Pages</a> -->
                        </div>


                        <div class="card-body">
                            <div class="table-responsive-lg">
                                <table class=" datatable table   table-striped table-bordered ">
                                    <thead>
                                        <form method="POST"  action="{{route('admin.update',[$admin->id])}}">
                                            {{csrf_field()}}
                                        <tr class="ligth">
                                          
                                            <th>phone Number</th>
                                            <th>State</th>
                                            <th>Address</th>
                                            <th>District</th>
                                             </td> 
                                        </tr>
                                    </thead>
                                    <tbody>
                               
                                            <tr>
                                              
                                                <td><input type='text' class="form-control" name='phone' value="{{$admin->phone}}"><input type="hidden" name="id" value="{{$admin->id}}"></td>
                                                <td><input type="text" class="form-control" name='state'  value="{{$adminusers->state}}" value="{{$adminusers->id}}" name="">
                                                <td><input type="text" class="form-control" name='address_1'  value="{{$adminusers->address_1}}" value="{{$adminusers->id}}" name="">
                                                <td><input type="text" class="form-control" name='district'  value="{{$adminusers->district}}" value="{{$adminusers->id}}" name="">
                                                </td>
                                                 <td class="text-center">
                                                    <!-- Add action buttons here -->
                                                   

                                                    <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary add-list btn-sm text-white">Update
                                                Page</button>
                                        </div> 
                                                 </td> 
                                            </tr>
                                  
                                    </tbody>
                                   
                                    </form>
                                </table>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <script type="text/javascript" src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>
          
        </div> 
       
    </div>
</div>

@endsection