
@section('jquery')
<script>
    document.getElementById('phonenumber').addEventListener('input', function() {
        if (this.value.length > 13) {
            this.value = this.value.slice(0, 13); // Memotong input jika lebih dari 13 karakter
        }
    });
   

    submitcontact = async () => {

        // alert("tes");Z

        var gmaps = $("#gmaps").val()
        var address = $("#address").val()
        var phonenumber = $("#phonenumber").val()
        var email = $("#email").val()

        let data = new FormData()
        data.append("_token", "{{ csrf_token() }}");
        data.append("gmaps", gmaps)
        data.append("address", address)
        data.append("phonenumber", phonenumber)
        data.append("email", email)
        $.ajax({
            method: "post",
            url: "{{ route('submitcontact') }}", // Use the named route for the Contact_Controller's submit method
            data: data,
            processData: false,
            contentType: false,
            success: function(response){
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: response.message
                    })
                    window.location.href = '/contact';
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

    
    
</script>
@endsection