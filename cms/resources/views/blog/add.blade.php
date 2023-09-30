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
                        <li class="breadcrumb-item active">Add Blog</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Add Blog</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Blog</h4>



                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" method="POST" action="{{ route('store') }}" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="gmaps">Image</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage()" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div>
                                    <img id="gambarPreview" src="#" alt="Pratinjau Gambar" style="display:none; max-width: 300px;">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="judul" placeholder="title blog" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="deskripsi">Description</label>
                                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi" required=""></textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>


                                <a class="btn btn-danger" href="{{ route('team')}}">Cancel</a>
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
@extends('jquery.blog.index')