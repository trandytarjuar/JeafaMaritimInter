
@section('jquery')
<script>

    $("#job_table").DataTable();
    

    function confirmDelete(jobId) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to delete?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: '/deletejob/' + jobId,
                    success: function(response) {
                        // Handle success, e.g., remove the row from the table

                        // Show a success alert
                        Swal.fire(
                            'Deleted!',
                            'Has been deleted.',
                            'success'
                        );

                        // Reload the page after 2 seconds
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    },
                    error: function(err) {
                        // Handle error
                    }
                });
            }
        });
    }

    
    
</script>
@endsection