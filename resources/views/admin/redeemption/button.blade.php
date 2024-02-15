<a href="{{route('request.approved', $item->id)}}" class="edit btn btn-primary btn-sm">Approve</a>
<button class="btn btn-primary btn-sm" id="openModalButton">Reject</button>
<script>
    $(document).ready(function() {
        $('#openModalButton').click(function() {
            $('#reject').modal('show');
        });

        $('#submit').click(function() {
            submitRejection();
        });
    });

    function submitRejection() {
        var itemId = "{{ $item->id }}";
        var rejectionReason = $('#rejectionReason').val();

        $.ajax({
            url: "{{ route('request.rejected') }}",  // Change this URL to the appropriate route for submission
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                itemId: itemId,
                rejectionReason: rejectionReason
            },
            success: function(data) {
                alert(data.message); // Display a success message (adjust as needed)
                $('#reject').modal('hide'); // Close the modal
                $('.datatable').DataTable().ajax.reload();
            },
            error: function(error) {
                alert('Error occurred while submitting rejection.'); // Handle errors
            }
        });
    }
</script>