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
                        <li class="breadcrumb-item active">Add Contact</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Add Contact</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Contact</h4>
                    

                   
                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" novalidate>
                                
                                <div class="mb-3">
                                    <label class="form-label" for="gmaps">Gmaps</label>
                                    <input type="text" class="form-control" id="gmaps" placeholder="Insert url from Gmaps"  required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Address"  required=""> 
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="phonenumber">Phone number</label>
                                    <input type="number"  class="form-control" id="phonenumber" placeholder="phonenumber"   maxlength="13" required=""> 
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email"  class="form-control" id="email" placeholder="tes@123@gmail.com"    required=""> 
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                
                                <a class="btn btn-danger" href="{{ route('contact')}}" >Cancel</a>
                                <a class="btn btn-primary" onclick="submitcontact()">Add</a>                                
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
@extends('jquery.contact.add')
