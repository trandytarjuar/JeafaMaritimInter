@section('jquery')
<script>

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