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
                        <li class="breadcrumb-item active">Edit Tagline</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Edit Tagline</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Tagline</h4>



                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="gmaps">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Insert  Title" value="{{ $home->title }}" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="address">Tagline</label>
                                    <input type="text" class="form-control" id="tagline" placeholder="tagline" value="{{ $home->tagline }}" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                               


                                <input type="hidden" id="homeid" value="{{ $home->id}}">
                                <a class="btn btn-danger" href="{{ route('tagline')}}">Cancel</a>
                                <a class="btn btn-primary" id="edittagline">Submit</a>
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