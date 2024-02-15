@extends('admin.layout.app')
@push('css')
@endpush
@push('js')
@endpush
@section('title', 'pages')
@section('content')



<script>
  @if(Session::has('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    "positionClass": "toast-top-center",
    "showDuration": "300",                     
  }
  		toastr.success("{{ session('success') }}");
  @endif
  
    @if (Session::has('message'))
                    toastr.options = {
                        "closeButton": true,
                        "positionClass": "toast-top-center",
                        "showDuration": "300",
                    }
                    toastr.success("{{ session('message') }}");
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
                                <h4 class="card-title">Notification List</h4>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive-lg">
                                <table class=" datatable table   table-striped table-bordered ">
                                    <thead>
                                        <tr class="ligth">
                                            <th>S.No</th>
                                            <th>Customer Name</th>
                                            <th> Message</th>
                                            <th> date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($showdatas as $showdata)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$showdata->notifi->first_name ?? ''}}</td>
                                                <td>{{$showdata->message}}</td>
                                                <td>{{$showdata->date_time}}</td>
                                                <td>
                                                   @if ($showdata->is_read == 'read')
                                                    
                                                        <div class="badgebg-success-subtle text-success font-size-14">read</div>
                                                    
                                                    @else
                                                    
                                                        <div class="badgebg-success-subtle text-success font-size-14">Unread</div>
                                                    
                                                    @endif
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