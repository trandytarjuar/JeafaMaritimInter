@section('jquery')
<script>
    $("#manfaat_table").DataTable();

    submitmanfaat = async () => {
        var deskripsi = $("#deskripsi").val();


        let data = new FormData()
        data.append("_token", "{{ csrf_token() }}");
        data.append("deskripsi", deskripsi)
        $.ajax({
            method: "post",
            url: "{{ route('submitmsanfaat') }}",
            data: data,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: response.message
                    })
                    window.location.href = '/msk';
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message
                    })
                }
            }
        })
    }
    function confirmDeletemanfaat(id) {
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
                    url: '/deletemanfaat/' + id,
                    success: function(response) {
                        // Handle success, e.g., remove the row from the table
                    },
                    error: function(err) {
                        // Handle error
                    }
                });

                // For now, we'll just show a success alert to indicate that the delete action was performed.
                Swal.fire(
                    'Deleted!',
                    'Has been deleted.',
                    'success'
                );
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }
        });
    }

    $("#editmanfaat").click(function() {
        // alert('tes')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $("#manfaatid").val();
        var deskripsi = $("#deskripsi").val()

        let data = new FormData()
        data.append("deskripsi", deskripsi)

        $.ajax({
            method: "POST",
            url: "/updatemanfaat/" + id,
            data: data,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: response.message
                    });
                    window.location.href = '/msk';
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message
                    });
                }
            }
        })
    })

  
</script>
@endsection