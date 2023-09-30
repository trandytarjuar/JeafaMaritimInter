@extends('template.index')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route ('index')}}">PT. Jeafa Maritim Internasional</a></li>
                        <li class="breadcrumb-item active">Edit Contact</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Edit Contact</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Contact</h4>



                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="gmaps">Gmaps</label>
                                    <input type="text" class="form-control" id="gmaps" placeholder="Insert url from Gmaps" value="{{ $contact->gmaps }}" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Address" value="{{ $contact->alamat }}" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="phonenumber">Phone number</label>
                                    <input type="number" class="form-control" id="phonenumber" placeholder="phonenumber" value="{{ $contact->no_telp }}" maxlength="13" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="tes@123@gmail.com" value="{{ $contact->email }}" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>


                                <input type="hidden" id="contactid" value="{{ $contact->id}}">
                                <!-- <button class="btn btn-primary" onclick="editcontact('{{ $contact->email }}')">Submit</button> -->
                                <a class="btn btn-danger" href="{{ route('contact')}}">Cancel</a>
                                <a class="btn btn-primary" id="editcontact">Submit</a>
                            </form>
                        </div> <!-- end preview-->

                        <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->



    </div>
    <!-- end row -->

</div>
@endsection
@extends('jquery.contact.edit')