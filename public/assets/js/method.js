function changeStatus(url, targetId) {
  if (confirm("Are you sure to Change Status?")) {
      $.ajax({
          url: url,
          type: 'GET',
          success: function(response) {
              // Handle the response here, e.g., update button text or styles
              $('#'+targetId).html(response);
              $('.datatable').DataTable().ajax.reload();
          },
          error: function(xhr, status, error) {
              console.error(xhr.responseText);
          }
      });
  }
}

function delete_entity(url, targetId)
{
    if (confirm("Are you sure to Delete?")) {
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                // Handle the response here, e.g., update button text or styles
                // $('#'+targetId).html(response);
                $('.datatable').DataTable().ajax.reload();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
}

function reloadDataTable() {
    table.ajax.reload(null, false);
}

// Handle the click event on the delete button
$('.datatable').on('click', '.btn-delete', function() {
    var itemId = $(this).data('id');

    $.ajax({
        url: '{{ route("catelog.delete", ["id" => ":id"]) }}'.replace(':id', itemId),
        type: 'DELETE',
        data: {
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            if (response.success) {
                // Reload the DataTable after successful deletion
                reloadDataTable();
                // Optionally, show a success message to the user
                toastr.success(response.message);
            } else {
                // Optionally, handle the case where deletion was not successful
                console.error(response.message);
                toastr.error(response.message);
            }
        },
        error: function(xhr, status, error) {
            // Handle errors, e.g., show an error message
            console.error(error);
            toastr.error('Error occurred while deleting the item');
        }
    });
});


function editForm(url_name, target_id, method = "GET", table_id = "") {
     // preloader("", target_id);
    // getting the button of the form and passing into the preloader function
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById(target_id).innerHTML = this.responseText;
      //  underscore_remover();
     // stopPreloader("", target_id);
      }
    };
    if (table_id != "") {
      url_name = url_name + "?id=" + table_id;
    }
    xhttp.open(method, url_name, true);
    xhttp.send();
  }

