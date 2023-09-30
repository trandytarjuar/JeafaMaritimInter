@section('jquery')
<script>
    submitjob = async () => {

        var title = $("#title").val();
        var salarymin = $("#salarymin").val();
        var salarymax = $("#salarymax").val();
        var qualifition = $("#qualifition").val();
        var benefite = $("#benefite").val();
        var deskripsi = $("#deskripsi").val();



        let data = new FormData()
        data.append("_token", "{{ csrf_token() }}");
        data.append("title", title)
        data.append("salarymin", salarymin)
        data.append("salarymax", salarymax)
        data.append("qualifition", qualifition)
        data.append("benefite", benefite)
        data.append("deskripsi", deskripsi)
        $.ajax({
            method: "post",
            url: "{{ route('submitjob') }}", // Use the named route for the Contact_Controller's submit method
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
                    window.location.href = '/job';
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

    function formatCurrency(input) {
        // Menghapus karakter selain angka
        let value = input.value.replace(/\D/g, '');

        // Menggunakan fungsi toLocaleString() untuk memformat angka sebagai format mata uang
        input.value = (parseInt(value, 10)).toLocaleString('id-ID');
    }
</script>
@endsection