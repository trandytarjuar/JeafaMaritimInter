@section('jquery')
<script>
    $("#tagline_table").DataTable();

    function confirmDeletetag(id) {
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
                    url: '/deletetagline/' + id,
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

    submittagline = async () => {
        var title = $("#title").val();
        var tagline = $("#tagline").val();

        let data = new FormData()
        data.append("_token", "{{ csrf_token() }}");
        data.append("title", title)
        data.append("tagline", tagline)
        $.ajax({
            method: "post",
            url: "{{ route('submittagline') }}",
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
                    window.location.href = '/tagline';
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
    $("#edittagline").click(function() {
        // alert('tes')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $("#homeid").val();
        var title = $("#title").val()
        var tagline = $("#tagline").val()

        let data = new FormData()
        data.append("title", title)
        data.append("title", title)
        data.append("tagline", tagline)

        $.ajax({
            method: "POST",
            url: "/updatetagline/" + id,
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
                    window.location.href = '/tagline';
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

    $("#baanner_table").DataTable();

    function previewImage1() {
        const fileInput = document.getElementById('gambar');
        const imgPreview = document.getElementById('gambarPreview1');
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
    function previewImage2() {
        const fileInput = document.getElementById('banner2');
        const imgPreview = document.getElementById('gambarPreview2');
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