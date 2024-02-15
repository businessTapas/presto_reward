@extends('admin.layout.app')
@push('css')
@endpush
@push('js')
@endpush
@section('title', 'Offer')
@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title text-capitalize">Create Offer by Admin</h4>
                            </div>
                            <a href="{{route('admin.offer')}}">
                                <button type="submit" class="btn btn-primary add-list btn-md btn-rounded" ><i class="uil-arrow-left"></i>Back to offer List</button>
                            </a>
                        </div>

                        <div class="card-body">
                            <form id="form_data" action="{{route('offer.post')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="type" class="required">Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Offer Name">
                                            @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="role_id" class="required">Start Date</label>
                                            <input type="date" name="start_date" class="form-control" placeholder="Enter Date">
                                            @error('start_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="role_id" class="required">End Date</label>
                                            <input type="date" name="end_date" class="form-control" placeholder="Enter Date">
                                            @error('end_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="required">CTA TYPE</label>
                                            <select id="cta_type" required="" class="form-control" name="cta_type">
                                                <option>Select One</option>
                                                <option value="link">Link</option>
                                                <option value="email">Email</option>
                                                <option value="phone">Phone</option>
                                            </select>
                                            @error('cta_type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group" id="cta_input_container">
                                            <label for="role_id" class="required">CTA</label>
                                            <input type="text" name="action_link" class="form-control" placeholder="Enter CTA Here" id="cta_input">
                                            @error('action_link')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="required">CTA</label>
                                            <select id="" required="" class="form-control" name="type">
                                                <option>Select</option>
                                                <option value="email" id="type" onclick="click">Email</option>
                                                <option value="phone">Telephone</option>
                                                <option value="link">Link</option>
                                            </select>
                                            
                                            <span>
                                                <input type="text" name="cta" id="textBox" style="display:none">
                                            </span>
                                        </div>
                                    </div> --}}

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="optional">Description</label>
                                            <textarea type="text" class="form-control" placeholder="Enter description" name="description"></textarea>
                                            @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="required">Banner</label>
                                            <input type="file" name="image" id="inputImage" class="form-control">
                                            @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                       
                                        <button type="submit" class="btn btn-success btn-rounded"><i class="uil uil-check me-2"></i>Add offer</button>
                                      
                                    </div>
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
        $('#cta_input_container').hide();
        $('#cta_type').change(function () {
            $('#cta_input_container').hide();
            if ($(this).val() === 'link' || $(this).val() === 'phone' || $(this).val() === 'email') {
                $('#cta_input_container').show();
                $('#cta_input').attr('type', $(this).val() === 'link' ? 'url' : ($(this).val() === 'phone' ? 'tel' : 'text'));
                $('#cta_input').attr('placeholder', 'Enter ' + ($(this).val() === 'link' ? 'web link' : ($(this).val() === 'phone' ? 'your phone number' : 'your email id')));
            }
        });
    });
</script>
@endsection


{{-- <script>
    $(document).ready(function () {
        $('#cta_input_container').hide();
        $('#cta_type').change(function () {
            $('#cta_input_container').hide();
            if ($(this).val() === 'link' || $(this).val() === 'phone' || $(this).val() === 'email') {
                $('#cta_input_container').show();
                $('#cta_input').attr('type', $(this).val() === 'link' ? 'url' : ($(this).val() === 'phone' ? 'tel' : 'text'));
                $('#cta_input').attr('placeholder', 'Enter ' + ($(this).val() === 'link' ? 'web link' : ($(this).val() === 'phone' ? 'your phone number' : 'your email id')));
            }
        });
    });
</script> --}}

{{-- <script>

    $("#type").click(function(){
        alert("ok");
    });

    //const selectElement = document.getElementById('type');
    // const textBox = document.getElementById('textBox');
    
    // // Add change event listener to the select element
    // selectElement.addEventListener('click', function() {
    //     // Check the selected option value
    //     if (selectElement.value === 'email' || selectElement.value === 'phone' || selectElement.value === 'link') {
    //         // Show the text box
    //         textBox.style.display = 'block';
    //     } else {
    //         // Hide the text box if another option is selected
    //         textBox.style.display = 'none';
    //     }
    // });
    </script> --}}