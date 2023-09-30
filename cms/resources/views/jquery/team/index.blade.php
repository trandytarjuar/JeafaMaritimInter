@section('jquery')
<script>
    $("#team_table").DataTable();

    function confirmDelete(id) {
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
                    url: '/deleteteam/' + id,
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

    function previewImage() {
        const fileInput = document.getElementById('gambar');
        const imgPreview = document.getElementById('gambarPreview');
        const allowedFormats = ['image/jpeg', 'image/jpg', 'image/png']; // Jenis format gambar yang diperbolehkan

        if (fileInput.files && fileInput.files[0]) {
            const file = fileInput.files[0];

            if (allowedFormats.includes(file.type)) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imgPreview.src = e.target.result;
                    imgPreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                // Tampilkan pesan kesalahan jika format gambar tidak diperbolehkan
                alert('Format gambar tidak diperbolehkan. Silakan pilih file gambar dengan format JPEG, JPG, PNG .');
                fileInput.value = ''; // Mengosongkan input gambar
                imgPreview.style.display = 'none'; // Sembunyikan pratinjau
            }
        }
    }
</script>
@endsection