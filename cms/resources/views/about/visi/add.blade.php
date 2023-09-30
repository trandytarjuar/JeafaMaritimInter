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
                        <li class="breadcrumb-item active">Add Visi</li>
                    </ol>
                </div>
                <h4 class="page-title">Form Add Visi</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Visi</h4>



                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" novalidate>

                                <div class="mb-3">
                                    <label class="form-label" for="title">Deskripsi</label>
                                    <textarea type="text" class="form-control" id="deskripsi" placeholder="Input visi" required></textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>



                                <a class="btn btn-danger" href="{{ route('visi')}}">Cancel</a>
                                <a class="btn btn-primary" onclick="submitvisi()">Add</a>
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
@extends('jquery.about.visi.index')