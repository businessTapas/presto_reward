<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
                    <label class="required">Customer Name</label>
                    <input type="text" class="form-control" value="{{$view_ticet->customer->first_name.' '.$view_ticet->customer->last_name}}" readonly>
                </div>
            </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label for="role_id" class="required">Subject</label>
            <input type="text" name="subject" class="form-control" placeholder="Enter Customer Last Name" value="{{$view_ticet->subject}}" readonly>
            @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label class="required">Type</label>
            <input type="text" class="form-control"
                placeholder="Enter Date Of Birth" name="type" value="{{$view_ticet->type}}" readonly>
                @error('type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label class="required">Ticket No</label>
            <input type="text" class="form-control"
                 name="ticket_no" value="{{$view_ticet->ticket_no }}" readonly>
                
        </div>
    </div>


            <div class="col-sm-4">
                <div class="form-group">
                    <label class="">Status</label>
                    <select id="type" required type="text" class="form-control"
                    name="status">
                        <option>select one</option>
                        <option {{ $view_ticet->status === 'open' ? 'selected' : '' }} value="active" selected>Active</option>
                        <option {{ $view_ticet->status === 'close' ? 'selected' : '' }}  value="inactive">Inactive</option>
                    </select>
                </div>
            </div>

</div>