<div class= "card card_content mb-0">
<form id="form_data" action="{{route('company.udate', [$company->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="type" class="required">Company Name</label>
                <input type="text" class="form-control" name="product_name" value="{{ strtoupper($company->company_name) }}" readonly>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="role_id" class="required">Brand Title</label>
                <input type="text" class="form-control" name="brand_title" placeholder="Enter your Btrand name" value="{{ $company->brand_title }}">
                @error('brand_title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>


        <div class="col-sm-4">
            <div class="form-group">
                <label>Bank Name</label>
                <input required="" type="text" class="form-control" value="{{ $company->bank_name }}" name="bank_name" >
            </div>
        </div>


        <div class="col-sm-4">
            <div class="form-group">
                <label>Bank Account Number</label>
                <input required="" type="text" class="form-control" value="{{ $company->bank_acc_number }}" name="bank_acc_number" >
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label>Bank IFSC</label>
                <input required="" type="text" class="form-control" value="{{ $company->bank_ifsc }}" name="bank_ifsc">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label>GSTIN Number</label>
                <input required="" type="text" class="form-control" value="{{ $company->gstin }}" name="gstin" >
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="optional">Company Address</label>
                <textarea type="text" class="form-control" name="company_address">{{ $company->company_address }}</textarea>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label class="required">Status</label>
                <select class="form-control" name="status">
                    <option value="selectValue" disabled selected hidden>
                        {{ $company->status }}</option>
                    <option value="active" select>Active</option>
                    <option value="inactive" select>Inactive</option>
                </select>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label class="optional">Logo</label>
                <br>
                <img src="{{ asset($company->logo) }}" alt="Company Logo" class="img-fluid mb-2"
                    style="width:200px;">
                <input type="file" name="image" id="inputImage" class="form-control">
            </div>
        </div>

        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-primary add-list btn-md btn-rounded mb-2"><i class="uil uil-check me-2"></i>Update Company</button>
            <script>
                $(document).ready(function() {
                    $('.update-btn').submit(function(e) {
                        e.preventDefault();

                        // Show a custom confirmation dialog
                        var confirmation = window.confirm('Are you sure you want to update this company?');

                        // If user confirms, submit the form
                        if (confirmation) {
                            this.submit();
                        }
                    });
                });
            </script>
        </div>
      
    </div>
</form>
</div>