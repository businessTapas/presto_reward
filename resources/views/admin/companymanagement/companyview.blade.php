<div class= "card card_content mb-0">
<div class="row" >
    <div class="col-sm-4">
        <div class="form-group">
            <label for="type">Company Name</label>
            <input type="text" class="form-control"
                value="{{ strtoupper($company->company_name) }}" readonly>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label for="role_id" >Brand
                Title</label>
            <input type="text" class="form-control" placeholder="Enter your Btrand name"
                value="{{ $company->brand_title }}">
        </div>
    </div>


    <div class="col-sm-4">
        <div class="form-group">
            <label>Bank Name</label>
            <input required="" type="text" class="form-control"
                value="{{ $company->bank_name }}" readonly>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="form-group">
            <label >Bank Account
                Number</label>
            <input required="" type="text" class="form-control"
                value="{{ $company->bank_acc_number }}" readonly>

        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label >Bank IFSC</label>
            <input required="" type="text" class="form-control"
                value="{{ $company->bank_ifsc }}" readonly>

        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>GSTIN Number</label>
            <input required="" type="text" class="form-control"
                value="{{ $company->gstin }}" readonly>

        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label class="optional">Company Address</label>
            <textarea type="text" class="form-control" readonly>{{ $company->company_address }}</textarea>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Status</label>
            <input type="text" class="form-control" value="{{ $company->status }}"
                readonly>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label class="optional">Logo</label>
            <br>
            <img src="{{ asset($company->logo) }}" alt="Company Logo" class="img-fluid" style="width: 200px;">
        </div>
    </div>
</div>
</div>