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
                        <li class="breadcrumb-item active">Add Banner</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Add Banner</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Banner</h4>



                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" method="POST" action="{{ route('updatebanner',$home->id) }}" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="gmaps">Image</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar" value="{{ $home->banner1 }}" onchange="previewImage1()" >
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div>
                                    <img id="gambarPreview1" src="{{ asset('uploads/image/home/' . $home->banner1) }}" alt="Pratinjau Gambar" style="display:block; max-width: 300px;">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="gmaps">Image</label>
                                    <input type="file" class="form-control" id="banner2" name="gambar2" value="{{ $home->banner2 }}" onchange="previewImage2()" >
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div>
                                    <img id="gambarPreview2" src="{{ asset('uploads/image/home/' . $home->banner2) }}" alt="Pratinjau Gambar" style="display:block; max-width: 300px;">
                                </div>
                                
                               
                                


                                <a class="btn btn-danger" href="{{ route('banner')}}">Cancel</a>
                                <button class="btn btn-primary">Submit</button>
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
@extends('jquery.home.index')